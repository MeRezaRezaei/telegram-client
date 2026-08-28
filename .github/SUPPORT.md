# Support

## Where to ask

- **Bugs and feature requests** — [open a GitHub issue](https://github.com/MeRezaRezaei/telegram-client/issues).
  Please use the issue templates and include a minimal code snippet, your PHP version (8.2+), and the full stack trace.
- **Questions and usage help** — GitHub issues are the support channel for now (GitHub Discussions are not enabled).
  Search existing issues first, then open one labeled as a question.
- **Documentation** — start with the [README](https://github.com/MeRezaRezaei/telegram-client#readme) and the
  [docs/](https://github.com/MeRezaRezaei/telegram-client/tree/main/docs) folder
  (`quickstart.md`, `index.md`, `ingest.md`, `bus.md`, `backup.md`).
- **Wire-engine questions** (MTProto, sessions, login) belong upstream in
  [teleproto](https://github.com/MeRezaRezaei/teleproto) — this package is the client built on top of it.
- **Tests note** — the 5 live-credential tests are skipped by default; they only run with
  `TELEGRAM_CLIENT_LIVE=1` and a resolvable Telegram session. A skipped live suite is expected, not a bug.

## Versioning

This project follows [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

- **While on `0.x` the package is experimental**: breaking changes may land in `0.x` minor
  bumps and will be called out in the [CHANGELOG](../CHANGELOG.md). Pin a exact version in
  production use.
- From `1.0.0`: patch releases are bug fixes only; minor releases add features without BC
  breaks in the documented public API; major releases may break BC and will be called out.

Requires PHP 8.2+. Supported PHP versions track the CI matrix (currently 8.2, 8.3, 8.4).

## Security

Found a vulnerability? Please do **not** open a public issue — use
[GitHub private security advisories](https://github.com/MeRezaRezaei/telegram-client/security/advisories).
