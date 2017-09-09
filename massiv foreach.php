<?php
print 'Создадим массив';
echo "<br />";
$massive = array(0 =>156,1 =>12,2=>141,3=>765,4=>125);
foreach ($massive as $key => $value){
    echo "$key => $value"."\n";
}
echo "<br />";
print 'А теперь перевернем его';
echo "<br />";
$i = count($massive) - 1;
foreach ($massive as $key => $value) {
    echo $key."=>".$massive[$i--]."\n";
}

?>