
<!doctype html>
<html lang="en">
  <head>
    <title>Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="card text-center mt-4">
        <div class="card-header"></div>
            <div class="card-body">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-horizontal">
                <div class="form-group">
                <input type="number" class="form-control" name="num1" placeholder="first number">
                </div>
                <div class="form-group">
                <select name="oper" class="form-control">
                    <option value="add">Addition</option>
                    <option value="sub">Subtract</option>
                    <option value="mul">Multiply</option>
                    <option value="divide">Division</option>
                </select>
                </div>
                <div class="form-group">
                <input type="number" name="num2" class="form-control" placeholder="Sec number"></div>
                <input type="submit" name="calc" class="btn btn-primary" value="Calculate">
            </form>
            </div>
        </div>
      </div>
      <div class="container">
       <div class="card">
       <div class="card-body text-center">
         <h1 class="display-3">
         <?php

if(isset($_POST['calc'])){
    $opr=$_POST['oper'];
      switch ($opr) {
          case 'add':
              echo $_POST['num1']+$_POST['num2'];
              break;
          case 'sub':
            echo $_POST['num1'] - $_POST['num2'];
            break;
        case 'mul':
            echo $_POST['num1'] * $_POST['num2'];
            break;
        case 'divide':
            echo $_POST['num1'] / $_POST['num2'];
            break;
          default:
              echo "choose a right operation";
              break;
      }
}else{
    echo "Get out of my property";
} 

?>
         
         </h1>
       </div>
       </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>