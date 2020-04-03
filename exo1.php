<?php

//exo1 :
function delimiteur($car,$string){
    
    $af= explode($car,$string);
    return $af;    
}
?>
<!DOCTYPE>
<html>
<head>
    <style> 
        table, th, td {border: 1px solid black;}
        th{background-color:cadetblue;}
    </style>
</head>
<body>
    
    <h3 style="text-align: center;" >Command clients</h3>
    
     <table >
         <tr style>
            <th>Numéro de commande</th>
            <th>Numéro de Client</th> 
            <th>Date de commande</th>
            <th>Désognation artilce</th>
            <th>Quantité(Pal)</th>
            <th>Prix unitaire(Dh)</th>
            <th>Date de livraison</th>
            <th>adresse client</th>
        </tr>
 
        <tr> 
<?php
    error_reporting(E_ERROR|E_PARSE);
   
    $c= '|' ;
    $file=fopen("commandes.txt",'r+');
    while (($string = fgets($file)) !== false){
        //appel function :
        
        $af= delimiteur($c,$string) ;
        for($i=0;$i<count($af);$i++){
        if ($i%8==0) {echo "<tr>";}
            echo "<td>". $af[$i] ."</td>" ;}
    }            
?>   
    </tr>     
    </body>
</html>