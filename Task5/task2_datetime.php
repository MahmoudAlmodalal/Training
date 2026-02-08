<?php
/**
 * Task 2: Display current Date and Time
 */

// Set your timezone
date_default_timezone_set("Asia/Gaza");

echo "Current Date: " . date("Y-m-d") . "<br>";
echo "Current Time: " . date("h:i:s a") . "<br>";
echo "Full Timestamp: " . date("l, F j, Y");
?>
