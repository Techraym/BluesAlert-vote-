 <?php
-
 $g_link = false;
-    
-    function conn()
-    {
-        global $g_link;
-        if ( $g_link ) return $g_link;
-		$host = $_SERVER['HTTP_HOST'];
-			
-	//	if(preg_match("/wiekentraymond.nl/i", $host)) {
-			
-			//production
-			$g_link = mysqli_connect('raysni-bluesalert.db.transip.me', 'raysni_bluesalert', 'bluesalert2025@', 'raysni_bluesalert');
-			if (!$g_link) die("connect error( ".mysqli_connect_errno()." )".mysqli_connect_error());
-			
-	//	} else {
-		
-			//localhost
-	//		$g_link = mysqli_connect('localhost', 'raysni_bluesalert', 'raysni_bluesalert2025@', 'raysni_bluesalert') 
-	//			or die('Could not connect to server: ' . mysqli_connect_error());
-	//	}
-       
+$g_error_message = '';
+
+function conn($allowFailure = false)
+{
+    global $g_link, $g_error_message;
+
+    if ($g_link) {
         return $g_link;
-	
     }
-    
-    function clean()
-    {
-        global $g_link;
-        if( $g_link != false )
-            mysqli_close($g_link);
-        $g_link = false;
+
+    // production
+    $g_link = @mysqli_connect('raysni-bluesalert.db.transip.me', 'raysni_bluesalert', 'bluesalert2025@', 'raysni_bluesalert');
+    if (!$g_link) {
+        $g_error_message = "connect error(" . mysqli_connect_errno() . ")" . mysqli_connect_error();
+        if ($allowFailure) {
+            return false;
+        }
+        die($g_error_message);
+    }
+
+    // localhost
+    // $g_link = mysqli_connect('localhost', 'raysni_bluesalert', 'raysni_bluesalert2025@', 'raysni_bluesalert')
+    //         or die('Could not connect to server: ' . mysqli_connect_error());
+
+    return $g_link;
+}
+
+function conn_last_error()
+{
+    global $g_error_message;
+    return $g_error_message;
+}
+
+function clean()
+{
+    global $g_link, $g_error_message;
+    if ($g_link != false) {
+        mysqli_close($g_link);
     }
-?>
\ No newline at end of file
+    $g_link = false;
+    $g_error_message = '';
+}
+?>
 
EOF
)
