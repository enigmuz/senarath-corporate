<?php
$page='about';
$title='About - Senarath Bank';
require __DIR__.'/includes/header.php';
?>
<section class="page-hero">
  <div class="container">
    <div class="crumbs"><a href="/index.php">Home</a> / About</div>
    <p class="eyebrow">About us</p>
    <h1>Three decades of Sri Lankan banking</h1>
    <p class="lead" style="color:#b9c6d8;margin-top:12px">Founded in 1988, Senarath Bank has grown from a single Colombo branch into one of the island&rsquo;s most trusted financial institutions.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="split" style="display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:center">
      <div>
        <p class="eyebrow">Our story</p>
        <h2 class="section-title">Built for people, run with discipline</h2>
        <p class="lead">We exist to help Sri Lankans and their businesses manage, protect and grow their money. Our promise is simple: fair products, honest pricing and service you can rely on - at the branch and on every screen.</p>
        <ul class="ticks">
          <li><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 11l4 4 8-9"/></svg> 214 branches and 480 ATMs nationwide</li>
          <li><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 11l4 4 8-9"/></svg> 1.2 million personal and business customers</li>
          <li><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 11l4 4 8-9"/></svg> Rated A+(lka) for financial strength</li>
        </ul>
      </div>
      <div class="media" style="min-height:340px;border-radius:18px;background:linear-gradient(160deg,var(--navy-800),var(--navy-600));box-shadow:var(--shadow-lg)"></div>
    </div>
  </div>
</section>

<section class="section" id="governance" style="background:var(--mist)">
  <div class="container">
    <p class="eyebrow">Governance</p>
    <h2 class="section-title">Accountable at every level</h2>
    <div class="grid-3" style="margin-top:30px">
      <div class="card"><h3>Board oversight</h3><p>An independent board sets risk appetite and holds management to account.</p></div>
      <div class="card"><h3>Risk &amp; compliance</h3><p>Three-lines-of-defence model aligned to CBSL direction and ISO 27001 (lab).</p></div>
      <div class="card"><h3>Customer protection</h3><p>Deposits covered under the Lanka Deposit Insurance Scheme (synthetic / lab).</p></div>
    </div>
  </div>
</section>

<section class="section band">
  <div class="container">
    <div class="grid-4">
      <div class="stat"><b>1988</b><span>Founded</span></div>
      <div class="stat"><b>214</b><span>Branches</span></div>
      <div class="stat"><b>6,400</b><span>Employees</span></div>
      <div class="stat"><b>A+(lka)</b><span>National rating</span></div>
    </div>
  </div>
</section>

<?php require __DIR__.'/includes/footer.php'; ?>
