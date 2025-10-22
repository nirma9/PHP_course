<?php
$filename = "data.txt";
$handle = fopen($filename, "r");  // 1

if ($handle) {                    // 2
    while (!feof($handle)) {      // 3
        $line = fgets($handle);   // 4
        echo $line . "<br>";
    }
    fclose($handle);              // 5
} else {
    echo "Unable to open file.";
}
?>


<?php
$filename = "log.txt";
$data ="new log entry:".date("Y-m-d H:i:s")."\n";

$handle = fopen($filename,"a");
fwrite($handle,$data);
fclose($handle);
echo $data;
echo "data Apended Successfully..!";
