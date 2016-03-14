<html><table><tr><th width='40px;'>7A</th><th width='40px;'>7B</th><th width='40px;'>7C</th><th width='40px;'>7D</th></tr></table>
<?php
/* $str ="ABCD"; $limit=strlen($str); $sec =""; $secrev="";

for($i=0; $i<1; $i++)
{
    for($j=0; $j<$limit; $j++)
    {
        $c=1;
        echo "<table style='float: left; position: relative'>";
        $sec = substr($str,$j);
        $sec = $sec.substr($str,0,$j);
        $secrev = strrev($sec);
        for($k=0; $k<strlen($sec); $k++) {
          echo  "<tr><td width='40px;'>".$sec[$k].$c++."</td></tr>";
        }

        for($k=0; $k<strlen($sec); $k++) {
            echo  "<tr><td width='40px;'>".$secrev[$k].$c++."</td></tr>";
        }
        echo "</table>";

    }

} */


$str ="ABCD"; $limit=strlen($str); $sec =""; $secrev=""; $a = array(); $b = array(); $c = array(); $d = array();
for($i=0; $i<50; $i++)
{
    array_push($a,$i);}
for($i=0; $i<56; $i++)
{
    array_push($b,$i);}
for($i=0; $i<53; $i++)
{
    array_push($c,$i);}
for($i=0; $i<54; $i++)
{
    array_push($d,$i);}

for($i=0; $i<1; $i++)
{
    for($j=0; $j<$limit; $j++)
    {
        $c=1;
        echo "<table style='float: left; position: relative'>";
        $sec = substr($str,$j);
        $sec = $sec.substr($str,0,$j);
        $secrev = strrev($sec);
        for($k=0; $k<strlen($sec); $k++) {
          echo  "<tr><td width='40px;'>".$sec[$k].$c++."</td></tr>";
        }

        for($k=0; $k<strlen($sec); $k++) {
            echo  "<tr><td width='40px;'>".$secrev[$k].$c++."</td></tr>";
        }
        echo "</table>";

    }

}
?>

</html>