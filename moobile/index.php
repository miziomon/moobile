<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>TEST 123</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
   	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>    
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>


</head> 

<body> 

<div data-role="page" data-add-back-btn="true">

	<div data-role="header" data-theme="b">
	    <a href="/" data-icon="home">home</a>
		<h1>Single page</h1>
		<a href="index.html" data-icon="info">menu</a>        

	</div><!-- /header -->

<div data-role="navbar">
	<ul>
		<li><a href="a.html" class="ui-btn-active">One</a></li>
		<li><a href="b.html">Two</a></li>
		<li><a href="b.html">Two</a></li>
		<li><a href="b.html">Two</a></li>
		<li><a href="b.html">Two</a></li>                        
	</ul>
</div><!-- /navbar -->
    




	<div data-role="content">	
    <p><img src="http://static.jquery.com/files/rocker/images/logo_jquery_215x53.gif"></p>		
    
    
    <ul data-role="listview" data-filter="false">
	<li>
    <a href="index.php"><h3>Acura</h3>
    <p>All your favorites from aarkvarks to zebras.</p>
    </a>
    
    
    </li>
	<li><a href="audi.html"><h3>Audi</h3>
		<p>This is a single page boilerplate template that you can copy to build your first jQuery Mobile page. Each link or form from here will pull a new page in via Ajax to support the animated page transitions.</p>		
		<p>Just view the source and copy the code to get started. All the CSS and JS is linked to the jQuery CDN versions so this is super easy to set up. Remember to include a meta viewport tag in the head to set the zoom level.</p>

		
    
    
    </a></li>
	<li><h3>BMW</h3>
        <ul>
    <li><h3>aaaa</h3>
    <ul>
    <li>bbb</li>
    <li>bbb</li>

    </ul>
    
    </li>
    <li>aaaa</li>
    <li>aaaa</li>
    </ul>        

    
    </li>
	</ul>
    
    
    
    
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Footer content</h4>
	</div><!-- /footer -->
	
</div><!-- /page -->


</body>
</html>


