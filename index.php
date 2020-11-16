<?php


//////////////////////           1            //////////////////////////// 
//1-1
$str = "mary had a little lamb and she loved it so";
$str = mb_strtoupper($str);
echo $str;

echo "<br>";
//1-2
$str = "MARY HAD A LITTLE LAMB AND SHE LOVED IT SO";
$str = strtolower($str);
echo $str;

echo "<br>";
//1-3
$foo = 'mary had a little lamb and she loved it so';
$foo = ucfirst($foo);
echo $foo;

echo "<br>";
//1-4
$foo = 'mary had a little lamb and she loved it so';
$foo = ucwords($foo);
echo $foo;


echo "<br>";
echo "<hr>";
//////////////////////           2            //////////////////////////// 
$str = "082307";
echo chunk_split($str,2,":");
   
echo "<br>";
echo "<hr>";
//////////////////////           3           ////////////////////////////  
$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }

echo "<br>";
echo "<hr>";
//////////////////////           4           //////////////////////////// 
$var = 5;
$items = (string)$var;
echo gettype($items);

echo "<br>";
echo "<hr>";
//////////////////////           5           //////////////////////////// 
$file ='www.example.com/public_html/index.php';
echo basename($file);


echo "<br>";
echo "<hr>";
//////////////////////           6           //////////////////////////// 
$str = "ayham @exammple.com";
echo $str . "<br>";
echo chop($str,"@exammple.com");

echo "<br>";
echo "<hr>";
//////////////////////           7           //////////////////////////// 
$str = "ayham @exammple.com";
echo $str . "<br>";
echo ltrim($str,"ayham @exammple");

echo "<br>";
echo "<hr>";
//////////////////////           8           //////////////////////////// 
$a = 65.45;
$b = 104.35;
echo number_format($a + $b , 2);

echo "<br>";
echo "<hr>";
//////////////////////           9           //////////////////////////// 
function password_generate($chars)
{
$data = 'abcdefghijklmnopqrstyvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
 return substr(str_shuffle($data), 0,$chars);
}
echo password_generate(7)."\n";

echo "<br>";
echo "<hr>";
//////////////////////           10           //////////////////////////// 
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."\n";

echo "<br>";
echo "<hr>";
//////////////////////           11           ////////////////////////////
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");

echo "<br>";
echo "<hr>";
//////////////////////           12           ////////////////////////////
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);

echo "<br>";
echo "<hr>";
//////////////////////           13           ////////////////////////////
$path = 'www.example.com/public_html/index.php';
$file = basename($path, ".php"); 
echo $file."\n";

echo "<br>";
echo "<hr>";
//////////////////////           14           ////////////////////////////
$cha = 'a';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";

echo "<br>";
echo "<hr>";
//////////////////////           15           ////////////////////////////
$sub_string = 'rayy@';
$str = 'rayy@example.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
echo $str."\n";

echo "<br>";
echo "<hr>";
//////////////////////           16           ////////////////////////////
$str = 'rayy@example.com';
echo bin2hex($str)."\n";

echo "<br>";
echo "<hr>";
//////////////////////           17           ////////////////////////////
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";

echo "<br>";
echo "<hr>";
//////////////////////           18           ////////////////////////////
$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0]."\n";

echo "<br>";
echo "<hr>";
//////////////////////           19           ////////////////////////////
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1."\n";

echo "<br>";
echo "<hr>";
//////////////////////           20           ////////////////////////////
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";

echo "<br>";
echo "<hr>";
//////////////////////           21           ////////////////////////////
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";

echo "<br>";
echo "<hr>";
//////////////////////           22           ////////////////////////////
$my_url = 'http://www.example.com/5478631';
echo substr($my_url, strrpos($my_url, '/' )+1)."\n";

echo "<br>";
echo "<hr>";
//////////////////////           23           ////////////////////////////
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";

echo "<br>";
echo "<hr>";
//////////////////////           24           ////////////////////////////
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";

echo "<br>";
echo "<hr>";
//////////////////////           25           ////////////////////////////
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }

echo "<br>";
echo "<hr>";
//////////////////////           26           ////////////////////////////
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n";



?>