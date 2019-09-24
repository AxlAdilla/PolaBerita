<?php

/*
//CURL  newsapi

curl https://newsapi.org/v2/top-headlines -G \
    -d country=us \
    -d apiKey=6d4678ec56764048b013936199a51f5f

// JS = var url = 'https://newsapi.org/v2/top-headlines?' +
    'country=us&' +
    'apiKey=6d4678ec56764048b013936199a51f5f';
var req = new Request(url);
fetch(req)
    .then(function(response) {
        console.log(response.json());
    })

*/
$ch = curl_init(); 
 // set url 
curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?country=id&apiKey=6d4678ec56764048b013936199a51f5f"); 

//return the transfer as a string 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

// $output contains the output string 
$output = curl_exec($ch); 

curl_close($ch);
$decoded = json_decode($output);
// var_dump($decoded);
// $decoded= (array)$decoded;
echo $decoded->articles[0]->urlToImage;
echo '<ul>';
foreach ($decoded->articles as $key => $value) {
    ?>
    <li><?= $value->title?></li>
    <?php
}
echo '</ul>';

?>