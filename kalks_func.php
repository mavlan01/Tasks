<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    a:<input type="number" name="a">
    <select name="select"><option>Выберите из списка</option>
        <option>-</option>
        <option>+</option>
        <option>*</option>
        <option>/</option>
        </select>
    b:<input type="number" name="b">
    <input type='submit' name='vichislit' value='Вычислить'>
    <input type="reset" name='ochistit' value='Отменить'>
</form>
<?php
function kalk($a, $b, $select)
{
    if ($_POST['vichislit']) {
        if ($select == '+') {
            $c = $a + $b;
            echo "сумма=" . $c . '<br>';
        }
        if ($select == '-') {
            $c = $a - $b;
            echo "разность=" . $c . '<br>';
        }
        if ($select == '*') {
            $c = $a * $b;
            echo "умножение=" . $c . '<br>';
        }
        if ($select == '/') {
            $c = $a / $b;
            echo "деление=" . $c . '<br>';
        }
    }
}
kalk($_POST['a'],    $_POST['b'],    $_POST['select']);
?>