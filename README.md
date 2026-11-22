# GU Release Asset Test

A WordPress plugin that does nothing. It exists to reproduce an issue in
[Git Updater](https://github.com/afragen/git-updater): after a new release, the update is offered but fails with
"Update package not available" until the cache is flushed.

The repository mirrors a private plugin where this happens:

1. `Release Asset: true` in the plugin header; the workflow in `.github/workflows/release.yml` builds the zip and
   attaches it to the release when a version tag is pushed.
2. No `.wordpress-org` or `assets` folder.

## Reproducing

1. Install the plugin through Git Updater and let it update once.
2. Wait more than an hour, or set the timeout in its `ghu-…` option to a time in the past.
3. Raise `Version:` in the header and `Stable tag:` in `readme.txt`, commit, push the tag (`v1.0.1`), wait for the
   release zip, then push `main`.
4. Open Dashboard → Updates. Expected issue: the update is offered with an empty package.

## Releasing

Push the tag first and wait until the release with the zip exists, then push `main`. The workflow checks that the
tag matches the `Version:` line.
