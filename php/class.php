<?php
    $title = "class";
    
    class Test {
        //멤버변수 선언 (접근 제한자 필수)
        private $data;
        
        //생성자 클래스는 이름이 정해져있음.
        function __construct(){
            
            //멤버변수에 접근시 반드시 $this가 필요함. $data로 하게되면 내부 지역변수로 선언이 되어버린다.
            $this -> data = "init";
        }
        //함수
        public function setData($value){
            //지역번수 선언
            $data = $value;
        }
        //함수
        public function print(){
            echo $this -> data;
        }
    }
    $obj = new Test();

    //생성자에 파라미터가 없으면 ()생략가능
    $obj1 = new Test;

    //지역변수에 넣었기 때문에 print()를 해도 값은 init으로 출력이 된다.
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