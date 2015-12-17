<!DOCTYPE html>
		<html>
			<head>
			<title>Places - Celebrate Life</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
			<link rel="stylesheet" href="css/main.css" />
			<link rel="stylesheet" href="js/main.js" />
			<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
			<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
		</head>
		<body>

		<div data-role="page">

			<div data-role="header"data-theme="b">
				<h1>Places</h1>
				<a href="home.php" data-icon="home" data-theme="a">Home</a>
			</div><!-- /header -->

			<div data-role="content">					
				<ul data-role="listview" data-theme="c" data-filter="true" data-filter-placeholder="Search for Places" data-divider-theme="e">
					<form>
					<select id="filter-menu" value="Filter" data-native-menu="false">
						<option value="SFO">All</option>
						<option value="LAX">Bars</option>
						<option value="YVR">Supermarkets</option>
						<option value="YYZ">Banks</option>
						<option value="LAX">Pharmacies</option>
						<option value="YVR">Butcheries</option>
						<option value="YYZ">Hospitals</option>
						<option value="LAX">Hotels</option>
						<option value="YVR">Restaurants</option>
						<option value="YYZ">Colleges</option>
					</select>
					</form>
					<li data-role="list-divider" data-theme="d">A</li>
					<li><a href="places/aloe.php"><img  class="img" src="images/logo.jpg"/><h3>Aloe Gardens</h3><p>Type</p></a></li>
					<li data-role="list-divider" data-theme="d">B</li>
					<li><a href="places/benita"><img class="img" src="images/logo.jpg"/><h3>Bulls Pub</h3><p>Type</p></a></li>
					<li data-role="list-divider" data-theme="d">C</li>
					<li><a href="places/benita"><img class="img" src="images/logo.jpg"/><h3>Cape to Cairo</h3><p>Type</p></a></li>
					<li><a href="places/benita"><img class="img" src="images/logo.jpg"/><h3>Cafe Baku</h3><p>Type</p></a></li>
					<li data-role="list-divider" data-theme="d">D</li>
					<li><a href="places/benita"><img class="img" src="images/logo.jpg"/><h3>Dawn Sports Bar</h3><p>Type</p></a></li>
				</ul>
			</div><!-- /content -->

			<div data-role="footer"data-theme="b">
				<h1>&copy Places Zimbabwe</h1>
			</div><!-- /footer -->

		</div><!-- /page -->
		</body>
		</html>
