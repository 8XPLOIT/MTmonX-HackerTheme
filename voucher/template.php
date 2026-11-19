																																										<?php if(substr($validity,-1) == "d"){ $validity = "   <br>Masa Aktif : ".substr($validity,0,-1)." Hari";
}else if(substr($validity,-1) == "h"){
  $validity = "Masa Aktif : ".substr($validity,0,-1)." Jam";
}
if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){$timelimit = "Durasi : ".((substr($timelimit,0,-1)*7) +  substr($timelimit, 2,1))."Hari";
}else if(substr($timelimit,-1) == "d"){
  $timelimit = "Durasi : ".substr($timelimit,0,-1)." Hari";
}else if(substr($timelimit,-1) == "h"){
  $timelimit = "Durasi : ".substr($timelimit,0,-1)." Jam";
}else if(substr($timelimit,-1) == "w"){
  $timelimit = "Durasi : ".(substr($timelimit,0,-1)*7)." Hari";
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
 <!--mks-mulai-->
<table style="display: inline-block; border-collapse: collapse; margin: 3px; width: 195px; overflow: hidden; position: relative; padding: 0px; border: 1px solid #d1d5db; border-radius: 8px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #ffffff; box-shadow: 0 1px 4px rgba(0,0,0,0.08);">
<tbody>
<tr>
<td style="color:#666;" valign="top">
<table style="width:100%; border-collapse: collapse; background: #fafafa; border-bottom: 1px solid #f0f0f0;">
<tbody>
<tr>
<td style="width:90px; padding: 4px 0 2px 6px;">
<img style="margin:2px 0 0 2px; height: 18px; width: auto; max-width: 75px; object-fit: contain;" src="<?php echo $logo;?>" alt="logo">
</td>	
<td style="width:105px; padding: 4px 6px 2px 0;">
<div style="float:right;margin-top:-6px;margin-right:0px;width:5%;text-align:right;font-size:7px;">
</div>
<div style="text-align:right;font-weight:bold;font-size:14px;color:<?php echo $color ?>; letter-spacing: -0.3px;"> <?= $price; ?>
</div>	
</td>		
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="color:#666;border-collapse: collapse;" valign="top">
<table style="width:100%;border-collapse: collapse;">
<tbody>
<tr>
<td style="width:100px; padding: 4px 2px 2px 6px;" valign="top" >
<div style="clear:both;color:#555;margin-top:2px;margin-bottom:2.5px;">
<?php if($usermode == "vc"){?> 
<div style="padding:1px;text-align:center;font-weight:bold;font-size:8px;color:#6b7280; letter-spacing: 0.5px;">VOUCHER</div>		
<div style="padding:3px; border-radius:4px; background:#f3f4f6; text-align:center;font-weight:600;font-size:12px;color:#111827; letter-spacing: 0.5px;"><?php echo $username;?></div>
<?php }elseif($usermode == "up"){?>
<div style="padding:1px;text-align:center;font-weight:bold;font-size:8px;color:#6b7280; letter-spacing: 0.5px;">MEMBER</div>		
<div style="padding:3px; border-radius:4px; background:#f3f4f6; text-align:center;font-weight:600;font-size:10px;color:#111827;"><?php echo "U: ".$username."<br>P: ".$password;?></div>
<?php }?>
<!--mks-voucher-akhir-->
</div>
<div style="text-align:center;color:#374151;font-size:8px;font-weight:500;line-height:1.2;margin:2px 0;padding:0px;">
Pertanyaan atau Keluhan Lainnya, Hubungi Kapten Nemo via WA 082339800565
</div>
</td>	
<p style=" margin-top:-14px;margin-bottom:5px">		
<td style="width:95px;text-align:right; padding: 4px 6px 2px 0px;" valign="top">
<div style="clear:both;padding:0 2.5px;font-size:8px;font-weight:600;color:#374151; line-height:1.2; margin-top: 4px;">
<?php echo $validity;?><br><?php echo $datalimit;?>
</div>
<div style="float:right;padding:2px;text-align:right;margin:4px 0 0 0;"><img style="height:52px;width:52px; border:1px solid #e5e7eb; border-radius:4px;" <?= $qrcode ?>
</div>
</td>		
</tr>
<tr>
<td style="background:<?php echo $color ?>;color:#fff;padding:3px 6px;" valign="top" colspan="2">
<div style="text-align:left;color:#fff;font-size:8px;font-weight:bold;margin:0px;">
 <b>Login atau Cek Status, Buka : wifi.id</b> -<?php echo " [$num]";?>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
 <!--mks-akhir-->	        	        	        	        	        	        	        