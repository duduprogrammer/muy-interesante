<?php

    $url = "https://www.dolarsi.com/api/api.php?type=valoresprincipales";
    $json = file_get_contents($url);
    $datos = json_decode($json, true);


    $conv = $datos[0]["casa"]["compra"];

    $conv2 = $datos[0]["casa"]["venta"];




    $conv3 = $datos[1]["casa"]["compra"];

    $conv4 = $datos[1]["casa"]["venta"];




    $conv5 = $datos[2]["casa"]["compra"];

    $conv6 = $datos[2]["casa"]["venta"];



?>


<div class ="container mb-5">
    <div class ="row suprow">
      <div class="col-3">
        <div class="card">


            <img class="card-img-top" src="<?=base_url();?>assets/imagenes/dolar.png" alt="Card image cap">


                <h5 class="card-title"> <center> Dolar Oficial </center> </h5>
                <p class="card-text"> <center> Compra | Venta </center></p>
                <p class="card-text"> <center> $<?php echo $conv ?>   | $<?php echo $conv2 ?> </center></p>
                
            </div>
            
            </div>
            <div class="col-3">
                <div class="card">

                <img class="card-img-top" src="<?=base_url();?>assets/imagenes/blu.png" alt="Card image cap">

                <h5 class="card-title"> <center> Dolar Blue </center> </h5>
                <p class="card-text"> <center> Compra | Venta </center></p>
                <p class="card-text"> <center> $<?php echo $conv3 ?>   | $<?php echo $conv4 ?> </center></p>
                
            </div>
                    
            </div>
                <div class="col-3">
                    <div class="card">

                    <img class="card-img-top" src="<?=base_url();?>assets/imagenes/soja.png" alt="Card image cap">
            

                    <h5 class="card-title"> <center> Dolar Soja </center> </h5>
                    <p class="card-text"> <center> Compra | Venta </center></p>
                    <p class="card-text"> <center> $<?php echo $conv5 ?>   | $<?php echo $conv6 ?> </center></p>
                    
                 </div>
            
            </div>
        </div>
    </div>
</div>
<head>
<?php if($publicidad) {?>

        <div class ="container mb-5">
        <div class ="row">
            <div class ="col-12">
                <center>
                    Anuncios</br>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3234786215727436" crossorigin="anonymous"></script>
                    <a href="https://www.youtube.com/watch?v=7y8sz-neK4c" target="_blank" rel="noopener noreferrer"><img class="img-fluid" src="<?=base_url();?>assets/imagenes/anuncio.gif"></a>
                </center>
            </div>
        </div>
    </div>
    
    
<?php } ?>
</head>

