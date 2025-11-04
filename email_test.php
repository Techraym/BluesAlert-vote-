<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail Test - Blues Alert Top100</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            color: #333;
            line-height: 1.6;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            max-width: 1000px;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        header {
            background: #1a2a6c;
            color: white;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin-bottom: 10px;
        }
        .content {
            padding: 30px;
        }
        .section {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 8px;
            background: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #1a2a6c;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #fdbb2d;
        }
        h3 {
            color: #b21f1f;
            margin: 15px 0 10px;
        }
        p {
            margin-bottom: 15px;
        }
        ul {
            margin-left: 20px;
            margin-bottom: 15px;
        }
        li {
            margin-bottom: 8px;
        }
        code {
            background: #eee;
            padding: 2px 5px;
            border-radius: 3px;
            font-family: monospace;
        }
        pre {
            background: #2b2b2b;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            margin: 15px 0;
            tab-size: 4;
        }
        .test-form {
            background: #eee;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
        input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 16px;
        }
        button {
            background: #1a2a6c;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }
        button:hover {
            background: #b21f1f;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
        }
        .success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .note {
            background: #fff3cd;
            color: #856404;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #ffeeba;
            margin: 20px 0;
        }
        .solution {
            background: #d1ecf1;
            color: #0c5460;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #bee5eb;
            margin: 20px 0;
        }
        .contact {
            margin-top: 30px;
            text-align: center;
            padding: 20px;
            background: #1a2a6c;
            color: white;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Blues Alert Top100 - E-mail Test</h1>
            <p>Diagnose en oplossing voor e-mailverzendproblemen</p>
        </header>

        <div class="content">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['test_email'])) {
                $test_email = $_POST['test_email'];
                
                // Test e-mail verzenden
                $subject = 'Test e-mail Blues Alert Top100';
                $message = 'Dit is een test e-mail van de Blues Alert Top100 applicatie. Als je deze e-mail ontvangt, werkt het e-mailverzenden correct.';
                $headers = "From: bluesalert@raysnijder.nl\r\n";
                $headers .= "Reply-To: bluesalert@raysnijder.nl\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                
                $mail_sent = mail($test_email, $subject, $message, $headers);
                
                if ($mail_sent) {
                    echo '<div class="result success">';
                    echo '<h3>E-mail succesvol verzonden!</h3>';
                    echo '<p>Er is een test e-mail verzonden naar: ' . htmlspecialchars($test_email) . '</p>';
                    echo '<p>Controleer je inbox (en spam folder) om te zien of de e-mail is aangekomen.</p>';
                    echo '</div>';
                } else {
                    echo '<div class="result error">';
                    echo '<h3>E-mail verzenden mislukt</h3>';
                    echo '<p>De PHP mail() functie kon geen e-mail verzenden naar: ' . htmlspecialchars($test_email) . '</p>';
                    echo '<p>Dit bevestigt dat er een probleem is met de e-mailconfiguratie op de server.</p>';
                    echo '</div>';
                }
            }
            ?>
            
            <div class="section">
                <h2>Probleemanalyse</h2>
                <p>Het e-mailverzenden vanuit je PHP-script werkt niet. Dit is een veelvoorkomend probleem bij shared hosting zoals TransIP. Hier zijn de meest waarschijnlijke oorzaken:</p>
                
                <ul>
                    <li>De <code>mail()</code> functie is uitgeschakeld op de server</li>
                    <li>E-mails worden geblokkeerd door spamfilters</li>
                    <li>Verkeerde mailheader configuratie</li>
                    <li>Het from-domein (raysnijder.nl) is niet correct geconfigureerd voor e-mail</li>
                </ul>
            </div>

            <div class="section">
                <h2>Test e-mailverzending</h2>
                <p>Test of e-mailverzending werkt vanaf deze server:</p>
                
                <div class="test-form">
                    <form method="post">
                        <input type="email" name="test_email" placeholder="Vul je e-mailadres in" required>
                        <button type="submit">Test e-mail verzending</button>
                    </form>
                </div>
            </div>

            <div class="section">
                <h2>Oplossing: Gebruik PHPMailer met SMTP</h2>
                <p>De meest betrouwbare oplossing is om PHPMailer te gebruiken in combinatie met SMTP-authenticatie. Hier is hoe je dit kunt implementeren:</p>
                
                <div class="solution">
                    <h3>Stap 1: Download PHPMailer</h3>
                    <p>Download de nieuwste versie van PHPMailer vanaf <a href="https://github.com/PHPMailer/PHPMailer" target="_blank">GitHub</a> en upload deze naar je server.</p>
                    
                    <h3>Stap 2: Pas je code aan</h3>
                    <p>Vervang het e-mailgedeelte in je <code>db.php</code> met deze code:</p>
                    
                    <pre>
<?php
echo htmlspecialchars('// Aan het begin van het bestand
use PHPMailer\\PHPMailer\\PHPMailer;
use PHPMailer\\PHPMailer\\Exception;

require \'path/to/PHPMailer/src/Exception.php\';
require \'path/to/PHPMailer/src/PHPMailer.php\';
require \'path/to/PHPMailer/src/SMTP.php\';

// Vervang het e-mailgedeelte met:
$mail = new PHPMailer(true);

try {
    // Server instellingen
    $mail->isSMTP();
    $mail->Host = \'smtp.transip.email\';  // TransIP SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = \'jouw@domein.nl\';  // Je TransIP e-mailadres
    $mail->Password = \'jouw-wachtwoord\';  // Je e-mailwachtwoord
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Ontvangers
    $mail->setFrom(\'bluesalert@raysnijder.nl\', \'Blues Alert\');
    $mail->addAddress($data[\'email\'], $data[\'naam\']);
    $mail->addReplyTo(\'bluesalert@raysnijder.nl\', \'Blues Alert\');

    // Inhoud
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = strip_tags($message);

    $mail->send();
    return \'mail verzonden\';
} catch (Exception $e) {
    error_log("Mailer Error: {$mail->ErrorInfo}");
    return "Verzenden mislukt: {$mail->ErrorInfo}";
}');
?>
                    </pre>
                </div>
            </div>

            <div class="note">
                <h3>Belangrijke opmerking voor TransIP hosting</h3>
                <p>TransIP blokkeert vaak de standaard PHP mail() functie om spam te voorkomen. Je moet gebruik maken van hun SMTP-server met authenticatie:</p>
                <ul>
                    <li>SMTP Host: <code>smtp.transip.email</code></li>
                    <li>Poort: <code>587</code> (STARTTLS) of <code>465</code> (SSL)</li>
                    <li>Gebruikersnaam: Je volledige e-mailadres</li>
                    <li>Wachtwoord: Het wachtwoord van je e-mailaccount</li>
                </ul>
            </div>

            <div class="contact">
                <h3>Nog problemen?</h3>
                <p>Neem contact op met TransIP support voor hulp bij het configureren van e-mail op je hostingpakket.</p>
            </div>
        </div>
    </div>
</body>
</html>