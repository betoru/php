<?php
    $title = "arraynlist splice";
    //array 함수를 이용해서 선언
    $type1 = array("Test","Hello","0", "1", "2", "3");
    
    $type2 = array("push");
    
    /**
     * array splice 는 push 와 달리 데이터를 넣는 것이 아니라 배열과 배열을 합치는 것과 같음 index는 지정할 수 있다.
     * 
     *  array_splice($type1, 2, 1, $type2);
     *  splice 한 index2로 부터 다음 1개의 element remove
     *  Test Hello push 1 2 3
     *  
     *  array_splice($type1, 2, 2, $type2);
     *  splice 한 index2로 부터 다음 2개의 element remove
     *  Test Hello push 2 3
     *  
     *  array_splice($type1, 2, -1, $type2);
     *  배열의 가장 마지막 element 만 남겨놓고 index 2부터 remove
     *  Test Hello push 3
     *  
     *  array_splice($type1, 2, -2, $type2);
     *  배열의 마지막 element로 부터 2개만 남겨놓고 index 2부터 remove
     *  Test Hello push 2 3
     *  
     *  array_splice($type1, 2, -3, $type2);
     *  배열의 마지막 element로 부터 3개만 남겨놓고 index 2부터 remove
     *  Test Hello push 1 2 3
     *  
     *  array_splice($type1, 2, -5, $type2);
     *  배열의 마지막 element로 부터 5개만 남겨놓고 index 2부터 remove 이지만 index2 부터 마지막 element 까지의 index가 5개가 안된다.
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
    		//array_pop 은 배열의 마지막 element를 제거한다.
//     		array_pop($type1);
    		
    		//array_shift 는 배열의 첫 element를 제거한다. 그렇다고 배열의 메모리가 남아서 null 값이 되는 것은 아님...
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