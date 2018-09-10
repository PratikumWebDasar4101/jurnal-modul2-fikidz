<?php 
error_reporting(0);
$angka = $_POST['angka'];
function pertama($x, $y){
	if ($x > 0) {
		if ($y > 0) {
			echo "* ";
			$y--;
			pertama($x, $y);
		}
		else{
			echo "<br>";
			$x--;
			pertama($x, $x);
		}
	}
}
pertama ($angka, $angka);

echo "======================================================<br>";

for($d=1;$d<=$angka;$d++)
    {
        if($d % 2 == 0){
        	echo "$d = Bilangan Genap<br>";
        }else{
        	echo "$d = Bilangan Ganjil<br>";
        }
    }

?>
