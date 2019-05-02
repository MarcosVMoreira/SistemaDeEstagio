<?php
    session_start();

    if (isset($_SESSION['cnpjCpfConcedente'])){
        echo "tetse";
      }
      else{
          echo "erro";
      } 
    
?>