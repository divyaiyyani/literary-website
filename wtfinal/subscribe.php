<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Subscribe Us!</title>

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    include("header.php");
    ?>
    <?php  
     $message = '';  
     $error = '';  
     if(isset($_POST["submit"]))  
     {  
          if(empty($_POST["name"]))  
          {  
               $error = "<label class='text-danger'>Enter Name</label>";  
          }  
          else if(empty($_POST["email"]))  
          {  
               $error = "<label class='text-danger'>Enter Email</label>";  
          }  
          else if(empty($_POST["genre"]))  
          {  
               $error = "<label class='text-danger'>Choose genre</label>";  
          }  
          else if (empty($_POST["author"])) {
               $error = "<label class='text-danger'>Choose author</label>";  
            # code...
          }
          else  
          {  
               if(file_exists('subs.json'))  
               {  
                    $current_data = file_get_contents('subs.json');  
                    $array_data = json_decode($current_data, true);  
                    $extra = array(  
                         'name'               =>     $_POST['name'],  
                         'email'          =>     $_POST["email"],  
                         'genre'     =>     $_POST["genre"],
                         'author'      =>   $_POST["author"] 
                    );  
                    $array_data[] = $extra;  
                    $final_data = json_encode($array_data);  
                    if(file_put_contents('subs.json', $final_data))  
                    {  
                         $message = "<label class='text-success'>Thank You for Subscribing!</p>";  
                    }  
               }  
               else  
               {  
                    $error = 'JSON File not exits';  
               }  
          }  
     }  
     ?>  
<div class="container">  
<h3 style="text-align: center">Subscribe Us!</h3>                 
<form method="post">  
     <?php   
     if(isset($error))  
     {  
          echo $error;  
     }  
     ?>  
     <br />  
     <label>Name</label>  
     <input type="text" name="name" class="form-control" /><br />  
    
     <label>Email Address</label>  
     <input type="email" name="email" class="form-control" /><br />  
    
     <label>Your Preferred Genre</label> 
     <select class="form-control" id="genre" name="genre">                         
        <option>Romance</option>
        <option>Horror</option>
        <option>Adventure</option>
     </select><br> 
    
     <label>Your Preferred Author</label>                     
     <select class="form-control" id="author" name="author">
        <option>Divya Iyyani</option>
        <option>Keshin Jani</option>
     </select> <br>

    <div class="text-center">
     <input type="submit" name="submit" value="Subscribe" class="btn btn-info " />
    </div><br />
     <?php  
     if(isset($message))  
     {  
          echo $message;  
     }  
     ?>  
    
<?php
    include('footer.php');

?> 
</form>  
</div>  

