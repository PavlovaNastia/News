<?php
ob_start();
?>
<h1>Страница о нас</h1>
<div class="container">
   <div class="row">
       <div class="col">
       <iframe width="560" height="315" src="https://www.youtube.com/embed/RsocQi433Gs?start=82" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
   </div>
</div>

<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?> 
