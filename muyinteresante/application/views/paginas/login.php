<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="wrapper fadeInDown">
  <div id="formContent">



    <div class="fadeIn first">
      <img src="<?=base_url();?>assets/imagenes/logo.png" id="icon" alt="User Icon" />
    </div>

  
    <form action="loguear" method = "POST">
 
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Nombre de Usuario">
      <input type="text" id="password" class="fadeIn third" name="clave" placeholder="Contraseña">
      <input type="submit"  value="Ingresar" method = "POST">
    </form>



    <div id="formFooter">
      <a class="underlineHover" href="<?=base_url();?>inicio/registro">Eres nuevo? Registrate</a>
    </div>
  </div>
</div>


