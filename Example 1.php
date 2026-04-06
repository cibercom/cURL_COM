<html>
    <head>
       	<meta charset="UTF-8">
        <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <title>Mi sitio web</title>
    </head>
    <body>
<?php
    $ch1 = curl_init();
   $ch2 = curl_init();
   
   // Set options for each handle
   curl_setopt($ch1, CURLOPT_URL, "http://example.com");
   curl_setopt($ch2, CURLOPT_URL, "http://example.org");
   
   // Create a cURL multi handle
   $mh = curl_multi_init();
   
   // Add the cURL handles to the multi handle
   curl_multi_add_handle($mh, $ch1);
   curl_multi_add_handle($mh, $ch2);
   
   // Execute all queries simultaneously
   do {
       $status = curl_multi_exec($mh, $active);
       // Wait a short time to avoid busy-waiting
       curl_multi_select($mh);
   } while ($active && $status == CURLM_OK);
   
   // Remove the handles from the multi handle
   curl_multi_remove_handle($mh, $ch1);
   curl_multi_remove_handle($mh, $ch2);
   
   // Close the handles
   curl_close($ch1);
   curl_close($ch2);
   curl_multi_close($mh);
?> 
	
    </body>
</html>		