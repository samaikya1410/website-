<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="tabs/js/zozo.tabs.min.js"></script>


<script type="text/javascript" src="js/jquery-1.9.1.js"> </script>
<script type="text/javascript" src="js/slideshow.js"> </script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"> </script>

<script>
  $(function() {
    $( "#datepicker" ).datepicker({ dateFormat: "d MM, yy" });
  });
  

  $(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "fade",
        duration: 1000
      }
    });
 
    $( "#opener" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
  });

  </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46194984-1', 'joyofsharing.org.in');
  ga('send', 'pageview');

</script>
<link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" type="text/css" href="css/joyofsharing.css"/>
<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
<link rel="stylesheet" href="tabs/css/zozo.tabs.min.css" />
<title>Joy Of Sharing</title>
</head>

<body>

	<div class="container">
    
    	<div class="logo"> <a href="index.php"><img src="images/joyofsharing.png" /></a>
        
      </div>