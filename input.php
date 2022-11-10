<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Conversion</title>
  </head>
    
      <body class="mainBg">
        <h1 class="title">Calcolatrice</h1>
            <div class="center">
              <div>
                <!-- Input -->
                <form action="conversion.php" method="post">
                  <input class="input" type="number" name="base10" placeholder="Numero in base 10">
                  <select class="input" name="system">
                    <option></option>
                    <option>Binario</option>
                    <option>Ottale</option>
 
                  </select>
        
                  <br>
                  <button class="button" type="submit" name="submit" value="submit">Converti</button>
                </form>
              </div>
            </div>
        </body>
</div>
</html>