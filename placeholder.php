<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aftellen naar The Alice Dutch Blues Top100</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            color: white;
            text-align: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        
        .header {
            width: 100%;
            max-width: 600px;
            margin-bottom: 20px;
        }
        
        .logo {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }
        
        .container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            max-width: 600px;
            width: 100%;
        }
        
        h1 {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            line-height: 1.4;
        }
        
        .countdown {
            font-size: 3rem;
            font-weight: bold;
            margin: 1rem 0;
            color: #fdbb2d;
            text-shadow: 0 0 10px rgba(253, 187, 45, 0.5);
        }
        
        .label {
            font-size: 1.2rem;
            margin-top: 0.5rem;
            margin-bottom: 1.5rem;
        }
        
        .highlight {
            color: #fdbb2d;
            font-weight: bold;
        }
        
        .year {
            color: #fdbb2d;
            font-weight: bold;
            font-size: 1.1em;
        }
        
        .closing-text {
            font-size: 1.4rem;
            font-weight: bold;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 2px solid #fdbb2d;
            font-style: italic;
        }
        
        @media (max-width: 600px) {
            h1 {
                font-size: 1.5rem;
            }
            
            .countdown {
                font-size: 2.5rem;
            }
            
            .container {
                padding: 1.5rem;
            }
            
            .closing-text {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="logo.jpg" alt="The Alice Dutch Blues Logo" class="logo">
    </div>
    
    <div class="container">
        <h1>Nog even geduld, binnenkort kan er weer gestemd worden op<br><br><span class="highlight">The Alice Dutch Blues Top100 Allertijden <span class="year" id="target-year"></span></span></h1>
        
        <div class="countdown" id="countdown">0</div>
        <div class="label">dagen te gaan</div>
        
        <div class="closing-text">Stay tuned! en breng straks jouw stem uit</div>
    </div>

    <script>
        function getTargetDate() {
            const now = new Date();
            const currentYear = now.getFullYear();
            const november1ThisYear = new Date(currentYear, 10, 1); // Maand 10 = november (0-based)
            
            // Als 1 november van dit jaar al voorbij is, neem volgend jaar
            if (now > november1ThisYear) {
                return new Date(currentYear + 1, 10, 1);
            } else {
                return november1ThisYear;
            }
        }
        
        function updateCountdown() {
            const targetDate = getTargetDate();
            const now = new Date();
            const timeDifference = targetDate - now;
            
            // Bereken aantal dagen
            const days = Math.max(0, Math.floor(timeDifference / (1000 * 60 * 60 * 24)));
            
            // Update de countdown en het jaar
            document.getElementById('countdown').textContent = days;
            document.getElementById('target-year').textContent = targetDate.getFullYear();
            
            // Update elke minuut
            setTimeout(updateCountdown, 60000);
        }
        
        // Start de countdown
        updateCountdown();
    </script>
</body>
</html>