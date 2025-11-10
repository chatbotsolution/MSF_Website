<?php
$counter_file = "counter.txt";

// Check if file exists
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, 110000);
}

// Read current count
$visitor_count = (int)file_get_contents($counter_file);
$visitor_count++;

// Save new count
file_put_contents($counter_file, $visitor_count);

// Show count
echo $visitor_count;
?>
