<?php
    $title = "arraynlist splice";
    //array �Լ��� �̿��ؼ� ����
    $type1 = array("Test","Hello","0", "1", "2", "3");
    
    $type2 = array("push");
    
    /**
     * array splice �� push �� �޸� �����͸� �ִ� ���� �ƴ϶� �迭�� �迭�� ��ġ�� �Ͱ� ���� index�� ������ �� �ִ�.
     * 
     *  array_splice($type1, 2, 1, $type2);
     *  splice �� index2�� ���� ���� 1���� element remove
     *  Test Hello push 1 2 3
     *  
     *  array_splice($type1, 2, 2, $type2);
     *  splice �� index2�� ���� ���� 2���� element remove
     *  Test Hello push 2 3
     *  
     *  array_splice($type1, 2, -1, $type2);
     *  �迭�� ���� ������ element �� ���ܳ��� index 2���� remove
     *  Test Hello push 3
     *  
     *  array_splice($type1, 2, -2, $type2);
     *  �迭�� ������ element�� ���� 2���� ���ܳ��� index 2���� remove
     *  Test Hello push 2 3
     *  
     *  array_splice($type1, 2, -3, $type2);
     *  �迭�� ������ element�� ���� 3���� ���ܳ��� index 2���� remove
     *  Test Hello push 1 2 3
     *  
     *  array_splice($type1, 2, -5, $type2);
     *  �迭�� ������ element�� ���� 5���� ���ܳ��� index 2���� remove ������ index2 ���� ������ element ������ index�� 5���� �ȵȴ�.
     *  Test Hello push 0 1 2 3
     *   
     */
    array_splice($type1, 2, -6, $type2);
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
//     		array_pop($type1);
    		
    		//array_shift �� �迭�� ù element�� �����Ѵ�. �׷��ٰ� �迭�� �޸𸮰� ���Ƽ� null ���� �Ǵ� ���� �ƴ�...
//     		array_shift($type1);
		?>
		<br/>
		<?php 
    		foreach($type1 as $key => $valueee){
    		    echo $key." > ".$valueee."<br/>";
    		}
		?>
	</body>
</html>