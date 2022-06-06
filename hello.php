<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'mins';
		$pw = '1234';
		$dbName = 'sungkyul';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$hello_first = $_POST['input_comp-l42o35l71'];
	    $hello_last = $_POST['input_comp-l42o35lm'];
	    $hello_email = $_POST['input_comp-l42o35lo'];
		$hello_message = $_POST['textarea_comp-l42o35lq1'];

		$sql = "insert into hello (
				first,
				last,
				email,
				message
		)";
		
		$sql = $sql. "values (
				'$hello_first',
				'$hello_last',
				'$hello_email',
				'$hello_message'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("THANKS!")</script>'; 
		}else{ 
		  echo '<script>alert("fail")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "hello.html";
</script>

</html>