<?php


echo 'sadia' ;
$sadia=2 ;

echo '<pre>';
echo $sadia ;
$rr=['rrr', 'suga', 'RM'];
print_r($rr);
foreach ($rr as $key => $value) {
    echo '<pre>';
    print_r($key);
    print_r($value);
    
}
for($i=0;$i<3; $i++)
{
    echo '<pre>';
    print_r($rr[$i]);
}
function hobi($a, $b)
{
     return $a+$b ;

}
$c=hobi(3,4);
echo '<pre>' ;

echo $c;
?>