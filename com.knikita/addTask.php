<?php
session_start();

$userName = trim($_REQUEST['user_name']);
$taskTitle = trim($_REQUEST['task_title']);
$taskDescription = trim($_REQUEST['task_description']);

if (!isset($_SESSION['user_name'])) {
    $_SESSION['tasksArray'][$userName] = array();
}
$userTasks = &$_SESSION['tasksArray'][$userName];

$userTasks[$taskTitle] = $taskDescription;

header("Location: index.php", true);