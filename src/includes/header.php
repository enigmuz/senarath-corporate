<?php
/* Senarath Bank — Corporate site header
   LAB ENVIRONMENT · fictional institution · synthetic content only */
$page = $page ?? '';
$onlineUrl = getenv('ONLINE_BANKING_URL') ?: 'https://online.senarathbank.com';
function navcls($p,$cur){ return $p===$cur ? 'active' : ''; }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($title ?? 'Senarath Bank — Banking, redefined') ?></title>
<meta name="description" content="Senarath Bank — personal, business and private banking. Secure online banking, competitive rates, nationwide branches.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="icon" href="/assets/img/logo.png">
</head>
<body>
<div class="lab-banner">LAB ENVIRONMENT — <b>Senarath Bank</b> is a fictional institution. All content and data are synthetic and for the CrowdStrike security demonstration only.</div>

<div class="topbar">
  <div class="container">
    <div class="tb-left">Sri Lanka&rsquo;s trusted name in banking since 1988</div>
    <div class="tb-right">
      <a href="/branches.php">Branches &amp; ATMs</a>
      <a href="/contact.php">Support</a>
      <a href="<?= htmlspecialchars($onlineUrl) ?>">Online Banking &rarr;</a>
    </div>
  </div>
</div>

<header class="site-header">
  <div class="container nav">
    <a class="brand" href="/index.php">
      <img src="/assets/img/logo.png" alt="Senarath Bank">
    </a>
    <nav class="menu">
      <a class="<?= navcls('home',$page) ?>" href="/index.php">Home</a>
      <a class="<?= navcls('personal',$page) ?>" href="/personal.php">Personal</a>
      <a class="<?= navcls('business',$page) ?>" href="/business.php">Business</a>
      <a class="<?= navcls('about',$page) ?>" href="/about.php">About</a>
      <a class="<?= navcls('contact',$page) ?>" href="/contact.php">Contact</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-ghost" href="<?= htmlspecialchars($onlineUrl) ?>/index.php">Log in</a>
      <a class="btn btn-gold" href="/personal.php#open">Open an account</a>
    </div>
  </div>
</header>
