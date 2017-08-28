<?php
print 'Создадим массив';
echo "<br />";
$massive = array(156,12,141,765,125);
foreach ($massive as $key => $value){
    echo "$value"."\n";
}
echo "<br />";
print 'А теперь перевернем его';
echo "<br />";
foreach (array_reverse($massive) as $key => $value){
    echo "$value"."\n";
}
?>