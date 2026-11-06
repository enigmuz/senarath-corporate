<?php
$page='';
$title='Security Centre - Senarath Bank';
require __DIR__.'/includes/header.php';
$onlineUrl = getenv('ONLINE_BANKING_URL') ?: 'https://ebanking.senarathbank.com';
?>
<section class="page-hero">
  <div class="container">
    <div class="crumbs"><a href="/index.php">Home</a> / Security Centre</div>
    <p class="eyebrow">Stay safe</p>
    <h1>Your security is our priority</h1>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="grid-3">
      <div class="card"><h3>We never ask for your OTP</h3><p>Senarath staff will never ask for your password or one-time passcode by phone, email or SMS.</p></div>
      <div class="card"><h3>Multi-factor sign-in</h3><p>Online Banking is protected by passwords and one-time passcodes sent to your registered device.</p></div>
      <div class="card"><h3>Report fraud 24/7</h3><p>Suspect something? Call 1988 immediately or email fraud@senarathbank.com.</p></div>
    </div>
    <div style="margin-top:40px">
      <a class="btn btn-gold btn-lg" href="<?= htmlspecialchars($onlineUrl) ?>/index.php">Go to Online Banking</a>
    </div>
  </div>
</section>
<?php require __DIR__.'/includes/footer.php'; ?>
