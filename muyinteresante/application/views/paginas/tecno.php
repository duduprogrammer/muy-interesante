


<?php
	require 'conexion.php';
		

   
?>


<section id="news-feed" class ="container">
    <p>Noticias</p>
    
    
    <div class = "row">
        <div class = "left-col">
            
            <article>
            <?php
	                
   



                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 1;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                
                
                    <figure>
                    
                    <img class="img-fluid"  src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?> "alt = "Descripcion">
            
                        
                        <figcaption>
                            <span>Por <?php echo $reportero; ?> </span>
                        </figcaption>
            
                    </figure>
                 </a>
            </article>

            <article>
            <?php
	                
                $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 2;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>


            <article>
            <?php
	                
   



                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 3;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>
        </div>
        <div class = "right-col">
        <?php if($publicidad) {?>
        <article>
            <center>
             Anuncio</br>
           <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3234786215727436" crossorigin="anonymous"></script>
           <a href="https://www.youtube.com/watch?v=7y8sz-neK4c" target="_blank" rel="noopener noreferrer"><img class="img-fluid" src="<?=base_url();?>assets/imagenes/anuncio.gif"></a>
            </center>
        </article>
        <?php } ?>
        <article>
            <?php
	                
                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 4;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                       $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>

            <article>
            <?php
	                
                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 5;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>


            <article>
            <?php
	                
   



                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 6;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>

        </div>

    </div>
    <div class = "row">
        <div class ="col">
        <article>
            <?php
	                
                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 7;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>
        </div>
        <div class ="col">
        <article>
            <?php

                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 8;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>
        </div>
    </div>
    <div class="row">
        <div class ="col">
        <article>
            <?php
	                

                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 9;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>
    </div>
        <div class ="col">
        <article>
            <?php
	                
   



                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 10;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>
    </div>
        <div class ="col">
        <article>
            <?php
	                
   



                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 11;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>
    </div>
        <div class ="col">
        <article>
            <?php
	                
   



                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 12;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>
    </div>
    </div>

    <div class="row">
        <div class ="col">
        <article>
            <?php
	                
   



                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 13;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>
    </div>
        <div class ="col">
        <article>
            <?php
	                
   



                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 14;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>
    </div>
        <div class ="col">
        <article>
            <?php
	                
   



                 $resultfecha = mysqli_query($conexion, "SELECT DISTINCT id, reportero, subtitulo, correo, titulo, categoria, fecha, imagen, avatar, noticia FROM noticias WHERE categoria = '3' limit 15;");

                if($resultfecha->num_rows >0)
                {
                    while($row = $resultfecha->fetch_assoc())
                    {
                        $id = $row['id'];
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
                <a href="<?=base_url();?>inicio/post/<?php echo $id; ?>"> <h1 > <?php echo $titulo; ?>   </h1> </a>
                <p> <?php echo  $subtitulo; ?> </p>
                <figure>
               
                <img class="img-fluid" src="<?=base_url();?>assets/imagenes/noticias/<?php echo $imagen; ?>" alt="Descripcion"></a>
                    
                    <figcaption>
                        <span>Por <?php echo $reportero; ?> </span>
                    </figcaption>
                </figure>
            </article>
    </div>
        
    </div>
</section>
