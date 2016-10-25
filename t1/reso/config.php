<?php namespace koneksi;
class con{
	public $kon;
	public function __construct()
	{
		$this->h ="localhost";
		$this->u ="root";
		$this->p ="";
		$this->db ="db_siswa";
	}

	function conn(){
		$kon=mysql_connect($this->h,$this->u,$this->p);
		mysql_select_db($this->db, $kon);
		return $kon;
	}
}
?>
