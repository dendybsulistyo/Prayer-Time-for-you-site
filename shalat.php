<?php
header("Content-Type: text;");
$file = file_get_contents('http://www.islamicfinder.org/prayer_service.php?country=indonesia&city=yogyakarta&state=10&zipcode=&latitude=-7.8000&longitude=110.3667&timezone=7.00&HanfiShafi=1&pmethod=1&fajrTwilight1=&fajrTwilight2=&ishaTwilight=0&ishaInterval=0&dhuhrInterval=1&maghribInterval=1&dayLight=0&simpleFormat=xml');

$shalat = json_decode(json_encode((array)simplexml_load_string($file)),1);

echo "<table border=0>";
echo "<tr><td colspan=2>".$shalat['hijri'];
echo "<tr><td>Subuh <td>".date("H:i:s", strtotime($shalat['fajr']));
echo "<tr><td>Zuhur <td>".date("H:i:s", strtotime($shalat['dhuhr']));
echo "<tr><td>Ashr <td>".date("H:i:s", strtotime($shalat['asr']));
echo "<tr><td>Maghrib <td>".date("H:i:s", strtotime($shalat['maghrib']));
echo "<tr><td>Isya <td>".date("H:i:s", strtotime($shalat['isha']));
echo "</table>";

?>