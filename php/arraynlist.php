<?php
    $title = "arraynlist";
    //array �Լ��� �̿��ؼ� ����
    $type1 = array("Test","Hello","World");
    
    // �迭��ȣ�� �̿��ؼ� ����
    $type2[0] = "Test";
    $type2[1] = "Hello";
    $type2[2] = "World";
?>
<html>
	<head>
		<title><?=$title?></title>
	</head>
	<body>
		<?php 
    		foreach($type1 as $item){
    		    echo $item." ";
    		}
		?>
		<br/>
		<?php 
    		foreach($type2 as $item){
    		    echo $item." ";
    		}
		?>
	</body>
</html>