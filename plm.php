<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  Adress: <input type="text" adress="fadress">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname']
    $adress=$_REQUEST['fadress'];
    if (empty($name)) ||(empty($adress)) {
        echo "Name is empty";
    } else {
        echo "El primer PHP script! de: "."<h1>".$name."</h1>".$adress;

    }
}

?>

</body>
</html>