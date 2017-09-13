<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    a:<input type="number" name="a">
    b:<input type="number" name="b">
    <input name="operation" type="radio" value="-">Минус
    <input name="operation" type="radio" value="+">Плюс
    <input name="operation" type="radio" value="*">Умножить
    <input name="operation" type="radio" value="/">Делить
    <input type='submit' name='vichislit' value='Вычислить'>
    <input type="reset" name='ochistit' value='Отменить'>
</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$radio=$_POST['operation'];
if($_POST['vichislit']){
    if($radio=='+'){$c=$a+$b; echo "сумма=" . $c.'<br>';}
    if($radio=='-'){$c=$a-$b; echo "разность=" . $c.'<br>';}
    if($radio=='*'){$c=$a*$b; echo "умножение=" . $c.'<br>';}
    if($radio=='/'){$c=$a/$b; echo "деление=" . $c.'<br>';}
}
?>