<?php

class minuman
{
  public $nama = "nama",
         $rasa = "rasa", 
         $produksi = "produksi";

  public function tampilin() {
    return "Produk : $this->nama <br> Rasa : $this->rasa <br> Produksi : $this->produksi";
  }
}

$produk1 = new minuman();
$produk1->nama = "Fanta";
$produk1->rasa = "Orange";
$produk1->produksi = "02-02-23";

$produk2 = new minuman();
$produk2->nama = "Teh Botol";
$produk2->rasa = "Melati";
$produk2->produksi = "08-01-2022";

$tmpl1 = $produk1->tampilin();
$tmpl2 = $produk2->tampilin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><?= $tmpl1 ?></p>
  <p><?= $tmpl2 ?></p>
</body>
</html>