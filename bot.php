<?php
@system("clear");
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
//flag
print"$ijo
======================================================\n__     _______ _____ _   _
\ \   / / ____| ____| | | | create by: adidoank
 \ \ / /|  _| |  _| | | | |
  \ V / | |___| |___| |_| | masukan kode invite: A5EX50
   \_/  |_____|_____|\___/\n ======================================================\n$putih";
$t= "\r\n";
//config
include(readline("masukan config: "));
#$user = require __DIR__."/data.txt";

//intro
echo "$kuning.[>] $putih sedang login.....\n";
sleep(1);

//get info
$head = array();
$head[] = "Host: www.veeuapp.com";
          "Connection: Keep-Alive";
          "Accept-Encoding: gzip";
          "User-Agent: okhttp/3.10.0";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://www.veeuapp.com/v1.0/me?access_token=".$access_token,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTPHEADER => $head,
    CURLOPT_SSL_VERIFYPEER => 0,
      ));
$result = curl_exec($curl);                                   curl_close($curl);
$jres = json_decode($result,true);
echo "$ijo.[*]  sukses !!!\n";
echo "$putih|user: $biru".$jres['user']['nickname']."\n";
echo "$putih|email: $biru".$jres['user']['email']."\n";

//konfirmasi
$konfir =readline("$putih.[?] $turkis konfirmasi (y/n): ");
       if($konfir == 'y' OR $konfir == 'Y'){
        
        }
        else{
        echo "$red.[!] ".$putih."login dibatalkan\n";
        exit;
        }
echo $red."[!] warning !".$t.$turkis."> user tidak terdaftar !".$t;
sleep(1);
echo $kuning."maaf masa trial telah berakhir".$t;
sleep(1);
echo $ijo."ikuti intuksi di bawah bagaimana cara mendapatkan bot".$t;
sleep(3);
echo "
[1] kamu perlu memasukan kode invite: A5EX50".$putih."
  => buat lah 1 akun baru dengan memasukan kode di atas".$t;
sleep(2);
echo $ijo."
[2] kirim nama user kamu ke alamat email atau WA di bawah".$t.$putih."
  => adidoank69ads@gmail.com
  => 082134676940".$t;
sleep(2);
echo $ijo."
[3] bot akan di kirim setelah proses pengecekan user".$putih."
  => bot sepenuhnya milik anda".$t;

  
echo $turkis."TERIMAKASIH".$t."salam gretongers".$t;

