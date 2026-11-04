# Senarath Bank — Corporate Website (`senarath-corporate`)

> **LAB ENVIRONMENT.** Senarath Bank is a **fictional** institution. All content and
> figures are **synthetic** and exist only for the CrowdStrike security demonstration
> described in the *Senarath Bank Lab Build Guide*. This is the public, informational
> marketing site (WEB01 / Part A). It contains **no** customer data, **no** database
> connection, and **no** intentional vulnerabilities — those live in the separate
> `senarath-ebanking` repository.

## What this is

A polished, responsive corporate banking website (home, personal, business, about,
contact, branches, security centre) built as a small PHP + Apache app and shipped as a
Docker container. It is the "brochure" site a visitor sees at
`https://www.senarathbank.com` before clicking through to Online Banking at
`https://online.senarathbank.com`.

## Stack

- PHP 8.2 + Apache (`php:8.2-apache`)
- Server-rendered PHP templates, one shared CSS design system, a little vanilla JS
- No database, no secrets

## Layout

```
senarath-corporate/
├─ Dockerfile
├─ docker-compose.yml        # joins external network "senarath-net"
├─ .dockerignore
├─ .gitignore
├─ README.md
└─ src/
   ├─ index.php              # home
   ├─ personal.php           # personal banking
   ├─ business.php           # business & corporate
   ├─ about.php              # about / governance
   ├─ contact.php            # contact form (no persistence)
   ├─ branches.php           # branch & ATM finder
   ├─ security.php           # security centre
   ├─ includes/{header,footer}.php
   └─ assets/{css,js,img}/   # style.css, main.js, logo.png
```

## Run it (standalone, for a quick look)

```bash
# Build and run just this site on port 8081
docker build -t senarath/corporate:lab .
docker run --rm -p 8081:80 senarath/corporate:lab
# open http://localhost:8081
```

## Run it as part of the lab (behind the nginx gateway)

The full deployment is driven from the `senarath-ebanking` repo's gateway. In short, on
WEB01:

```bash
docker network create senarath-net           # once
cd senarath-corporate && docker compose up -d --build
```

Then bring up `senarath-ebanking` (which starts the nginx gateway that routes
`www.senarathbank.com` → this container and `online.senarathbank.com` → the banking app).

See **`senarath-ebanking/DEPLOYMENT_GUIDE.md`** for the complete, step-by-step Ubuntu +
Docker + nginx walkthrough.

## Configuration

| Env var | Default | Purpose |
|---|---|---|
| `ONLINE_BANKING_URL` | `https://online.senarathbank.com` | Target for "Log in" / "Online Banking" links |
