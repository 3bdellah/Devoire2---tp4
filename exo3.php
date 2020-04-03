<!DOCTYPE>
<html>
<head>
<title>exo3</title>
</head>
<body>
<H2>Choisir une date</H2>
   
    <form Method="post" action="valideDate.php">
<table>
<tr>
    <th>Jour</th>
    <th>Mois</th>
    <th>Année</th>
</tr>
<tr>
    <td><label for="day"></label>
        <input type="number" name="day" min="0" max="99" step="1" value="5" /></td>
    <td><label for="Month"></label>
        <input type="number" name="month" min="0" max="99" step="1" value="4" /></td>
    <td><label for="year"></label>
        <input type="number" name="year" min="0" max="9000" step="1" value="2020" /></td>
</tr>
    
</table>
  
    <input type="submit"   value="Envoyer">
    </form>
   
    
</body>    
</html>



