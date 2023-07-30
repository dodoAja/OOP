<?php
class TV {
  private $merk;
  protected $ukuran;
  public $harga;

  public function __construct($merk, $ukuran, $harga) {
    $this->merk = $merk;
    $this->ukuran = $ukuran;
    $this->harga = $harga;
    echo "TV {$ukuran} inch merk {$merk}<br>";
  }

  public function getMerk() {
    return $this->merk;
  }

  public function setMerk($merkBaru) {
    $this->merk = $merkBaru;
  }

  public function tampilkanInfo() {
    echo "Merk: {$this->merk} <br>";
    echo "Ukuran: {$this->ukuran} inch <br>";
    echo "Harga: {$this->harga} <br>";
  }

  public function __destruct() {
    echo "TV {$this->ukuran} inch merk {$this->merk} destruct <br>";
  }
}

class SmartTV extends TV {
  private $fitur;
  public function __construct($merk, $ukuran, $harga, $fitur) {
    parent::__construct($merk, $ukuran, $harga);
    $this->fitur = $fitur;
    echo "Smart Tv {$ukuran} inch merk {$merk} punya  fitur {$fitur}<br>";
  }
  public function getFitur() {
    return $this->fitur;
  }

  public function setFitur($fiturBaru) {
    $this->fitur = $fiturBaru;
  }
  public function tampilkanInfo() {
    parent::tampilkanInfo();
    echo "Fitur: {$this->fitur} <br><br>";
  }

  public function __destruct() {
    echo "Smart TV {$this->ukuran} inch merk LG fitur {$this->fitur}  <br>";
    parent::__destruct();
  }
}

$tv1 = new TV("chocha", 32, "5jt");
$tv1->tampilkanInfo();
echo "<br>";

$tv2 = new SmartTV("LG", 55, "10jt", "Koneksi Internet");
$tv2->tampilkanInfo();