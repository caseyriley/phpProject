<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

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

  Functions
  <?php 
    function sayHi($name){
      echo "Hi $name";
    }
    sayHi("dude");
    sayHi("dudet");
  ?>


</body>
</html>