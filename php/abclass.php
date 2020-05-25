<?php
    $title = "abstract class";

    //인터페이스
    interface ITest{
        function run();
    }
    
    
    abstract class AbstractTest implements ITest{
        public function run(){
            return $this->print();
        }
        //추상메소드
        protected abstract function print();
    }
    
    
    //abstract class
    class Test extends AbstractTest{
        protected function print(){
            return "Hello world1";
        }
    }
    $obj = new Test;
?>

<html>
    <head>
	    <title>
	    <?=$title?>
	    </title>
    </head>
    <body>
    	<?=$obj->run()?>
    </body>
</html>