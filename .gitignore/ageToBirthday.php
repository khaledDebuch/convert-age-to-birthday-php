
function age_To_Birthday($age) {
	$ageDays = $age * 360; //convert age to days

	$year = $month = $days = 0;
	while($ageDays != 0) {
			if($ageDays > 360) {
				$year = (int)($ageDays/360);
				$ageDays = $ageDays%360;

			} elseif ($ageDays >30) {
				$month = (int)($ageDays/30);
				$ageDays = $ageDays%30;

			} else {
				$days = $ageDays;
				$ageDays = 0;
			}
	}

	// $date = new DateTime('today -150 years -3 month -5 day');
	$date = new DateTime("today -$year years -$month month -$days day");
	$birthday = $date->format('Y-m-d');
	return $birthday;
}
echo age_To_Birthday(28.5)	. "<br>"; //1990-03-08
echo age_To_Birthday(27.3)	. "<br>"; //1991-05-21
echo age_To_Birthday(29)		. "<br>"; //1989-09-08
echo age_To_Birthday(0.5)		. "<br>"; //2018-03-08
echo age_To_Birthday(0.1)		. "<br>"; //2018-08-02
