<?php
    $title = "class";

    //Ŭ������ �Ҵ���� �ƴ� �������� ���� ����
    class Test {
        //����..
        private static $data;
        
        public static function setData($value){
            //�Ҵ� ��������� �ƴϱ� ������ static���� �����Ѵ�
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