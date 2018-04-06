<!DOCTYPE html>
<html lang="en">
<head>
	<title>Galeria</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <table>
        <tr>
            <td>
                <img src="imagenes/grande-kurumi.jpg" alt="kurumi">
            </td>
        </tr>
    </table>

	<h1>TEST COVER</h1>
	<div class="div-tb">
		<a href="subir.php" class="btn subir"><i class="fa fa-upload" aria-hidden="true"></i> Subir Foto</a>
	</div>

		<div class="contenedor">
              <div class="imagen">
                    <a href="">
                        <img class="cover" src="fotos/Alice.png">
                    </a>
                  <div class="info">

                  </div>
           		</div> 
                <div class="imagen">
                    <a href="">
                        <img class="cover" src="fotos/DateWeb.jpg.png">
                    </a>
                  <div class="info">

                  </div>
              </div> 
                <div class="imagen">
                    <a href="">
                        <img class="cover" src="fotos/izuna.jpg">
                    </a>
                  <div class="info">

                  </div>
              </div> 
                <div class="imagen">
                    <a href="">
                        <img class="cover" src="fotos/Marina.jpg">
                    </a>
                  <div class="info">

                  </div>
              </div> 
                <div class="imagen">
                    <a href="">
                        <img class="cover" src="fotos/natsumi.png">
                    </a>
                  <div class="info">

                  </div>
              </div> 
                <div class="imagen">
                    <a href="">
                        <img class="cover" src="fotos/natsumi2.png">
                    </a>
                  <div class="info">

                  </div>
              </div> 
                <div class="imagen">
                    <a href="">
                        <img class="cover" src="fotos/nogame.jpg">
                    </a>
                  <div class="info">

                  </div>
              </div> 
                <div class="imagen">
                    <a href="">
                        <img class="cover" src="fotos/Nibelcol.png">
                    </a>
                  <div class="info">

                  </div>
              </div> 
                  <div class="imagen">
                    <a href="">
                        <img class="cover" src="fotos/nieve.jpg">
                    </a>
                  <div class="info">

                  </div>
              </div> 
		</div>

  


		<div class="div-tb">
			<?php if($paginaActual>1): ?>
                <a href="?pagina=<?php echo $paginaActual-1 ?>" class="btn before"> <i class="fa fa-chevron-left"></i> Pagina Anterior</a>
            <?php endif?>

            <?php if($paginaActual!=$totalPaginas): ?>
                <a href="?pagina=<?php echo $paginaActual +1 ?>" class="btn after"> Pagina Siguiente <i class="fa fa-chevron-right"></i> </a>
           	<?php endif?>
		</div>
</body>
</html>
