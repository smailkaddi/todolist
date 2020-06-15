
<?php

include "functions.php";

$query = "SELECT * FROM task";

$result = mysqli_query($db, $query);

            if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
             $todo = $_POST['todo'];
             $date = date('l dS F\, Y');
             $sql = "INSERT INTO task (t_name, t_date) VALUES ('$todo' , '$date' ); ";
             $results = mysqli_query($db, $sql);
             if(!$results){

                die("failed");

             }else{
                 header("location:index1.php?todo-added");
             }
   }

    if(isset($_GET['delete_todo'])){

     $dtl_todo = $_GET['delete_todo'];
     $sqli = "DELETE FROM task WHERE t_id = $dtl_todo";
     $res = mysqli_query($db , $sqli);
     if(!$res){

        die("failed");

     }else{
         header("location:index1.php?todo-delete");
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
.search{
 margin: 5px;

}

</style>
<header class="navbar navbar-bright navbar-fixed-top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index1.php" class="navbar-brand">Home</a>
      </div>
      <nav class="collapse navbar-collapse" role="navigation">
        <ul class="nav navbar-nav">
          <li>
            <a  href="index.php">logout</a>
          </li>
          <li>
            <a href="profil.php">profil</a>
          </li>
        </ul>
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <ul class="dropdown-menu" style="padding:12px;">
              <form class="form-inline">
              </form>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>

    <div class="container">
        <div class="todo">
            <h1>   to Do list </h1>
            <h3>   add a new to do </h3>

            <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <div class="form-group">
                     <input class="form-control" type="text" name="todo" placeholder= "todo name" > 
                </div>
                <div class="form-group">
                <input class="btn btn-primary"  value="Add a New todo List" type="submit" > 
                </div>
            </form>

        </div >
        <div class="col-lg-4 search ">
             <form action="search.php" method="POST" >
            <input  class="form-control" type="text" name="search" placeholder="search" >              
             </form>

        </div>
      <div class="table-responsive col-lg-12" >  </div>
         <table class="table table-bordered table-striped table-hover" > 
           <thead>
                <th>ID</th>    
                <th>TODO</th>          
                <th>DATE ADD </th>   
                <th>EDIT TODO</th>   
                <th> Delete Todo</th>   
          </thead>
          <tbody>

          <?php

              while ( $row = mysqli_fetch_assoc($result)){
                $t_id = $row['t_id'];
                $t_name = $row['t_name'];
                $t_date = $row['t_date'];

                 ?>
                 
               <tr>
                <td> <?php echo $t_id ?> </td>
                <td> <?php echo $t_name ?>  </td>
                <td> <?php echo $t_date?>  </td>
                <td> <a href="edit.php?edit-todo=<?php echo  $row ['t_id']?>" class="btn btn-primary" > Edit Todo  </a> </td>
                <td> <a href="index1.php?delete_todo=<?php echo $row ['t_id']?>" class="btn btn-danger" > Delet Todo  </a> </td>
               </tr>

                <?php }


                ?>
          </tbody>
        </table>
       
    </div>

	<script src="public/js/jquery.min.js"></script>
      <script src="public/js/bootstrap.min.js" > </script>
</body>
</html>