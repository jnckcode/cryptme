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
 .d88P 		PHP Encryption Compiler
888P";
echo "\n";
echo "<==========================================================>";
echo "\n";
echo "File Encode Kamu = ";
$file=trim(fgets(STDIN));
$data=file_get_contents($file);
echo "\n";
$chk=md5($file);

//Engine
$compile="<?php"."\n\n"."/** This Code Was Obfuscated by JNCK-Obfuscator"."\n"."checksum MD5 :"."'$chk'"."*/"."\n\n"."$"."code"."="."'$data'".";"."\n"."$"."result"."=hex2bin"."("."$"."code".")".";"."\n"."eval(str_rot13(gzinflate(str_rot13(base64_decode(("."$"."result".")))))); "."\n\n"."?>";
echo "\n\n";
echo $compile;
//SaveEngine
function random_string()
{
    $character_set_array = array();
    $character_set_array[] = array('count' => 8, 'characters' => 'abcdefghijklmnopqrstuvwxyz');
    $character_set_array[] = array('count' => 2, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}

$rand= random_string(0);

mkdir("output");
file_put_contents("output/crypt_".$rand.".php",$compile,FILE_APPEND);







?>