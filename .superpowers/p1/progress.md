T1 port: complete e7ffe34 (21 files, 13 regex rewrites byte-verified)
T2 input: complete 6ccc3bb (TeleprotoSchemeLoader; RULING: teleproto api.tl PARTIAL -> owner's full v227 mirror is canonical source)
T3 artifacts: complete a0e9bbd (635 mig/2928 models/3116 DTOs/1684 factories, deterministic, bin/regenerate; RULING: constructor band re-baselined 1500-2500)
T4 dial: complete 8a452bf (112 shipped migrations, scheme-truth selection)
T5 criticals: complete 8cf7218 (HasFactory import, autoload mapping, testbench boot, hydrate() totality via TL_FLAG_BITS + snake->camel; ROOT CAUSE found: spatie treats any from* static as custom creation method -> infinite recursion; rename to hydrate)
P1 CLOSED by re-review (76 tests / 9304 assertions, phpstan OK, manifest pin f2462a3e).
NEXT: P2 TlIngest plan (just-in-time, per roadmap).
