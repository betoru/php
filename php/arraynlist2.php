<?php
    $title = "arraynlist";
    //array 함수를 이용해서 선언
    $type1 = array("Test","Hello","World");
    
    array_push($type1,"push");
?>
<html>
	<head>
		<title><?=$title?></title>
	</head>
	<body>
		<?php 
    		foreach($type1 as $key => $valueee){
    		    echo $key." > ".$valueee."<br/>";
    		}
		?>
		<br/>
		<br/>
		<br/>
		<?php
    		//array_pop 은 배열의 마지막 element를 제거한다.
    		array_pop($type1);
    		
    		//array_shift 는 배열의 첫 element를 제거한다. 그렇다고 배열의 메모리가 남아서 null 값이 되는 것은 아님...
    		array_shift($type1);
		?>
		<br/>
		<?php 
    		foreach($type1 as $key => $valueee){
    		    echo $key." > ".$valueee."<br/>";
    		}
		?>
	</body>
</html>