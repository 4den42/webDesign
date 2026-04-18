<?php
$boxes = $_POST["checkboxes"];//receiving name field value in $name variable
$radios = $_POST["radios"];
echo "what up homie";
echo "<table>";
foreach($boxes as $x => $val){
    echo "$x = $val<br>";
}
?>


