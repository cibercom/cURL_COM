<html>
    <head>
       	<meta charset="UTF-8">
        <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <title>Mi sitio web</title>
    </head>
    <body>

    <?php

        $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://m.youtube.com/");

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "REMOVE");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "UNLINK");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "UNSET"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

    ?>
	
    </body>
</html>		