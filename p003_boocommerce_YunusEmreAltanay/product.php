<?php
$articles = [
    [
        "title" => "Iphone 12 256Gb",
        "content" => "iPhone 12, her açıdan kullanıcıları tatmin edecek bir akıllı telefon. 
        İnce ve hafif tasarımı kullanırken hoş bir his veriyor. 
        Ekranı da kullanım zevkini artırıyor. 
        A14 Bionic bir amiral gemisi telefondan beklenen performansı sunarken pili de normal yoğunluklu kullanımda bir günü rahatlıkla çıkarıyor. 
        Kamera sistemi de normal...",
        "price" => "10.000TL"
    ],
    [
        "title" => "Ipad Pro 8. Nesil",
        "content" => "Bu yıl iPad Pro serisinde tasarım anlamında çok büyük bir yenilik bulunmuyor. 
        Apple, 2018’de getirdiği tasarımı kullanmaya devam ediyor. 
        Ancak donanım özellikleri tarafında dikkate değer değişiklikler bulunuyor. 
        Öncelikle hem 11 inç hem de 12.9 inç iPad Pro modellerinde Apple tasarımı M1 işlemci bulunuyor.",
        "price" => "14000"
    ],
    [
        "title" => "Apple Watch",
        "content" => "Apple Watch, bir akıllı saat olmanın yanı sıra bazı koşullarda hayati bir tıbbi takip aracı işlevi de görüyor. 
        Bu işlevi ortaya koyan yeni bir çalışma daha gerçekleştirildi. 
        Stanford Üniversitesi tarafından yapılan ve Apple’ın fonladığı araştırma, 
        Apple Watch ile kalp ve damar yetmezliklerinin...",
        "price" => "2000TL"
    ],
    [
        "title" => "Imac M1 Chip",
        "content" => "iMac Önemli olan güç güzelliği. Hayal edebildiğiniz her şey iMac’te gerçeğe dönüşüyor. 
        Göz alıcı tasarıma ve son derece kolay kullanıma sahip olan iMac, fikirlerinizi üst seviyeye taşımanıza yardım edecek birbirinden güçlü araçlarla dolu. 
        Yeni 27 inç model; daha hızlı işlemciler ve grafik teknolojileri...",
        "price" => "17900TL"
    ],
];

if(!isset($_GET["id"])) {
  
  header("Location: product.php?id=0");

  die("Numarasız işlem yapmıyoruz canım...");
  
}



$key = $_GET["id"];
if ($key == null) $key=0;

$article = $articles[$key];





?>




<!DOCTYPE html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    
    />
    <link href="main.css" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>

    <title><?php echo $article["title"]; ?></title>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
          <div class="col-12">
              <!-- Menü Başlangıç -->
              <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php">Apple Market</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link pe-5" href="#">Ürünler</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-5" href="#">Kampanyalar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-5" href="#">Mağazalar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-5" href="#">İletişim</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              <!-- Menü Bitiş -->
          </div>
          <div class="col-12 pt-3">
                    
          <p class="text-decoration-underline fw-bolder fs-3 bg-dark text-light ps-2">Ürün Detayları</p>
          
          </div>

    <div class="col-lg-6">
          <!-- Slider başlangıç -->
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Images/iphone12.fw.png" class="d-block w-100" alt="...">
                    
                  </div>
                  <div class="carousel-item">
                    <img src="Images/ipadpro.fw.png" class="d-block w-100" alt="...">
                    
                  </div>
                  <div class="carousel-item">
                    <img src="Images/imac.fw.png" class="d-block w-100" alt="...">
                    
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

          <!-- Slider Bitiş -->
  </div>

          <div class="col-lg-6">
          <div class="row">
          <div class="col-lg-12"> 
          <div class="card">
          <div class="card-header"><?php echo $article["title"]; ?></div>
          <div class="card-body">
          <h5 class="card-title"><?php echo $article["price"]; ?></h5>
          <p class="card-text"><?php echo $article["content"]; ?></p>
          <a href="#" class="btn btn-primary">Sepete Ekle</a>
          </div>
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-4 pt-3">
              <div class="card">
                <img src="Images/applewatch.fw.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Apple Watch</h5>
                  <p class="card-text">Apple Watch, bir akıllı saat olmanın yanı...</p>
                  <a href="product.php?id=2" class="btn btn-primary">Satın Al</a>
                </div>
              </div>
              </div>
              <div class="col-lg-4 pt-3">
              <div class="card">
                <img src="Images/imac.fw.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Imac M1 Chip</h5>
                  <p class="card-text">iMac Önemli olan güç güzelliği. Hayal...</p>
                  <a href="product.php?id=3" class="btn btn-primary">Satın Al</a>
                </div>
              </div>
              </div>
              <div class="col-lg-4 pt-3">
              <div class="card">
                <img src="Images/ipadpro.fw.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ipad Pro 8. Nesil</h5>
                  <p class="card-text">Bu yıl iPad Pro serisinde tasarım... </p>
                  <a href="product.php?id=1" class="btn btn-primary">Satın Al</a>
                </div>
              </div>
              </div>
            </div>
          </div>
          </div>  




          </div>
          </div>

  </div>


   <!-- Option 1: Bootstrap Bundle with Popper -->
     <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>



  </body>