<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
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
    <title>PHP Form</title>

</head>
<?php
// define variables and set to empty values

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = test_input($_POST["username"]);
//     $email = test_input($_POST["email"]);
//     $password = test_input($_POST["password"]);
//     $gender = test_input($_POST["gender"]);
// }

// function test_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
?>

<body class="bg-gradient-to-r from-indigo-400 to-cyan-400 background-animate bg-cover">
    <div class="sm:container nocontainer m-auto h-screen flex justify-center items-center">
        <div class="flex justify-center items-center gap-5 bg-white/20 m-auto w-full p-4 rounded-xl">

            <h1 class="text-start text-4xl font-bold tracking-wide text-gray-100 select-none cursor-pointer">
                Welcome <span class="text-black capitalize">
                    <?php echo $_REQUEST["username"]; ?>
                </span><br>
                Email:<span class="text-black">
                    <?php echo $_REQUEST["email"]; ?>
                </span> <br>
                Gender:<span class="text-black">
                    <?php echo $_REQUEST["gender"]; ?>
                </span> 
            </h1>
        </div>
    </div>

    <!-- todo we check the given output below -->
    <?php
    // echo "<h2>Your Input:</h2>";
    // echo $name;
    // echo "<br>";
    // echo $email;
    // echo "<br>";
    // echo $password;
    // echo "<br>";
    // echo $gender;
  
    ?>
</body>

</html>