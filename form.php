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

$username = $email = $password = $gender = "";
$isError = false;
$nameErr = $emailErr = $genderErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $nameErr = "* Name is required";
        $isError = true;
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "* Email is required";
        $isError = true;
    } else {
        $email = test_input($_POST["email"]);
    }

    if (!$isError) {
        // Redirect to welcome.php
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        header("Location: welcome.php?name=$username&email=$email");
        exit();
    }
}


//!below checks if there no whitespace or anything
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<body class="bg-gradient-to-r from-indigo-400 to-cyan-400 background-animate  bg-contain">
    <div class="sm:container nocontainer h-screen flex justify-center items-center">
        <div class="flex flex-col items-center gap-5 bg-white/20 lg:w-[30%] md:w-[50%] sm:w-full p-4 rounded-xl">

            <h1 class="text-center text-4xl font-bold tracking-wide text-gray-100 select-none cursor-pointer">Sign Up</h1>

            <form method="POST" action="" class="flex flex-col gap-5 w-full relative">

                <!-- todo Username -->
                <input
                    type="text"
                    name="username"
                    placeholder="Name"
                    pattern="[A-Za-z]+"

                    value="<?php echo $username ?>"
                    class="<?php echo $nameErr ? "border-[1.5px] border-red-500" : "border-[1.5px] border-transparent" ?> relative rounded-xl w-full px-2 py-3 outline-none hover:scale-105 duration-300">
                <small class="absolute top-[50px] text-red-600"> <?php echo $nameErr; ?></small>
                <!-- todo Email -->
                <input
                    type="email"
                    name="email"
                    placeholder="Email"

                    value="<?php echo $email ?>"
                    class="<?php echo $emailErr ? "border-[1.5px] border-red-500" : "border-[1.5px] border-transparent" ?> relative rounded-xl w-full px-2 py-3 outline-none hover:scale-105 duration-300">
                <small class="absolute top-[120px] text-red-600"> <?php echo $emailErr; ?></small>
                <!-- todo Password -->
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    value="<?php echo $password ?>"
                    class="rounded-xl w-full px-2 py-3 outline-none hover:scale-105 duration-300">

                <div class="px-2 flex justify-evenly items-center">

                    <label for="male" class="flex items-center gap-2">
                        Male
                        <input type="radio" name="gender" id="male" value="Male" class="accent-blue-700">
                    </label>
                    <label for="female" class="flex items-center gap-2">
                        Female
                        <input type="radio" name="gender" id="female" value="Female" class="accent-pink-500">
                    </label>
                </div>

                <!-- todo Submit Button -->
                <input
                    type="submit"
                    value="Submit"
                    class="bg-black/50 hover:bg-black duration-300 px-2 py-3 rounded-xl font-semibold text-gray-200 ">

            </form>


        </div>



    </div>

</body>

</html>