<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mysql Database Search Ajax</title>
    <style>
       body{
           font-family: Arial, Helvetica, sans-serif;
       }
       .search-box{
           width:300px;
           position:relative;
           display: flex;
           justify-content: center;
           align-items: center;
           font-size: 18px;
       }
       #searchfield{
           height:32px;
           padding:5px 10px;
           border: 1px solid #cccccc;
           font-size: 16px;
       }
       .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    #searchfeild, .result{
        width:100%;
        box-sizing: border-box;
    }
    .result p{ 
        margin: 0;
        padding:5px 10px;
        border: 1px solid #cccccc;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background-color:  #f2f2f2;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
          $("#searchfield").on("keyup input", function(){

            var inputVal= $(this).val();
            var resDropdown = $(this).siblings(".result");

            if(inputVal.length){
                $.get(
                    "dbcon.php", 
                    {term: inputVal}
                ).done(function(data){
                    // console.log(data);
                    resDropdown.html(data);
                 });
            }else{
                resDropdown.empty();
            }
          });
      });
    
    </script>
</head>
<body>
     <div class="search-box">
        <input type="text" id="searchfield" placeholder="searc countries...." autocomplete="off">
        <div class="result"></div>
     </div>
</body>
</html>