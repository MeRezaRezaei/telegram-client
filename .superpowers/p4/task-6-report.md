# Task 6 Report — finish-wave: vault peer-contract tests + live smoke green

## Status: DONE — all gates green, live smoke green 3/3, nothing committed.

## 1. The three stale tests (tests/Backup/TelegramVaultTest.php)

- **test_existing_channel_found_without_create**: `sendDocument` arg[0] is now the
  inputPeerChannel array. Assertion updated to the exact shape
  `['_' => 'inputPeerChannel', 'channel_id' => 1000, 'access_hash' => 4242]` (assertSame,
  key order pinned to `TelegramVault::inputPeer()`).
- **test_manifest_prefix_detection_uses_string_functions_not_regex** (returned null) and
- **test_corrupt_manifest_payload_fails_loud** (no exception): both rooted in
  `FakeVaultApi::postText/postDocument`, which passed `$peer['channel_id'] ?? 0` to
  `appendMessage()` — `$peer` does not exist there, so every pre-seeded message landed in
  bucket `0` while the vault read bucket `1000`. Fixed to pass the `$channel` parameter
  through (it already normalizes array|int → int id), restoring the tests' intent:
  decoys ignored via vault-side `str_starts_with`, newest wins, invalid base64 throws.

## 2. src fixes surfaced by the run

- `TelegramVault::$channelAccessHash` was assigned but never declared (dynamic property,
  PHP 8.2+ deprecation + phpstan error). Declared `private int $channelAccessHash = 0`.
- **Live find-loop**: `messages.search` in a channel misses fresh posts for 30s+ (probe:
  only the first-ever manifest was indexed; newer ones absent after 30s) while
  `messages.getHistory` is realtime. `TelegramVault::findMessagesByName` (live scopeApi
  path) now merges search rows with a realtime history top-up, deduped by message id
  (`resultRows` + `mergeRowsById`). Injectable six-key contract, FakeVaultApi and all
  offline tests unchanged; decoy rejection still happens vault-side.
- `LiveVaultSmokeTest` manifest leg: `retry()` only retried exceptions, so a stale-but-
  valid latest manifest failed instantly. Retry predicate now treats "manifest not yet
  referencing the fresh chunk" as retryable (per the test's own indexation-lag docblock).

## 3. Teleproto-level blocker (found live, fixed precisely, uncommitted)

`INPUT_CONSTRUCTOR_INVALID_F5BB5E8E` on `upload.getFile`: curated
`TLRegistry` line carried a fabricated CRC `inputDocumentFileLocation#f5bb5e8e`; official
id is `#bad07584` (stable across layers; confirmed in both `schema/sources/api.tl` and
`api_full.tl`). The v227 mirror line was correct all along but skipped — boot policy is
"curated wins, mirror fills gaps". Registry audited against the v227 mirror: this was the
**only** wrong id of 1214 (11 other api.tl diffs are the intentional layer-229-vs-227
drift). Fixed the one line in `src/MTProto/TL/TLRegistry.php`.
Also fixed pre-existing phpstan error (clean HEAD) `TLDecoder.php:41` — redundant
`is_string()` guard removed (PHPDoc types `$contextTypes` as `array<string, string>`).

## 4. Gates

| Gate | Result |
| --- | --- |
| telegram-client `vendor/bin/phpunit` | OK — 301 tests, 10055 assertions, 5 live-gated skips |
| telegram-client `vendor/bin/phpstan analyse` | OK — no errors |
| teleproto `composer test` | OK — 221 tests, 2465 assertions |
| teleproto `composer analyse` | OK — no errors |
| Live smoke `TELEGRAM_CLIENT_LIVE=1 .../LiveVaultSmokeTest.php` | **green 3/3 consecutive** (chunk upload/send/find/download roundtrip + manifest latest-wins against real DC) |

Zero `preg_*` introduced; strict_types honored. Not committed, per instruction.

## 5. Blockers remaining

None. The one genuinely teleproto-level blocker (wrong curated constructor CRC) is
characterized and fixed above; recommend committing it in teleproto separately.
