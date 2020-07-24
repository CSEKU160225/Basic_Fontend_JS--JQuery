<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){
			myajax();

		});
		function myajax(argument) {
			// body...
			$.ajax({
             url:"abc.xml",
             datatype:"xml",
             success:function (data) {
             	// body...
             	   $("ul").children().remove();
             	$(data).find("food").each(function (argument) {
             		// body...
             		var cal='<li> Name:'+$(this).find("name").text()+'</li';
             		console.log(cal);
             		$("ul").append(cal);
             	});

             },
			});
		}
	</script>
	<ul></ul>

</body>
</html>