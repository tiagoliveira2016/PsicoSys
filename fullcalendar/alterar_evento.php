<?php 
        include "conexao.php";
        // $this->ver($_POST);
        $nome = $_GET['nome'];
        $data = $_GET['data'];
        $id   = $_GET['id'];  
        $query = "UPDATE tab_eventos SET title=$nome,start=$data WHERE id = $id";
        /*$query = "UPDATE  `tab_eventos` SET (`title`, `start`) VALUES ('$nome', '$data')";*/
         
        // print_r($query);
        $exec = $conexao->exec($query);                         
        
        if($exec){            
            echo "1";     
        }
        else{
            echo "0";
        }
       
        
?>