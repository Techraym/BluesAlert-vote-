diff --git a/placeholder.php b/placeholder.php
index 17fd8c8e07242054c5a5115db5fd4140e9259471..f6cc89bfbc6e780e0d4cd7373f001b0efddd5dd4 100644
--- a/placeholder.php
+++ b/placeholder.php
@@ -1,157 +1,61 @@
-<!DOCTYPE html>
-<html lang="nl">
-<head>
-    <meta charset="UTF-8">
-    <meta name="viewport" content="width=device-width, initial-scale=1.0">
-    <title>Aftellen naar The Alice Dutch Blues Top100</title>
-    <link rel="icon" href="favicon.ico" type="image/x-icon">
-    <style>
-        * {
-            margin: 0;
-            padding: 0;
-            box-sizing: border-box;
-        }
-        
-        body {
-            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
-            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
-            color: white;
-            text-align: center;
-            min-height: 100vh;
-            display: flex;
-            flex-direction: column;
-            align-items: center;
-            padding: 20px;
-        }
-        
-        .header {
-            width: 100%;
-            max-width: 600px;
-            margin-bottom: 20px;
-        }
-        
-        .logo {
-            width: 100%;
-            height: auto;
-            display: block;
-            border-radius: 10px;
-            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
-        }
-        
-        .container {
-            background-color: rgba(0, 0, 0, 0.7);
-            padding: 2rem;
-            border-radius: 15px;
-            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
-            max-width: 600px;
-            width: 100%;
-        }
-        
-        h1 {
-            font-size: 1.8rem;
-            margin-bottom: 2rem;
-            line-height: 1.4;
-        }
-        
-        .countdown {
-            font-size: 3rem;
-            font-weight: bold;
-            margin: 1rem 0;
-            color: #fdbb2d;
-            text-shadow: 0 0 10px rgba(253, 187, 45, 0.5);
-        }
-        
-        .label {
-            font-size: 1.2rem;
-            margin-top: 0.5rem;
-            margin-bottom: 1.5rem;
-        }
-        
-        .highlight {
-            color: #fdbb2d;
-            font-weight: bold;
-        }
-        
-        .year {
-            color: #fdbb2d;
-            font-weight: bold;
-            font-size: 1.1em;
-        }
-        
-        .closing-text {
-            font-size: 1.4rem;
-            font-weight: bold;
-            margin-top: 2rem;
-            padding-top: 1.5rem;
-            border-top: 2px solid #fdbb2d;
-            font-style: italic;
-        }
-        
-        @media (max-width: 600px) {
-            h1 {
-                font-size: 1.5rem;
-            }
-            
-            .countdown {
-                font-size: 2.5rem;
-            }
-            
-            .container {
-                padding: 1.5rem;
-            }
-            
-            .closing-text {
-                font-size: 1.2rem;
-            }
-        }
-    </style>
-</head>
-<body>
-    <div class="header">
-        <img src="logo.jpg" alt="The Alice Dutch Blues Logo" class="logo">
-    </div>
-    
-    <div class="container">
-        <h1>Nog even geduld, binnenkort kan er weer gestemd worden op<br><br><span class="highlight">The Alice Dutch Blues Top100 Allertijden <span class="year" id="target-year"></span></span></h1>
-        
-        <div class="countdown" id="countdown">0</div>
-        <div class="label">dagen te gaan</div>
-        
-        <div class="closing-text">Stay tuned! en breng straks jouw stem uit</div>
-    </div>
-
-    <script>
-        function getTargetDate() {
-            const now = new Date();
-            const currentYear = now.getFullYear();
-            const november1ThisYear = new Date(currentYear, 10, 1); // Maand 10 = november (0-based)
-            
-            // Als 1 november van dit jaar al voorbij is, neem volgend jaar
-            if (now > november1ThisYear) {
-                return new Date(currentYear + 1, 10, 1);
-            } else {
-                return november1ThisYear;
-            }
-        }
-        
-        function updateCountdown() {
-            const targetDate = getTargetDate();
-            const now = new Date();
-            const timeDifference = targetDate - now;
-            
-            // Bereken aantal dagen
-            const days = Math.max(0, Math.floor(timeDifference / (1000 * 60 * 60 * 24)));
-            
-            // Update de countdown en het jaar
-            document.getElementById('countdown').textContent = days;
-            document.getElementById('target-year').textContent = targetDate.getFullYear();
-            
-            // Update elke minuut
-            setTimeout(updateCountdown, 60000);
-        }
-        
-        // Start de countdown
-        updateCountdown();
-    </script>
-</body>
-</html>
\ No newline at end of file
+<!DOCTYPE html>
+<html lang="nl">
+  <head>
+    <meta charset="UTF-8" />
+    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
+    <title>Aftellen naar The Alice Dutch Blues Top 100</title>
+    <link rel="icon" href="favicon.ico" type="image/x-icon" />
+    <link rel="stylesheet" href="style.css" />
+  </head>
+  <body class="blues-page blues-page--placeholder">
+    <div class="page page--placeholder">
+      <header class="site-header site-header--compact" role="banner">
+        <img src="logo.jpg" alt="BluesAlert logo" class="site-header__logo" />
+        <div class="site-header__info">
+          <h1 class="site-header__title">We tellen af naar november</h1>
+          <p class="site-header__lead">
+            Vanaf 1 november kun je opnieuw stemmen op The Alice Dutch Blues Top 100 Aller Tijden. Tot die tijd kun je alvast je favorieten verzamelen.
+          </p>
+        </div>
+      </header>
+      <main class="site-main" role="main">
+        <section class="countdown-card" aria-labelledby="countdown-title">
+          <h2 id="countdown-title" class="section-title">Nog even geduld…</h2>
+          <p class="countdown-card__intro">
+            We zijn druk bezig met de voorbereiding van een gloednieuwe editie. Houd onze socials in de gaten en blijf op de hoogte.
+          </p>
+          <div class="countdown-card__timer">
+            <span class="countdown-card__days" id="countdown">0</span>
+            <span class="countdown-card__label">dagen tot 1 november <span id="target-year"></span></span>
+          </div>
+          <a class="countdown-card__cta" href="https://www.facebook.com/Bluesalert" target="_blank" rel="noopener">Volg BluesAlert voor updates</a>
+        </section>
+      </main>
+      <footer class="site-footer" role="contentinfo">
+        <p>&copy; <?php echo date('Y'); ?> BluesAlert. Alle rechten voorbehouden.</p>
+      </footer>
+    </div>
+    <script>
+      function getTargetDate() {
+        const now = new Date();
+        const currentYear = now.getFullYear();
+        const novemberFirst = new Date(currentYear, 10, 1);
+        return now > novemberFirst ? new Date(currentYear + 1, 10, 1) : novemberFirst;
+      }
+
+      function updateCountdown() {
+        const targetDate = getTargetDate();
+        const now = new Date();
+        const timeDifference = targetDate - now;
+        const days = Math.max(0, Math.floor(timeDifference / (1000 * 60 * 60 * 24)));
+
+        document.getElementById('countdown').textContent = days;
+        document.getElementById('target-year').textContent = targetDate.getFullYear();
+
+        setTimeout(updateCountdown, 60000);
+      }
+
+      updateCountdown();
+    </script>
+  </body>
+</html>
