<?php

function burbuja($array)
{
    for($i=1;$i<count($array);$i++)
    {    
        for($j=0;$j<count($array)-$i;$j++)
    {
   if($array[$j]>$array[$j+1])
     {
     $k=$array[$j+1];
     $array[$j+1]=$array[$j];             
  $array[$j]=$k;
  } 
      }
    }
    return $array;
}
$array1=array(3,12,50,11,25,7);
echo "<br>Números de ingreso<br>";

for($i=0;$i<count($array1);$i++)
    echo $array1[$i]."\n";
$array2=burbuja($array1);
echo 
"<br>Números ordenados<br>";

for($i=0;$i<count($array2);$i++)
    echo $array2[$i]."\n";
    
?>