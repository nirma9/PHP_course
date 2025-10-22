<?php
require_once __DIR__ . '/bootstrap.php';

$page_title = "Home Page";

// Start output buffering
ob_start();
include APP_ROOT . '/includes/header.php';
$headerHtml = ob_get_clean();

// Modify header (optional)
$headerHtml = str_replace('My PHP Site', 'Welcome to PHP World', $headerHtml);
echo $headerHtml;

$obj = new ExampleClass();
echo "<h1>" . $obj->sayHello() . "</h1>";
echo "<p>" . greetUser("Nirmala") . "</p>";

include APP_ROOT.'/includes/footer.php';