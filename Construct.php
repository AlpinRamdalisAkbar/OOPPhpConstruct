<?php  
class produk{
  public $namaBarang,
         $stat,
         $atk;
  public function nama(){
    return "$this->namaBarang, $this->stat, $this->atk";
  }
  public function __construct($namaBarang="nama barang", $stat="stat", $atk=0){
    $this->namaBarang = $namaBarang;
    $this->stat = $stat;
    $this->atk = $atk;
  }
 
}
$produk1 = new produk("Lorule","lvl 50, hp 10000",20000);
$produk2 = new produk("Pedang kaisar","Nena",7000000);
$produk3 = new produk("Pedang kristal","Kristal",20000000);
$produk4 = new produk("Kapak iblis","Minotaur",15000000);
$produk5 = new produk("Panah limbo","Raja Darkan",12000000);

echo "Nama Chara: " . $produk1->nama();
echo "<br>";
echo "Nama pedang: " . $produk2->nama();
echo "<br>";
echo "Nama pedang: " . $produk3->nama();
echo "<br>";
echo "Nama kapak: " . $produk4->nama();
echo "<br>";
echo "Nama panah: " . $produk5->nama();
?>
