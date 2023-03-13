<? 
	require_once('simple_html_dom.php');

	$html = file_get_html('http://serge1ye.beget.tech/table.html'); 
	$table = $html->find('.t-small-padding', 0);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Калькулятор</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="calc-form">
		<h2>Калькулятор расходов</h2>
		<form>
			<label>Тип
				<select name="type-auto" id="type_auto">
					<option value="auto">Автомобиль</option>
					<option value="moto">Мотоцикл</option>
					<option value="moto-big">Большой мотоцикл</option>
					<option value="quadro">Квадроцикл</option>
					<option value="baggi">Багги</option>
					<option value="pickup">Пикап/Бус</option>
					<option value="boat">Лодка</option>
					<option value="trailer">Прицеп (в т.ч. к лодке/гидроциклу)</option>
					<option value="trailer-cottage">Прицеп-дача</option>
					<option value="tricycle">Трицикл (2 колеса спереди)</option>
					<option value="snowmobile">Снегоход</option>
					<option value="hydrocycle">Гидроцикл</option>
					<option value="golf-cart">Гольф-кар</option>
				</select>
			</label>
			<label>Стоимость<input type="number" name="price-auto" id="price_auto" min="0"></label>
			<label>Возраст авто, лет
				<select name="age-auto" id="age_auto">
					<option value="age1">До 3-х лет</option>
					<option value="age2">От 3-х до 5-ти лет</option>
					<option value="age3">Более 5-ти лет</option>
				</select>
			</label>
			<label>Объем двигателя<input type="number" name="engine-volume-auto" id="engine_volume_auto" min="0"></label>
			<label>Площадка
				<select name="platform" id="platform">
									<option data-shipping-price_1="400" data-shipping-price_2="350" data-shipping-price_3="900">Abilene</option>
									<option data-shipping-price_1="200" data-shipping-price_2="200" data-shipping-price_3="1525">ACE - Carson</option>
									<option data-shipping-price_1="325" data-shipping-price_2="325" data-shipping-price_3="1525">ACE - Perris</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="825">Adamsburg</option>
									<option data-shipping-price_1="325" data-shipping-price_2="300" data-shipping-price_3="1525">Adelanto</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="825">ADESA Boston</option>
									<option data-shipping-price_1="575" data-shipping-price_2="550" data-shipping-price_3="825">ADESA Great Lakes</option>
									<option data-shipping-price_1="200" data-shipping-price_2="160" data-shipping-price_3="825">ADESA New Jersey</option>
									<option data-shipping-price_1="300" data-shipping-price_2="240" data-shipping-price_3="825">Adesa PA</option>
									<option data-shipping-price_1="600" data-shipping-price_2="550" data-shipping-price_3="1050">ADESA Sioux Falls</option>
									<option data-shipping-price_1="1370" data-shipping-price_2="1250" data-shipping-price_3="950">ADESA St. John`s</option>
									<option data-shipping-price_1="300" data-shipping-price_2="300" data-shipping-price_3="1050">ADESA Wisconsin</option>
									<option data-shipping-price_1="600" data-shipping-price_2="350" data-shipping-price_3="825">Akron-Canton</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Albany</option>
									<option data-shipping-price_1="650" data-shipping-price_2="450" data-shipping-price_3="900">Albuquerque</option>
									<option data-shipping-price_1="500" data-shipping-price_2="375" data-shipping-price_3="825">Altoona</option>
									<option data-shipping-price_1="575" data-shipping-price_2="425" data-shipping-price_3="900">Amarillo</option>
									<option data-shipping-price_1="230" data-shipping-price_2="200" data-shipping-price_3="1525">Anaheim</option>
									<option data-shipping-price_1="1900" data-shipping-price_2="1485" data-shipping-price_3="2000">Anchorage</option>
									<option data-shipping-price_1="475" data-shipping-price_2="400" data-shipping-price_3="900">Andrews</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="1525">Antelope</option>
									<option data-shipping-price_1="375" data-shipping-price_2="250" data-shipping-price_3="1050">Appleton</option>
									<option data-shipping-price_1="400" data-shipping-price_2="400" data-shipping-price_3="1525">Arizona Auto Auction </option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="825">Asheville</option>
									<option data-shipping-price_1="550" data-shipping-price_2="450" data-shipping-price_3="1050">Ashland</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Atlanta Auto Auction</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Atlanta East</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Atlanta North</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Atlanta South</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Atlanta West</option>
									<option data-shipping-price_1="300" data-shipping-price_2="215" data-shipping-price_3="825">Augusta</option>
									<option data-shipping-price_1="300" data-shipping-price_2="225" data-shipping-price_3="900">Austin</option>
									<option data-shipping-price_1="200" data-shipping-price_2="175" data-shipping-price_3="825">Avenel New Jersey</option>
									<option data-shipping-price_1="350" data-shipping-price_2="250" data-shipping-price_3="1525">Bakersfield</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Baltimore</option>
									<option data-shipping-price_1="425" data-shipping-price_2="375" data-shipping-price_3="825">Bangor</option>
									<option data-shipping-price_1="350" data-shipping-price_2="300" data-shipping-price_3="900">Baton Rouge</option>
									<option data-shipping-price_1="350" data-shipping-price_2="300" data-shipping-price_3="1525">Bay Area</option>
									<option data-shipping-price_1="425" data-shipping-price_2="425" data-shipping-price_3="825">Bel-Air Auto Auction</option>
									<option data-shipping-price_1="850" data-shipping-price_2="850" data-shipping-price_3="2000">Billings</option>
									<option data-shipping-price_1="400" data-shipping-price_2="350" data-shipping-price_3="825">Birmingham</option>
									<option data-shipping-price_1="500" data-shipping-price_2="450" data-shipping-price_3="2000">Boise</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="825">Boston</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="825">Boston - Shirley</option>
									<option data-shipping-price_1="475" data-shipping-price_2="410" data-shipping-price_3="1050">Bowling Green</option>
									<option data-shipping-price_1="270" data-shipping-price_2="200" data-shipping-price_3="825">Bridgeport</option>
									<option data-shipping-price_1="200" data-shipping-price_2="200" data-shipping-price_3="1050">Bridgeview</option>
									<option data-shipping-price_1="625" data-shipping-price_2="500" data-shipping-price_3="825">Buckhannon</option>
									<option data-shipping-price_1="550" data-shipping-price_2="425" data-shipping-price_3="825">Buffalo</option>
									<option data-shipping-price_1="525" data-shipping-price_2="450" data-shipping-price_3="825">Burlington</option>
									<option data-shipping-price_1="1200" data-shipping-price_2="1200" data-shipping-price_3="950">Calgary</option>
									<option data-shipping-price_1="425" data-shipping-price_2="330" data-shipping-price_3="825">Candia</option>
									<option data-shipping-price_1="350" data-shipping-price_2="300" data-shipping-price_3="825">Cartersville</option>
									<option data-shipping-price_1="1250" data-shipping-price_2="1050" data-shipping-price_3="2000">Casper</option>
									<option data-shipping-price_1="250" data-shipping-price_2="250" data-shipping-price_3="825">Central Auto Auction</option>
									<option data-shipping-price_1="225" data-shipping-price_2="175" data-shipping-price_3="825">Central New Jersey</option>
									<option data-shipping-price_1="400" data-shipping-price_2="350" data-shipping-price_3="825">Chambersburg</option>
									<option data-shipping-price_1="325" data-shipping-price_2="250" data-shipping-price_3="825">Charleston - SC</option>
									<option data-shipping-price_1="625" data-shipping-price_2="500" data-shipping-price_3="825">Charleston - WV</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Charlotte</option>
									<option data-shipping-price_1="400" data-shipping-price_2="310" data-shipping-price_3="825">Chattanooga</option>
									<option data-shipping-price_1="200" data-shipping-price_2="180" data-shipping-price_3="1050">Chicago North</option>
									<option data-shipping-price_1="230" data-shipping-price_2="180" data-shipping-price_3="1050">Chicago South</option>
									<option data-shipping-price_1="200" data-shipping-price_2="180" data-shipping-price_3="1050">Chicago West</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">China Grove</option>
									<option data-shipping-price_1="425" data-shipping-price_2="250" data-shipping-price_3="1050">Cicero</option>
									<option data-shipping-price_1="600" data-shipping-price_2="370" data-shipping-price_3="825">Cincinnati</option>
									<option data-shipping-price_1="325" data-shipping-price_2="265" data-shipping-price_3="825">Clayton</option>
									<option data-shipping-price_1="325" data-shipping-price_2="260" data-shipping-price_3="825">Clearwater</option>
									<option data-shipping-price_1="600" data-shipping-price_2="350" data-shipping-price_3="825">Cleveland</option>
									<option data-shipping-price_1="550" data-shipping-price_2="400" data-shipping-price_3="825">Cleveland East</option>
									<option data-shipping-price_1="550" data-shipping-price_2="400" data-shipping-price_3="825">Cleveland West</option>
									<option data-shipping-price_1="480" data-shipping-price_2="315" data-shipping-price_3="825">Clinton</option>
									<option data-shipping-price_1="700" data-shipping-price_2="600" data-shipping-price_3="1525">Colorado Springs</option>
									<option data-shipping-price_1="420" data-shipping-price_2="350" data-shipping-price_3="1050">Columbia MO</option>
									<option data-shipping-price_1="325" data-shipping-price_2="250" data-shipping-price_3="825">Columbia SC</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="825">Columbus AL</option>
									<option data-shipping-price_1="600" data-shipping-price_2="350" data-shipping-price_3="825">Columbus OH</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Concord</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="900">Corpus Christi</option>
									<option data-shipping-price_1="400" data-shipping-price_2="310" data-shipping-price_3="825">Culpeper,VA</option>
									<option data-shipping-price_1="325" data-shipping-price_2="235" data-shipping-price_3="900">Dallas</option>
									<option data-shipping-price_1="325" data-shipping-price_2="235" data-shipping-price_3="900">Dallas South</option>
									<option data-shipping-price_1="425" data-shipping-price_2="330" data-shipping-price_3="825">Danville</option>
									<option data-shipping-price_1="375" data-shipping-price_2="275" data-shipping-price_3="1050">Davenport</option>
									<option data-shipping-price_1="600" data-shipping-price_2="350" data-shipping-price_3="825">Dayton</option>
									<option data-shipping-price_1="350" data-shipping-price_2="340" data-shipping-price_3="825">Defuniak Springs</option>
									<option data-shipping-price_1="700" data-shipping-price_2="500" data-shipping-price_3="900">Denver</option>
									<option data-shipping-price_1="700" data-shipping-price_2="500" data-shipping-price_3="900">Denver South</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="1050">Des Moines</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="1050">Detroit</option>
									<option data-shipping-price_1="400" data-shipping-price_2="350" data-shipping-price_3="825">Dothan</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Dundalk</option>
									<option data-shipping-price_1="200" data-shipping-price_2="180" data-shipping-price_3="1050">Dyer</option>
									<option data-shipping-price_1="585" data-shipping-price_2="425" data-shipping-price_3="825">Earlington</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="1525">East Bay</option>
									<option data-shipping-price_1="450" data-shipping-price_2="400" data-shipping-price_3="825">East NC</option>
									<option data-shipping-price_1="1200" data-shipping-price_2="1200" data-shipping-price_3="950">Edmonton</option>
									<option data-shipping-price_1="475" data-shipping-price_2="425" data-shipping-price_3="900">El Paso</option>
									<option data-shipping-price_1="375" data-shipping-price_2="275" data-shipping-price_3="1050">Eldridge</option>
									<option data-shipping-price_1="225" data-shipping-price_2="180" data-shipping-price_3="825">Englishtown</option>
									<option data-shipping-price_1="550" data-shipping-price_2="400" data-shipping-price_3="825">Erie</option>
									<option data-shipping-price_1="365" data-shipping-price_2="250" data-shipping-price_3="825">Essex</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="2000">Eugene</option>
									<option data-shipping-price_1="400" data-shipping-price_2="300" data-shipping-price_3="825">Exeter</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Fairburn</option>
									<option data-shipping-price_1="650" data-shipping-price_2="550" data-shipping-price_3="1050">Fargo</option>
									<option data-shipping-price_1="525" data-shipping-price_2="425" data-shipping-price_3="900">Fayetteville</option>
									<option data-shipping-price_1="475" data-shipping-price_2="325" data-shipping-price_3="1050">Flint</option>
									<option data-shipping-price_1="300" data-shipping-price_2="265" data-shipping-price_3="825">Florence</option>
									<option data-shipping-price_1="230" data-shipping-price_2="230" data-shipping-price_3="1525">Fontana</option>
									<option data-shipping-price_1="325" data-shipping-price_2="280" data-shipping-price_3="825">Fort Myers</option>
									<option data-shipping-price_1="350" data-shipping-price_2="250" data-shipping-price_3="1050">Fort Wayne</option>
									<option data-shipping-price_1="325" data-shipping-price_2="235" data-shipping-price_3="900">Fort Worth North</option>
									<option data-shipping-price_1="250" data-shipping-price_2="225" data-shipping-price_3="825">Four Oaks, NC</option>
									<option data-shipping-price_1="375" data-shipping-price_2="310" data-shipping-price_3="825">Fredericksburg-South</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="825">Freetown</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="1525">Fremont</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="1525">Fresno</option>
									<option data-shipping-price_1="400" data-shipping-price_2="280" data-shipping-price_3="825">Ft. Pierce</option>
									<option data-shipping-price_1="325" data-shipping-price_2="235" data-shipping-price_3="900">Ft. Worth</option>
									<option data-shipping-price_1="280" data-shipping-price_2="265" data-shipping-price_3="825">Ft.Lauderdale</option>
									<option data-shipping-price_1="350" data-shipping-price_2="300" data-shipping-price_3="825">Gastonia</option>
									<option data-shipping-price_1="250" data-shipping-price_2="215" data-shipping-price_3="825">Glassboro East</option>
									<option data-shipping-price_1="250" data-shipping-price_2="215" data-shipping-price_3="825">Glassboro West</option>
									<option data-shipping-price_1="375" data-shipping-price_2="290" data-shipping-price_3="1525">Golden Gate</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="1050">Gr.Rapids</option>
									<option data-shipping-price_1="175" data-shipping-price_2="150" data-shipping-price_3="2000">Graham</option>
									<option data-shipping-price_1="750" data-shipping-price_2="650" data-shipping-price_3="825">Grand Island</option>
									<option data-shipping-price_1="300" data-shipping-price_2="250" data-shipping-price_3="825">Grantville</option>
									<option data-shipping-price_1="400" data-shipping-price_2="400" data-shipping-price_3="1525">Greater Auto Auction Phoenix </option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Greensboro</option>
									<option data-shipping-price_1="300" data-shipping-price_2="275" data-shipping-price_3="825">Greenville</option>
									<option data-shipping-price_1="325" data-shipping-price_2="250" data-shipping-price_3="825">Greer</option>
									<option data-shipping-price_1="475" data-shipping-price_2="400" data-shipping-price_3="825">Grenada</option>
									<option data-shipping-price_1="375" data-shipping-price_2="375" data-shipping-price_3="825">Gulf Coast</option>
									<option data-shipping-price_1="400" data-shipping-price_2="285" data-shipping-price_3="825">Gulfport</option>
									<option data-shipping-price_1="1000" data-shipping-price_2="1000" data-shipping-price_3="950">Halifax</option>
									<option data-shipping-price_1="200" data-shipping-price_2="200" data-shipping-price_3="950">Hamilton</option>
									<option data-shipping-price_1="200" data-shipping-price_2="180" data-shipping-price_3="1050">Hammond</option>
									<option data-shipping-price_1="400" data-shipping-price_2="400" data-shipping-price_3="950">Hampton</option>
									<option data-shipping-price_1="400" data-shipping-price_2="310" data-shipping-price_3="825">Hampton, VA</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Harrisburg</option>
									<option data-shipping-price_1="275" data-shipping-price_2="225" data-shipping-price_3="825">Hartford</option>
									<option data-shipping-price_1="250" data-shipping-price_2="250" data-shipping-price_3="1050">Hartford City</option>
									<option data-shipping-price_1="275" data-shipping-price_2="225" data-shipping-price_3="825">Hartford-South</option>
									<option data-shipping-price_1="1040" data-shipping-price_2="950" data-shipping-price_3="1050">Hatward</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="1525">Hayward</option>
									<option data-shipping-price_1="750" data-shipping-price_2="750" data-shipping-price_3="2000">Helena</option>
									<option data-shipping-price_1="350" data-shipping-price_2="300" data-shipping-price_3="1525">High Desert</option>
									<option data-shipping-price_1="1650" data-shipping-price_2="1250" data-shipping-price_3="1525">Honolulu</option>
									<option data-shipping-price_1="250" data-shipping-price_2="200" data-shipping-price_3="900">Houston</option>
									<option data-shipping-price_1="250" data-shipping-price_2="200" data-shipping-price_3="900">Houston-North</option>
									<option data-shipping-price_1="450" data-shipping-price_2="400" data-shipping-price_3="825">Huntsville</option>
									<option data-shipping-price_1="300" data-shipping-price_2="250" data-shipping-price_3="1050">Indianapolis</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="1050">Ionia</option>
									<option data-shipping-price_1="425" data-shipping-price_2="350" data-shipping-price_3="825">Jackson</option>
									<option data-shipping-price_1="275" data-shipping-price_2="225" data-shipping-price_3="825">Jacksonville</option>
									<option data-shipping-price_1="275" data-shipping-price_2="225" data-shipping-price_3="825">Jacksonville East</option>
									<option data-shipping-price_1="275" data-shipping-price_2="225" data-shipping-price_3="825">Jacksonville West</option>
									<option data-shipping-price_1="600" data-shipping-price_2="400" data-shipping-price_3="825">Kansas City</option>
									<option data-shipping-price_1="800" data-shipping-price_2="690" data-shipping-price_3="1050">Kincheloe</option>
									<option data-shipping-price_1="450" data-shipping-price_2="400" data-shipping-price_3="825">Knoxville</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="900">Lafayette</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="1050">Lansing</option>
									<option data-shipping-price_1="350" data-shipping-price_2="300" data-shipping-price_3="1525">Las Vegas</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Laurel</option>
									<option data-shipping-price_1="475" data-shipping-price_2="325" data-shipping-price_3="1050">Lexington East KY</option>
									<option data-shipping-price_1="350" data-shipping-price_2="300" data-shipping-price_3="825">Lexington SC</option>
									<option data-shipping-price_1="475" data-shipping-price_2="325" data-shipping-price_3="1050">Lexington West KY</option>
									<option data-shipping-price_1="350" data-shipping-price_2="250" data-shipping-price_3="1050">Lincoln, IL</option>
									<option data-shipping-price_1="500" data-shipping-price_2="325" data-shipping-price_3="1050">Lincoln, NE</option>
									<option data-shipping-price_1="500" data-shipping-price_2="400" data-shipping-price_3="900">Little Rock</option>
									<option data-shipping-price_1="275" data-shipping-price_2="275" data-shipping-price_3="950">London</option>
									<option data-shipping-price_1="180" data-shipping-price_2="180" data-shipping-price_3="1525">Long Beach</option>
									<option data-shipping-price_1="300" data-shipping-price_2="240" data-shipping-price_3="825">Long Island</option>
									<option data-shipping-price_1="325" data-shipping-price_2="250" data-shipping-price_3="900">Longview</option>
									<option data-shipping-price_1="200" data-shipping-price_2="200" data-shipping-price_3="1525">Los Angeles</option>
									<option data-shipping-price_1="200" data-shipping-price_2="200" data-shipping-price_3="1525">Los Angeles - Adesa</option>
									<option data-shipping-price_1="475" data-shipping-price_2="325" data-shipping-price_3="1050">Louisville</option>
									<option data-shipping-price_1="500" data-shipping-price_2="400" data-shipping-price_3="900">Lubbock</option>
									<option data-shipping-price_1="325" data-shipping-price_2="250" data-shipping-price_3="900">Lufkin</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Lumberton</option>
									<option data-shipping-price_1="475" data-shipping-price_2="400" data-shipping-price_3="825">Lyman</option>
									<option data-shipping-price_1="300" data-shipping-price_2="225" data-shipping-price_3="825">Macon</option>
									<option data-shipping-price_1="350" data-shipping-price_2="250" data-shipping-price_3="1050">Madison</option>
									<option data-shipping-price_1="420" data-shipping-price_2="300" data-shipping-price_3="825">Madison Heights</option>
									<option data-shipping-price_1="400" data-shipping-price_2="325" data-shipping-price_3="825">Manchester</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Manheim Albany</option>
									<option data-shipping-price_1="200" data-shipping-price_2="180" data-shipping-price_3="1050">Manheim Arena Illinois</option>
									<option data-shipping-price_1="280" data-shipping-price_2="280" data-shipping-price_3="825">Manheim Auto Auction</option>
									<option data-shipping-price_1="300" data-shipping-price_2="240" data-shipping-price_3="825">Manheim Baltimore-Washington</option>
									<option data-shipping-price_1="240" data-shipping-price_2="240" data-shipping-price_3="825">Manheim Bishop Brothers</option>
									<option data-shipping-price_1="220" data-shipping-price_2="180" data-shipping-price_3="1525">Manheim California</option>
									<option data-shipping-price_1="525" data-shipping-price_2="525" data-shipping-price_3="825">Manheim Carleton</option>
									<option data-shipping-price_1="300" data-shipping-price_2="240" data-shipping-price_3="1525">Manheim Central California</option>
									<option data-shipping-price_1="275" data-shipping-price_2="240" data-shipping-price_3="825">Manheim Central Florida</option>
									<option data-shipping-price_1="200" data-shipping-price_2="180" data-shipping-price_3="1050">Manheim Chicago</option>
									<option data-shipping-price_1="600" data-shipping-price_2="370" data-shipping-price_3="825">Manheim Cincinnati</option>
									<option data-shipping-price_1="500" data-shipping-price_2="475" data-shipping-price_3="1050">Manheim Colorado</option>
									<option data-shipping-price_1="325" data-shipping-price_2="235" data-shipping-price_3="900">Manheim Dallas</option>
									<option data-shipping-price_1="325" data-shipping-price_2="235" data-shipping-price_3="900">Manheim Dallas-Ft Worth</option>
									<option data-shipping-price_1="275" data-shipping-price_2="220" data-shipping-price_3="825">Manheim Darlington</option>
									<option data-shipping-price_1="325" data-shipping-price_2="260" data-shipping-price_3="825">Manheim Daytona Beach</option>
									<option data-shipping-price_1="700" data-shipping-price_2="500" data-shipping-price_3="900">Manheim Denver</option>
									<option data-shipping-price_1="650" data-shipping-price_2="450" data-shipping-price_3="825">Manheim Detroit</option>
									<option data-shipping-price_1="280" data-shipping-price_2="265" data-shipping-price_3="825">Manheim Fort Lauderdale</option>
									<option data-shipping-price_1="300" data-shipping-price_2="220" data-shipping-price_3="825">Manheim Fort Myers</option>
									<option data-shipping-price_1="350" data-shipping-price_2="250" data-shipping-price_3="1050">Manheim Fort Wayne</option>
									<option data-shipping-price_1="375" data-shipping-price_2="260" data-shipping-price_3="825">Manheim Fredericksburg</option>
									<option data-shipping-price_1="300" data-shipping-price_2="220" data-shipping-price_3="825">Manheim Georgia</option>
									<option data-shipping-price_1="400" data-shipping-price_2="325" data-shipping-price_3="825">Manheim Harrisonburg</option>
									<option data-shipping-price_1="300" data-shipping-price_2="300" data-shipping-price_3="825">Manheim Imperial Auto Auction</option>
									<option data-shipping-price_1="600" data-shipping-price_2="600" data-shipping-price_3="825">Manheim Kentucky</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="900">Manheim Lafayette</option>
									<option data-shipping-price_1="300" data-shipping-price_2="300" data-shipping-price_3="825">Manheim Lakeland</option>
									<option data-shipping-price_1="275" data-shipping-price_2="225" data-shipping-price_3="1050">Manheim Metro Milwaukee</option>
									<option data-shipping-price_1="275" data-shipping-price_2="225" data-shipping-price_3="1050">Manheim Milwaukee</option>
									<option data-shipping-price_1="375" data-shipping-price_2="290" data-shipping-price_3="825">Manheim Mississippi</option>
									<option data-shipping-price_1="425" data-shipping-price_2="375" data-shipping-price_3="1050">Manheim Missouri</option>
									<option data-shipping-price_1="400" data-shipping-price_2="400" data-shipping-price_3="950">Manheim Montreal</option>
									<option data-shipping-price_1="400" data-shipping-price_2="290" data-shipping-price_3="825">Manheim Nashville</option>
									<option data-shipping-price_1="325" data-shipping-price_2="260" data-shipping-price_3="1525">Manheim Nevada</option>
									<option data-shipping-price_1="400" data-shipping-price_2="250" data-shipping-price_3="825">Manheim New England</option>
									<option data-shipping-price_1="200" data-shipping-price_2="150" data-shipping-price_3="825">Manheim New Jersey</option>
									<option data-shipping-price_1="575" data-shipping-price_2="370" data-shipping-price_3="900">Manheim New Mexico</option>
									<option data-shipping-price_1="475" data-shipping-price_2="425" data-shipping-price_3="825">Manheim New Orleans</option>
									<option data-shipping-price_1="300" data-shipping-price_2="240" data-shipping-price_3="825">Manheim New York</option>
									<option data-shipping-price_1="325" data-shipping-price_2="260" data-shipping-price_3="825">Manheim North Carolina</option>
									<option data-shipping-price_1="400" data-shipping-price_2="300" data-shipping-price_3="1050">Manheim Northstar Minnesota</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="825">Manheim Ohio</option>
									<option data-shipping-price_1="400" data-shipping-price_2="310" data-shipping-price_3="900">Manheim Oklahoma City</option>
									<option data-shipping-price_1="300" data-shipping-price_2="250" data-shipping-price_3="825">Manheim Orlando</option>
									<option data-shipping-price_1="175" data-shipping-price_2="175" data-shipping-price_3="950">Manheim Oshawa</option>
									<option data-shipping-price_1="300" data-shipping-price_2="250" data-shipping-price_3="825">MANHEIM PALM BEACH</option>
									<option data-shipping-price_1="250" data-shipping-price_2="225" data-shipping-price_3="825">Manheim Pennsylvania</option>
									<option data-shipping-price_1="375" data-shipping-price_2="260" data-shipping-price_3="825">Manheim Pensacola</option>
									<option data-shipping-price_1="270" data-shipping-price_2="190" data-shipping-price_3="825">Manheim Philadelphia</option>
									<option data-shipping-price_1="400" data-shipping-price_2="300" data-shipping-price_3="1525">Manheim Phoenix</option>
									<option data-shipping-price_1="450" data-shipping-price_2="375" data-shipping-price_3="825">Manheim Pittsburg</option>
									<option data-shipping-price_1="225" data-shipping-price_2="180" data-shipping-price_3="1525">Manheim Riverside</option>
									<option data-shipping-price_1="350" data-shipping-price_2="240" data-shipping-price_3="900">Manheim San Antonio</option>
									<option data-shipping-price_1="215" data-shipping-price_2="190" data-shipping-price_3="1525">Manheim San Diego</option>
									<option data-shipping-price_1="350" data-shipping-price_2="280" data-shipping-price_3="1525">Manheim San Francisco Bay</option>
									<option data-shipping-price_1="225" data-shipping-price_2="200" data-shipping-price_3="2000">Manheim Seattle</option>
									<option data-shipping-price_1="150" data-shipping-price_2="150" data-shipping-price_3="825">Manheim Skyline Auto Auction</option>
									<option data-shipping-price_1="225" data-shipping-price_2="160" data-shipping-price_3="1525">Manheim Southern California</option>
									<option data-shipping-price_1="525" data-shipping-price_2="410" data-shipping-price_3="825">Manheim St Louis</option>
									<option data-shipping-price_1="300" data-shipping-price_2="300" data-shipping-price_3="825">Manheim St. Pete</option>
									<option data-shipping-price_1="300" data-shipping-price_2="240" data-shipping-price_3="700">Manheim Statesville</option>
									<option data-shipping-price_1="290" data-shipping-price_2="225" data-shipping-price_3="825">MANHEIM TAMPA</option>
									<option data-shipping-price_1="450" data-shipping-price_2="450" data-shipping-price_3="825">Manheim Tennessee</option>
									<option data-shipping-price_1="150" data-shipping-price_2="150" data-shipping-price_3="900">Manheim Texas Hobby</option>
									<option data-shipping-price_1="175" data-shipping-price_2="175" data-shipping-price_3="950">Manheim Toronto</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="1525">Manheim Tucson</option>
									<option data-shipping-price_1="425" data-shipping-price_2="330" data-shipping-price_3="1525">Manheim Utah</option>
									<option data-shipping-price_1="375" data-shipping-price_2="260" data-shipping-price_3="825">Manheim Virginia (FREDERICKSBURG)</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="1525">Martinez</option>
									<option data-shipping-price_1="400" data-shipping-price_2="335" data-shipping-price_3="900">MCAllen</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Mebane</option>
									<option data-shipping-price_1="500" data-shipping-price_2="425" data-shipping-price_3="825">Memphis</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Metro DC</option>
									<option data-shipping-price_1="400" data-shipping-price_2="240" data-shipping-price_3="825">Miami</option>
									<option data-shipping-price_1="400" data-shipping-price_2="240" data-shipping-price_3="825">Miami Central</option>
									<option data-shipping-price_1="400" data-shipping-price_2="240" data-shipping-price_3="825">Miami North</option>
									<option data-shipping-price_1="400" data-shipping-price_2="240" data-shipping-price_3="825">Miami South</option>
									<option data-shipping-price_1="325" data-shipping-price_2="240" data-shipping-price_3="825">Middletown</option>
									<option data-shipping-price_1="275" data-shipping-price_2="225" data-shipping-price_3="1050">Milwaukee</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="1050">Minneapolis</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="1050">Minneapolis /St. Paul</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="1050">Minneapolis North</option>
									<option data-shipping-price_1="650" data-shipping-price_2="725" data-shipping-price_3="2000">Missoula</option>
									<option data-shipping-price_1="450" data-shipping-price_2="400" data-shipping-price_3="825">Mobile</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Mocksville</option>
									<option data-shipping-price_1="1000" data-shipping-price_2="1000" data-shipping-price_3="950">Moncton</option>
									<option data-shipping-price_1="450" data-shipping-price_2="325" data-shipping-price_3="825">Montgomery</option>
									<option data-shipping-price_1="400" data-shipping-price_2="400" data-shipping-price_3="950">Montreal</option>
									<option data-shipping-price_1="450" data-shipping-price_2="375" data-shipping-price_3="825">Nashville</option>
									<option data-shipping-price_1="170" data-shipping-price_2="160" data-shipping-price_3="825">National Auto Dealers Exchange</option>
									<option data-shipping-price_1="300" data-shipping-price_2="275" data-shipping-price_3="825">New Castle</option>
									<option data-shipping-price_1="475" data-shipping-price_2="425" data-shipping-price_3="825">New Orleans</option>
									<option data-shipping-price_1="275" data-shipping-price_2="225" data-shipping-price_3="825">Newburgh</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="825">North Boston</option>
									<option data-shipping-price_1="325" data-shipping-price_2="250" data-shipping-price_3="825">North Charleston - SC</option>
									<option data-shipping-price_1="230" data-shipping-price_2="230" data-shipping-price_3="1525">North Hollywood</option>
									<option data-shipping-price_1="225" data-shipping-price_2="200" data-shipping-price_3="2000">North Seattle</option>
									<option data-shipping-price_1="210" data-shipping-price_2="190" data-shipping-price_3="825">Northern New Jersey</option>
									<option data-shipping-price_1="325" data-shipping-price_2="250" data-shipping-price_3="825">Northern Virginia</option>
									<option data-shipping-price_1="325" data-shipping-price_2="300" data-shipping-price_3="825">Ocala</option>
									<option data-shipping-price_1="600" data-shipping-price_2="550" data-shipping-price_3="1525">Ogden</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="900">Oklahoma City</option>
									<option data-shipping-price_1="500" data-shipping-price_2="350" data-shipping-price_3="1050">Omaha</option>
									<option data-shipping-price_1="300" data-shipping-price_2="250" data-shipping-price_3="825">Orlando</option>
									<option data-shipping-price_1="300" data-shipping-price_2="250" data-shipping-price_3="825">Orlando North</option>
									<option data-shipping-price_1="300" data-shipping-price_2="250" data-shipping-price_3="825">Orlando South</option>
									<option data-shipping-price_1="375" data-shipping-price_2="375" data-shipping-price_3="950">Ottawa</option>
									<option data-shipping-price_1="525" data-shipping-price_2="395" data-shipping-price_3="1050">Paducah</option>
									<option data-shipping-price_1="400" data-shipping-price_2="250" data-shipping-price_3="2000">Pasco</option>
									<option data-shipping-price_1="425" data-shipping-price_2="260" data-shipping-price_3="825">Pensacola</option>
									<option data-shipping-price_1="350" data-shipping-price_2="250" data-shipping-price_3="1050">Peoria</option>
									<option data-shipping-price_1="500" data-shipping-price_2="400" data-shipping-price_3="900">Permian Basin</option>
									<option data-shipping-price_1="270" data-shipping-price_2="190" data-shipping-price_3="825">Philadelphia</option>
									<option data-shipping-price_1="270" data-shipping-price_2="190" data-shipping-price_3="825">Philadelphia East</option>
									<option data-shipping-price_1="400" data-shipping-price_2="300" data-shipping-price_3="1525">Phoenix</option>
									<option data-shipping-price_1="450" data-shipping-price_2="375" data-shipping-price_3="825">Pittsburg</option>
									<option data-shipping-price_1="500" data-shipping-price_2="375" data-shipping-price_3="825">Pittsburgh South</option>
									<option data-shipping-price_1="225" data-shipping-price_2="195" data-shipping-price_3="825">Port Murray</option>
									<option data-shipping-price_1="350" data-shipping-price_2="250" data-shipping-price_3="1050">Portage</option>
									<option data-shipping-price_1="275" data-shipping-price_2="275" data-shipping-price_3="2000">Portland</option>
									<option data-shipping-price_1="475" data-shipping-price_2="400" data-shipping-price_3="825">Portland - Gorham</option>
									<option data-shipping-price_1="300" data-shipping-price_2="275" data-shipping-price_3="2000">Portland North</option>
									<option data-shipping-price_1="300" data-shipping-price_2="275" data-shipping-price_3="2000">Portland South</option>
									<option data-shipping-price_1="300" data-shipping-price_2="275" data-shipping-price_3="2000">Portland West</option>
									<option data-shipping-price_1="400" data-shipping-price_2="300" data-shipping-price_3="825">Providence</option>
									<option data-shipping-price_1="425" data-shipping-price_2="375" data-shipping-price_3="825">Pulaski</option>
									<option data-shipping-price_1="350" data-shipping-price_2="280" data-shipping-price_3="825">Punta Gorda</option>
									<option data-shipping-price_1="225" data-shipping-price_2="200" data-shipping-price_3="2000">Puyallup</option>
									<option data-shipping-price_1="600" data-shipping-price_2="600" data-shipping-price_3="950">Quebec</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Raleigh</option>
									<option data-shipping-price_1="230" data-shipping-price_2="230" data-shipping-price_3="1525">Rancho Cucamonga</option>
									<option data-shipping-price_1="700" data-shipping-price_2="600" data-shipping-price_3="1525">Redding</option>
									<option data-shipping-price_1="600" data-shipping-price_2="450" data-shipping-price_3="1525">Reno</option>
									<option data-shipping-price_1="400" data-shipping-price_2="310" data-shipping-price_3="825">Richmond</option>
									<option data-shipping-price_1="230" data-shipping-price_2="200" data-shipping-price_3="1525">Riverside</option>
									<option data-shipping-price_1="475" data-shipping-price_2="350" data-shipping-price_3="825">Roanoke</option>
									<option data-shipping-price_1="500" data-shipping-price_2="400" data-shipping-price_3="825">Rochester</option>
									<option data-shipping-price_1="375" data-shipping-price_2="325" data-shipping-price_3="825">Rosedale</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="1525">Sacramento</option>
									<option data-shipping-price_1="350" data-shipping-price_2="275" data-shipping-price_3="825">Salisbury</option>
									<option data-shipping-price_1="700" data-shipping-price_2="600" data-shipping-price_3="1525">Salt Lake City</option>
									<option data-shipping-price_1="350" data-shipping-price_2="250" data-shipping-price_3="900">San Antonio</option>
									<option data-shipping-price_1="250" data-shipping-price_2="250" data-shipping-price_3="1525">San Bernardino</option>
									<option data-shipping-price_1="250" data-shipping-price_2="200" data-shipping-price_3="1525">San Diego</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="1525">San Jose</option>
									<option data-shipping-price_1="300" data-shipping-price_2="215" data-shipping-price_3="825">Sarasota</option>
									<option data-shipping-price_1="150" data-shipping-price_2="150" data-shipping-price_3="825">Savannah</option>
									<option data-shipping-price_1="200" data-shipping-price_2="150" data-shipping-price_3="825">Sayreville</option>
									<option data-shipping-price_1="300" data-shipping-price_2="225" data-shipping-price_3="825">Scranton</option>
									<option data-shipping-price_1="375" data-shipping-price_2="300" data-shipping-price_3="825">Seaford</option>
									<option data-shipping-price_1="225" data-shipping-price_2="200" data-shipping-price_3="2000">Seattle</option>
									<option data-shipping-price_1="625" data-shipping-price_2="500" data-shipping-price_3="825">Shady Spring, WV</option>
									<option data-shipping-price_1="365" data-shipping-price_2="305" data-shipping-price_3="900">Shreveport</option>
									<option data-shipping-price_1="475" data-shipping-price_2="325" data-shipping-price_3="1050">Sikeston</option>
									<option data-shipping-price_1="600" data-shipping-price_2="550" data-shipping-price_3="1050">Sioux Falls</option>
									<option data-shipping-price_1="450" data-shipping-price_2="300" data-shipping-price_3="1525">So Sacramento</option>
									<option data-shipping-price_1="210" data-shipping-price_2="160" data-shipping-price_3="825">Somerville</option>
									<option data-shipping-price_1="300" data-shipping-price_2="200" data-shipping-price_3="1050">South Bend</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="825">South Boston</option>
									<option data-shipping-price_1="575" data-shipping-price_2="410" data-shipping-price_3="825">Southern Illinois</option>
									<option data-shipping-price_1="250" data-shipping-price_2="215" data-shipping-price_3="825">Southern New Jersey</option>
									<option data-shipping-price_1="325" data-shipping-price_2="250" data-shipping-price_3="825">Spartanburg</option>
									<option data-shipping-price_1="400" data-shipping-price_2="250" data-shipping-price_3="2000">Spokane</option>
									<option data-shipping-price_1="600" data-shipping-price_2="410" data-shipping-price_3="825">Springfield</option>
									<option data-shipping-price_1="1370" data-shipping-price_2="1250" data-shipping-price_3="950">St Johns</option>
									<option data-shipping-price_1="450" data-shipping-price_2="400" data-shipping-price_3="1050">St. Cloud</option>
									<option data-shipping-price_1="575" data-shipping-price_2="410" data-shipping-price_3="825">St. Louis, IL</option>
									<option data-shipping-price_1="575" data-shipping-price_2="410" data-shipping-price_3="825">St. Louis, MO</option>
									<option data-shipping-price_1="450" data-shipping-price_2="450" data-shipping-price_3="950">Sudbury</option>
									<option data-shipping-price_1="400" data-shipping-price_2="310" data-shipping-price_3="825">Suffolk</option>
									<option data-shipping-price_1="230" data-shipping-price_2="200" data-shipping-price_3="1525">Sun Valley</option>
									<option data-shipping-price_1="375" data-shipping-price_2="325" data-shipping-price_3="825">Syracuse</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">Tallahassee</option>
									<option data-shipping-price_1="325" data-shipping-price_2="260" data-shipping-price_3="825">Tampa</option>
									<option data-shipping-price_1="325" data-shipping-price_2="260" data-shipping-price_3="825">Tampa South</option>
									<option data-shipping-price_1="475" data-shipping-price_2="400" data-shipping-price_3="825">Tanner</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="825">Taunton</option>
									<option data-shipping-price_1="425" data-shipping-price_2="325" data-shipping-price_3="825">Templeton</option>
									<option data-shipping-price_1="350" data-shipping-price_2="280" data-shipping-price_3="825">Tidewater</option>
									<option data-shipping-price_1="300" data-shipping-price_2="225" data-shipping-price_3="825">Tifton</option>
									<option data-shipping-price_1="175" data-shipping-price_2="175" data-shipping-price_3="950">Toronto</option>
									<option data-shipping-price_1="300" data-shipping-price_2="300" data-shipping-price_3="825">TOTAL RESOURCE AUC CENTRL PENN</option>
									<option data-shipping-price_1="250" data-shipping-price_2="160" data-shipping-price_3="825">Trenton</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="1525">Tucson</option>
									<option data-shipping-price_1="525" data-shipping-price_2="425" data-shipping-price_3="900">Tulsa</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="1525">Vallejo</option>
									<option data-shipping-price_1="230" data-shipping-price_2="230" data-shipping-price_3="1525">Van Nuys</option>
									<option data-shipping-price_1="1900" data-shipping-price_2="1900" data-shipping-price_3="950">Vancouver</option>
									<option data-shipping-price_1="375" data-shipping-price_2="300" data-shipping-price_3="900">Waco</option>
									<option data-shipping-price_1="475" data-shipping-price_2="325" data-shipping-price_3="1050">Walton</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">WashingtonDC</option>
									<option data-shipping-price_1="450" data-shipping-price_2="350" data-shipping-price_3="825">Webster</option>
									<option data-shipping-price_1="400" data-shipping-price_2="260" data-shipping-price_3="825">West Palm Beach</option>
									<option data-shipping-price_1="425" data-shipping-price_2="300" data-shipping-price_3="825">West Warren</option>
									<option data-shipping-price_1="900" data-shipping-price_2="550" data-shipping-price_3="1525">Western Colorado</option>
									<option data-shipping-price_1="200" data-shipping-price_2="200" data-shipping-price_3="1050">Wheeling</option>
									<option data-shipping-price_1="600" data-shipping-price_2="500" data-shipping-price_3="900">Wichita</option>
									<option data-shipping-price_1="400" data-shipping-price_2="325" data-shipping-price_3="825">Wilmington</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">York Haven</option>
									<option data-shipping-price_1="325" data-shipping-price_2="275" data-shipping-price_3="825">York Springs</option>
								</select>
			</label>
			<h5>Доставка</h5>
			<label>Пригон до Минска<input type="radio" name="delivery" class="delivery" data-price="520"></label>
			<label>Пригон под ключ<input type="radio" name="delivery" class="delivery" data-price="1300"></label>
			<h5>Услуги</h5>
			<label>Пломба<input type="checkbox" name="services" value="type1" class="services" data-price="30" ></label>
			<label>Перевод через Грузию<input type="checkbox" name="services" value="type2" class="services" data-price="200"></label>
		</form>
	</div>
	<div class="calc-text">
		<p>
			<h3>Итого</h3>
			<h3 id="total_price"></h3>
		</p>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="calculator.js"></script>
</html>