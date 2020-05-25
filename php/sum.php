<?php
    $title = "function sum";
    $value = "study for sum";
    
    function sum($a, $b) {
        return $a + $b;
    }

    $data = sum(1,2);
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