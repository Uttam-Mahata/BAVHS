<?php
 require 'action.php';
 require 'attachment_cofig.php';
 require 'download.php';
?>
<?php
session_start();
if(!isset($_SESSION['Adminusername'])) {
  header("location: adminlogin.php");
}
else {
  $now = time();
  if ($now > $_SESSION['expire']) {
    echo "<p>Session Expired!</p>";
    die();
    
  }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
     
    <title>Admin Notice Board</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="bg-secondary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 bg-light rounded mt-2 ">
        
        <h4 class="text-center p-2">
          Admin - <?php echo $_SESSION['Adminusername']?>
        </h4>
        <form action="admin_bavhs_cm_sys.php" method="POST" class="p-2">
          <div class="form-group">
            <label class="bg-light">
              Enter Your Name : 
            </label>
           
            <input type="text" name="name" class="form-control rounded-0" value="Admin" required>
          </div>
          <div class="form-group">
            <label class="bg-light">
              Enter Notice information:
            </label>
            <textarea name="comment" class="form-control rounded-1" required>
            </textarea>
            
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary rounded-1" value="Post Notice">
           <a href="logout.php" class="btn btn-danger rounded-1 float-right">
             Logout
           </a>
          </div>
          <br>
          <h4 class="text-success">
            <? $msg=""?>
          </h5>
        </form>
        <br />
            <table  align="center" class="py-2">
       <tr>
           <td>
            <form action="admin_bavhs_cm_sys.php" method="post" enctype="multipart/form-data" class="form-group bg-light">
                    <input type="file" name="file">
                    <button type="submit" name="upload" class="btn btn-success"> Upload</button>
                </form>
           </td>
       </tr>
       <tr>
           <td>
              <?php
               $query2 = "SELECT * FROM filedownload ORDER BY id DESC ";
               $run2 = mysqli_query($conn,$query2);
               
               while($rows = mysqli_fetch_assoc($run2)){
                   ?>
            
               <?php
               }
               ?>
           </td>
       </tr>
   </table>
   <br />
      </div>
  
           
    </div>
    <br>
    <h3 style="text-align: center;"class="text-light">[Your Notices]</h3>
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
            <br />
               <a href="download.php?file=<?php echo $rows['filename'] ?>"><? $rows['filename']?></a><br>
            </p>
              
            </div>
                <div class="class-footer bg-light py-0">
             <div class="float-right ml-2 mt-1 mr-1">
              <a href="admin_bavhs_cm_sys.php?del=<?= $row['id']?>" class="text-danger py-0" onclick="return confirm('Do you want to delete this notice?');" title="DELETE">
                <i class="fas fa-trash"></i>
              </a>
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
    
      </div>
    </div>
 </div>
 
</body>

</html>
