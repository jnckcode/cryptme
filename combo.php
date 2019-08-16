<?php 
echo "<==========================================================>";
echo "  888888                   888
     88b                   888
     888                   888
     888 88888b.   .d8888b 888  888
     888 888  88b d88P     888 .88P  v1.0 Relased Official
     888 888  888 888      888888K  Github.com/jnckcode
     88P 888  888 Y88b.    888  88b
     888 888  888   Y8888P 888  888
   .d88P
 .d88P      PHP Obfuscator ☣[Compressed]☣
888P";
echo "\n";
echo "<==========================================================>";
//InputFile
echo "  ╗
  ╚✪ Kode Kamu ➤ ";
$sc=trim(fgets(STDIN));
//PROSES
$data= file_get_contents($sc);
$key= base64_encode(str_rot13(gzdeflate(str_rot13($data))));
$hex=bin2hex($key);
mkdir("encode");
file_put_contents("encode/code_".$sc,$hex);
echo "Sukses Enkripsi !";




?>