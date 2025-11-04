<?php
// Pagina voor bevestiging en het verzenden van de validatiecode
$post = $_POST;

include_once 'db.php';
$result = newEntry($post);

$name = isset($post['naam']) ? trim($post['naam']) : '';
$displayName = $name !== '' ? htmlspecialchars($name, ENT_QUOTES, 'UTF-8') : 'Gast';
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8" />
    <title>Bedankt voor uw stem - The Alice Dutch Blues Top 100 Aller Tijden</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
  </head>
  <body class="blues-page blues-page--simple">
    <div class="page page--narrow">
      <header class="site-header site-header--compact" role="banner">
        <img src="logo.jpg" alt="BluesAlert logo" class="site-header__logo" />
        <div class="site-header__info">
          <h1 class="site-header__title">Dank voor jouw stem</h1>
          <p class="site-header__lead">
            Jouw bijdrage helpt ons de ultieme Nederlandse blueslijst samen te stellen.
          </p>
        </div>
      </header>
      <main class="site-main" role="main">
        <section class="form-card form-card--result" aria-labelledby="resultaat">
          <h2 id="resultaat" class="section-title">Bevestig je inzending</h2>
          <p class="form-note form-note--large"><?php echo $result; ?></p>
          <p>
            Bedankt voor jouw stem, <?php echo $displayName; ?>. We hebben een e-mail verstuurd naar het opgegeven adres. Klik op de link in dit bericht om jouw stem definitief te bevestigen.
          </p>
          <div class="validation-box">
            <p>
              Liever de validatiecode plakken? Vul de ontvangen code hieronder in en kies voor <strong>Bevestigen</strong>.
            </p>
            <form action="validate.php" name="validateForm" method="get" class="validation-form">
              <label for="validate" class="form-label">Validatiecode</label>
              <input type="text" id="validate" name="v" class="text-input" autocomplete="one-time-code" />
              <button type="submit" id="submit" name="submit" class="submit-button">Bevestigen</button>
            </form>
          </div>
        </section>
      </main>
      <footer class="site-footer" role="contentinfo">
        <p>&copy; <?php echo date('Y'); ?> BluesAlert. Alle rechten voorbehouden.</p>
        <p>Nog vragen? Mail naar <a href="mailto:info@bluesalert.nl">info@bluesalert.nl</a>.</p>
      </footer>
    </div>
  </body>
</html>
