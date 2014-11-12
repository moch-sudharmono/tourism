<?php
	class Date_lib
	{
		function __construct()
		{}

		function stringDate($date)
		{
			$year = substr($date, 0,4);
			$month = substr($date, 5,2);
			$day = substr($date, 8,2);


			switch ($month) {
				case '01':
					$monthString = 'Jan';
					break;
				case '02':
					$monthString = 'Feb';
					break;
				case '03':
					$monthString = 'Mar';
					break;
				case '04':
					$monthString = 'Apr';
					break;
				case '05':
					$monthString = 'Mei';
					break;
				case '06':
					$monthString = 'Jun';
					break;
				case '07':
					$monthString = 'Jul';
					break;
				case '08':
					$monthString = 'Aug';
					break;
				case '09':
					$monthString = 'Sep';
					break;
				case '10':
					$monthString = 'Oct';
					break;
				case '11':
					$monthString = 'Nov';
					break;
				case '12':
					$monthString = 'Dec';
					break;
				default:
					$monthString = 'undifine';
					break;
			}
			return $day.' '.$monthString.' '.$year;
		}
	}
?>