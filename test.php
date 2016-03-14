<?php
$str = "userauth1235";
echo substr($str,8)."<br>";
//echo date("d-y-m");
echo str_pad(9,2,"0", STR_PAD_LEFT);

$d=cal_days_in_month(CAL_GREGORIAN,date("m"),date("Y"));
if( 0 || abc(3) || 1)
{ echo "test";}


echo $d;

function abc($a)
{
    echo "<br>\n\rfuction touched".$a."\\rn<br>";
}

echo "\n".round(4.5);
echo "This line added for testing";
?>
