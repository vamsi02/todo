<?php
require('db_connection.php');
require('db.php');
$action = filter_input(INPUT_POST, "action");

if($action == NULL) {
  $action = "show_login_page";
}
if($action == "show_login_page"){
  include('login.php');
}
else if($action == 'test_user')
{
  $username = $_POST['reg_uname'];
  $password = $_POST['reg_password'];
if($username =="" || $password==""){
	
	echo "<script>window.location.href='badinfo.php'</script>";
}

	$suc = isUserValid($username, $password);
	if($suc == true)
	{
		$result= getTodoItems($_SESSION['my_id']);
		include('list.php');
	}   
  else
  {
    echo "<script>window.location.href='badinfo.php'</script>";
  }
}
else if($action == 'registar'){
    $user_email = filter_input(INPUT_POST, 'reg_username');
	
    if(isset($user_email))
	{
      $user_fname = filter_input(INPUT_POST, 'user_fname');
		$user_lname = filter_input(INPUT_POST, 'user_lname');
		$user_pnumber = filter_input(INPUT_POST, 'user_pnumber');
		$reg_password = filter_input(INPUT_POST, 'reg_password');
		$gender = filter_input(INPUT_POST, 'gender');
		$exit = createUser($user_fname,$user_lname,$user_pnumber,$user_email, $reg_password,$gender);
		
		if($exit == true)
		{
		header ("location: user_exists.php");	
      }else{
        header("Location: login.pjp");
      }
    }
}
	else if ($action == 'add')
	{
		if (($_POST['todotitle'] and $_POST['description']))
	  {
		addTodoItem($_POST['todotitle'],$_POST['description']);
	  }
		$result = getTodoItems();
		include('list.php');
}
else if($action == 'delete'){
  if(isset($_POST['item_id'])){
	$selected=$_POST['item_id'];
        deleteTodoItem($_SESSION['my_id'],$selected);
}
	$result = getTodoItems($_SESSION['my_id']);
	include ('list.php');
}
else if($action == 'update'){
  if(isset($_POST['item_id'])){
	$selected=$_POST['item_id'];
        updateTodoItem($_SESSION['my_id'],$selected);
}
	$result = getTodoItems($_SESSION['my_id']);
	include ('list.php');
  
}
?>
