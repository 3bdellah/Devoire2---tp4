<?PHP
function delimiteur($car,$string){
    
    $af= explode($car,$string);
    return $af;    
}
$file=fopen("commandes.txt","r+");
$file1 = fopen("pscde01_CLI1001.txt", "w") ;
$file2 = fopen("pscde01_CLI1004.txt", "w") ;

while (($string = fgets($file)) !== false){
$c='|';
$tomp = delimiteur($c,$string);
    
$var1= 'CLI1001';
$var2= 'CLI1004';
    
    for($i=0;$i<count($tomp);$i++){
        if ($i%8==0){
        if( strcmp($tomp[$i+1],$var1) == 0 ){
            for($j=$i;$j<$i+8;$j++){
            fwrite($file1, "|".$tomp[$j]);}
        }
        else if(strcmp($tomp[$i+1],$var2) == 0){
              for($j=$i;$j<$i+8;$j++){
              fwrite($file2, "|".$tomp[$j] ); }
            } 
            
        }
    
    }
   
}
fclose($file1);
fclose($file2);

    echo "les deux fichiers sont crees";
?>