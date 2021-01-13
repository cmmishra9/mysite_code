<?php
define('CMA', true);

// if(!CMA) die("Error, Get Lost");
require_once("./common/db.php");
$alert='';
$id='';
$name='';
$mobile='';
$email='';

if(isset($_GET['key']) && !empty($_GET['key'])){
    $id= $_GET['key'];
     $sel= "SELECT * FROM contacts WHERE id=$id";

     if($res= mysqli_query($link, $sel)){
         
        if(mysqli_num_rows($res)>0){

            $data= mysqli_fetch_array($res);
            // var_dump($data);
            $name= $data['name'];
            $mobile=$data['mobile'];
            $email=$data['email'];
        }
     }
}

if(isset($_POST['editcon'])){
        $id=$_POST['id'];
        $name =  mysqli_real_escape_string($link, trim($_POST['name']));
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];

        $q ="UPDATE contacts SET name='$name', mobile='$mobile', email='$email' WHERE id=$id";
      
        if(mysqli_query($link, $q)){
            $alert= "Your Contact is Updated";
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
                Edit Contact 
            </div>
            <div class="card-body">
             <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <input type="hidden" name="id" value="<?php echo (!empty($id))? $id:''; ?>">
                <div class="form-group">
                 <label for="name">Name</label>
                 <input type="text" name="name" value="<?php echo (!empty($name))? $name:''; ?>"  placeholder="Enter Name" id="name" class="form-control">
                </div>
                <div class="form-group">
                 <label for="mobile">Mobile</label>
                 <input type="text" name="mobile" value="<?php echo (!empty($mobile))? $mobile:''; ?>" placeholder="Enter mobile Number" id="mobile" class="form-control">
                </div>
                <div class="form-group">
                 <label for="email">Email</label>
                 <input type="email" name="email" value="<?php echo (!empty($email))? $email:''; ?>" placeholder="Enter Email" id="email" class="form-control">
                </div>
                <input type="submit" name="editcon" value="Edit Contact" class="btn btn-block btn-warning">
             </form>            
            </div>
        </div>
       </div>
   </div>
</main>

<?php require_once "./common/footer.php"; ?>