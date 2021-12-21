<?php
session_start();

echo "<a href=\"authorization.php?log_out=1\">Log out</a>";
echo "<a href=\"index.php\">Main menu</a>";


if (isset($_SESSION['tasksArray'][$_SESSION['user_name']])) {
    $userTasks = $_SESSION['tasksArray'][$_SESSION['user_name']];
    foreach ($userTasks as $key => $value) {
        echo "<p>$key -> $value";
    }
} else {
    echo "<p>No actual tasks";
}