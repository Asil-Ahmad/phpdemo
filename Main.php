<!--  todo here we will extract session data -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<!-- todo We added all head files which import tailwindCSS and other CDN -->
<?php include 'includes/head.php'; ?>

<!-- //todo Wrap them like we do in App.jsx -->

<body>

    <?php empty($_SESSION) ? include 'signUp.php' : include 'welcome.php' ?>

</body>

</html>