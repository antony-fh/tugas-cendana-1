<?php
/*STUDI KASUS: Hitung Gaji di Sebuah Universitas

		- Terdapat dua golongan pegawai di universitas, yaitu Dosen dan Staf biasa. Semua pegawai mendapatkan gaji awal yang sama, yaitu 1.500.000
		- Gaji tambahan dosen dihitung dari jumlah sks yang diampu
			1 sks = Rp. 15.000
		- Gaji tambahan staf dihitung dari jumlah kehadiran per bulan
			1 kehadiran = Rp. 5.000
		- Buatlah program untuk mencetak semua gaji pegawai*/
		/**
		* 
		*/

class pegawai{
	function __construct()
			{
				$this->gaji = 1500000;
				$this->sks = 15000;
				$this->kehadiran= 5000;

			}
	// function tampil();
}
class dosen extends pegawai{
	public function gdosen($lbr){
		$gj = $this->gaji + $this->sks * $lbr;
		echo "Gaji dosen = " . $gj ."\n";
	}
}
class staff extends pegawai{
	public function gstaff($lbr){
		$hsl = $this->kehadiran * $lbr;
		$gj = $this->gaji + $hsl;
		echo 'Gaji staff = ' . $gj;
	}
}
$gs = new staff();
$gs-> gstaff(100);
$gd = new dosen();
$gd-> gdosen(100);
/*
class Pegawai
{
	
	function __construct()
	{
		$this->gajiPokok = 1500000;
	}
}
class Dosen extends Pegawai
{
	public function __construct()
	{
		
		parent::__construct();
		$this->gajiDosen = $this->gajiPokok;
		
	}
	
	public function gajiDosen($sks='')
	{
		$total = ($sks * 15000);
		$this->gajiDosen += $total ;
	}
	public function getGajiDosen()
	{
		echo "Gaji dosen adalah " . $this->gajiDosen . "\n";
	}
	
}

class Staff extends Pegawai
{
	public function __construct()
	{
		parent::__construct();
		$this->gajiStaff = $this->gajiPokok;
	}
	public function gajiStaff($pertemuan='')
	{
		$total = ($pertemuan * 5000);
		$this->gajiStaff += $total ;
	}
	public function getGajiStaff()
	{
		echo "Gaji staff adalah " . $this->gajiStaff . "\n";
	}
	
}
$dosen = new Dosen();
$dosen->gajiDosen(2);
$dosen->getGajiDosen();
$staff = new Staff();
$staff->gajiStaff(2);
$staff->getGajiStaff();
*/
?>