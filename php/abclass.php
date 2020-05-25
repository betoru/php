<?php
    $title = "abstract class";

    //�������̽�
    interface ITest{
        function run();
    }
    
    
    abstract class AbstractTest implements ITest{
        public function run(){
            return $this->print();
        }
        //�߻�޼ҵ�
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