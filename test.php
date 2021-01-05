
<?php

// $name = ($_GET['name']) ? $_GET['name'] : 'anonymous';

// echo "Hello ".$name;
var_dump($_GET);

?>

<div>
  
  <h1 id="h1id" class="h1class"><span>sdfsdfsda</span></h1>
  <h1 id="h2id" class="h1class">sdfsdfsda</h1>
  <h1 id="h3id" class="h1class">sdfsdfsda</h1>
  <h1 id="h4id" class="h1class">sdfsdfsda</h1>
</div>

<script>
let h1 = document.getElementsByTagName("h1")
let hq = document.querySelectorAll(".h1")
     
     console.log(h1[0].innerText)
</script>