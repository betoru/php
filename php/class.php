<?php
    $title = "class";
    
    class Test {
        //������� ���� (���� ������ �ʼ�)
        private $data;
        
        //������ Ŭ������ �̸��� ����������.
        function __construct(){
            
            //��������� ���ٽ� �ݵ�� $this�� �ʿ���. $data�� �ϰԵǸ� ���� ���������� ������ �Ǿ������.
            $this -> data = "init";
        }
        //�Լ�
        public function setData($value){
            //�������� ����
            $data = $value;
        }
        //�Լ�
        public function print(){
            echo $this -> data;
        }
    }
    $obj = new Test();

    //�����ڿ� �Ķ���Ͱ� ������ ()��������
    $obj1 = new Test;

    //���������� �־��� ������ print()�� �ص� ���� init���� ����� �ȴ�.
    $obj1->setData("hello world");
?>
<html>
    <head>
	    <title>
	    <?=$title?>
	    </title>
    </head>
    <body>
    	<?=$obj->print()?>
    	<br/>
    	<?=$obj1->print()?>
    </body>
</html>