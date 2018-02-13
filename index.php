<?php

$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);



echo nl2br ("\n Nubmer 3: ");
if ($date-$tar > 0) {
	echo "the future";
}
elseif ($date - $tar < 0) {
	echo "the past";
}
elseif ($date - $tar ==0) {
	echo "oops";
}




	//foreach ($date as $date1 => $value) 
{
	echo nl2br ("\n Nubmer 4: ");
	echo ("All positions are as follows: ");
	echo strpos($date, "/");
	echo (" and ");
	echo strpos($date, "/", 5);

		//for ($i=0; $i< ; $i++) { 
			//echo strpos($date, "/");

		//}
}

{
	echo nl2br ("\n Nubmer 5: ");
	echo str_word_count($date);
}

{
	echo nl2br ("\n Number 6. ");
	echo strlen("Hello");
}

{
	echo nl2br ("\n Number 7. ");
	echo ord("h");
}


{
	echo nl2br ("\n Number 8. ");
	$rest = substr($date, -2);
	echo ($rest);
}

{
	echo nl2br ("\n Number 9. ");
	$date2 = array("Year", "Month", "Day");
	echo " " . $date2[0] . "/" . $date2[1] . "/" . $date2[2] . "";
}


//echo strpos("I love php, I love php too!","php", 8);

echo nl2br ("\n Number 10. ");
foreach ($year as $key => $value) {
	switch ($value) {
		case ($value%4 == 0 && $value%100 != 0:
			echo "$value : This is a leap year";
			break;
		
		default:
			# code...
			break;
	}



}





?> 