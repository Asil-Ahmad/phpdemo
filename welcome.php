<?php
session_start();
include 'includes/head.php';
?>
<div class="bg-gradient-to-r from-indigo-400 to-cyan-400 background-animate bg-cover">
    <div class="sm:container nocontainer m-auto h-screen flex justify-center flex-col items-center">
        <a class="bg-red-500 py-2 text-center px-4 w-full font-bold tracking-wider text-xl text-white" href="logout.php">Logout</a>
        <div class="flex justify-center items-center gap-5 bg-white/20 m-auto w-full p-4 rounded-xl">

            <h1 class="text-start text-4xl font-bold tracking-wide text-gray-100 select-none cursor-pointer">
                Welcome <span class="text-black capitalize">
                    <?php echo $_SESSION["username"]; ?>
                </span><br>
                Email:<span class="text-black">
                    <?php echo $_SESSION["email"]; ?>
                </span> <br>
                Gender:<span class="text-black">
                    <?php echo $_SESSION["gender"]; ?>
                </span>
            </h1>
        </div>
        <?php
        // print_r($_SESSION)
        ?>
    </div>
</div>