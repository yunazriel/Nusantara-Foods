<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nusantara Foods</title>
  <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="style/swiper.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="shortcut icon" href="asset/Home.png" type="image/x-icon">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
</head>

<body>
  <div class="empty-content"></div>
  <header class="navbar-container">
    <a href="#" class="logo">
      <h1>Nusantara Foods.</h1>
    </a>

    <nav class="navbar">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#product">Product</a></li>
        <li><a href="bukuTamu.php" target="_blank">Buku Tamu</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="home" id="home">
      <div class="main-content">
        <h1 class="text1">Enjoy delicious</h1>
        <h2 class="text2">Nusantara Food</h2>
        <p class="text3">
          Temukan Kelezatan Kuliner Nusantara yang Membawa Kenangan.
        </p>
        <button onclick="window.location.href='bukuTamu.php'" target="_blank">Pesan Sekarang</button>
      </div>
      <div class="image-home">
        <img src="asset/Home.png" alt="image-home" />
      </div>
    </section>

    <section class="about" id="about">
      <div id="title">
        <h1>About</h1>
        <div id="underline"></div>
      </div>
      <div class="main-about">
        <img src="asset/About.png" alt="image-about" />
        <p class="diskription-about">
          <q>Selamat datang di website Nusantara Foods - Surga Kuliner Nusantara
            untuk Selera Penuh Petualangan! Ngidam masakan rumah atau pengen coba
            sesuatu yang beda? Nah, Nusantara Foods jawabannya! Kami adalah panggung
            digital buat semua foodies yang penasaran sama kelezatan Nusantara.
            Nggak perlu jauh-jauh ke mana-mana, di sini kamu bisa nemuin segala
            macam resep lezat dan cerita menarik tentang makanan dari Sabang sampai
            Merauke. Mulai dari makanan kaki lima yang bikin nagih sampe sajian
            mewah yang pas buat ajang pesta. Dengan Nusantara Foods, kita nggak cuma
            ngebahas rasa, tapi juga kisah unik di balik setiap hidangan. Kita
            percaya setiap makanan punya cerita sendiri yang bikin pengalaman makan
            jadi lebih istimewa.</q>
        </p>
      </div>
    </section>

    <section class="product" id="product">
      <div id="title">
        <h1>Product</h1>
        <div id="underline"></div>
      </div>

      <div class="swiper container-card">
        <div class="swiper-wrapper slide-card">
          <div class="swiper-slide card" data-name="produk-1">
            <div class="badge">Promo</div>
            <div class="image-card">
              <img src="asset/card1.png" alt="card image" />
            </div>
            <div class="deskription-card">
              <h1 class="title-card">Gudek Koyor</h1>
              <h2 class="price-card">Rp15.000</h2>
            </div>
          </div>

          <div class="swiper-slide card" data-name="produk-2">
            <div class="badge">Promo</div>
            <div class="image-card">
              <img src="asset/card2.png" alt="card image" />
            </div>
            <div class="deskription-card">
              <h1 class="title-card">Nasi Goreng</h1>
              <h2 class="price-card">Rp10.000</h2>
            </div>
          </div>

          <div class="swiper-slide card" data-name="produk-3">
            <div class="badge">Promo</div>
            <div class="image-card">
              <img src="asset/card3.png" alt="card image" />
            </div>
            <div class="deskription-card">
              <h1 class="title-card">Lumpia Semarang</h1>
              <h2 class="price-card">Rp8.000</h2>
            </div>
          </div>

          <div class="swiper-slide card" data-name="produk-4">
            <div class="badge">Promo</div>
            <div class="image-card">
              <img src="asset/card4.jpg" alt="card image" />
            </div>
            <div class="deskription-card">
              <h1 class="title-card">Nasi gandul</h1>
              <h2 class="price-card">Rp15.000</h2>
            </div>
          </div>

          <div class="swiper-slide card" data-name="produk-5">
            <div class="badge">Promo</div>
            <div class="image-card">
              <img src="asset/card5.jpg" alt="card image" />
            </div>
            <div class="deskription-card">
              <h1 class="title-card">nasi liwet</h1>
              <h2 class="price-card">Rp13.000</h2>
            </div>
          </div>

          <div class="swiper-slide card" data-name="produk-6">
            <div class="badge">HOT</div>
            <div class="image-card">
              <img src="asset/card6.jpg" alt="card image" />
            </div>
            <div class="deskription-card">
              <h1 class="title-card">getuk</h1>
              <h2 class="price-card">Rp5.000</h2>
            </div>
          </div>

          <div class="swiper-slide card" data-name="produk-7">
            <div class="badge">Promo</div>
            <div class="image-card">
              <img src="asset/card7.jpg" alt="card image" />
            </div>
            <div class="deskription-card">
              <h1 class="title-card">dawet ireng</h1>
              <h2 class="price-card">Rp7.000</h2>
            </div>
          </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="container-popup">
        <div class="popup-card" data-target="produk-1">
          <i class="fas fa-times"></i>
          <img src="asset/card1.png" alt="" />
          <h3>Gudek Koyor</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
          </div>
          <p>
            Gudeg koyor merupakan kuliner legendaris yang terbuat dari nangka muda, daging sapi, dan kacang merah.Gudeg koyor pertama kali dikenal di kawasan Kaliurang, Sleman, Yogyakarta. Konon, kuliner ini sudah ada sejak zaman kerajaan Mataram.
          </p>
          <div class="price">Rp15.000</div>
          <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
          </div>
        </div>

        <div class="popup-card" data-target="produk-2">
          <i class="fas fa-times"></i>
          <img src="asset/card2.png" alt="" />
          <h3>Nasi Goreng</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
          </div>
          <p>
            Nasi goreng merupakan sajian nasi yang digoreng dalam sebuah wajan atau penggorengan yang menghasilkan cita rasa berbeda
          </p>
          <div class="price">Rp20.000</div>
          <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
          </div>
        </div>

        <div class="popup-card" data-target="produk-3">
          <i class="fas fa-times"></i>
          <img src="asset/card3.png" alt="" />
          <h3>Lumpia semarang</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
          </div>
          <p>
            Lumpia Semarang adalah salah satu kuliner khas kota Semarang yang terdiri dari kulit tipis berisi rebung, telur, daging ayam atau udang, dan bumbu-bumbu. Ada dua jenis lumpia Semarang yaitu lumpia basah dan lumpia goreng
          </p>
          <div class="price">Rp8.000</div>
          <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
          </div>
        </div>

        <div class="popup-card" data-target="produk-4">
          <i class="fas fa-times"></i>
          <img src="asset/card4.jpg" alt="" />
          <h3>nasi gandul</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
          </div>
          <p>
            Nasi gandul adalah kuliner khas daerah Pati (daerah pesisir Jawa Tengah, jalan pantai utara Jawa).
          </p>
          <div class="price">Rp15.000</div>
          <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
          </div>
        </div>

        <div class="popup-card" data-target="produk-5">
          <i class="fas fa-times"></i>
          <img src="asset/card5.jpg" alt="" />
          <h3>nasi liwet</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
          </div>
          <p>
            Nasi liwet adalah salah satu makanan khas Jawa Barat. Berbeda dengan nasi umumnya yang dimasak dengan air saja, nasi liwet ini dimasak dengan rempah-rempah yang khas.
          </p>
          <div class="price">Rp13.000</div>
          <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
          </div>
        </div>

        <div class="popup-card" data-target="produk-6">
          <i class="fas fa-times"></i>
          <img src="asset/card6.jpg" alt="" />
          <h3>getuk</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
          </div>
          <p>
            Getuk adalah penganan dibuat dari singkong dan sebagainya yang direbus, kemudian dicampur gula pasir atau gula merah dan kelapa ditumbuk sekaligus.
          </p>
          <div class="price">Rp5.000</div>
          <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
          </div>
        </div>

        <div class="popup-card" data-target="produk-7">
          <i class="fas fa-times"></i>
          <img src="asset/card7.jpg" alt="" />
          <h3>dawet ireng</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
          </div>
          <p>
            Dawet Ireng adalah jenis Es Dawet yang berasal dari daerah Butuh, Purworejo, Jawa Tengah.
          </p>
          <div class="price">Rp7.000</div>
          <div class="buttons">
            <a href="#" class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>Nusantara Foods &copy; 2024, nikmati hidangan penuh rasa</footer>

  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".container-card", {
      slidesPerView: 4,
      spaceBetween: 34,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>