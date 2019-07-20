<?php
defined('BASEPATH') OR exit('Tidak diperbolehkan untuk mengakses script secara langsung');
?>
<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="utf-8">
 <title>Selamat datang di CodeIgniterku</title>
 <style type="text/css">
 ::selection { background-color: #E13300; color: white; }
 ::-moz-selection { background-color: #E13300; color: white; }
 body {
  background-color: #fff;
  margin: 40px;
  font: 13px/20px normal Helvetica, Arial, sans-serif;
  color: #4F5155;
 }
 h1 {
  color: #444;
  background-color: transparent;
  border-bottom: 1px solid #D0D0D0;
  font-size: 19px;
  font-weight: normal;
  margin: 0 0 14px 0;
  padding: 14px 15px 10px 15px;
 }
 #body {
  margin: 0 15px 0 15px;
 }
 p.footer {
  text-align: right;
  font-size: 11px;
  border-top: 1px solid #D0D0D0;
  line-height: 32px;
  padding: 0 10px 0 10px;
  margin: 20px 0 0 0;
 }
 #container {
  margin: 10px;
  border: 1px solid #D0D0D0;
  box-shadow: 0 0 8px #D0D0D0;
 }
 .galeri{ width:100%; float:left; padding-top: 20px;}
 .galeri ul{ margin:0; padding:0; list-style-type:none;}
 .galeri ul li{ padding:7px; border:2px solid #ccc; float:left; margin:10px 7px; background:none; width:auto; height:auto;}
 </style>
</head>
<body>
<div id="container">
 <h1>Selamat datang di CodeIgniterku!</h1>
 <div id="body">
  <div class="galeri">
     <ul>
     <?php 
     if(!empty($tb_gambar)): foreach($tb_gambar as $gbr): ?>
        <li>
          <img src="upload/<?php echo $gbr['gambar']; ?>" alt="">
        </li>

     <?php endforeach; endif; ?>
     </ul>
  </div>
 </div>
 <p style="border-top:none;" class="footer">Halaman dirender dalam <strong>{elapsed_time}</strong> detik. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Versi <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
</body>
</html>