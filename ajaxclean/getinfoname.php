<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
$a[] = "nakib Hossain";
$a[] = "adil reza";
$a[] = "abcd";
$a[] = "abc";
$a[] = "abcde";
$a[] = "abcdefgh";


//normally hints nai

//echo "This is suggestion";

$hints="";
//data nilam index file theke
$q = $_REQUEST["q"];
if($q!=""){
	$q = strtolower($q);
    $len=strlen($q);
	foreach($a as $name)
	{
		if(stristr(substr($name, 0, $len), $q))
		{
			if($hints=="")
				$hints=$name;
			else
				$hints.= ",  ".$name;
			
		}
	}
}
echo $hints === "" ? "no suggestion" : $hints;

?>