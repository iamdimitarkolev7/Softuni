<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?php
if(isset($_GET['num'])){
    for($i = intval($_GET['num']); $i>=1; $i--){
        if($_GET['num']%intval($i)!= 0) {
            echo "$i ";
        }
    };
}
?>
</body>
</html>