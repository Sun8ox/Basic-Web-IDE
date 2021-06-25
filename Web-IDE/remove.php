<?php
include("red.php");

$remfile = "files/" . $_GET["rem"];

echo unlink($remfile);

header("Location: files.php");
exit;