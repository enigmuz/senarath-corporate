<?php
$page='personal';
$title='Personal Banking — Senarath Bank';
require __DIR__.'/includes/header.php';
$onlineUrl = getenv('ONLINE_BANKING_URL') ?: 'https://online.senarathbank.com';
?>
<section class="page-hero">
  <div class="container">
    <div class="crumbs"><a href="/index.php">Home</a> / Personal</div>
    <p class="eyebrow">Personal banking</p>
    <h1>Accounts, cards and loans for everyday life</h1>
    <p class="lead" style="color:#b9c6d8;margin-top:12px">Simple, transparent products designed around how Sri Lankans actually bank.</p>
  </div>
</section>

<section class="section" id="open">
  <div class="container">
    <p class="eyebrow">Accounts</p>
    <h2 class="section-title">Choose your account</h2>
    <div class="grid-3" style="margin-top:34px">
      <div class="card">
        <h3>Smart Current</h3>
        <p>Everyday current account with free LankaPay transfers, a contactless debit card and real-time alerts.</p>
        <ul class="ticks">
          <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 9l3 3 7-8"/></svg> No monthly fee</li>
          <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 9l3 3 7-8"/></svg> Free e-statements</li>
        </ul>
        <a class="btn btn-gold" style="margin-top:18px" href="/contact.php#open">Open now</a>
      </div>
      <div class="card">
        <h3>Senarath Savings</h3>
        <p>Grow your balance with tiered interest paid monthly and no withdrawal penalties.</p>
        <ul class="ticks">
          <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 9l3 3 7-8"/></svg> Up to 9.5% AER (lab)</li>
          <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 9l3 3 7-8"/></svg> Goal-based sub-accounts</li>
        </ul>
        <a class="btn btn-gold" style="margin-top:18px" href="/contact.php#open">Open now</a>
      </div>
      <div class="card">
        <h3>Student &amp; Minor</h3>
        <p>Fee-free banking for students with parental controls and a first debit card.</p>
        <ul class="ticks">
          <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 9l3 3 7-8"/></svg> Zero fees</li>
          <li><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 9l3 3 7-8"/></svg> Spend limits</li>
        </ul>
        <a class="btn btn-gold" style="margin-top:18px" href="/contact.php#open">Open now</a>
      </div>
    </div>
  </div>
</section>

<section class="section" id="cards" style="background:var(--mist)">
  <div class="container">
    <p class="eyebrow">Cards</p>
    <h2 class="section-title">Cards that give back</h2>
    <div class="grid-3" style="margin-top:34px">
      <div class="card"><h3>Classic Debit</h3><p>Contactless, accepted worldwide on Visa, with instant freeze/unfreeze in Online Banking.</p></div>
      <div class="card"><h3>Gold Credit</h3><p>2% cashback on fuel &amp; groceries, up to 55 interest-free days and purchase protection.</p></div>
      <div class="card"><h3>Platinum Credit</h3><p>Airport lounge access, travel insurance and a dedicated concierge line.</p></div>
    </div>
  </div>
</section>

<section class="section" id="loans">
  <div class="container">
    <p class="eyebrow">Loans &amp; mortgages</p>
    <h2 class="section-title">Lending that moves at your pace</h2>
    <div class="grid-2" style="margin-top:30px">
      <div class="card"><h3>Home loans</h3><p>Finance up to 85% of property value, flexible tenures to 25 years, from 13.50% p.a. (lab).</p></div>
      <div class="card"><h3>Personal loans</h3><p>Borrow up to LKR 5,000,000 with fixed monthly repayments and decisions in 48 hours.</p></div>
      <div class="card"><h3>Vehicle leasing</h3><p>Lease new or registered vehicles with competitive rates and quick approval.</p></div>
      <div class="card"><h3>Gold loans</h3><p>Instant liquidity against your gold at 9.90% p.a. with insured storage.</p></div>
    </div>
  </div>
</section>

<section class="section" id="wealth" style="background:var(--mist)">
  <div class="container">
    <p class="eyebrow">Private wealth</p>
    <h2 class="section-title">Advisory for the long term</h2>
    <p class="lead">Senarath Private pairs you with a dedicated relationship manager and preferential fixed-deposit rates, portfolio advisory and estate planning.</p>
    <a class="btn btn-gold" style="margin-top:22px" href="/contact.php">Talk to private banking</a>
  </div>
</section>

<?php require __DIR__.'/includes/footer.php'; ?>
