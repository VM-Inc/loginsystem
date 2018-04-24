<?php
//  $tempint = 1 ;
//  $x = 0 ;
//  do {
//  if (is_dir($tempint)) {
//    $tempint++ ;
//  } else {
//    mkdir($tempint);
//    $x = 50 ;
//  }
//  } while ($x > 1);



?>
<?php
$x = 1 ;
$y = 1 ;
$checker = is_dir($x) ;
do {
$checker = is_dir($x) ;
if ($checker == true) {
echo 'It is true'.$x.'<br>';
$x++;
}
if ($checker == false ) {
mkdir($x) ;
$y = 8 ;
}
} while ($y >= 7 );
 ?>
<?php
//  $tempint = 1;
//  $indicator = 0 ;

//  $indicator = 1 ;
//  $file = $tempint ;
//  if(is_dir($file))
//    {
//    echo ("$file is a directory");
//    $tempint++;
//    }
//  else
//    {
//    echo ("$file is not a directory");
//    $indicator = 1 ;
//    mkdir("$tempint");
//    }
 ?>
