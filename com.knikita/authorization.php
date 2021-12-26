<?php
session_start();
if (isset($_REQUEST['user_name'])) {
    $_SESSION['user_name'] = $_REQUEST['user_name'];
    header("Location: index.php");
} elseif (isset($_REQUEST['log_out'])) {
    unset($_SESSION['user_name']);
    header("Location: index.php");
}

echo "<a href=\"index.php\">Main page</a>";
?>

<form action="authorization.php">
    <p>Your username:<input type="text" name="user_name" value="">
    <button type="submit">Submit</button>
</form>
