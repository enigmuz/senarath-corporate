<?php
$page='home';
$title='Senarath Bank - Banking, redefined for Sri Lanka';
require __DIR__.'/includes/header.php';
$onlineUrl = getenv('ONLINE_BANKING_URL') ?: 'https://ebanking.senarathbank.com';
?>

<!-- HERO SLIDER -->
<section class="hero-slider" aria-label="Senarath Bank highlights" aria-roledescription="carousel">
  <div class="slides" id="slides">
    <a class="slide is-active" href="/personal.php#open" aria-label="Ayubowan - Welcome to Senarath Bank">
      <img src="/assets/img/slide1.jpg" alt="Ayubowan - Welcome to Senarath Bank, your trusted financial partner" fetchpriority="high">
    </a>
    <a class="slide" href="/personal.php#loans" aria-label="Banking for a better lifestyle">
      <img src="/assets/img/slide2.jpg" alt="Banking for a better lifestyle - save, grow, own, invest" loading="lazy">
    </a>
    <a class="slide" href="/about.php" aria-label="Banking for a more caring Sri Lanka">
      <img src="/assets/img/slide3.jpg" alt="Banking for a more caring Sri Lanka - community support programme" loading="lazy">
    </a>
  </div>
  <button class="sl-arrow sl-prev" id="slPrev" aria-label="Previous slide" type="button">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M15 5l-7 7 7 7"/></svg>
  </button>
  <button class="sl-arrow sl-next" id="slNext" aria-label="Next slide" type="button">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 5l7 7-7 7"/></svg>
  </button>
  <div class="sl-dots" id="slDots" role="tablist" aria-label="Choose slide"></div>
</section>

<!-- CTA + trust bar under the slider -->
<div class="hero-bar">
  <div class="container">
    <div class="hb-actions">
      <a class="btn btn-gold btn-lg" href="/personal.php#open">Open an account</a>
      <a class="btn btn-ghost btn-lg" href="<?= htmlspecialchars($onlineUrl) ?>/index.php">Log in to Online Banking</a>
    </div>
    <div class="hb-trust">
      <div class="t"><b>1.2M+</b><span>Customers served</span></div>
      <div class="t"><b>214</b><span>Branches &amp; ATMs</span></div>
      <div class="t"><b>A+(lka)</b><span>National rating</span></div>
    </div>
  </div>
</div>

<!-- TRUST STRIP -->
<div class="logos">
  <div class="container">
    <span>CBSL licensed (lab)</span><span>·</span>
    <span>LankaPay</span><span>·</span>
    <span>Visa &amp; Mastercard</span><span>·</span>
    <span>SWIFT: SENBLKLX</span><span>·</span>
    <span>ISO 27001 aligned</span>
  </div>
</div>

<!-- PRODUCTS -->
<section class="section">
  <div class="container">
    <p class="eyebrow">What we offer</p>
    <h2 class="section-title">Everything you need from a modern bank</h2>
    <p class="lead" style="margin-bottom:46px">From everyday accounts to corporate treasury, Senarath Bank brings branch-grade service to every screen.</p>
    <div class="grid-3">
      <div class="card">
        <div class="ic"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="6" width="18" height="13" rx="2"/><path d="M3 10h18"/></svg></div>
        <h3>Everyday banking</h3>
        <p>Current and savings accounts with no hidden fees, instant LankaPay transfers, and a debit card accepted everywhere.</p>
        <a class="more" href="/personal.php">Explore accounts →</a>
      </div>
      <div class="card">
        <div class="ic"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7z"/><path d="M9 12l2 2 4-4"/></svg></div>
        <h3>Secure online banking</h3>
        <p>Bank from anywhere with multi-factor sign-in, real-time alerts and a dashboard designed around your money.</p>
        <a class="more" href="<?= htmlspecialchars($onlineUrl) ?>">Go to Online Banking →</a>
      </div>
      <div class="card">
        <div class="ic"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 21V10l9-6 9 6v11"/><path d="M9 21v-6h6v6"/></svg></div>
        <h3>Loans &amp; mortgages</h3>
        <p>Home loans, personal loans and leasing with transparent rates and decisions in as little as 48 hours.</p>
        <a class="more" href="/personal.php#loans">See lending →</a>
      </div>
      <div class="card">
        <div class="ic"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20M6 15h4"/></svg></div>
        <h3>Cards that reward</h3>
        <p>Credit and debit cards with cashback on fuel and groceries, airport lounge access and zero-liability protection.</p>
        <a class="more" href="/personal.php#cards">Compare cards →</a>
      </div>
      <div class="card">
        <div class="ic"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 20V8M10 20V4M16 20v-7M22 20H2"/></svg></div>
        <h3>Business &amp; corporate</h3>
        <p>Payroll, trade finance, POS and treasury services engineered for SMEs and large enterprises alike.</p>
        <a class="more" href="/business.php">For business →</a>
      </div>
      <div class="card">
        <div class="ic"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/></svg></div>
        <h3>Private wealth</h3>
        <p>Dedicated relationship managers, portfolio advisory and fixed deposits with preferential rates.</p>
        <a class="more" href="/personal.php#wealth">Private banking →</a>
      </div>
    </div>
  </div>
