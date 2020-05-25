<?php
    $title = "title";
    $value = "hello wolrd";
    $value = $value . " nice to meet you";
    $data = "0";
    
    for($i = 1; $i <= 10; $i++){
        if($i % 2 == 0){
            $data += $i;
        }
    }

?>
<html>
    <head>
	    <title>
	    <?=$title?>
	    </title>
    </head>
    <body>
    	<?=$value?>
    	<br/>
    	<?=$data?>
    </body>
</html>