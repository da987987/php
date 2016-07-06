<!DOCTYPE html>
<!--<!DOCTYPE html>

To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

-->
<html lang="zn">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class cat
        {
            protected $name;//屬性
            protected $position;
            public function __construct($name)//方法，建構子
            {
                $this->name=$name;
                $this->position = ['x'=>0,'y'=>0];
            }
//            get是用來提出
            public function getName()
            {
                return $this->name;
            }
//            set是存取
            public function setName($name)
            {
                $this->name=$name;
            }
            public function moveTo($x,$y)
            {
                $this->position['x'] = $x;
                $this->position['y'] = $y;
                return $this->position;
            }
            public function move($x,$y)
            {
                $this->position['x'] += $x;
                $this->position['y'] += $y;
                return $this->position;
            }
            public function resetPosition()
            {
                $this->moveTo(0,0);
                return $this->position;
            }
        }
        $pet = new cat("Kitty");
        echo $pet->getName();
//        echo $pet->name;
        echo "<br>";
        $pet->setName("Hallo Kitty");
        echo $pet->getName();
//        $pet->name="Hallo kitty";
//        echo $pet->name;
        echo "<br>";
        
        $movePosition = $pet->moveTo(3,5);
        echo "(".$movePosition['x'].",".$movePosition['y'].")";
        echo "<br>";
        $movePosition = $pet->move(1,1);
        echo "(".$movePosition['x'].",".$movePosition['y'].")";
        echo "<br>";
        $movePosition = $pet->resetPosition();
        echo "(".$movePosition['x'].",".$movePosition['y'].")";
        
        
       
        
        
        class dog
        {
            public function moveTo($x,$y)
            {
                $this->position['x']=$x;
                $this->position['y']=$y;
                return $this->position;
            }           
        }
        
        
        ?>
    </body>
</html>
