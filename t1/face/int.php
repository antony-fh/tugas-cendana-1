<?php namespace crud;
interface crudan{
	public function masuk_an($tbl,$dat,$id);
	public function tampil_an();
	public function ubah_an();
	public function hapus_an();
}
?>