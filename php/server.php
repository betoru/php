<?php
    $title = "server";
?>
<html>
	<head>
		<title><?=$title?></title>
	</head>
	<body>
		<?php
		  var_dump($_SERVER);
		  echo "<br>";
		  echo "<br>";
		  echo "<br>";
		  var_dump($_GET);
		  echo "<br>";
		?>
		
    	<?php var_dump($_POST);?>
        <form method="post">
        <input type="text" name="data">
        <input type="text" name="test">
        <input type="submit" value="go!">
        </form>
		
	</body>
</html>