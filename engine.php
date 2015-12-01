<?php
//$url = "http://www.worldyo.org/right-feature/uk-33rd-list-worlds-freest-countries/";
header('HTTP/1.1 200 OK');
$context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));


$content = file_get_contents($_GET["param"],false,$context);
$first_step = explode( '<div class="article-featured-image">' , $content );
$second_step = explode("</div>" , $first_step[1] );

//echo $second_step[0];

$dom = new DOMDocument();

@$dom->loadHTML($second_step[0]);

$a = $dom->getElementsByTagName('img');

$nodes = array();

for ($i=0; $i < $a->length; $i++) {
    $attr = $a->item($i)->getAttribute('src');
    echo $attr;


    $nodes[] = $a->item($i)->textContent;
}
/*


$doc = DOMDocument::loadHTML($second_step[0]);
$xpath = new DOMXPath($doc);
$query = "//div[@class='wp-post-image']";
$entries = $xpath->query($query);
foreach ($entries as $entry) {
  echo "Found: " . $entry->getAttribute("src");
}
*/
/*
header('HTTP/1.1 200 OK');
$context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
file_get_contents("http://www.worldyo.org/right-feature/uk-33rd-list-worlds-freest-countries/",false,$context);
*/
/*$fp = fsockopen("http://www.worldyo.org/right-feature/uk-33rd-list-worlds-freest-countries/", 80, $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {

    header('Content-Type: audio/mpeg');

    $out = "GET / HTTP/1.1\r\n";
    $out .= "Host: http://www.worldyo.org/right-feature/uk-33rd-list-worlds-freest-countries/\r\n";
    $out .= "Connection: Close\r\n\r\n";
    fwrite($fp, $out);
    while (!feof($fp)) {
        echo fgets($fp, 128);
    }
    fclose($fp);
}*/
/**
 *
 */
 /*
 $data = loadFile('http://www.worldyo.org/right-feature/uk-33rd-list-worlds-freest-countries/');


  function loadFile($url) {
      $ch = curl_init();

      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_URL, $url);

      $data = curl_exec($ch);
      curl_close($ch);

      return $data;

}
*/

 ?>
