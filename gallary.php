<!doctype html>
<html lang="en">
  <head>
    <title>Photo Gallary</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    img{
        width:200px;
    }
    img:hover{
        zoom:105%;
        transition: width 0.6s ease-in;
    }
    </style>
  </head>
  <body>
      <div class="jumbotron text-center">
        <h2 class="display-4">Photo Gallary</h2>
      </div>
      <div class="container">
         <div class="row">

            <?php  
            
            $imgdir= "images";
            
            if(file_exists($imgdir) && is_dir($imgdir)):
                $result = scandir($imgdir);

                $images = array_diff($result, array('.','..'));

                if(count($images)>0):

                    foreach($images as $img):
            ?>
            <div class="text-center mx-2">
            <img src="<?php echo "$imgdir/$img"; ?>" class="img-thumbnail w-30" alt="Responsive image">
            </div>  
            <?php 
               endforeach;
            endif;
        endif;
            ?>
            
         </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>