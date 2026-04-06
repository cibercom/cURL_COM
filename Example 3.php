<html>
    <head>
       	<meta charset="UTF-8">
        <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <title>Mi sitio web</title>
    </head>
    <body>

    <?php
   // Create cURL handles for image URLs
   $ch1 = curl_init("../image.jpg");
   $ch2 = curl_init("../logo.gif");
   
   // Set options to save the images to files
   $fp1 = fopen("image1.jpg", "wb");
   $fp2 = fopen("image2.jpg", "wb");
   curl_setopt($ch1, CURLOPT_FILE, $fp1);
   curl_setopt($ch2, CURLOPT_FILE, $fp2);
   
   // Create a cURL multi handle
   $mh = curl_multi_init();
   
   // Add the cURL handles to the multi handle
   curl_multi_add_handle($mh, $ch1);
   curl_multi_add_handle($mh, $ch2);
   
   // Execute all queries 
   do {
       $status = curl_multi_exec($mh, $active);
       // Wait a short time to avoid busy-waiting
       curl_multi_select($mh);
   } while ($active && $status == CURLM_OK);
   
   // Remove the handles from the multi handle
   curl_multi_remove_handle($mh, $ch1);
   curl_multi_remove_handle($mh, $ch2);
   
   echo "The images are saved as image1.jpg and image2.jpg";

   // Close the handles and files
   curl_close($ch1);
   curl_close($ch2);
   fclose($fp1);
   fclose($fp2);
   curl_multi_close($mh);
?> 
	
    </body>
</html>		