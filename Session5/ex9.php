<?php
$var1 = 4;
$var2 = 15;
function multiply(){
    global $var1, $var2;
    $var2 = $var1 * $var2;
    echo $var2;
}
echo "The multiplication value of the 4 * 15 =";
multiply();
echo '<br>';
echo $var2;
?>
