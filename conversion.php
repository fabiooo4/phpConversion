<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Conversion</title>
  </head>
    
      <body class="mainBg">
        <h1 class="title">Conversione</h1>
            <div class="center">
              <div>
                <!-- Conversion -->
                <p class="conversion">
                  <?php
                    $converted = "";
                    $output = "";

                    if (isset($_POST['submit'])) {
                      $base10 = $_POST['base10'];
                      $system = $_POST['system'];
                      
                      if(!empty($base10) && !empty($system)) {
                        switch ($system) {
                          case "Binario":
                            $converted = decbin($base10);
                            break;
                          case "Ottale":
                            $converted = decoct($base10);
                            break;
                        }

                        $output = $base10 . " in " . $system . " = " . $converted;
                        echo $output;
                      } else {
                        echo "Inserisci tutti i campi";
                      }
                    }
                  ?>
                </p>
              </div>
            </div>
        </body>
</div>
</html>