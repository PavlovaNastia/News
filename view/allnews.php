<?php
ob_start();
?>
<h1> Where do you want to go? </h1>
<br>

<?php
ViewNews::AllNews($arr);
echo '<div class="container">';
echo '<div class="row">';
$content = ob_get_clean();
include_once 'view/layout.php';

?> 