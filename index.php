
<?php
session_start();
ob_start();
require "data/pages.php";
require "data/product.php";

require "lib/slug.php";
require "lib/data.php";
require "lib/template.php";
require "lib/pages.php";
require "lib/product.php";
require "lib/price.php";
require "lib/cart.php";
require "lib/url.php";

?>

<?php
$mod = !empty($_GET['mod']) ? $_GET['mod'] : "home";
$act = !empty($_GET['act']) ? $_GET['act'] : "main";
$path = "modules/{$mod}/{$act}.php";
if (file_exists($path)) {
    require $path;
} else {
    require "inc/404.php";
}
?>

