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
        interface Action
        {
            public function move($x,$y);
        }

        class animal {

            private $animalType;
            protected $position;

            public function __construct($animalType) {
                $this->animalType = $animalType;
                $this->position=['x'=>0,'y'=>0];
            }

            public function getAnimalType() {
                return $this->animalType;
            }

            public function move($x, $y) {
                $this->position['x'] += $x;
                $this->position['y'] += $y;
                return $this->position;
            }

            public function eat($foodName) {
                $this->chew($foodName);
            }

            protected function chew($foodName) {
                echo "咀嚼" . $foodName;
            }

            private function digest($foodName) {
                
            }

        }

        class Cat extends animal implements Action{

            protected $name;
            public static $staticProperty;//靜態屬性
//            public function __construct($animalType) {
//                parent::__construct($animalType);
//            }
            public function __construct($name) {
                parent::__construct("貓"); // 呼叫父類別，使用parent:: (parent->)是給副件用的
                $this->name=$name;
                self::$staticProperty = "static property".$name;//當屬性為靜態時，必須用::
            }

            public function test() {
                $this->chew("測試咀嚼");
            }

            public function setName($name) {
                $this->name = $name;
            }

            public function getName() {
                return $this->name;
            }
            public static function staticFunction()
            {
                echo "這是靜態方法";
            }

        }

        class Dog extends animal {

            protected $name;

//            public function __construct($animalType) {
//                parent::__construct($animalType);
//            }
            public function __construct($name) {
                parent::__construct("狗"); // 呼叫父類別，使用parent:: (parent->)是給副件用的
                $this->name=$name;
                $this->position = ['x'=>2,'y'=>5];
               
            }

            public function test() {
                $this->chew("測試咀嚼");
            }

            public function setName($name) {
                $this->name = $name;
            }

            public function getName() {
                return $this->name;
            }
            public function move($x,$y)
            {
                $this->position['x'] +=$x*2;
                $this->position['y'] +=$y*2;
                 
                return $this->position;
            }

        }

        echo Cat::$staticProperty."<br>";
        Cat::$staticProperty= "108行";
        echo Cat::$staticProperty."<br>";
        
        
        $pet = new Cat("Kitty");
        echo $pet->getAnimalType();
        $pet->eat("小魚");
        echo $pet->test("小魚");
        echo "<br>";
        $position=$pet->move(4,6);
        echo $pet->getName()."(".$position['x'].",".$position['y'].")<br>";
        
        
        $perCatStaticProperty = new Cat("Static Kitty");
        echo $perCatStaticProperty::$staticProperty;
        echo "<br>";


        $petdog = new Dog("wangwang");
        echo $petdog->getanimalType();
        $petdog->eat("骨頭");
        echo "<br>";
        $position=$petdog->move(2,3);
        echo $petdog->getName()."(".$position['x'].",".$position['y'].")<br>";

        echo "<br>END<br>";
        ?>
    </body>
</html>
