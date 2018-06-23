<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Subscription Details</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>
      <?php
        include 'header.php';
        ?>
      <div id="content" style="width: 100%;">    
          <h3 style="text-align: center;">Subscription Details</h3>
          <div class="container">
             <div class="table-responsive">
                <br />
                <table class="table table-bordered table-striped table-hover" id="fdbk">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Topic</th>
                    <th>Time</th>
                </tr>
                </table>
              </div>
          </div> 
          <?php
          include 'footer.php';
          ?>
      </div>
    <!-- jQuery CDN -->
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <!-- Bootstrap Js CDN -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

     <script type="text/javascript">
         $.getJSON("subs.json",function(data){
          var sub_data = '';
          $.each(data,function(key,value){
            sub_data += '<tr>';
            sub_data += '<td>'+value.name+'</td>';
            sub_data += '<td>'+value.email+'</td>';
            sub_data += '<td>'+value.subject+'</td>';
            sub_data += '<td>'+value.time+'</td>';
            sub_data += '<tr>';
          });

          $('#fdbk').append(sub_data);
        });
    </script>
  </body>
</html>
