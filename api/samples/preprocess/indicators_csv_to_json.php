<?php
// Process CSV of indicators into JSON.

$file_handle = fopen("indicators.csv", "r");
$headers = true;
$data = array();

while (!feof($file_handle) ) {
  $line = fgetcsv($file_handle, 1024);
  if ($headers) {
    $headers = false;
    continue;
  }

  $group = $line[0];
  $key = str_replace('X', '', $line[1]);
  $name = $line[2];
  
  $data[$group][] = array('name' => $name, 'key' => $key);
}
fclose($file_handle);

print_r(json_encode($data));
