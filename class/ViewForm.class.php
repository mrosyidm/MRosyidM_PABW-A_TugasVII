<?php


class ViewForm {

    public function FormView(){

        ?>
        <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/tugas7/class/style.css">
<script src="/tugas7/class/a.js"></script>
</head>
<body background="/tugas7/class/6.jpg"/>
<form class="modal-content" action="/tugas7/coba.php/FormController/getHasil" method="post" enctype="multipart/form-data">
    
    <b><p align="center">REGISTRASI BRAWIJAYA CARD</p></b>
    <div class="imgcontainer">
      <img src="/tugas7/class/ub.jpg" alt="Avatar" class="avatar"/>
    </div>
    <div class="container">

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="form[]">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required id="myInput">
      <input type="checkbox" onclick="myFunction()">Show Password<br><br>
      <label for="email"><b>Email </b></label>
      <input type="email" placeholder="contoh@ub.com" name="form[]"><br>
      <label for="Gen"><b>Jenis Kelamin :</b></label>
      <input type="radio" name="form[]" value="Laki-laki"> Laki-laki
      <input type="radio" name="form[]" value="Perempuan"> Perempuan<br><br>
      <label for="alamat"><b>Alamat Asal    :</b></label>
      <P>
      <TEXTAREA name="form[]" rows="20" cols="80">
      Isikan alamat anda...
      </TEXTAREA>
      </P>
      <label for="Jalur"><b>Jalur Masuk</b></label>
      <select name="form[]">
      <option value="SNMPTN">SNMPTN</option>
      <option value="SBMPTN">SBMPTN</option>
      <option value="MANDIRI">MANDIRI</option>
      </select>
      <br><br>
      <label for="hobi"><b>Hobi</b></label><br>
      <input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
      <input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
      <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga<br>
      <input type="checkbox" name="hobi[]" value="Berwisata">Berwisata<br><br>
      <label for="foto"><b>Foto Pribadi</b></label>
      <input type="file" name="upload">
      <br>
      <button type="submit" class="submit_login" value="Submit">Submit</button>
    </div>
  </form>
</div>
</body>
</html>
<?php

    }

    public function ResultView($a, $b, $pict, $fakul){
      ?>
      <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/tugas7/class/hces.css">
<title>BRAWIJAYA CARD</title>
</head>
<body>
<div class="cover">
      <div class="judul">
        <h1><a>Brawijaya<span>Card</span></a></h1>
      </div>
          <div class="pasfoto">
            <img src="/tugas7/<?php echo $pict ?>"/>
          </div>
        <div style="padding-left: 25px; float: left;">
          <div class="w3ls-banner-left-info">
            <h4>USERNAME</h4>
            <p><?php
                echo $a[0];
                ?></p>
          </div>
          <div class="w3ls-banner-left-info">
            <h4>EMAIL</h4>
            <p><?php
                echo $a[1];
                ?></p>
          </div>
          <div class="w3ls-banner-left-info">
            <h4>JENIS KELAMIN</h4>
            <p><?php
                echo $a[2];
                ?></p>
          </div>
          <div class="w3ls-banner-left-info">
            <h4>ALAMAT ASAL</h4>
            <p><?php
                echo $a[3];
                ?></p>
          </div>
          <div class="w3ls-banner-left-info">
            <h4>JALUR MASUK</h4>
            <p><?php
                echo $a[4];
                ?></p>
          </div>
          <div class="w3ls-banner-left-info">
            <h4>FAKULTAS</h4>
            <p><?php
                echo $fakul;
                ?></p>
          </div>
          <div class="w3ls-banner-left-info">
            <h4>HOBI</h4>
            <p>
            <?php
            $hb = $_POST['hobi']; 
              foreach ($b as $hobi){
                echo $hobi;
                echo "<br>";
              }
                ?></p>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</body> 
</html>
<?php
}
}
