<!DOCTYPE html> 
<html> 

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Stanford Golf Course</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.js"></script>
</head> 

<body> 

<div data-role="page">

<div data-role="header" data-position="fixed">
    <a href="index.php" data-icon="home">Home</a>
    <h1>Stanford Golf Course</h1>
    <a href="#" data-icon="info">Add New Course</a>
    </div><!-- /header -->
    
<div data-role="content">
		<div class="content-primary">	
			<ul data-role="listview" data-filter="true" data-filter-placeholder="Search people..." data-filter-theme="b">
				<li data-role="list-divider">A</li>
				<li><a href="course.php">Alliance Golf Course</a></li>
				<li data-role="list-divider">B</li>
				<li><a href="course.php">Bridgeview</a></li>
				<li data-role="list-divider">C</li>
				<li><a href="course.php">Columbus Country Club</a></li>
				<li data-role="list-divider">D</li>
				<li><a href="course.php">Dallas Golf Course</a></li>
				<li><a href="course.php">Defiancouce County Golf Course</a></li>
				<li data-role="list-divider">P</li>
				<li><a href="course.php">Pebble Beach</a></li>
				<li><a href="course.php">Pinehurst</a></li>
			</ul>
			</div><!--/content-primary -->		

	</div><!-- /content -->
	
	
	
</div><!-- /page -->

</body>
</html>

