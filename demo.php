<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>

<style>
  .test {
    background-color: red;
  }
</style>

<body class="px-24 bg-gray-400 text-gray-100">

  <?php

  echo "<h1 class='text-green-600 m-auto text-center font-bold tracking-wider bg-black py-5 text-4xl'>Server is Live....</h1><br>";
  // header("refresh: 3");//!this automatically referesh page every 3sec
  // $name = 'Linus';
  // echo "<h1>Hello $name this</h1>";
  // echo "<h1>Hello $name that</h1>";

  //  echo "Hello me Yo"."<br>"; //normal text

  //  $txt = "RED"; // $txt is same as variable names it wont work if u type TXT
  //  echo "My car is " . $txt . "<br>"; //we use br same as br tag

  //  $sum = 5+5; //this gives a sum
  // echo "The sum is " . $sum."<br>";

  // //typeof in js and var_dump in php?
  // $typeof = "Test";
  // var_dump($typeof)."<br>";

  // //assigning multiple values?
  // $a = $b = $c = "Same";
  // echo "These values are same:-",$a.$b.$c;


  // //In php global scope only works outside cannot be accessed inside a function
  // function test(){
  //     echo "<p>Variable x inside function is: </p>";
  // }
  // test();//!remeber to call it

  // echo "<p>Variable x outside function is: $sum</p>";

  // //To access the global variables we have to do this  and also you can change the value;
  // function test2(){
  //     global $sum;
  //     $sum = $sum + 5;
  //     echo "<p>Variable sum added inside function and result: $sum</p>";

  // }
  // test2();//!remeber to call it
  // echo "Value has been changed to $sum ";

  // echo "<h1 class=test> hello</h1>"

  // !Static scope
  // function static_function () {
  //     static $num =6;
  //     $num++;
  //     echo "The number is $num" ."\n";
  //     echo "This is test";
  // }
  // static_function();
  // static_function();

  // echo strlen("Hello World!"),"<br>"; //!it will count length and space also
  // echo str_word_count("Hello World!");//!it will count number of words


  // $x = "Hello World!";
  // echo str_replace("World", "Dolly", $x);//!(replace word "World",with "Dolly",in $x)


  // $x = "Hello World!";
  // $y = explode(" ", $x);//!this converts string to array
  // var_dump($y);
  // echo "<br>";
  // print_r($y);

  // $x = "Hello World!";
  // echo substr($x, 6, 5);//!This will slice the string like slice() in js but little different check output
  //! (from $x,remove 6 letters also space,and show only 5 words after 6)
  //output:World
  //

  //!Creating Array in PHP
  // $name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav");

  // echo "Accessing the 1st array elements directly:\n";
  // echo $name_one[2], "\n";
  // echo $name_one[0], "\n";
  // echo $name_one[4], "\n";

  //!Looping Array 
  // $name_one = array("Zack"=>"Asil", "Anthony", "Ram", "Salim", "Raghav"); //!"Zack"=>"Asil" this change the array
  // echo "Looping using foreach: \n";
  // foreach ($name_one as $val){
  //     echo "<br>". $val;
  // }

  // foreach ($name_one as $val =>$val_value){
  //     echo "<br>". $val. "New name is" ,$val_value;
  // }
  // $count = count($name_one);
  // echo "<br>","Count is $count "

  //!Convert data type to string or others
  // (string) - Converts to data type String
  // (int) - Converts to data type Integer
  // (float) - Converts to data type Float
  // (bool) - Converts to data type Boolean
  // (array) - Converts to data type Array
  // (object) - Converts to data type Object
  // (unset) - Converts to data type NULL
  // $a = (string) $a; //!example to apply this


  //!Define constant in php
  //define(name, value);
  // define("GREETING", "Welcome to W3Schools.com!");
  // echo GREETING;

  //or


  // const MYCAR = "Volvo";
  // function test () {
  //     echo MYCAR;
  // }
  // print_r(MYCAR)

  //!PHP Global Variables - Superglobals
  // echo "PHP_SELF:-",$_SERVER['PHP_SELF'];
  // echo "<br>";
  // echo "SERVER_NAME:-",$_SERVER['SERVER_NAME'];
  // echo "<br>";
  // echo "HTTP_HOST:-",$_SERVER['HTTP_HOST'];
  // echo "<br>";
  // echo "HTTP_REFERER:-",$_SERVER['HTTP_REFERER'];
  // echo "<br>";
  // echo "HTTP_USER_AGENT:-",$_SERVER['HTTP_USER_AGENT'];
  // echo "<br>";
  // echo "SCRIPT_NAME:-",$_SERVER['SCRIPT_NAME'];
  // echo "SCRIPT_NAME:-",$_SERVER['REQUEST_METHOD'];

  ?>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
  ?>

  <a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>

  <?php
  echo "Study " . $_REQUEST['subject'] . " at " . $_REQUEST['web']; //!Subject is PHP and web is W3school in the url
  ?>


</body>

</html>