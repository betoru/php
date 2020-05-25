<?php
    $title = "class";

    //클래스를 할당식이 아닌 정적으로 선언 가능
    class Test {
        //정적..
        private static $data;
        
        public static function setData($value){
            //할당 멤버변수가 아니기 때문에 static으로 접근한다
            Test::$data = $value;
        }
        
        public static function print(){
            echo Test::$data;
        }
    }
    Test::setData("hello world");
?>
<html>
    <head>
	    <title>
	    <?=$title?>
	    </title>
    </head>
    <body>
    	<?=Test::print()?>
    </body>
</html>