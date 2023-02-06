<?php
    if(isset($_POST['soumettre'])){
        $name = htmlspecialchars($_POST['name']);
        $color = $_POST['color'];

        if(!empty($name)){
            
            echo $name .'<br>';

            if(!empty($color)){
               
                foreach($color as $elt){
                    
                    echo $elt . '<br>'; 
                }
            }
            else{
                $message = "Veuillez choisir une couleur !";
            }
        }else{
            $message = "Veuillez entrer un nom !";
        }
       
    }