</section>

<!-- SPLIT: online banking -->
<section class="section split alt" style="padding:72px 0">
  <div class="container" style="display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center">
    <div>
      <p class="eyebrow">Online &amp; mobile</p>
      <h2 class="section-title">Your whole bank, in your pocket</h2>
      <p class="lead">The Senarath Online Banking portal puts every account, card and payment a tap away - secured with device binding and one-time passcodes.</p>
      <ul class="ticks">
        <li><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 11l4 4 8-9"/></svg> Instant transfers via LankaPay &amp; SLIPS</li>
        <li><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 11l4 4 8-9"/></svg> Pay utility, telco and government bills</li>
        <li><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 11l4 4 8-9"/></svg> Download e-statements &amp; upload documents</li>
        <li><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 11l4 4 8-9"/></svg> Real-time spend alerts and card controls</li>
      </ul>
      <a class="btn btn-gold" style="margin-top:26px" href="<?= htmlspecialchars($onlineUrl) ?>/index.php">Log in to Online Banking</a>
    </div>
    <div class="media">
      <div class="ovl"><svg width="120" height="120" fill="none" stroke="currentColor" stroke-width="1"><rect x="34" y="12" width="52" height="96" rx="8"/><path d="M34 90h52M56 100h8"/></svg></div>
    </div>
  </div>
</section>

<!-- STAT BAND -->
<section class="section band">
  <div class="container">
    <div class="grid-4">
      <div class="stat"><b>36 yrs</b><span>Serving Sri Lanka</span></div>
      <div class="stat"><b>LKR 1.1T</b><span>Assets under management</span></div>
      <div class="stat"><b>99.98%</b><span>Online uptime</span></div>
      <div class="stat"><b>24/7</b><span>Hotline &amp; fraud support</span></div>
    </div>
  </div>
</section>

<!-- RATES -->
<section class="section">
  <div class="container">
    <p class="eyebrow">Today&rsquo;s rates</p>
    <h2 class="section-title">Fixed deposit &amp; lending rates</h2>
    <p class="lead" style="margin-bottom:34px">Indicative lab rates, effective <?= date('d M Y') ?>. Rates are illustrative and synthetic.</p>
    <div class="grid-2">
      <table class="rates">
        <thead><tr><th>Fixed deposit</th><th>Term</th><th>Rate (AER)</th></tr></thead>
        <tbody>
          <tr><td>Senarath FD</td><td>3 months</td><td class="r">8.25%</td></tr>
          <tr><td>Senarath FD</td><td>12 months</td><td class="r">11.50%</td></tr>
          <tr><td>Senior Citizen FD</td><td>12 months</td><td class="r">13.00%</td></tr>
          <tr><td>Senarath FD+</td><td>24 months</td><td class="r">12.25%</td></tr>
        </tbody>
      </table>
      <table class="rates">
        <thead><tr><th>Lending</th><th>Type</th><th>From</th></tr></thead>
        <tbody>
          <tr><td>Home loan</td><td>Secured</td><td class="r">13.50%</td></tr>
          <tr><td>Personal loan</td><td>Unsecured</td><td class="r">16.00%</td></tr>
          <tr><td>Vehicle leasing</td><td>Secured</td><td class="r">14.25%</td></tr>
          <tr><td>Gold loan</td><td>Pledged</td><td class="r">9.90%</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section" style="padding-top:0">
  <div class="container">
    <div class="cta">
      <h2>Ready to bank with Senarath?</h2>
      <p>Open your account online in minutes, or walk into any of our 214 branches. Our team is ready to help you move, save and grow.</p>
      <a class="btn btn-light btn-lg" href="/personal.php#open">Open an account</a>
    </div>
  </div>
</section>

<?php require __DIR__.'/includes/footer.php'; ?>
