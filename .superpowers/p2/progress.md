# P2 ledger
T1 ingest core: c318705 (tenancy gap found->generator+regen per roadmap)
T2 walker: d735098
T3 recursive write: 6fa711b (child $timestamps generator fix; honest note: v227 peers carry ids only — entities via sidecar ingest)
T4 routes: 38d6f89 (uuid5 route_id dedup; isUpdatePayload bypass)
T5 public API+aggregator+docs: 96b7b99 (ctor-transition anchor fix)
P2 CLOSED by review (115 tests / 9516 assertions, phpstan OK, 0 C / 0 I / 3 M).
Carried to P3 plan: M1 provider naming note, M2 docs sidecar sentence, M3 duplicate-anchor-under-concurrency (single-consumer OK; unique index when multi-worker).
NEXT: P3 Redis bus + daemon + backfill (just-in-time plan; port source = fork feat/laravel-mtproto-platform + sdd/sync).
