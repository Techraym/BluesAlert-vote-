-# BluesAlert-vote-
-Stem site voor een muzikale top 100/1000
+# BluesAlert Vote
+
+BluesAlert Vote is een klassieke PHP-webapplicatie voor **The Alice Dutch Blues Top 100 Aller Tijden**. De site draait op shared hosting bij TransIP en wordt bijgewerkt door aangepaste bestanden met dezelfde paden naar de server te uploaden.
+
+## Bestanden & structuur
+
+| Pad | Beschrijving |
+| --- | --- |
+| `index.php` | Hoofdpagina met stemformulier, seizoenscheck en integratie met de MySQL-database. |
+| `thanks.php` | Bedankpagina die bevestigingsinformatie toont en directe validatie mogelijk maakt. |
+| `placeholder.php` | Afhankelijk van de datum wordt deze aftelpagina getoond in plaats van het stemformulier. |
+| `conn.php` | Productie databaseverbinding. Laat de bestandsnaam ongewijzigd voor serverdeployments. |
+| `validate.js` | Client-side validatie en autocomplete via jQuery UI voor de songselecties. |
+| `style.css` | Blues-geïnspireerde vormgeving voor alle pagina’s (stemmen, dank en aftelpagina). |
+| `bluesalert.sql` | SQL-dump met tabellen en voorbeelddata voor lokale tests. |
+| `database/bluesalert.sql` | Alternatieve dump met identieke structuur. Kies één bron voor lokale imports. |
+| `*DEBUG-B.php` | Debugvarianten van diverse scripts. Ze maken onderdeel uit van de historische workflow. |
+
+Overige hulpscripts, zoals `checkEmail.php`, `checkSong.php` en `validate.php`, blijven ongewijzigd zodat bestaande back-endlogica intact blijft.
+
+## Installatie & ontwikkeling
+
+1. Maak lokaal of op een testserver een MySQL-database aan en importeer `bluesalert.sql`.
+2. Pas indien nodig de referenties in `conn.php` (of `connDEBUG-B.php`) aan. In productie worden de bestaande TransIP-gegevens gebruikt.
+3. Upload gewijzigde bestanden 1-op-1 naar de server. Bestandsnamen en paden blijven gelijk zodat automatische updates mogelijk blijven.
+4. Test PHP-bestanden met `php -l bestandsnaam.php` om syntaxfouten te voorkomen.
+5. Controleer of het PHP `mail()`-commando of een SMTP-provider beschikbaar is voor het versturen van validatiecodes.
+
+## Stemvensterlogica
+
+`index.php` vergelijkt de huidige datum met het stemvenster (1 november t/m 31 december). Buiten deze periode wordt `placeholder.php` ingeladen.
+
+```php
+$startDate = '11-01';
+$endDate = '12-31';
+```
+
+Pas deze waarden aan wanneer het seizoen verschuift. De rest van de applicatie kan ongewijzigd blijven.
+
+## Vormgeving
+
+De gedeelde stylesheet `style.css` bevat alle stijlen voor het stemformulier, de bedankpagina en de aftelpagina. Houd de volgende afspraken aan:
+
+- Nieuwe componenten krijgen een BEM-achtige naamgeving (`.site-header__logo`, `.form-card--result`).
+- Gebruik bestaande CSS-variabelen (`--accent-ice`, `--blue-midnight`) voor kleuren.
+- Respecteer de bestaande bestandsnamen voor afbeeldingen (`logo.jpg`, `favicon.ico`).
+
+## Licentie & contact
+
+Dit project wordt onderhouden door het BluesAlert-team. Zie [`LICENSE`](LICENSE) voor de volledige MIT-licentie. Voor vragen kun je mailen naar [info@bluesalert.nl](mailto:info@bluesalert.nl).
 
EOF
)
