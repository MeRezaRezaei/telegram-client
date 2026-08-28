# P2 Task 2 Report — Pure payload walker with parent linkage

**Status: DONE.** Commit: `feat(ingest): pure payload walker with parent linkage` (d735098)

## What changed

| File | Change |
| --- | --- |
| `src/Ingest/PayloadWalker.php` | NEW pure/static shape traversal: `walk(array $payload): \Generator` yields every constructor node depth-first (parents before children). Zero DB, zero metamodel lookup — `'_'` detection only. |
| `tests/Ingest/PayloadWalkerTest.php` | NEW: 7 tests (written first, red → green) — the 6 canned shapes from the plan plus a laziness/`\Generator` contract pin. |

## Node contract (consumed by Task 3)

Each yield: `['constructor' => string, 'payload' => array (verbatim incl. `_`), 'path' => string dot path from root, 'parent_param' => ?string, 'is_root' => bool, 'vector_index' => ?int]`.

- **Root**: path = constructor name (`user`), `is_root = true`, `parent_param`/`vector_index` null.
- **Nested object**: path = `parent.field` (`user.photo`), `parent_param` = field name, `vector_index` null.
- **Vector of objects** (PHP list): each object node gets `parent_param` = vector field name, `vector_index` = list position, path = `parent.field.index` (`user.usernames.2`) — indexes stay positional, so scalar gaps in mixed vectors are preserved (mixed vector `['username', 'legacy', 'username']` yields indexes 0 and 2 only).
- **Vector of scalars**: not nodes — nothing yielded (pinned: `restriction_reason` list of strings yields root only).
- **Conditional-absent**: missing key = nothing to do (pinned: user without `last_name`/`photo` yields root only).
- **Deep chain**: `message → peer_id(peer) → chat → photo` — exact path/constructor/parent_param/is_root/order arrays pinned (DFS pre-order).

## Shape fidelity

Payload shape mirrors teleproto `TLDecoder::decodeObject` output verbatim (verified against `../teleproto/src/MTProto/TL/TLDecoder.php`): `['_' => ctorName, field => value...]` assoc arrays, vectors as 0-indexed PHP lists, flag-clear fields absent from the array. Root-level bare vectors (decoder's `Vector<T>` root branch) are also handled — items yield with `parent_param` null + `vector_index` set.

## Gates

- `vendor/bin/phpunit` → **OK, 83 tests / 9,324 assertions** (76 prior + 7 new).
- `vendor/bin/phpstan analyse` → **[OK] No errors** (level 5 + `preg_*` disallowed-calls).
- `grep -rn 'preg_' src/` → 0. `declare(strict_types=1)`; no DB/testbench needed (plain `PHPUnit\Framework\TestCase`).

## Parallelism note

Disjoint from Task 1 as planned: only `src/Ingest/PayloadWalker.php` + `tests/Ingest/PayloadWalkerTest.php` created/committed; `UpdateIngestor`/migration-runner concerns untouched. `tests/Ingest/Concerns/` (Task 1's) left alone.
