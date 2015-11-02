  <?
  define('TO_ROOT','../');

  include_once(TO_ROOT . '/template/header.php')

  ?>

    <div class="container" role="main">
      <h1>Expresiones</h1>

      <?
       for ($i=1; $i <= 5 ; $i++) {  
      ?>
      <div class='row'>
        <h2>Ejemplo <?=$i?></h2>
          <div class="col-md-6 jumbotron">

            <pre class="brush: php;">

            <?=str_ireplace('<?','',file_get_contents('ejemplo' . $i . '.php'))?>
            </pre>


            <button class="btn btn-primary" type="button" onclick="document.getElementById('iframe_ejemplo<?=$i?>').src='ejemplo<?=$i?>.php';">Ejecutar</button>
          </div>

          <div class="col-md-6">
            <iframe id="iframe_ejemplo<?=$i?>"  width="100%" height="230px">
              
            </iframe> 
          </div>
      </div>
      <?}?>

    </div>

 <?include_once('../template/footer.php')?>;
