

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Data</title>
</head>
<body>
    <?php 
      $name='';
      $email='';
      $subject='';
      $msg='';
      $error=[];
      function filterName($str){
          $field = filter_var(trim($_POST[$str]), FILTER_SANITIZE_STRING);
          if(!empty($field)){
              return $field;
          }else{
              $error[$str]="This field is required";
              return false;
          }
      }
      function filterEmail($str){
        $field = filter_var(trim($_POST[$str]), FILTER_SANITIZE_EMAIL);
        if(filter_var($field, FILTER_VALIDATE_EMAIL)){
            return $field;
        }else{
            $error[$str]="This Email field is required";
            return 'Not a email';
        }
    }
      function verifier($str){
          return htmlspecialchars(trim(htmlentities($_POST[$str])));
      }
      if(isset($_POST['submit'])){
          $name =filterName("name");
          $email =filterEmail("email");
          $subject =verifier("subject");
          $msg =verifier("msg");
      }
    ?>
    <h2>Thank You</h2>
    <p>Here is the info you have submitted</p>
    <ol>
       <li><strong>Name:</strong> <?php echo $name;?></li>
       <li><strong>Email:</strong> <?php echo $email;?></li>
       <li><strong>Subject:</strong> <?php echo $subject;?></li>
       <li><strong>Message:</strong> <?php echo $msg;?></li>
    </ol>

    <div>
    <?php 
       $list="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet, aliquam.";
       $strs=array("I", "am", "sleepy");

       $statement= explode(" ",$list);
       print_r($statement);
    ?>
    
    </div>
</body>
</html>