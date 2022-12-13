<form action="" method="post">

<input type="text" name="prijs" placeholder="totaal prijs">
<input type="text" name="korting" placeholder="korting">
<input type="submit" value="verzenden">
</form>


<?php 
if(isset($_POST['prijs'])){

    $prijs = $_POST['prijs'];
    $korting = $_POST['korting'];
    
    
    if($korting  < $prijs){
        $som = $prijs / 100 * $korting;
      echo $som;
    }
    
    }
?>