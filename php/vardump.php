<?php
    //변수 확인함수 var_dump
    $title = "var dump";
    $data = 1;
    
    for($i=0;$i<100;$i++){
        $data++;
    }
    var_dump($data);
?>
<html>
	<head>
		<title><?=$title?></title>
	</head>
	<body>
		<?php
		  echo $data;    
		?>
		
		<?=$data?>
	</body>
</html>