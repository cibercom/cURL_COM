<html>
    <head>
       	<meta charset="UTF-8">
        <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <title>Mi sitio web</title>
    </head>
    <body>

    ?php

   $ch1 = curl_init("https://prm.org.do/");
   $ch2 = curl_init("https://whatsapp.com/channel/0029Va8T7MODZ4LWDjAe012c");
   $ch3 = curl_init("https://whatsapp.com/channel/0029Va8EU026rsQmtPyLvp2I");
   

   curl_multi_remove_handle($mh, $ch1);
   curl_multi_remove_handle($mh, $ch2);
   curl_multi_remove_handle($mh, $ch3);
   
  
   curl_close($ch1);
   curl_close($ch2);
   curl_close($ch3);
   curl_multi_close($mh);

    ?>
	
    </body>
</html>		