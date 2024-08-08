<?php
$filename = "location.txt";
$myfile = fopen($filename, "w");
if ($myfile === false) {
    echo "Error opening file.";
    exit;
}

$lat = isset($_GET["lat"]) ? htmlspecialchars($_GET["lat"]) : "unknown";
$long = isset($_GET["long"]) ? htmlspecialchars($_GET["long"]) : "unknown";

$txt = "lat: " . $lat . " | long: " . $long . "\n";
fwrite($myfile, $txt);

fclose($myfile);

echo "Location saved.";
?>
