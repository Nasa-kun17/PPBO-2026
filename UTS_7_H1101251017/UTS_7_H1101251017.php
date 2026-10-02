<?php
abstract class ProdukElektronik {
    protected $id, $nama, $hargaDasar;
    public function __construct($i,$n,$h){ $this->id=$i; $this->nama=$n; $this->hargaDasar=$h; }
    public function getId(){ return $this->id; } public function getNama(){ return $this->nama; } public function getHargaDasar(){ return $this->hargaDasar; }
    abstract public function hitungTotal(); abstract public function getJenis();
}
class HP extends ProdukElektronik {
    private $ramGb;
    public function __construct($i,$n,$h,$r){ parent::__construct($i,$n,$h); $this->ramGb=$r; }
    public function hitungTotal(){ $t = $this->hargaDasar + (100000 * $this->ramGb); return $t * 1.11; }
    public function getJenis(){ return "HP"; }
    public function cetakDetail(){ return "RAM: ".$this->ramGb." GB"; }
}
class Laptop extends ProdukElektronik {
    private $ssdGb;
    public function __construct($i,$n,$h,$s){ parent::__construct($i,$n,$h); $this->ssdGb=$s; }
    public function hitungTotal(){ $t = $this->hargaDasar + (50000 * $this->ssdGb); return $t > 10000000 ? $t * 0.93 : $t; }
    public function getJenis(){ return "Laptop"; }
    public function cetakDetail(){ return "SSD: ".$this->ssdGb." GB"; }
}
class Aksesoris extends ProdukElektronik {
    private $beratGram;
    public function __construct($i,$n,$h,$b){ parent::__construct($i,$n,$h); $this->beratGram=$b; }
    public function hitungTotal(){ return $this->hargaDasar + (100 * $this->beratGram); }
    public function getJenis(){ return "Aksesoris"; }
    public function cetakDetail(){ return "Berat: ".$this->beratGram." Gram"; }
}
$o1 = new HP("HP01", "Hizbullah", 3000000, 8);
$o2 = new Laptop("LP01", "Riko", 9000000, 512);
$o3 = new Aksesoris("AK01", "Dani", 150000, 200);
$o4 = new HP("HP02", "Eko", 11000000, 6);
$o5 = new Laptop("LP02", "ASUS ROG", 15000000, 1024);
echo $o1->getId()." | ".$o1->getNama()." | ".$o1->getJenis()." | Rp".$o1->getHargaDasar()." | Total: Rp".$o1->hitungTotal()." | ".$o1->cetakDetail()."<br>";
echo $o2->getId()." | ".$o2->getNama()." | ".$o2->getJenis()." | Rp".$o2->getHargaDasar()." | Total: Rp".$o2->hitungTotal()." | ".$o2->cetakDetail()."<br>";
echo $o3->getId()." | ".$o3->getNama()." | ".$o3->getJenis()." | Rp".$o3->getHargaDasar()." | Total: Rp".$o3->hitungTotal()." | ".$o3->cetakDetail()."<br>";
echo $o4->getId()." | ".$o4->getNama()." | ".$o4->getJenis()." | Rp".$o4->getHargaDasar()." | Total: Rp".$o4->hitungTotal()." | ".$o4->cetakDetail()."<br>";
echo $o5->getId()." | ".$o5->getNama()." | ".$o5->getJenis()." | Rp".$o5->getHargaDasar()." | Total: Rp".$o5->hitungTotal()." | ".$o5->cetakDetail()."<br>";
$tot = $o1->hitungTotal() + $o2->hitungTotal() + $o3->hitungTotal() + $o4->hitungTotal() + $o5->hitungTotal();
echo "<br><b>Total Keseluruhan = Rp" . $tot . "</b>";