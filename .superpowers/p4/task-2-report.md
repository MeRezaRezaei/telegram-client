# P4 Task 2 Report — Vault layer (VaultInterface, InMemoryVault, TelegramVault)

**Status:** DONE · commit `61cf505` on master, on top of T1 (`a1c7e88`, coexists).

## Produced

| File | What |
| --- | --- |
| `src/Backup/VaultInterface.php` | putChunk(hash, bytes): string msgId · getChunk(hash): string · putManifest(json): string · getLatestManifest(): ?array |
| `src/Backup/InMemoryVault.php` | Test fake: assoc chunk store (latest-wins per hash), manifest append stack (top = latest), synthetic string msg ids, loud RuntimeException on missing chunk / non-JSON manifest |
| `src/Backup/TelegramVault.php` | Channel-backed vault, ported design from fork `sdd/backup` `src/Backup/{TelegramVault,VaultInterface,InMemoryVault}.php` onto teleproto |
| `tests/Support/FakeVaultApi.php` | Offline api-map double; `findMessagesByName` deliberately matches LOOSELY (str_contains) so vault-side detection is what tests exercise |
| `tests/Backup/InMemoryVaultTest.php` | 5 semantics tests: roundtrip+distinct ids, chunk re-upload latest-wins, manifest latest-wins, null before first manifest, missing chunk throws |
| `tests/Backup/TelegramVaultTest.php` | 10 offline tests: create-when-missing (exactly once, then cached), find-existing no-create, chunk roundtrip (name+caption = hash), exact-name chunk reject of `hash-v2` prefix decoy, manifest latest-wins + `TBMANIFEST1:` text shape, prefix detection ignores marker-mid-string newer decoy, null with no manifests, corrupt base64 fails loud, scopeApi exposes six callables, constructor rejects incomplete map |

## TelegramVault design

- `__construct(string $setId, array $api)` — injectable call map; required keys validated loudly (`findChannel`, `createChannel`, `uploadBytes`, `sendDocument`, `sendText`, `findMessagesByName`).
- Channel resolution lazy find-or-create, cached: title = `teleproto-backup:<setId>`, broadcast, about const.
- `putChunk`: `uploadBytes(name=hash)` → `sendDocument(channel, inputFile, caption=hash)` → msgId string.
- `getChunk`: exact `name === hash` match (decoys sharing the prefix rejected), bytes via entry `fetch(hash)`.
- `putManifest`: `sendText('TBMANIFEST1:' . base64(json))`.
- `getLatestManifest`: max-id entry whose name `str_starts_with` marker (string fns only — zero regex), strict base64 + JSON decode, corrupt = RuntimeException, none = null.
- Real default map `scopeApi($scope)` / `forScope($scope, $setId)` over teleproto: dialog scan (`getDialogs` exact-title match), `createChannel`, `upload.saveFilePart`/`saveBigFilePart` 512 KB part loop (StorageMedia part math, big > 10 MB) → `inputFile`, `messages.sendMedia` w/ `inputMediaUploadedDocument` force_file + filename attribute, `messages.sendMessage`, `messages.search` → `{id, name=filename|text, fetch=upload.getFile offset loop}`; sent-id extraction with `getHistory(1)` fallback for `updatesTooLong`. BotAccountScope passes as-is (subclass). Live path is live-gated (per plan; no network in tests).

## Gates

- `vendor/bin/phpunit`: **258 tests, 9932 assertions, OK** (baseline 243 + 15 new; 4 pre-existing live skips unchanged). T1 files untouched and green.
- `vendor/bin/phpstan analyse`: **[OK] No errors** (level 5 + disallowed-calls).
- `grep preg_ src/ tests/` → 0 hits.
- Strict types + zero regex throughout; MIT repo conventions followed.

## Notes for Task 3

`BackupRunner`/`Restorer` can depend on `VaultInterface` and use `InMemoryVault` offline; manifest must stay a JSON object (getLatestManifest returns decoded array).
