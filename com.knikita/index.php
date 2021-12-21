<?php
session_start();

if (!isset($_SESSION['tasksArray'])) {
    $taskArray = array();
    $_SESSION['tasksArray'] = $taskArray;

    $user1 = array('firstTask' => 'someDescription1', 'secondTask' => 'someDescription2');
    $user2 = array('thirdTask' => 'someDescription3', 'foursTask' => 'someDescription4');

    $_SESSION['tasksArray']['user1'] = $user1;
    $_SESSION['tasksArray']['user2'] = $user2;
}

$linkSigning = "<a href=\"authorization.php\">Sign in</a>";
if (isset($_SESSION['user_name'])) {
    $linkSigning = "<a href=\"myTasks.php\">My tasks</a>";
}
echo $linkSigning;
?>

<form action="addTask.php">
    <p>User name:<input type="text" name="user_name" value="">
    <p>Task title:<input type="text" name="task_title" value="">
    <p>Task description:<input type="text" name="task_description" value="">
    <p><button type="submit">Submit</button>
</form>