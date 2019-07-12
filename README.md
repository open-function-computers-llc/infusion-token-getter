# infusion-token-getter
This is a tiny PHP program that will do the initial OAuth communication with Infusionsoft. From here, you can get your first access and refresh tokens, and then it's up to you to keep those up to date. We use this with long living go processes that do the automatic updating for us.

To make this work, spin up a local dev server on port 8889 and hit your local host to get some tokens!

`php -S localhost:8889`

