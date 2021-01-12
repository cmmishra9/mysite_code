<?php
define('CMA', true);

// if(!CMA) die("Error, Get Lost");

require_once("./common/db.php");


?>
<?php require_once "./common/header.php"; ?>
<main class="container">
        <div class="row pb-4">
          <div class="col-md-6">
           <p class="text-italic">Click on Add contact to add Contact</p>
          </div>
          <div class="col-md-6 d-flex flex-row-reverse plusbtn">
          <a href="./addcontact.php" class="btn btn-success mr-5"><i class="fa fa-plus" aria-hidden="true"></i> Add Contact</a>
          </div>
        </div>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
          <?php
             
             $q ="SELECT * FROM contacts";

             if($res= mysqli_query($link, $q)){
                if(mysqli_num_rows($res)>0){
                    
                    $n=1;
                    while($row = mysqli_fetch_array($res)){
          ?>
            <tr>
                <th scope="row"><?php echo $n; $n++;?></th>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td >
                   <a href="editcontact.php?key=<?php echo $row['id']; ?>" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Contact"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
                   <a href="delete.php?key=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
            </tr>
            <?php
                }// while loop close
            } //num rows checker if statement is closed
            }else{
                echo "Error".mysqli_error($link);
            }
            
            ?>
        </tbody>
        </table>
</main>

<?php require_once "./common/footer.php"; ?>
