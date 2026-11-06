# Senarath Bank — Corporate Website (`senarath-corporate`)

> **LAB ENVIRONMENT.** Senarath Bank is a **fictional** institution. All content and
> figures are **synthetic** and exist only for the CrowdStrike security demonstration
> described in the *Senarath Bank Lab Build Guide*. This is the public, informational
> marketing site (WEB01 / Part A). It contains **no** customer data, **no** database
> connection, and **no** intentional vulnerabilities — those live in the separate
> `senarath-ebanking` repository.

## What this is

A polished, responsive corporate banking website (home, personal, business, about,
contact, branches, security centre) built as a small **PHP 8.2 + Apache** app. It is
the "brochure" site a visitor sees at `https://senarathbank.com` before clicking
through to Online Banking at `https://ebanking.senarathbank.com`.

## Stack

- PHP 8.2 + Apache (native, mod_php — no containers)
- Server-rendered PHP templates, one shared CSS design system, a little vanilla JS
- No database, no secrets

## Layout

```
senarath-corporate/
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

## Deploy

This site is deployed **natively alongside the banking app** on WEB01 (Apache
name-based virtual hosts, no Docker). The full from-scratch walkthrough — pushing
the repos, DNS, the one-command installer, and TLS — is the single guide in the
ebanking repo: **`senarath-ebanking/DEPLOY.md`**.

In short, on WEB01:
```bash
sudo git clone https://github.com/enigmuz/senarath-corporate.git /var/www/senarath-corporate
sudo git clone https://github.com/enigmuz/senarath-ebanking.git  /var/www/senarath-ebanking
sudo SQL01_IP=<SQL01_IP> bash /var/www/senarath-ebanking/deploy/install-native.sh
```
The installer's Apache vhost serves this repo's `src/` for `senarathbank.com` /
`www.senarathbank.com`.

### Quick local look (optional)
```bash
php -S 0.0.0.0:8081 -t src    # open http://localhost:8081
```

## Configuration

| Env var | Default | Purpose |
|---|---|---|
| `ONLINE_BANKING_URL` | `https://ebanking.senarathbank.com` | Target for "Log in" / "Online Banking" links |
