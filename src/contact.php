<?php
$page='contact';
$title='Contact - Senarath Bank';
require __DIR__.'/includes/header.php';

// Lab note: this form does not persist anything; it only echoes a confirmation.
$sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') { $sent = true; }
?>
<section class="page-hero">
  <div class="container">
    <div class="crumbs"><a href="/index.php">Home</a> / Contact</div>
    <p class="eyebrow">We&rsquo;re here to help</p>
    <h1>Contact Senarath Bank</h1>
    <p class="lead" style="color:#b9c6d8;margin-top:12px">Call our 24/7 hotline on <strong style="color:#fff">1988</strong>, visit a branch, or send us a message.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="split" style="display:grid;grid-template-columns:1.1fr .9fr;gap:52px;align-items:start">
      <div>
        <p class="eyebrow" id="open">Send a message</p>
        <h2 class="section-title">How can we help?</h2>
        <?php if ($sent): ?>
          <div class="card" style="border-color:var(--ok);margin-top:20px">
            <h3 style="color:var(--ok)">Thank you - message received</h3>
            <p>A Senarath Bank representative will be in touch shortly. (Lab: this form does not store data.)</p>
          </div>
        <?php else: ?>
        <form method="post" style="margin-top:22px">
          <div class="form-row">
            <div class="field"><label>First name</label><input name="fn" required></div>
            <div class="field"><label>Last name</label><input name="ln" required></div>
          </div>
          <div class="form-row">
            <div class="field"><label>Email</label><input type="email" name="email" required></div>
            <div class="field"><label>Phone</label><input name="phone"></div>
          </div>
          <div class="field"><label>Topic</label>
            <select name="topic"><option>Open an account</option><option>Loans &amp; mortgages</option><option>Cards</option><option>Business banking</option><option>Report fraud</option><option>Other</option></select>
          </div>
          <div class="field"><label>Message</label><textarea name="msg" rows="5"></textarea></div>
          <button class="btn btn-gold btn-lg" type="submit">Send message</button>
        </form>
        <?php endif; ?>
      </div>
      <div>
        <div class="card"><h3>Head office</h3><p>No. 1988, Union Place,<br>Colombo 02, Sri Lanka</p></div>
        <div class="card" style="margin-top:20px"><h3>Hotline</h3><p>1988 (24/7)<br>+94 11 2 198 800 (overseas)</p></div>
        <div class="card" style="margin-top:20px"><h3>Email</h3><p>info@senarathbank.com<br>fraud@senarathbank.com</p></div>
        <div class="card" style="margin-top:20px" id="careers"><h3>Careers</h3><p>Join 6,400 colleagues. Write to careers@senarathbank.com.</p></div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__.'/includes/footer.php'; ?>
