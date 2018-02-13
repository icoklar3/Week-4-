<?php

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);


echo nl2br ("<br> \n Nubmer 2: ");
$date = str_replace("-", "/", $date);
echo "The modified information: $date";


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
	echo "My String is Hello. The length of the string is ";
	echo strlen("Hello");
}

{
	echo nl2br ("\n Number 7. ");
	echo "My string is Hello. The ASCII value is ";
	echo ord("h");
}


{
	echo nl2br ("\n Number 8. ");
	$last2 = substr($date, -2);
	echo ($last2);
}

{
	echo nl2br ("\n Number 9. ");
	$date2 = array("Year", "Month", "Day");
	echo " " . $date2[0] . "/" . $date2[1] . "/" . $date2[2] . "";
}


//echo strpos("I love php, I love php too!","php", 8);




echo nl2br ("\n <br> Number 10 (Foreach) <br>");
foreach ($year as $value) {
	
switch ($value) 

{
	case ($value%4 == 0 && $value%100 != 0):
		echo "$value : This is most definitely a leap year<br>";
	break;
		case($value%400 == 0):
		echo "$value : This is most definitely also a leap year<br>";
		break;

	default:
			echo "$value : This is definitely not a leap year<br>";
	}


}


echo nl2br ("\n Number 10 (while) <br>");
$i = 0;
while ($i < count($year))

{
    switch ($year[$i]) 

    {

   	case $year[$i]%400 == 0:
        		echo "$year[$i] : This is a leap year<br>";
        break;

    case ($year[$i]%4 == 0 && $year[$i]%100 != 0):
        		echo "$year[$i] : This is definitely a leap year<br>";
        break;

        default:
        		echo "$year[$i] : This is definitely not a leap year<br>";
    }

    $i++;

}


?> 