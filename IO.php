<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i/o textField</title>
</head>
<body>
    <form action="#" method="post">
    <input type="text" name="txNama" id="">
    <input type="submit" value="Simpan" name="btSimpan">
    </form>
</body>
</html>

<?php
    if(isset($_POST['btSimpan'])){
        echo "Button di tekan!";
    }
?>