<?php 

// define('NAMA', 'Dwiki Darmawan');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;

// class Coba {
// 	const NAMA = 'Dwiki Darmawan';
// }

// echo Coba::NAMA;



// echo __LINE__;

// function coba() {
// 	return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;