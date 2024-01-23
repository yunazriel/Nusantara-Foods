<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/bukuTamu.css?v=<?php echo time(); ?>">
  <link rel="shortcut icon" href="asset/Home.png" type="image/x-icon">
  <title>Buku Tamu</title>
</head>

<body>
  <header>
    <nav>
      <h1>buku tamu</h1>
    </nav>
  </header>

  <main>
    <div class="container-content">
      <div class="input-content">
        <form action="#" method="POST">
          <div class="input nama">
            <label for="name">Nama :</label><br>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="input email">
            <label for="email">Email :</label><br>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="input date">
            <label for="date">Tanggal Kehadiran :</label><br>
            <input type="date" name="date" required />
          </div>
          <div class="input message">
            <label for="message">Pesan :</label><br>
            <textarea id="message" name="message" rows="10" cols="50" required></textarea>
          </div>

          <div class="buttom-content">
            <select name="choice" id="choice">
              <option>gudek Koyor</option>
              <option>Nasi Goreng</option>
              <option>Lumpia Semarang</option>
              <option>Nasi gandul</option>
              <option>nasi liwet</option>
              <option>getuk</option>
              <option>dawet ireng</option>
            </select>


            <div class="btn">
              <button type="submit">kirim</button>
            </div>
          </div>
        </form>
      </div>


      <?php
      $name = $email = $date = $message = $choice = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
        $name = isset($_REQUEST["name"]) ? $_REQUEST["name"] : "";
        $email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";
        $date = isset($_REQUEST["date"]) ? $_REQUEST["date"] : "";
        $message = isset($_REQUEST["message"]) ? $_REQUEST["message"] : "";
        $choice = isset($_REQUEST["choice"]) ? $_REQUEST["choice"] : "";
      }
      ?>

      <?php if ($name || $email || $date || $message || $choice) : ?>
        <div class="output-content">
          <header>
            <h1 class="title">
              tiket online
            </h1>
            <img src="asset/Home.png" alt="">
            <p class="welcome">
              Selamat datang <?= $name ?><br><span>di nusantara food</span>
            </p>
          </header>

          <main>
            <div class="content">
              <h3 class="text-content name">Nama : <?= $name ?></h3>
              <h3 class="text-content">Email : <?= $email ?></h3>
              <h3 class="text-content">Kehadiran : <?= $date ?></h3>
              <h3 class="text-content">Pesan : <?= $message ?></h3>
              <h3 class="text-content">Menu favorit: <?= $choice ?></h3>
            </div>
          </main>
        </div>
      <?php endif; ?>
    </div>
  </main>
</body>

</html>