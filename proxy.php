<?php
// Set the target M3U8 URL
$target_url = 'http://server.sibfungold.info:8080/live/abdulwahab1989/jz8VSabdulwahab1989kWiUS/54301.m3u8';

// Set the content type to M3U8
header('Content-Type: application/x-mpegURL');

// Fetch the content from the target URL and echo it
echo file_get_contents($target_url);
?>
