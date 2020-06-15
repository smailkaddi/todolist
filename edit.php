
<?php

include "functions.php";

if (isset($_GET['edit-todo'])){
    $e_id = $_GET['edit-todo'];
}
if (isset($_POST['edit_todo'])){

    $edit_todo = $_POST['todo'];

    $query = "UPDATE task SET t_name = '$edit_todo' WHERE t_id = $e_id ";
    $run  = mysqli_query($db,$query);

    if(!$run){
        die("faild");
    }else{
        header("location:index1.php?updated");

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to Doo </title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-them.min.css">
    <link rel="stylesheet" href="public/css/css.css">
</head>
<body>
<style>
  .todo{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 3px;
        border: 1px solid #cccccc;
        margin-top: 5px;

  }
</style>
    

    <div class="container">
        <div class="todo">
            <h1>   to Do list </h1>
            <h3>   add a new to do </h3>

            <form method="POST" action="">

             <?php  
             $sql = "SELECT * FROM task WHERE t_id = $e_id";
             $result = mysqli_query($db , $sql);
             $data = mysqli_fetch_array($result);
             
             ?>

                <div class="form-group">
                     <input class="form-control" type="text" name="todo" placeholder= "todo name" value="<?php  echo $data ['t_name']; ?> " > 
                </div>
                <div class="form-group">
                <input class="btn btn-primary"  value="Add a New todo List" type="submit" name ="edit_todo" > 
                </div>
            </form>

        </div >
     
    
       
    </div>

	<script src="public/js/jquery.min.js"></script>
      <script src="public/js/bootstrap.min.js" > </script>
</body>
</html>