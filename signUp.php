<?php
session_start();
include 'includes/head.php'; //you have to include head.php in each file
?>


<?php
//todo we empty string after each submit
$username = $email = $password = $gender = "";
$isError = false;
$nameErr = $emailErr = $genderErr = $passwordErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //todo check if username or email or gender is not empty
    if (empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["gender"])) {

        $nameErr = "* Name is required";
        $emailErr = "* Email is required";
        $passwordlErr = "* Password is required";
        $genderErr = "* Gender is required";
        $isError = true;
    } else {
        $username = ($_POST["username"]);
        $email = ($_POST["email"]);
        $password = ($_POST["password"]);
        $gender = ($_POST["gender"]);
        $isError = false;

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["gender"] = $_POST["gender"];
    }


    //todo we here we redirect to new page with info using url
    if (!$isError) {
        //todo if no error it will Redirect to welcome.php
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['gender'] = $gender;
        header("Location: welcome.php");
        exit();
    }
}


// todo below checks if there no whitespace or anything while sending data to server
// function test_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
?>

<section class="bg-gradient-to-r from-indigo-400 to-cyan-400 background-animate  bg-contain">
    <div class="w-full h-screen flex justify-center items-center m-auto">
        <div id="box" class="flex flex-col items-center gap-5 bg-white/20 md:w-[40%] lg:w-[30%] xl:w-[25%]  max-sm:w-full mx-2 p-4 rounded-xl">

            <h1 class="text-center text-4xl font-bold tracking-wide text-gray-100 select-none cursor-pointer">
                Sign Up
            </h1>

            <form method="POST"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                class="flex flex-col gap-5 w-full relative">

                <!-- todo Username -->
                <input
                    type="text"
                    name="username"
                    placeholder="Name"
                    pattern="[A-Za-z]+"

                    value=""
                    class="<?php echo $nameErr ? "border-[1.5px] border-red-500" : "border-[1.5px] border-transparent" ?> relative rounded-xl w-full px-2 py-3 outline-none hover:scale-105 duration-300">
                <small class="absolute top-[50px] text-red-600"> <?php echo $nameErr; ?></small>
                <!-- todo Email -->
                <input
                    type="email"
                    name="email"
                    placeholder="Email"

                    value=""
                    class="<?php echo $emailErr ? "border-[1.5px] border-red-500" : "border-[1.5px] border-transparent" ?> relative rounded-xl w-full px-2 py-3 outline-none hover:scale-105 duration-300">
                <small class="absolute top-[120px] text-red-600"> <?php echo $emailErr; ?></small>
                <!-- todo Password -->
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    value=""
                    class="rounded-xl w-full px-2 py-3 outline-none hover:scale-105 duration-300">

                <!-- todo Gender -->
                <div class="px-2 flex justify-evenly items-center relative">

                    <label for="male" class="flex items-center gap-2">
                        Male
                        <input
                            type="radio"
                            name="gender"
                            checked="checked"
                            id=" male"
                            value="Male"
                            class="accent-blue-700">
                    </label>
                    <label for="female" class="flex items-center gap-2">
                        Female
                        <input
                            type="radio"
                            name="gender"
                            id="female"
                            value="Female"
                            class="accent-pink-500">
                    </label>
                    <small class="absolute top-[90%] text-red-600"> <?php echo $genderErr; ?></small>
                </div>

                <!-- todo Submit Button -->
                <input
                    type="submit"
                    value="Submit"
                    name="submit"
                    class="bg-black/50 hover:bg-black duration-300 px-2 py-3 rounded-xl font-semibold text-gray-200 ">
            </form>
        </div>
    </div>
    <script>
        // GSAP Entrance Animation for the form
        gsap.from("#box", {
            duration: 1.5,
            scale: 0.8,
            opacity: 0,
            ease: "elastic.out(1, 0.5)"
        });
    </script>

</section>