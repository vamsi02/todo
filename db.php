<?php
   function isUserValid($username,$password){
     global $db;
     $query = 'select * from users where username = :name and 
     passwordHash = :pass';
     $statement = $db->prepare($query);
     $statement->bindValue(':name',$username);
     $statement->bindValue(':pass',$password);
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();

     $count = $statement->rowCount();
     if($count == 1){
       setcookie('login' , $username);
       setcookie('my_id' , $result[0]['id']);
       setcookie('isLogged' , true);
       return true;
     }
     else{
       unset($_COOKIE['login']);
       setcookie('login' , false);
       setcookie('isLogged' , false);
       setcookie('my_id' , false);
       return false;
     }

   }

?>
