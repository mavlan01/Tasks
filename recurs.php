<?php
print 'Создадим массив';
echo "<br />";
$massive = array(156,12,141,765,1241,4124,5623);
foreach ($massive as $key => $value){
    echo "$value"."\n";
}
echo "<br />";
print 'Посчитаем его';
echo "<br />";

function recurs ($massive){
    for ($i=0; $i<count($massive);$i++)
    {
        return count($massive);
    }
}
$y=recurs ($massive);
echo$y;
?>