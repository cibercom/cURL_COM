<html>
    <head>
       	<meta charset="UTF-8">
        <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <title>Mi sitio web</title>
    </head>
    <body>

<?php

$url = "https://prm.org.do/"; 

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

if ($http_code == 200) {
  echo "Resource deleted successfully!";
} else {
  echo "Error deleting resource: " . $http_code;
}

?>
	
    </body>
</html>		