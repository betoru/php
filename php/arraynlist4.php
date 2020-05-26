<?php
    $title = "arraynlist count";
    $type1 = array("Test","Hello","0", "1", "2", "3");
?>
<html>
	<head>
		<title><?=$title?></title>
	</head>
	<body>
		<?php
		
		echo "배열의 갯수: ".count($type1)."<br/>";
		
    		for($i=0; $i<count($type1);$i++){
    		    echo $type1[$i]."<br/>";
    		}
    		
    		
		echo "<br/>";
		
    		foreach($type1 as $key => $valueee){
    		    echo $key." > ".$valueee."<br/>";
    		}
		?>
	</body>
</html>