<?php
$page='';
$title='Branches & ATMs - Senarath Bank';
require __DIR__.'/includes/header.php';
$branches = [
  ['Colombo - Head Office','No. 1988, Union Place, Colombo 02','Mon-Fri 9:00-16:00'],
  ['Kandy','112 Peradeniya Road, Kandy','Mon-Fri 9:00-16:00'],
  ['Galle','45 Wackwella Road, Galle','Mon-Fri 9:00-16:00'],
  ['Jaffna','8 Hospital Road, Jaffna','Mon-Fri 9:00-15:30'],
  ['Matara','201 Anagarika Dharmapala Mw, Matara','Mon-Fri 9:00-16:00'],
  ['Dickwella','77 Beach Road, Dickwella','Mon-Fri 9:00-15:30'],
  ['Negombo','330 Main Street, Negombo','Mon-Fri 9:00-16:00'],
  ['Kurunegala','14 Colombo Road, Kurunegala','Mon-Fri 9:00-16:00'],
];
?>
<section class="page-hero">
  <div class="container">
    <div class="crumbs"><a href="/index.php">Home</a> / Branches &amp; ATMs</div>
    <p class="eyebrow">214 branches · 480 ATMs</p>
    <h1>Find a Senarath Bank near you</h1>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="grid-3">
      <?php foreach($branches as $b): ?>
        <div class="card">
          <h3><?= htmlspecialchars($b[0]) ?></h3>
          <p><?= htmlspecialchars($b[1]) ?></p>
          <p style="color:var(--gold-500);font-weight:600;margin-top:8px"><?= htmlspecialchars($b[2]) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php require __DIR__.'/includes/footer.php'; ?>
