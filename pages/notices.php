<?php
require 'action.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Notice Board</title>
</head>


<body class="text" style="font-size: 20px;">
  <div class="row justify-content-center">
    <div class="col-lg-5 rounded bg-light p-3">
      <?php
        $sql = "SELECT * FROM comment_table ORDER BY id DESC";
        $result =$conn->query($sql);
        while($row=$result->fetch_assoc()){
          
        
        ?>
      <div class="card mb-2 border-secondary">
        <div class="card-header bg-light py-1 text-light">
          <span class=" float-left font-bold text-danger">
            Notice:
          </span>
         <img class="float-right" src="new-gif.gif" height="50">
        </div>
        <div class="card-body py-2 bg-light">
          <p class="card-text text-danger">
            <?= $row['comment']
              
              ?>
          </p>
        </div>
      
         
       </div>
          <div class="card-footer py-0">
            <span class="float-right font-bold text-danger mt-1">[
              <?= $row['cur_date'] 
                ?>]
            </span>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
 
</body>

</html>