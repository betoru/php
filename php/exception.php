<?php
    $title = "exception";
    function example(){
        throw new Exception("Exception!");
    }
    
    $errorMessage = "";
    $check = 0;
    
    try {
        example();
        $check += 1;
    } catch (Exception $e) {
        $errorMessage = $e;
    } finally {
        //check 값을 증가시킨다.
        $check += 1;
    }
?>
<html>
	<head>
		<title><?=$title?></title>
	</head>
	<body>
		<?php
		     
		?>
		
		<?=$errorMessage?>
		<br>
		<?=$check?>
	</body>
</html>