<?php 

class Kalkulator{
	// Property
  	private $angka1;
  	private $angka2;

	function __construct($bil1,$bil2){
		$this->angka1 = $bil1;
		$this->angka2 = $bil2;
	}

	public function pertambahan(){
		$hasil = $this->angka1 + $this->angka2;
    	return $hasil;
	}

	public function pengurangan(){
		$hasil = $this->angka1 - $this->angka2;
    	return $hasil;
	}

    public function perkalian(){
		$hasil = $this->angka1 * $this->angka2;
    	return $hasil;
	}

	public function pembagian(){
		$hasil = $this->angka1 / $this->angka2;
    	return $hasil;
	}

	
}

echo "<form action='' method='post'>
Bilangan 1 : <input type='number' name='bil1' />
<select name='operator'>
	<option value='tambah'>+</option>
	<option value='kurang'>-</option>
	<option value='bagi'>:</option>
	<option value='kali'>x</option>
</select><br/>
Bilangan 2 : <input type'number' name='bil2' />
<input type='submit' name='hitung' value='Hitung'/>
</form>";

if(isset($_POST['hitung'])){
	$bil1 = $_POST['bil1'];
	$bil2 = $_POST['bil2'];
	$operator = $_POST['operator'];
	$kalkulator = new Kalkulator($bil1,$bil2);
	switch($operator) {
		case 'tambah':
			echo "Hasil dari ".$bil1." + ".$bil2." = ".$kalkulator->pertambahan();
			break;
		case 'kurang':
			echo "Hasil dari ".$bil1." - ".$bil2." = ".$kalkulator->pengurangan();
			break;
		case 'kali':
			echo "Hasil dari ".$bil1." x ".$bil2." = ".$kalkulator->perkalian();
			break;
		case 'bagi':
			echo "Hasil dari ".$bil1." : ".$bil2." = ".$kalkulator->pembagian();
			break;
		default:
			break;
	}
}