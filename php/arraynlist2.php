<?php
    $title = "arraynlist";
    //array �Լ��� �̿��ؼ� ����
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
    		//array_pop �� �迭�� ������ element�� �����Ѵ�.
    		array_pop($type1);
    		
    		//array_shift �� �迭�� ù element�� �����Ѵ�. �׷��ٰ� �迭�� �޸𸮰� ���Ƽ� null ���� �Ǵ� ���� �ƴ�...
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