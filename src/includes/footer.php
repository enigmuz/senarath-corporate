<?php
/* Senarath Bank — Corporate site footer */
$onlineUrl = getenv('ONLINE_BANKING_URL') ?: 'https://online.senarathbank.com';
?>
<footer class="site-footer">
  <div class="container">
    <div class="fgrid">
      <div class="fbrand">
        <img src="/assets/img/logo.png" alt="Senarath Bank">
        <p>Senarath Bank PLC &mdash; personal, business and private banking across Sri Lanka. Member of the Lanka Deposit Insurance Scheme (synthetic / lab).</p>
      </div>
      <div>
        <h4>Banking</h4>
        <a href="/personal.php">Personal accounts</a>
        <a href="/personal.php#cards">Cards</a>
        <a href="/personal.php#loans">Loans &amp; mortgages</a>
        <a href="/business.php">Business banking</a>
        <a href="<?= htmlspecialchars($onlineUrl) ?>">Online banking</a>
      </div>
      <div>
        <h4>Company</h4>
        <a href="/about.php">About us</a>
        <a href="/about.php#governance">Governance</a>
        <a href="/branches.php">Branches &amp; ATMs</a>
        <a href="/contact.php">Contact</a>
        <a href="/contact.php#careers">Careers</a>
      </div>
      <div>
        <h4>Support</h4>
        <a href="/contact.php">Help centre</a>
        <a href="/security.php">Security centre</a>
        <a href="/contact.php">Report fraud</a>
        <a href="/contact.php">Branch appointments</a>
      </div>
    </div>
    <div class="foot-bottom">
      <div>&copy; <?= date('Y') ?> Senarath Bank PLC (fictional · lab). All rights reserved.</div>
      <div>Hotline 1988 &nbsp;·&nbsp; info@senarathbank.com &nbsp;·&nbsp; Colombo, Sri Lanka</div>
    </div>
  </div>
</footer>
<script src="/assets/js/main.js"></script>
</body>
</html>
