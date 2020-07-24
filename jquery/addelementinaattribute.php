<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
<?php
function test1(){
	echo "S.M. ";
}
function test2(){
	echo " Hasan";
}
?>
<button id="btn1">Append</button>
<button id="btn2">Prepend</button>
<button id="btn3">Before</button>
<button id="btn4">After</button>
<p id="p1">Mehadi</p>
<script type="text/javascript">
	$(document).ready(function (argument) {
		// body...
		$("#btn1").click(function (argument) {
			// body...
			$("#p1").append("<?php echo test2();?>");
		});
		$("#btn2").click(function (argument) {
			// body...
			$("#p1").prepend("<?php echo test1();?>");
		});

		$("#btn3").click(function (argument) {
			// body...
			$("#p1").before("<?php echo test1();?>");
		});
		
		$("#btn4").click(function (argument) {
			// body...
			$("#p1").after("<?php echo test2();?>");
		});
						
	});
	
</script>



</body>
</html>