<?php
$fruits = array('apples' , 'pears', 'pineapples', 'avocados', 'candy');
$alt = array('banana','Almonds');
if ($fruits[0] == 'ap') {
	echo "they are alright";
}
else if ($fruits[2] !== 'banana') 
{
	echo "I want some\r\n";
	print_r( $alt[1] ) ;
}
elseif ($fruits[1] == 'pineapples') 
{
	echo "they kill me";
}
elseif ($fruits[2] =='avocados') {
	echo "is this a fruit";
}
$hello = parse_ini_file('hello.ini');
//if (empty($hello) ) 
//{
//	echo "his is really empty";
//}
//elseif (!empty($hello)) 
//{
//	print_r($hello['TISH']);	
//}
foreach ($hello as $key[0] => $val) {
    print "$key = $val";
}
#foreach ($fruits as $key => $value) {
	#echo $value;
#}
?>