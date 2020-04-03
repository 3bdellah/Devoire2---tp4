<!DOCTYPE>
<html>
<head>
<title>exo3</title>
<link href="valideDate.php" rel="alternate">
</head>
<body>
<H2>Validation de la date</H2>
<?php
    
    $day= $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
   
if(($day<32 and $day>0)and($month<13 and $month>0)and($year<2050 and $year>1990))
{
echo "la date saisie est :" .$day."/".$month."/".$year ;
echo "<h4>la date saisie <samp style=\"color:green;\">est Valide</samp></h4>";
}else{
    echo "la date saisie est :" .$day."/".$month."/".$year ;
    if($day>=32 or $day<=0)
    echo "<h4>le jour saisie ".$day." est non bissextile : <samp style=\"color:red;\">Date invalide</samp></h4>"; 
    if($month>=13 or $month<=0)
    echo "<h4>le Mois saisie ".$month." est non bissextile : <samp style=\"color:red;\">Date invalide</samp></h4>";
    if($year>=2050 or $year<=1990)
    echo "<h4>l annee saisie ".$year." est non bissextile : <samp style=\"color:red;\">Date invalide</samp></h4>";
}
 ?>   
</body>    
</html>
