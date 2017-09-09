<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    a:<input type="text" name="a">
    b:<input type="text" name="b">
    <input type="submit">
</form>
<?php
$a = $_POST["a"];
$b = $_POST["b"];
try {

    if ($a < $b) {
        throw new Exception('a меньше b');
    } elseif ($a == $b) {
        throw new Exception('a равна b');
    } elseif (is_string($a) == TRUE) {
        throw new Exception('a должно быть числом');
    } elseif (is_string($b) == TRUE) {
        throw new Exception('b должно быть числом');
    } elseif ($a > $b){
        throw new Exception('a больше b');
    }
}

catch(Exception $ex) {

    echo $ex->getMessage();
}
?>