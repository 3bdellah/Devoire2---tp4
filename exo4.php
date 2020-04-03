<!DOCTYPE>
<html>
<head><title>aceuil</title></head>
<body >
<div  
        style="
        text-align:center;
		width: 300px; height: 325px;
		background-color: white;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        display: block;
        border-radius: 20px;
        background-color: cyan;
        margin-top: 120px;"><br>
            <form  method="POST" action="authentification.php"  >
				      <h2 class="title">Welcome</h2><br><br>
           		   		<label for="email">l'adresse mail :</label><input type="text" name="email"  placeholder="email"><br><br>
           		    	<label for="mdp">le mot de pass :</label><input type="password" name="password" placeholder="password"><br><br>
            	<input type="submit"  name="login" value="Login">
            </form>    
    </div>
    
</body>
</html>