<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    a:<input type="text" name="a">
    b:<input type="text" name="b">
    <input type="submit">
</form>
<?php
$a = $_POST["a"];
$b = $_POST["b"];
if  (is_string($a) == TRUE) {
        echo ('a должно быть числом');
    } elseif (is_string($b) == TRUE){
    echo ('b должно быть числом');
        }
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