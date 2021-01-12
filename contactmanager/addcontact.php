<?php
define('CMA', true);

// if(!CMA) die("Error, Get Lost");

require_once("./common/db.php");
$alert='';

if(isset($_POST['addcon'])){
    $name =  mysqli_real_escape_string($link, trim($_POST['name']));
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $q ="INSERT INTO contacts( `name`, `email`, `mobile`) VALUES ('$name', '$email', '$mobile')";

    if(mysqli_query($link, $q)){
        $alert= "Your Contact is added";
    }else{
        echo "Error".mysqli_error($link);
    }
}

?>
<?php require_once "./common/header.php"; ?>

<main class="container ">
<?php if(!empty($alert)){   ?> 
<div class="alert alert-success" role="alert">
  <?php echo $alert; ?>
</div>
<?php } ?>
   <div class="row d-flex justify-content-center">
       <div class="col-md-6">
        <div class="card border-success">
            <div class="card-header">
                Add Contact 
            </div>
            <div class="card-body">
             <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <div class="form-group">
                 <label for="name">Name</label>
                 <input type="text" name="name" placeholder="Enter Name" id="name" class="form-control">
                </div>
                <div class="form-group">
                 <label for="mobile">Mobile</label>
                 <input type="text" name="mobile" placeholder="Enter mobile Number" id="mobile" class="form-control">
                </div>
                <div class="form-group">
                 <label for="email">Email</label>
                 <input type="email" name="email" placeholder="Enter Email" id="email" class="form-control">
                </div>
                <input type="submit" name="addcon" value="Add Contact" class="btn btn-block btn-success">
             </form>            
            </div>
        </div>
       </div>
   </div>
</main>

<?php require_once "./common/footer.php"; ?>