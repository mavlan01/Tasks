<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    a:<input type="number" name="a">
    b:<input type="number" name="b">
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
    } elseif ($a > $b){
        throw new Exception('a больше b');
    }
}

catch(Exception $ex) {

    echo $ex->getMessage();
}
?>