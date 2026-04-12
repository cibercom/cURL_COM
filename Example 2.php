<html>
    <head>
       	<meta charset="UTF-8">
        <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <title>Mi sitio web</title>
    </head>
    <body>

    <?php
   // Create multiple cURL handles
   $ch1 = curl_init("https://www.youtube.com");
   $ch2 = curl_init("https://m.youtube.com");
   $ch3 = curl_init("https://youtube.com");
   
   // Create a cURL multi handle
   $mh = curl_multi_init();
   
   // Add the cURL handles to the multi handle
   curl_multi_add_handle($mh, $ch1);
   curl_multi_add_handle($mh, $ch2);
   curl_multi_add_handle($mh, $ch3);
   
   // Execute all queries simultaneously
   do {
       $status = curl_multi_exec($mh, $active);
       // Wait a short time to avoid busy-waiting
       curl_multi_select($mh);
   } while ($active && $status == CURLM_OK);
   
   // Remove the handles from the multi handle
   curl_multi_remove_handle($mh, $ch1);
   curl_multi_remove_handle($mh, $ch2);
   curl_multi_remove_handle($mh, $ch3);
   
   // Close the handles
   curl_close($ch1);
   curl_close($ch2);
   curl_close($ch3);
   curl_multi_close($mh);
?> 
	
    </body>
</html>		
