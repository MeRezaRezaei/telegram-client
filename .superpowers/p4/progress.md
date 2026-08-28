# P4 ledger
T1 crypto+chunker: a1c7e88 (Argon2ID13/moderate, secretstream per chunk)
T2 vault: 61cf505 (channel-per-set, hash-named docs, TBMANIFEST1)
T3 runner+restorer: 39e8f3c (manifest-salt reuse → cross-run dedup, traversal guard)
T4 verifier+CLI+docs: aa3274d; fix wave d0027b3 (live gate, security docs)
T5 LIVE SMOKE: 3/3 green vs prod DC4 — required REAL teleproto fixes (the low-level-gap scenario the owner predicted):
  R1 full v227 mirror boot in TLRegistry (kills layer-drift misalignment wholesale)
  R2 double codec support (duration:double was THE misalignment trigger)
  R3 explicit-false clears conditional bit
  R4 upload/storage/update/chat constructor sets + inputDocumentFileLocation fabricated-id fix (bad07584)
  R5 decode parent-context errors (permanent debuggability)
  Vault-side: peer-ref contract (access_hash), realtime find-merge (search misses <30s posts).
P4 CLOSED. Docblock nit fixed post-review.
NEXT: P5 presentation + release.
