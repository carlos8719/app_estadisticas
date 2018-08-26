<!-- METAS -->
  <meta charset="utf-8">
  <meta name=viewport content="width=device-width,initial-scale=1,user-scalable=no">
  <meta name="keywords" content="">
  <meta name="description" content="">
<!-- ICONO -->
  <link rel="shortcut icon" type="image/x-icon" href="<?echo $DOCUMENT_HTTP;?>/front_end/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?echo $DOCUMENT_HTTP;?>/front_end/images/favicon.ico"/>
<!-- OG: Open Graph Protocol -->
  <meta property='og:title' content=''/>
  <meta property='og:image' content=''/>
  <meta property='og:description' content=''/>
  <meta property='og:url' content='<?echo $DOCUMENT_HTTP;?>' />
<!-- LIBRERIAS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js"></script> <!-- libreria drag and drop -->
<title class="">APP estadisticas</title>
<!-- LINCAR -->
  <!-- EQUIPOS -->
    <!-- PHP -->
      <?
        include $DOCUMENT_ROOT."/frontEnd/equipos/carga_equipos.php";
      ?>
    <!-- CSS -->
      <link rel="stylesheet" href="<?echo $DOCUMENT_HTTP;?>/front_end/equipos/styles.css">
