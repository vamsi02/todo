<<!DOCTYPE html>
<html lang="en">
<head>
  <title>To do List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<body>
<div class="container">
<div class="col-md-8"><h4>Welcome, <?php echo  $_SESSION['email'];

 ?></h4></div>
<div class="col-md-4"><a href="logout.php">Logout</a></div>
</div>
<div class="container">
<div class="row">
	<div id="no-more-tables">
      <table class="col-md-12 table-bordered table-striped table-condensed cf">
        <thead class="cf">
          <tr>
           <th>ID</th>
           <th>Title</th>
           <th>Description</th>
           <th colspan="2">Status</th>         
          </tr>
       </thead>
		<tbody>
		<?php 
		$i = 1;

		 //print_r($result['id']);
		//exit();
		foreach($result as $res):?>
			<tr>
            <td><?php echo $i;?></td>
            <td><?php echo $res['todo_item'];?></td>
            <td><?php echo $res['description'];?></td>
    <td><a href ="javascript:;" onclick="update('<?php echo $res['id'];?>')"><?php
              
              if($res['status']==1){

                  echo 'Completed';
              }else{
				  echo 'In progress';
              }
               ?></a>
</div>
</div>
 </body>
</html> 
