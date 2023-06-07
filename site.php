<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
        class Chef{
            function makeChicken() {
                echo "The chef makes chicken <br>";
            }
            function makeSalad() {
                echo "The chef makes Salad <br>";
            }
            function makeFries() {
                echo "The chef makes Fries <br>";
            }
        }

        class ItalianChef extends Chef {
            function makePasta( ) {
                echo "Italian Chef makes pasta <br>";
            }
            function makeFries() {
                echo "the chef makes pizza";
            }
        }
        $chef = new Chef();
        $chef->makeChicken();
        
        $italianchef = new ItalianChef();
        $italianchef->makeChicken();
        $italianchef->makePasta();
    ?>
    

</body>
</html>

    <!-- set up page, variables types, echo  -->
    <!--   $phrase= "lorem ipsum";
        $nombre = "Carlos";
        $edad = 30;
        $precio = 23.32;
        $isMale = true; 
        max() min() pow() sqrt() round() ceil() floor() substr() substr_replace() $phrase[0] + -= += - * / $edad-- $edad++
        echo "<h1>web de $nombre</h1>";
        echo "<hr>";
        echo strtoupper($phrase); 
        echo "<p>tengo $edad años</p>";
        echo 43;    -->
    
    <!-- COMMENTS -->
    <!-- // /* */ -->
    
    <!-- forms and url params -->
    <!-- <form action="site.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    <br>
   Your name is <?php 
        echo $_GET["name"];
    ?>
    <br>
   Your age is <?php 
        echo $_GET["age"];
    ?> -->
    <!-- <form action="site.php" method="get">
    <input type="number" name="num1">
    <br>  
    <input type="number" name="num2">
    <input type="submit">
    </form>
    Answer: <?php
        echo $_GET["num1"] + $_GET["num2"];
    ?>  -->

    <!-- POST -->
    <!-- <form action="site.php" method="post">
    Password: <input type="password" name="password">
    <br>  
    
    <input type="submit">
    </form>
    Answer: <?php
        echo $_POST["password"];
    ?>  -->

