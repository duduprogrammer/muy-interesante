
<?php
	require 'conexion.php';
    
		

    $resultfecha = mysqli_query($conexion, "SELECT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE id = '$numeracion'");

    if($resultfecha->num_rows >0)
    {
        while($row = $resultfecha->fetch_assoc())
        {
        
            $reportero = $row['reportero'];
            $subtitulo = $row['subtitulo'];
            $correo = $row['correo'];
            $titulo = $row['titulo'];
            $categoria = $row['categoria'];
            $fecha = $row['fecha'];
            
            $imagen = $row['imagen'];
            $avatar = $row['avatar'];
            $noticia = $row['noticia'];
            
        }
    }
?>


<article id ="post" class ="container">
    <div class="label">
        <span>    <?php echo $categoria; ?>          </span>
        <div class="circle">

            <i class="fas fa-headphones-alt"></i>
        </div>
        <small>Escuchar articulo</small>
    </div>
    <h1>
         <?php echo $titulo; ?>
    </h1>
    <h2>
         <?php echo $subtitulo; ?>
    </h2>
    <div class="author">
    <img src="<?=base_url();?>assets/imagenes/noticias/avatars/<?php echo $avatar; ?>" alt="Author image" />
    <div class="info">
    <div class="name">Por <span>   <?php echo $reportero; ?>     </span></div>
    <div class="date">  <?php echo $fecha; ?>    </div>
    <div class="email"> <?php echo $correo; ?>    </div>
    </div>
</div>
<div class="rrss">
    <i class="fab fa-facebook-f color-fbk"></i>
    <i class="fab fa-twitter color-twitter"></i>
    <i class="fab fa-linkedin-in color-linkedin"></i>
 
</div>
<figure>
<img src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" />
<figcaption> <?php echo $subtitulo; ?> </figcaption>
</figure>
<p>
    <?php echo $noticia; ?>
</p>
</article>