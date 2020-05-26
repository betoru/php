<?php
    $title = "custom exception";
    
    class MyException1 extends Exception {
        
    }
    
    class MyException2 extends Exception {
        
    }
    
    function example($type){
        
        if($type == 1){
            throw new MyException1("MyException1111");
        }else if($type == 2){
            throw new MyException2("Exception2222");
        }
        throw new Exception("Exception");
    }
    
    $errorMessage = "";
    $check = 0;
    
    try {
        example(1);
        $check += 1;
    } catch (MyException1 $e) {
        $errorMessage = $e;
        $check = 100;
    } catch (MyException2 $e){
        $errorMessage = $e;
        $check = 1000;
        
    } catch (Exception $e){
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