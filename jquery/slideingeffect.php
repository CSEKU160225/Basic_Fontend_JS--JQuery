<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
	<?php
   function test()
  {
  	# code...
  	echo "Callback function Started";
  }
	?>
	<h2>SlideUp() SlideDown() SlideToggle()</h2>
		<script type="text/javascript">
			$(document).ready(function () {
				// body...
				$("#sup").click(function () {
					// body...
					$(".abc").slideUp();
					
				});
				$("#sdown").click(function () {
					// body...
					$(".abc").slideDown();
					
				});
				$("#stogg").click(function () {
					// body...
					$(".abc").slideToggle();
					
				});

			});
			
		</script>

		<button id="sup">Slide Up</button>
		<button id="sdown">Slide Down</button>
		
		<button id="stogg">Slide Toggle</button>
		<div class="abc">
		<h1 >I am Learning Jquery.</h1>
		<p>I am Learning Jquery.I am Learning Jquery.I am Learning Jquery.I am Learning Jquery.I am Learning Jquery.I am Learning Jquery.I am Learning Jquery.I am Learning Jquery.</p>
        </div>
        <script> 
$(document).ready(function(){
  $("#a").click(function(){
    $("#di").animate({left: '250px'},5000,function (argument) {
    	// body...
    	alert("<?php echo test();?>");
    });
  });
   $("#b").click(function(){
    $("#di").stop();
  });
});
</script>
<button id="a">Start Animation</button>
<button id="b">Stop Animation</button>

<p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>

<div style="background:#98bf21;height:100px;width:100px;position:absolute;" id="di"></div>
</body>
</html>