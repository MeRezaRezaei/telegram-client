# P3 ledger
T1 bus substrate: 82876d5 (contract+ArrayRedis incl. redelivery semantics; adapter live-verified predis mappings)
T5 backfill: 6e4cee7 (quota math verbatim: slice=intdiv(remaining/2)/cost; 5-strike DL)
T2 router+consumer: c017bd0 (prefix routes, reload, DL poison)
T3 command+adapter: ccebb0d (predis arg-order differences mapped; pcntl graceful real-signal tested)
T4 daemon+backfill cmd+docs: 21187d2 (isolation ladder 2/5/15/60, DcMigration rebuild, cursor resume)
P3 CLOSED by review (204/9789, 4 designed redis-skips). Carried: I ingest-failure cap → wedges group (P4/P5 backlog), M live-test NOAUTH, M report count nit.
NEXT: P4 backup vault (port sdd/backup designs).
