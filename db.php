<?php session_start();

function createUser($user_fname,$user_lname,$user_pnumber,$user_email, $reg_password,$gender)
{
 global $db;
 $stmt = $db->query("select * from users where email='".$_POST['reg_username']."'");
 $rcount = $stmt->rowCount();
	 if($rcount > 0)
	{
		return true;
	}
	else
	{
		$sqlInst = $db->query("insert into users set fname='".$_POST['user_fname']."',lname='".$_POST['user_lname']."',phone='".$_POST['user_pnumber']."',email='".$_POST['reg_username']."',password='".$_POST['reg_password']."',gender='".$_POST['gender']."'");
		return false;
	}
}
function isUserValid($user_email, $password)
{
  global $db;
  $stmt = $db->query("select * from users where email='".$user_email."' and password='".$password."'");
  $count=$stmt->rowCount();
  $result = $stmt->fetch();
 

  if($count == 1){

   $_SESSION["my_id"] =$result['id'];
  $_SESSION["email"] =$result['email'];
  
        return true;
     }else{
     
       return false;
     }
}

function addTodoItem($todo_text,$todo_description){
  global $db;
  $stmt = $db->query( "insert into todos set todo_item='".$_POST['todotitle']."',description='".$_POST['description']."',toda_userid='".$_SESSION['my_id']."'");
  
}

function getTodoItems(){
  global $db;
 $query = $db->query("select * from todos where toda_userid='".$_SESSION['my_id']."'");
   $result = $query->fetchAll();

  return $result;
}

function deleteTodoItem($user_id, $todo_id){
  global $db;
 
echo $user_id,$todo_id;
$count = $db->exec("DELETE FROM todos WHERE id = '".$todo_id."'");
 }
 
 function updateTodoItem($user_id, $todo_id){
  global $db;
 
echo $user_id,$todo_id;
$count = $db->exec("update todos set status=1 WHERE id = '".$todo_id."'");

 }
?>
