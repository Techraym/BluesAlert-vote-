<?php

$g_link = false;
    
    function conn()
    {
        global $g_link;
        if ( $g_link ) return $g_link;
		$host = $_SERVER['HTTP_HOST'];
			
		if(preg_match("/hielemedia.nl/i", $host)) {
			
			//production
			$g_link = mysqli_connect('localhost', 'hielemedia_ba', 'JEWACHWTOORD', 'hielemedia_ba');
			if (!$g_link) die("connect error( ".mysqli_connect_errno()." )".mysqli_connect_error());
			
		} else {
		
			//localhost
			 $g_link = mysqli_connect( 'localhost', 'root', '7127') or die('Could not connect to server.' );
        mysqli_select_db('bluesalert', $g_link) or die('Could not select database.');
		}
       
        return $g_link;
	
    }
    
    function clean()
    {
        global $g_link;
        if( $g_link != false )
            mysqli_close($g_link);
        $g_link = false;
    }
?>