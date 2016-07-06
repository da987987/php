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

        class TypeA {

            private $typeName = "TypeA";

            public function getTypeName() {
//                return $this->typeName;
                echo $this->typeName;
            }

        }

        class TypeB {

            private $typeName = "TypeB";

            public function getTypeName() {
                return $this->typeName;
//                echo $this->typeName;
            }

        }

//        定義只能用TypeA
        function testobject(TypeA $type) {
            echo $type->getTypeName() . "<br>";
        }

        testobject(new TypeA());
//        testTypeHint(new TypeB());


        $type = new TypeA();
        $type->getTypeName();

        testobject($type);

        function testInt($i) {
            echo $i . "<br>";
        }

        testInt(234);

//        testInt("a");


        function testArray(array $array) {
            echo $array[0] . "<br>";
        }

        testArray(array('這是陣列'));
        testArray(array('第一項', '第二項'));
        testArray(array('0' => '鍵值0'));

//        testArray(array('k'=>'v'));

        function tryThis() {
            echo '這是 callable function<br>';
        }

        function testCallable(callable $callableFunction) {
            $callableFunction();
        }

        testCallable("tryThis");
        testCallable(function() {
            echo "匿名函式" . "<br>";
        });

        testCallable(array(new TypeA(), 'getTypeName'));





        echo "<br>END"
        ?>
    </body>
</html>
