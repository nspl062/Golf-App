<html> 
  <head> 
    <title>Profile</title> 
    
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b3/jquery.mobile-1.0b3.min.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/mobile/1.0b3/jquery.mobile-1.0b3.min.js"></script>
    <script>
    $.fixedToolbars.setTouchToggleEnabled(true)
    </script>
</head> 

<body> 
<div data-role="page" id="foo">
  <div data-role="header" data-position="fixed">
    <a href="index.php" data-icon="home">Home</a>
    <h1>Profile</h1>
    <a href="#" data-icon="info">Edit</a>
	<div data-role="navbar">
        <ul>
            <!-- re add ui-btn-active classes -->
            <li><a href="profile.php" data-role="button">Info</a></li>
            <li><a href="fave.php" data-role="button">Favorite Courses</a></li>
            <li><a href="recent.php" data-role="button">Recent Courses</a></li>
        </ul>
    </div><!-- navbar -->
    </div><!-- /header -->
