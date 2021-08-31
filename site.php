<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
</head>
<body>
  <?php include "header.html" ?>

  <?php 
  $option1 = "home";
  $option2 = "about";
  $option3 = "store";
  $option4 = "contact";
  
  include "article.nav.php"?>

  <!-- <form action="site.php" method="get">
      Name: <input type="text" name="name">
      <input type="submit">
      <br>
      Your age? <input type="text" name="age">
  </form>
  <br>
  Your name is <?php
     echo $_GET["name"]; 
  ?>
  <br>
  Your age is <?php 
    echo $_GET["age"];
  ?>

  <br>

  Add 2 numbers
  <form action="site.php" method="get">
    <input type="number" name="num1">
    <br>
    +
    <br>
    <input type="number" name="num2">
    <input type="submit">
  </form>

  Answer <?php  
    echo $_GET["num1"] + $_GET["num2"];
  ?>

  Madlib
  <form action="site.php" method="get">
    Color: <input type="text" name="color"> <br>
    Plural Noun: <input type="text" name="pluralNoun"> <br>
    Celebrity: <input type="text" name="celebrity"> <br>
    <input type="submit">
  </form>

  <?php 
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];
    echo "Roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I love $celebrity <br>";
  ?>

  <br>

  Get passord 
  <form action="site.php" method="get">
    <input type="password" name="password">
    <input type="submit">
  </form>
  Post password //will not show in URL
  <form action="site.php" method="post">
    <input type="password" name="password">
    <input type="submit">
  </form>

  <br>

  Arrays
  <?php 
    $friends = array("kevin", "karen", "oscar", "jim");
    echo $friends[1];
  ?>
  <br> -->
  <!-- Checkboxes  -->
<!-- 
  <form action="site.php" method="post">
    Apples:<input type="checkbox" name="fruits[]" value="apples"> <br>
    Oranges:<input type="checkbox" name="fruits[]" value="oranges"> <br>
    Pears:<input type="checkbox" name="fruits[]" value="pears"> <br>
    <input type="submit">
  </form>

  <?php 
    $fruits = $_POST["fruits"];
    echo $fruits[1];
  ?> -->
  <!-- <br>

  Associative Arrays
  <form action="site.php" method="get">
    <input type="text" name="student">
    <input type="submit">
  </form>
  <?php 
    $student = $_GET["student"];
    $grades = array("Jim" => "A+", "Pam"=>"B-", "Oscar"=>"C+");
    echo $grades[$student];
  ?>
  <br> -->


  <!-- <?php 
    function sayHi($name){
      echo "Hi $name";
    }
    sayHi("dude");
    sayHi("dudet");
  ?> -->
<!-- 

  If Statements
  <?php 
    $isMale = true;
    $isMale = false;
    $isTall = true;
    if ($isMale && $isTall){
      echo "is a dude";
    }else if ($isMale && !$isTall){
      echo "is a shorty";
    } else {
      echo "is a lady";
    } 
  ?> -->

Switch Case
    <!-- <form action="site.php" method="post">
      What was your grade?
      <input type="text" name="grade">
      <input type="submit">
    </form>

    <!-- <?php 
      $grade = $_POST["grade"];
      switch($grade){
        case "A":
          echo "You did amazing!";
        case "B":
          echo "You did pretty good";
        case "C":
          echo "you did aight";
          break;
        default:
          echo "invalid";
      }
    ?> -->

    While Loop 

    <?php 
      $index = 1;
      while($index <= 5){
        echo "index <br>";
        $index ++;
      }
    ?>

    For Loop
    <?php 
          for ($i = 1; $i <= 5; $i ++){
            echo "$i <br>";
          }
    ?> -->

    <br>

  <?php 
    class Book {
      public $title;
      public $author;
      public $pages;

      public $genre; //interchangeable with var
      private $rating; //private property variable
 

      function __construct($aTitle,$aAuthor, $aPages, $aRating){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->title = $aPages;
        $this->setRating($aRating);
      }

      function hasAuthor(){
        if ($this->author){
          return true;
        } else {
          return false;
        }
      }

      function getRating(){ //return private variable
        return $this->rating;
      }
      function setRating($rating){
        if($rating == "G" || $rating == "PG" || $rating == "NR"){
          $this->rating = $rating;
        } else {
          $this->rating = "NR";
        }
      }
    }

    $book1 = new Book("Harry Potter", "JK", 400, "G");

    // $book1->title = "Harry Potter";
    // $book1->author = "JK";
    // $book1->pages = 400;

    echo $book1->author;
    echo "-------->";
     
    echo $book1->hasAuthor();
    echo "<br>";
    echo $book1->getRating();

    class Sequal extends Book {
      function isSequal(){
        echo "this is a sequal";
      }
    }

    $book7 = new Sequal("Harry Perry", "JK", 599, "PG");

    echo "<br>";
    $book7->isSequal();

  ?>

    <br>




   
    <?php include "footer.html"?>




</body>
</html>