<?php
/*
Ghi đè: Khởi tạo phương thức trong lớp con trùng tên với phương thức trong lớp cha
*/
class dongVat{
	// thuoc tinh
	public $name = '';
	// phuong thuc
	public $hanhDong = '';
	public function hanhDong(){
		echo 'hanh dong';
	}
}
class dongVat1 extends dongVat{
	public function hanhDong(){
		echo 'hanh dong 1';
	}
}
$meo = new dongVat1();
$meo->hanhDong();
?>