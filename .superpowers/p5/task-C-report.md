# Task C report — composer.json, CHANGELOG.md, .github/** (presentation wave)

Implementer C · base master @b612676 · parallel with A/B/D · NOT committed (as instructed)

## Pre-flight findings

- **No git remote configured** — repo not created on GitHub yet. All URLs use the
  intended `https://github.com/MeRezaRezaei/telegram-client` (homepage, support,
  templates, workflow clone step, SUPPORT.md). Noted as a release blocker in CHANGELOG.
- `LICENSE` (MIT) exists — composer `license: MIT` is truthful.
- teleproto local `main` is **ahead of its only tag `v1.0.0`** (mirror gap-fill,
  TL serializer fixes; head 274db60). Confirms the task's "untagged fixes" concern:
  the published constraint `^1.0` cannot be adopted yet.
- Verified empirically: a composer **path-repo whose URL is missing hard-fails**
  `composer install` → CI needs the teleproto sibling (see workflow).
- `composer.lock` is **gitignored** in this repo — the local lock refresh
  (content-hash after my constraint fix) stays out of the commit; CI resolves fresh.
- Baseline `composer validate --strict` FAILED: `illuminate/redis: "*"` unbound
  constraint warning → fixed to `^10.0|^11.0|^12.0`.

## composer.json

- description (pain-first, **exactly 100 chars**, measured): "Telegram client for
  Laravel — Postgres update truth, Redis hot-reload bus, daemon, backfill, backups".
- 12 keywords as briefed: telegram, laravel, mtproto, eloquent, postgres, redis,
  updates, daemon, backfill, backup, dto, multi-account.
- `homepage` + `support.issues/.source` → intended GitHub repo;
  `support.docs` → `#readme` anchor; `support.security` → GitHub private
  security advisories (no SECURITY.md file exists in this repo);
  `authors: MeRezaRezaei` (mirrors teleproto).
- **teleproto constraint kept at `dev-main`** + path-repo `../teleproto` symlink
  kept: flipping to `^1.0` now would resolve the tagged-but-older v1.0.0 (or fail),
  silently dropping the untagged fixes the working tree depends on. Publish-time
  flip (v1.1.0 tag → `^1.0` → path-repo out of the manifest) is documented as a
  release blocker in CHANGELOG `[Unreleased]`.
- require-dev left as-is (phpstan ^2.0 + disallowed-calls ^4.0 + phpunit ^10|^11 +
  testbench ^10.11) — sane, matches the green suite.
- `composer update --lock` run to refresh the gitignored lock (bumped teleproto
  dev-main 3c24857→274db60, symlink preserved: `vendor/merezarezaei/teleproto ->
  ../../../teleproto/`). **`composer validate --strict`: "./composer.json is valid", exit 0.**

## CHANGELOG.md

- `[Unreleased]` restructured to carry the **release blockers**: (1) tag teleproto
  v1.1.0 → flip constraint dev-main→`^1.0` → move the path-repo out of the
  published manifest (dev-mode-only convenience); (2) create the GitHub repo +
  Packagist registration.
- New **`[0.1.0] - 2026-08-29`** section: intro paragraph + P1 summary written
  (schema mirror: ported MIT generators, layer-227 mirror — 3,678 tables / 1,535
  FKs / 635 migrations generated / 112 shipped, 3,116 DTOs + 2,928 models, golden
  regeneration gate, curated dial + `telegram-client:regenerate --ship`); existing
  P2 Ingest / P3 Bus-Daemon-Backfill / P4 Backup-Vault entries and the review-wave
  Fixed entries now fold under 0.1.0.

## .github/ (all new; patterns mirrored from ../teleproto)

- `workflows/run-tests.yml` — PHP 8.2/8.3/8.4 matrix, fail-fast off, setup-php
  ext (dom,curl,libxml,mbstring,zip,openssl,hash,json,pdo,pdo_sqlite,sqlite3,
  **sodium,pcntl,posix** per this package's require/daemon tests),
  `composer validate --strict` step, ramsey/composer-install@v3, phpunit.
  **No services by design** (sqlite :memory:, Redis faked via connection
  contract, live tests self-skip without TELEGRAM_CLIENT_LIVE=1) — noted inline.
  Extra step vs teleproto: `git clone --depth 1 …/teleproto ../teleproto` for the
  dev path-repo (required while dev-main; drop-step comment points at the
  CHANGELOG blocker). Triggers on both `main` and `master` (current default branch
  is master). Lock is gitignored → ramsey falls back to resolve, which works with
  the cloned sibling.
- `ISSUE_TEMPLATE/bug_report.yml` — teleproto pattern + Component dropdown
  (schema/ingest/bus/daemon/backfill/vault/install/other), snippet uses
  `app(TelegramClient::class)->ingest(...)`, PHP 8.2–8.4 dropdown.
- `ISSUE_TEMPLATE/feature_request.yml` — adapted wording/snippet.
- `pull_request_template.md` — teleproto checklist + generated-artifacts line.
- `SUPPORT.md` — issues channel, docs pointers (README, docs/, teleproto for
  wire-engine questions, live-test skip note), SemVer **with explicit "0.x =
  experimental / pin exact"** clause, security → private advisories.

## Verification

- `composer validate --strict` → valid, exit 0 (was failing pre-fix).
- `composer test` → **OK: 301 tests, 10,055 assertions, 5 skipped** (live-gated).
- All 3 YAML files parsed clean (python yaml.safe_load, no exceptions).
- `git status` touched surface only: `composer.json`, `CHANGELOG.md` modified;
  `.github/**` added. No subagents dispatched.
