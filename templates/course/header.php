<!DOCTYPE html> 
<html> 
  <head> 
    <title>Golf Guide</title> 
    
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b3/jquery.mobile-1.0b3.min.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/mobile/1.0b3/jquery.mobile-1.0b3.min.js"></script>
	<script>
	$.fixedToolbars.setTouchToggleEnabled(false)
	</script>
</head> 

<body> 
<div data-role="page" id="foo">
  <div data-role="header" data-position="fixed">
	<a href="profile.php" data-icon="star">Profile</a>
    <h1>Stanford Golf Course</h1>
	<a href="index.php" data-icon="home">Home</a>
	<div class="ui-grid-b" style="height:50px">
		<div class="ui-block-a">
			<small><center><div data-role="fieldcontain" >
				   <select name="select-choice-4" id="select-choice-4">
					
						<option value="4">Score</option>
					  <option value="1">-2</option>
					  <option value="2">-1</option>
					  <option value="3">Par</option>
					  <option value="4">+1</option>
					  <option value="5">+2</option>
					  <option value="6">+3</option>
					  <option value="7">+4</option>
					  <option value="8">+5</option>
				   </select>
			</div></small></center>
		</div>
		<div class="ui-block-b"><p><center>Hole 2</center></p></div>
		<div class="ui-block-c"><p><center>Par 4</center></p></div>
	</div><!-- /grid-b -->
		<div data-role="navbar">
		<ul>
			<li><a href="#" data-role="button" data-icon="arrow-l" data-iconpos="left">1</a></li>
			<li><a href="#" data-role="button">Hole Select</a></li>
			<li><a href="#" data-role="button" data-icon="arrow-r" data-iconpos="right">3</a></li>
		</ul>
	</div><!-- navbar -->
    </div><!-- /header -->