<!-- ARRAYS -->
<!-- $friends = array("kevin", "karen","oscar","jim",1,false);
    $friends[0] = "Carlos";
    $friends[10] = "Carlos";
    echo $friends[0];
    echo count($friends); -->



    <!-- CHECKBOXES -->
    <!--  <form action="site.php" method="post">
    apples: <input type="checkbox" name="fruits[]" value="apples">
    oranges: <input type="checkbox" name="fruits[]" value="oranges">
    pears: <input type="checkbox" name="fruits[]" value="pears">
      
    
    <input type="submit">
    </form>
    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];
        
    ?> -->



    <!-- ASOCIATIVE ARRAYS -->
    <!-- <form action="site.php" method="post">    
    <input type="text" name="student">
    <input type="submit">
    </form>
    <?php
      $grades = array("Jim"=>"A+","Pam"=>"B+","Mark"=>"c");
      echo $grades["Jim"];
      echo $grades[$_POST["student"]]
    ?>
   -->



   <!-- FUNCIONES -->
   <!-- function sayHi(){
        echo "Hello user";
      };
      sayHi();
      function sayHi2($name, $age){
        echo "Hello $name, you are $age";
      };
      sayHi2("Carlos",30);
      function cube($num) {
       return $num * $num * $num;
      };
      $cubeResult = cube(4);
      echo $cubeResult; -->

      <!-- IF ELSEIF || &&-->
      <!-- $isMale = true;
      $isTall = true;
      if($isMale && $isTall){
        echo "You are tall male";
      } else {
        echo "You are not male";
      }
      if($isMale || $isTall){
        echo "You are tall or male";
      } elseif ($isMale && !$isTall){
        echo "you are short male"; 
      } else {
        echo "You are not male not tall";
      } 
    
    function getMax($num1,$num2,$num3){
        if($num1 >= $num2 && $num1 >= $num3 ) {
            return $num1;
        } elseif($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
      }

      echo getMax(3,5,67)
    
    -->



    <!-- CALCULATOR -->
    <!-- <form action="site.php" method="post">
        First Num:<input type="number" step="0.1" name="num1"> <br>
        OP: <input type="text" name="op"> <br>
        Second Num:<input type="number" step="0.1" name="num2"> <br>
        <input type="submit">
    </form>

    <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["op"];
      if($op == "+"){
        echo $num1 + $num2;
      } elseif ($op == "-"){
        echo $num1 - $num2;
      } elseif ($op == "/"){
        echo $num1 / $num2;
      } elseif ($op == "*"){
        echo $num1 * $num2;
      } else {
        echo "Invalid Operator";
      };
    ?> -->


    <!-- SWITCH -->
    <!-- <form action="site.php" method="post">
       What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php

     $grade = $_POST["grade"];
     echo $grade;

    switch($grade) {
        case "A":
            echo "You did amazing!";
            break;
        case "B":
            echo "nice";
            break;
        case "C";
        echo "try do better next time";
        break; 
        case "D";
        echo "YOU FAIL!";
        break; 
            default:
            echo "invalid grade";
    }
    ?> -->



    <!-- LOOPS -->
    <!-- $index = 1;
        while($index <= 5){
            echo "$index <br>";
            $index++;
        };

        $index2 = 1;
         do{
            echo "$index2 <br>";
            $index2++;
        }while($index2 <= 5);


        for($i = 1; $i<= 5; $i++) {
            echo "$i <br>";
        };

        $luckyNumers= array(4,8,14,16,23,42);
        for($i = 1; $i<= count($luckyNumers); $i++) {
            echo "$luckyNumbers[$i] <br>";
        }; -->

        <!-- INCLUDE -->
        <!-- <?php
        include "header.html"
    ?>
    <p>Hello world</p>
    <?php
        include "footer.html"
    ?> 
    
$title="my first post";
    $author = "me";
    $wordCount= 400;
        include "article-header.php";-->


        <!-- CLASS -->
        <!-- class Book{
            var $title;
            var $author;
            var $pages;

            function __construct($atitle,
            $aauthor,
            $apages){
                echo "new Book created <br>";
                 $this->title=$atitle;
         $this->author=$aauthor;
         $this->pages=$apages;
            }
        }
         $book1=new Book;
         $book1->title="garrypoter";
         $book1->author="jkrovling";
         $book1->pages=400;
        echo $book1->author;

        $book2 = new Book("LOTR","Tolkien",500);
        echo $book2->author; 
    
    class Book{
            var $title;
            var $author;
            var $pages;

            function __construct($atitle,$aauthor,$apages){
                $this->title=$atitle;
                $this->author=$aauthor;
                $this->pages=$apages;
            }
            function isLong() {
                if($this->pages >= 200){
                    return "true";
                } else {
                    return "false";
                }
            }
        }
        $book1 = new Book("LOTR1","Tolkien1",500);
        $book2 = new Book("LOTR","Tolkien",500);
         echo $book1->isLong();
    
    -->


    <!-- getter and setter -->
    <!-- class Movie{
            public $title;
            private $rating;
            

            function __construct($title,$rating){
                $this->title=$title;
                $this->setRating($rating);
                
            }
            function getRating() {
                return  $this->rating;
            }
            function setRating() {
               if($rating=="G" || $rating=="PG" || $rating=="PG-13" || $rating=="PG-18") {
                    $this->rating=$rating;
               } else {
                $this->rating="NR";
               }
            }
        }
        $avengers = new Movie("Avengers","PG-13");

         echo $avengers->rating; -->

        

         <!-- inheritance -->
         <!-- class Chef{
            function makeChicken() {
                echo "The chef makes chicken <br>";
            }
            function makeSalad() {
                echo "The chef makes Salad <br>";
            }
            function makeFries() {
                echo "The chef makes Fries <br>";
            }
        }

        class ItalianChef extends Chef {
            function makePasta( ) {
                echo "Italian Chef makes pasta <br>";
            }
            function makeFries() {
                echo "the chef makes pizza";
            }
        }
        $chef = new Chef();
        $chef->makeChicken();
        
        $italianchef = new ItalianChef();
        $italianchef->makeChicken();
        $italianchef->makePasta(); -->