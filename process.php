<h3>INI ADALAH HASIL PROCESS DARI FORM</h3>
<?php 
   //echo $_GET['nilai1']." dan ".$_GET['nilai2']."<br>";

   if (!empty($_REQUEST['nilai1'])){
    $nilai1 = $_REQUEST['nilai1'];
   }else{
    $nilai1 = 0;
   }

   if (isset($_REQUEST['nilai2'])){
    $nilai1 = $_REQUEST['nilai2'];
   }else{
    $nilai2 = 0;
   }
   $nilai1 = $_REQUEST['nilai1'];
   $nilai2 = $_REQUEST['nilai2'];

   echo "jumlah dari " .$nilai1. "ditambah dengan" .$nilai2. "adalah" .$nilai1+$nilai2;
?>