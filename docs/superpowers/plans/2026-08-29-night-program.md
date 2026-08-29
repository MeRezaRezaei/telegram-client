# Night Program — 2026-08-29 (~6h autonomous)

Authorized by owner before sleep: "find frictions, weaknesses, bad code, clean, fix; if nothing to do, revalidate; continue six hours straight."

## Waves

W1 Backlog harvest — every C/I/M carried in both ledgers:
   - [tc] IngestConsumer ingest-failure cap → DL+ack (P3 "I": wedged group)
   - [tc] Duplicate-anchor guard under concurrency (P2 M3): per-account advisory/serialization around identity resolution
   - [tc] Backup chunk GC (`telegram-client:backup prune`) (P4 M)
   - [tp] TLRegistry wrapper match by NAME not X:Type substring + strpos false-cast guard (P1 minors)
   - [tp] sscanf sign/space tightening in resolver (unreachable-on-wire, cheap)

W2 teleproto v1.2: msg_container BATCHING + receive demux (roadmap #1 perf item)
   - Spec + plan + SDD; live-verified against DC4 (batch N=3..10, expect ~N× latency win)
   - callBatch on EncryptedConnection; naked container ENCODE; demux map req_msg_id→result

W3 Hardening track (env-dependent):
   - If PG available: telegram-client PG test track (deferrable FKs, uuid behavior sqlite hides)
   - Else: schema-audit CI gate (manifest-vs-regen) both repos

W4 Revalidation sweep (parallel auditors): secrets/license scan; docs-vs-code drift; flakiness (3× suites) + phpstan max-level attempt. Fix findings.

W5 CHANGELOGs; tag teleproto v1.2.0 + telegram-client v0.2.0 if earned; final report appended here.

## Rules
SDD per wave (parallel where disjoint); gates green per task; nothing uncommitted at wave ends; no new deps without need; live tests only with env creds (available in ../teleproto/.env).

## Log (appended as work lands)

- W1-3 [tc] Backup chunk GC landed: `telegram-client:backup prune` + `Pruner` + vault list/delete (`findMessagesByName('')` / `delete`), 319 tests green, phpstan OK — see `.superpowers/night/w1-3.md`.
- W3: PG track landed (1febb60): full 637-migration mirror on PG17 (3678 tables), deferrable-FK proof, generator FK-bucketing fix (max_locks_per_transaction), CI pg job.
- W4: audits (secrets CLEAN, license CLEAN, stability OK) -> fixes: teleproto 36b9534 (docs+proc policy), tc 3dce502 (changelog/docs/shell-free regen/quote-escape). tc 329 tests.
- W5 validation: teleproto 3× suite stable (241/2558), e2e 5/5 ×3, batch-bench 3.0x PASS; tc suite stable ×4 (5 design skips), PG track 7/7, LIVE vault smoke green; both CIs green.
- Flake audit: zero nondeterminism observed across all reruns tonight.

## Final status (morning read)
DONE: W1 (5 carried fixes) · W2 batching CLOSED tag-ready (v1.2.0) · W3 PG track (3678 tables live) · W4 audits+fixes (secrets/license CLEAN) · W5 double validation.
OWNER MORNING ITEMS:
1. Approve teleproto v1.2.0 tag (commit 238dfcd; live-gated green; review clean) — then tc composer bump "^1.1 || ^1.2" optional.
2. Packagist submit telegram-client (if not yet).
3. Backlog (non-urgent): pre-I/O eviction minors (W2 review), batch map clear, PG NOAUTH live-test env, FLOOD_WAIT live-sample verifier.
- W6: W2 minors polished (e3f8893): no eviction on pre-I/O errors, batch-state finally. teleproto 247/2581.
