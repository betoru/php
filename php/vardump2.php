<?php
    //변수 확인함수 var_dump
    $title = "var dump";
    $data = 1;
    
    for($i=0;$i<100;$i++){
        $data++;
    }
    
    $data2 = array("hello", "world", "good");
    
    $data3["First"] = "test";
    $data3["Second"] = "hello";
    $data3["Third"] = "world";
    
?>
<html>
	<head>
		<title><?=$title?></title>
	</head>
	<body>
		<?php
		  var_dump($data);
		  echo "<br>";
		  var_dump($data2);
		  echo "<br>";
		  var_dump($data3);
		  echo "<br>";
		  echo "<br>";
		  echo "<br>";
		  
		  debug_zval_dump($data);
		  echo "<br>";
		  debug_zval_dump($data2);
		  echo "<br>";
		  debug_zval_dump($data3);
		  
		  echo "<br>";
		  echo "<br>";
		  echo "<br>";
		  
		  print_r($data);
		  echo "<br>";
		  print_r($data2);
		  echo "<br>";
		  print_r($data3);
		?>
		
		<?=$data?>
	</body>
</html>