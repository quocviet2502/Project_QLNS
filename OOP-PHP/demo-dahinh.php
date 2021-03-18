<?php
	class Hinh{
		protected function tinhDienTich(){

		}
	}
	
	class HinhVuong extends Hinh
	{
		
		private $canh;
		public function setCanh($canh){
			$this->canh = $canh;
		}
		public function getCanh(){
			return $this->canh;
		}
		public function tinhDienTich(){
			return pow($this->canh,2);
		}

	}
	class HinhTron extends Hinh{
		private $bankinh;
		public function setBanKinh($bankinh){
			$this->banKinh = $bankinh;
		}
		public function getBankinh(){
			return $this->banKinh;
		}
		public function tinhDienTich(){
			return (pow($this->banKinh,2) * pi());
		}
	}
	$hinhVuong = new HinhVuong();
	$hinhVuong->setCanh(5);
	echo $hinhVuong->tinhDienTich();
	echo "--------------------------";
	$hinhTron = new HinhTron();
	$hinhTron->setBanKinh(5);
	echo $hinhTron->tinhDienTich();


?>