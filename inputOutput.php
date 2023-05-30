<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input / Output</title>
</head>
<body>
    <h2>Masukan Data</h2>
    <form action="#" method ="POST">
    <table>
            <tr>
                <td><label for="nis">NIS: </label></td>
                <td><input type="text" name="nis" id="nis"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama: </label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="rombel">Rombel: </label></td>
                <td><input type="text" name="rombel" id="rombel"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
echo "==================================================================================";
echo "<br>";
class Data{
    protected $nis,
            $nama,
            $rombel;

    public function __construct($nis, $nama, $rombel){
        $this->nis = $nis;
        $this->nama = $nama;
        $this->rombel = $rombel;
    }

    public function dataDiri(){
        if($this->nis == null || $this->nama == null || $this->rombel == null){
            echo "ada data yang tidak anda masukkan, mohon isi terlebih dahulu !";
        }else{
            $data = "Nama: " . $this->nama . "<br>" . "NIS: " . $this->nis . "<br>" . "Rombel: " . $this->rombel;
            return $data;
        }
    }
}


if(isset($_POST['nis'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $rombel = $_POST['rombel'];



$data1 = new Data($nis, $nama, $rombel);
echo $data1->dataDiri();
}
?>