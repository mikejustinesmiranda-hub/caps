<?php

$id = $_POST['student_id'];

$file = fopen("database.csv", "a");
fputcsv($file, [$id]);
fclose($file);

echo "ID Added Successfully!<br>";
echo "<a href='index.php'>Go Back</a>";

?>