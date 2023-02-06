<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily_Challenge - Day4</title>
</head>
<body>
    <h1>Favourite Colours</h1>
    <form action="traitement.php" method="post">
        <input type="text" name="name" placeholder = "Enter your Name" ><br><br>
        
        <?php if(isset($message)){ echo $message; }?>

        <h3>Chose the Color</h3>
        <input type="checkbox" name="color[]" id="color" value = "red" ><label for="color">Red</label><br><br>
        <input type="checkbox" name="color[]" id="color" value = "yellow"><label for="color">Yellow</label><br><br>
        <input type="checkbox" name="color[]" id="color" value = "blue"><label for="color">Blue</label><br><br>
        
        <?php if(isset($message)){ echo $message; }?>
        
        <input type="submit" value="Soumettre" name="soumettre">

    </form>
    
    <?php 

    ?>
</body>
</html>