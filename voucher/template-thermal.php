																		<?php if(substr($validity,-1) == "d"){ $validity = "".substr($validity,0,-1)." Hari";
}else if(substr($validity,-1) == "h"){
  $validity = "".substr($validity,0,-1)." Jam";
}if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){
  $timelimit = "".((substr($timelimit,0,-1)*7) +  substr($timelimit, 2,1))."Hari";
}else if(substr($timelimit,-1) == "d"){
  $timelimit = "".substr($timelimit,0,-1)." Hari";
}else if(substr($timelimit,-1) == "h"){
  $timelimit = "".substr($timelimit,0,-1)." Jam";
}else if(substr($timelimit,-1) == "w"){
  $timelimit = "".(substr($timelimit,0,-1)*7)." Hari";
}	            	            
if($getprice == "3000"){ $color = "#E50877";} 
elseif($getprice == "1000"){ $color = "#752CEB";}
elseif($getprice == "2000"){ $color = "#13C013";}
elseif($getprice == "3000"){ $color = "#E50877";}
elseif($getprice == "4000"){ $color = "#F75418";}
elseif($getprice == "5000"){ $color = "#e30e1f";}
elseif($getprice == "6000"){ $color = "#663399";}
elseif($getprice == "10000"){ $color = "#663399";}
elseif($getprice == "13000"){ $color = "#2E8B57";}
elseif($getprice == "15000"){ $color = "#2E8B57";}
elseif($getprice == "17000"){ $color = "#0000FF";}
elseif($getprice == "20000"){ $color = "#0000FF";}
elseif($getprice == "35000"){ $color = "#6495ED";} 
elseif($getprice == "40000"){ $color = "#6495ED";} 
elseif($getprice == "80000"){ $color = "#FF8C00";}
elseif($getprice == "85000"){ $color = "#FF8C00";}
elseif($getprice == "160000"){ $color = "#DC143C";} 
elseif($getprice == "170000"){ $color = "#DC143C";} 
else{ $color = "#e30e1f";}?>  
<style>
	.qrcode{
		height:150px;
		width:150px;
	}
</style>
<table class="voucher" style=" width: 180px;border-color: white;">
  <tbody>
<!-- Logo Hotspotname -->
    <tr>
      <td style="text-align: center; font-size: 14px; font-weight:bold;font-family:Arial; border-bottom: 1px black solid;"><img src="<?= $logo; ?>" alt="logo" style="height:27px;border:0;"><br><?= date("d-m-Y h:i:sA") ?></td>
    </tr>
<!-- /  -->
    <tr>
      <td>
    <table style=" text-align: center; width: 170px; font-size: 12px;">
  <tbody>
<!-- Username Password QR    -->
    <tr>
      <td>
        <table style="width:100%;">
<!-- Username = Password    -->
<?php if ($usermode == "vc") { ?>
        <tr>
			<td font-size: 12px;><b>Kode Voucher</b></td>
        </tr>
        <tr>
          <td style="width:100%; border: 2px solid black;border-radius: 7px; font-weight:bold;font-family:Lato Black; font-size:16px;"><?= $username; ?></td>
        </tr>
<!-- /  -->
<!-- Username & Password  -->
<?php 
} elseif ($usermode == "up") { ?>
        <tr>
          <td style="width: 50%">Username</td>
          <td >Password</td>
        </tr>
        <tr style="font-size: 14px;">
          <td style="border: 2px solid black;border-radius: 7px;font-family:Lato Black; font-weight:bold;"><?= $username; ?></td>
          <td style="border: 2px solid black;border-radius: 7px;font-family:Lato Black; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
} ?>
<!-- /  -->
    </tr>
      </td>
<!-- QR Code    -->
<?php if ($qr == "no") { ?>
      <td colspan="2">
	<?= $qrcode ?>
      </td>
      </tr>
<?php 
} ?>
<!-- /  -->
    <tr>
      <!-- Price  -->
      <td colspan="2" style="border-top: 0px solid black;font-weight:bold;font-family:Lato; font-size:13px">Aktif <?= $timelimit; ?> <?= $datalimit; ?> <?= $price; ?>,-</td>
<!-- /  -->
    </tr>
    <tr>
      <!-- Note  -->
      <td colspan="2" style="border-top: 0px solid black;font-weight:bold;font-family:Lato;font-size:10px">Untuk Login atau Cek Masa Aktif Kode Voucher Anda, Buka Browser Kemudian Ketik <?=$dnsname;?></td>
<!-- /  -->
    </tr>
<!-- /  -->
  </tbody>
    </table>
      </td>
    </tr>
  </tbody>
  </table> 	        	        	        	        