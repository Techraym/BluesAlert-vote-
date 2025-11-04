<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aftellen naar The Alice Dutch Blues Top 100</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body class="blues-page blues-page--placeholder">
    <div class="page page--placeholder">
      <header class="site-header site-header--compact" role="banner">
        <img src="logo.jpg" alt="BluesAlert logo" class="site-header__logo" />
        <div class="site-header__info">
          <h1 class="site-header__title">We tellen af naar november</h1>
          <p class="site-header__lead">
            Vanaf 1 november kun je opnieuw stemmen op The Alice Dutch Blues Top 100 Aller Tijden. Tot die tijd kun je alvast je favorieten verzamelen.
          </p>
        </div>
      </header>
      <main class="site-main" role="main">
        <section class="countdown-card" aria-labelledby="countdown-title">
          <h2 id="countdown-title" class="section-title">Nog even geduld…</h2>
          <p class="countdown-card__intro">
            We zijn druk bezig met de voorbereiding van een gloednieuwe editie. Houd onze socials in de gaten en blijf op de hoogte.
          </p>
          <div class="countdown-card__timer">
            <span class="countdown-card__days" id="countdown">0</span>
            <span class="countdown-card__label">dagen tot 1 november <span id="target-year"></span></span>
          </div>
          <a class="countdown-card__cta" href="https://www.facebook.com/Bluesalert" target="_blank" rel="noopener">Volg BluesAlert voor updates</a>
        </section>
      </main>
      <footer class="site-footer" role="contentinfo">
        <p>&copy; <?php echo date('Y'); ?> BluesAlert. Alle rechten voorbehouden.</p>
      </footer>
    </div>
    <script>
      function getTargetDate() {
        const now = new Date();
        const currentYear = now.getFullYear();
        const novemberFirst = new Date(currentYear, 10, 1);
        return now > novemberFirst ? new Date(currentYear + 1, 10, 1) : novemberFirst;
      }

      function updateCountdown() {
        const targetDate = getTargetDate();
        const now = new Date();
        const timeDifference = targetDate - now;
        const days = Math.max(0, Math.floor(timeDifference / (1000 * 60 * 60 * 24)));

        document.getElementById('countdown').textContent = days;
        document.getElementById('target-year').textContent = targetDate.getFullYear();

        setTimeout(updateCountdown, 60000);
      }

      updateCountdown();
    </script>
  </body>
</html>
