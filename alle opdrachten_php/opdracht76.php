<form action="" method="post">
<p>Cijfer:</p>
<input type="text" name="cijfer" placeholder="Cijfer:"> <br>
<input type="submit" value="verzenden">
<input type="text" name="ingevoerde cijfers" placeholder="">
<input type="text" name="gemiddelde" placeholder="">
</form>

<?php
if(isset($_POST['ingevoerde cijfers'])){

    $cijfer = $_POST[''];
    $korting = $_POST['korting'];
    
    
    if($korting  < $prijs){
        $som = $prijs / 100 * $korting;
      echo $som;
    }
    
    }
?>