<?php
// Toon de seizoensplaceholder buiten de stemperiode (1 november t/m 31 december)
$currentDate = date('m-d');
$startDate = '11-01';
$endDate = '12-31';

if ($currentDate < $startDate || $currentDate > $endDate) {
    include 'placeholder.php';
    exit;
}
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8" />
    <title>The Alice Dutch Blues Top 100 Aller Tijden</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE" />
    <meta http-equiv="Expires" content="-1" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true" />
    <meta property="og:url" content="https://www.bluesalert.nl/index.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Alice Dutch Blues Top 100 Aller Tijden" />
    <meta property="og:description" content="Stem mee op jouw favoriete Nederlandse bluesplaten en schrijf geschiedenis." />
    <meta property="og:image" content="https://www.bluesalert.nl/logo.jpg" />
    <link rel="stylesheet" href="style.css" />
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
    <script src="validate.js"></script>
  </head>
  <body class="blues-page">
    <?php
      include 'conn.php';
      $conn = conn(true);

      $connectionAvailable = $conn !== false;
      $options = '';
      $list = "<ul id='lijst'>";
      $artists = array();
      $titles = array();

      if ($connectionAvailable) {
          $query = 'SELECT songs.id AS id, songs.artist AS artist, songs.title AS title FROM songs ORDER BY songs.artist, songs.title';
          $result = mysqli_query($conn, $query);

          if ($result) {
              while ($row = mysqli_fetch_array($result)) {
                  $id = $row['id'];
                  $rawArtist = trim(stripslashes($row['artist']));
                  $rawTitle = trim(stripslashes($row['title']));

                  $artistKey = strtolower($rawArtist);
                  $titleKey = strtolower($rawTitle);

                  if (!isset($artists[$artistKey]) || !isset($titles[$artistKey . '::' . $titleKey])) {
                      $artists[$artistKey] = true;
                      $titles[$artistKey . '::' . $titleKey] = true;

                      $displayArtist = htmlspecialchars($rawArtist, ENT_QUOTES, 'UTF-8');
                      $displayTitle = htmlspecialchars($rawTitle, ENT_QUOTES, 'UTF-8');

                      $list .= "<li>{$displayArtist} – {$displayTitle}</li>";
                      $options .= "<option value='{$id}'>{$displayArtist} – {$displayTitle}</option>";
                  }
              }
          }
      } else {
          $options = "<option value='' disabled>Longlist tijdelijk niet beschikbaar</option>";
      }

      $list .= '</ul>';
      $longlistDisabledAttr = $connectionAvailable ? '' : ' disabled';
    ?>
    <div class="page">
      <header class="site-header" role="banner">
        <img src="logo.jpg" alt="BluesAlert logo" class="site-header__logo" />
        <div class="site-header__info">
          <p class="site-header__eyebrow">Stem mee voor de ultieme Nederlandse blueslijst</p>
          <h1 class="site-header__title">The Alice Dutch Blues Top 100 Aller Tijden</h1>
          <p class="site-header__lead">
            Van kroeg tot clubpodium: iedere stem laat de Nederlandse blues weer harder klinken. Kies drie nummers uit de longlist en vul drie vrije keuzes aan met jouw verborgen parels.
          </p>
          <a class="skip-link" href="#stemformulier">Direct naar het stemformulier</a>
        </div>
      </header>
      <main class="site-main" role="main">
        <section class="copy-block" aria-labelledby="overzicht">
          <h2 id="overzicht" class="section-title">Waarom we dit doen</h2>
          <p>
            De Alice Dutch Blues Top 100 Aller Tijden is een jaarlijks eerbetoon aan artiesten die het genre in Nederland hebben gevormd. Samen brengen we iconische opnames, vergeten festivaloptredens en frisse releases samen in één lijst.
          </p>
          <p>
            De longlist is samengesteld uit inzendingen van BluesAlert, verzameld tijdens optredens, radio-uitzendingen en online tips. Staat jouw favoriet er niet tussen? Vul dan een vrije keuze in zodat we het spectrum levend houden.
          </p>
          <p class="copy-block__credits">
            De lijst wordt gedragen door <a href="https://www.facebook.com/Bluesalert">BluesAlert</a> en de community van <a href="https://www.facebook.com/bluesalertdutchtop100/">The Alice Dutch Blues Top 100 Aller Tijden</a>.
          </p>
        </section>
        <section class="guidelines" aria-labelledby="regels">
          <h2 id="regels" class="section-title">Stemregels</h2>
          <ul class="guidelines__list">
            <li>Kies drie nummers uit de bestaande longlist en voeg drie vrije keuzes toe.</li>
            <li>Per artiest maximaal twee nummers invullen zodat de lijst gevarieerd blijft.</li>
            <li>Gebruik een geldig e-mailadres; dubbele inzendingen worden automatisch gefilterd.</li>
          </ul>
          <p class="guidelines__note">Velden met <span class="required-marker">*</span> zijn verplicht.</p>
        </section>
        <section class="form-card" aria-labelledby="stemformulier">
          <h2 id="stemformulier" class="section-title">Breng uw stem uit</h2>
          <form name="stemForm" id="stemForm" class="vote-form" action="thanks.php" method="post" novalidate>
            <?php if (!$connectionAvailable): ?>
            <div class="form-note form-note--error" role="alert">
              <p>
                De longlist kan nu niet worden geladen doordat er geen verbinding is met de BluesAlert-database. U kunt de site
                wel bekijken, maar stemmen is alleen mogelijk wanneer de database beschikbaar is.
              </p>
            </div>
            <?php endif; ?>
            <div class="form-row-group">
              <div class="form-field">
                <label for="naam" class="form-label">Uw naam</label>
                <input type="text" id="naam" name="naam" class="text-input" autocomplete="name" />
              </div>
              <div class="form-field">
                <label for="email" class="form-label">Uw e-mailadres <span class="required-marker" aria-hidden="true">*</span></label>
                <input type="email" id="email" name="email" class="text-input" autocomplete="email" required />
              </div>
            </div>
            <div class="form-row-group form-row-group--songs">
              <div class="form-field">
                <label for="song1" class="form-label">Song 1 <span class="required-marker" aria-hidden="true">*</span></label>
                <select name="song1" class="select-input songsearch" id="song1" required<?php echo $longlistDisabledAttr; ?>>
                  <option value="0">Selecteer song</option>
                  <?php echo $options; ?>
                </select>
              </div>
              <div class="form-field">
                <label for="song2" class="form-label">Song 2 <span class="required-marker" aria-hidden="true">*</span></label>
                <select name="song2" class="select-input songsearch" id="song2" required<?php echo $longlistDisabledAttr; ?>>
                  <option value="0">Selecteer song</option>
                  <?php echo $options; ?>
                </select>
              </div>
              <div class="form-field">
                <label for="song3" class="form-label">Song 3 <span class="required-marker" aria-hidden="true">*</span></label>
                <select name="song3" class="select-input songsearch" id="song3" required<?php echo $longlistDisabledAttr; ?>>
                  <option value="0">Selecteer song</option>
                  <?php echo $options; ?>
                </select>
              </div>
            </div>
            <div class="form-row-group form-row-group--custom">
              <div class="form-field">
                <label for="artiest4" class="form-label">Artiest 4</label>
                <input type="text" id="artiest4" class="text-input artistsearch" name="artiest4" autocomplete="off" />
              </div>
              <div class="form-field">
                <label for="titel4" class="form-label">Titel 4</label>
                <input type="text" id="titel4" name="titel4" class="text-input" autocomplete="off" />
              </div>
              <div class="form-field">
                <label for="artiest5" class="form-label">Artiest 5</label>
                <input type="text" id="artiest5" class="text-input artistsearch" name="artiest5" autocomplete="off" />
              </div>
              <div class="form-field">
                <label for="titel5" class="form-label">Titel 5</label>
                <input type="text" id="titel5" name="titel5" class="text-input" autocomplete="off" />
              </div>
              <div class="form-field">
                <label for="artiest6" class="form-label">Artiest 6</label>
                <input type="text" id="artiest6" class="text-input artistsearch" name="artiest6" autocomplete="off" />
              </div>
              <div class="form-field">
                <label for="titel6" class="form-label">Titel 6</label>
                <input type="text" id="titel6" name="titel6" class="text-input" autocomplete="off" />
              </div>
            </div>
            <p class="form-note">Verstuur uw stem slechts één keer. Ontvangt u een melding dat het e-mailadres al gebruikt is? Dan staat uw stem al in het systeem.</p>
            <div class="form-actions">
              <input type="submit" id="goo" name="submit" value="Versturen" class="submit-button"<?php echo $connectionAvailable ? '' : ' disabled'; ?> />
            </div>
            <?php /* Historische lijst weergeven tijdens debug */ ?>
            <!-- <h2>Reeds ingestuurde nummers</h2>
            <div class="submitted-list"><?php echo $list; ?></div> -->
          </form>
        </section>
      </main>
      <footer class="site-footer" role="contentinfo">
        <p>&copy; <?php echo date('Y'); ?> BluesAlert. Alle rechten voorbehouden.</p>
        <p>Vragen of problemen? Mail naar <a href="mailto:info@bluesalert.nl">info@bluesalert.nl</a>.</p>
      </footer>
    </div>
  </body>
</html>
