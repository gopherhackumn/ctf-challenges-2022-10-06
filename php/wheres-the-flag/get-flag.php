<?php
// Disallow any method except POST
$requestMethod = strtoupper($_SERVER['REQUEST_METHOD']);
if ($requestMethod !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"]." 405 Method Not Allowed", true, 405);
    exit;
}

// Check referer
$headers = apache_request_headers();
$referer = $headers["Referer"];
if (!isset($referer)) {
    http_response_code(403);
    die("Forbidden.");
}

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') $link = "https";
else $link = "http";
$link .= "://";
$link .= $_SERVER['HTTP_HOST'];
$link .= $_SERVER['PHP_SELF'];
$link = str_replace("get-flag.php", "", $link);

$allowedLinks = array($link, $link . "index.html");
if (!in_array($referer, $allowedLinks)) {
    http_response_code(403);
    die("Forbidden.");
}

echo "gopher{dev_tools_sees_all}";
?>
