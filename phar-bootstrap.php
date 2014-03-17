<?php
define('DS', DIRECTORY_SEPARATOR);
if (version_compare(PHP_VERSION, '5.3.0') < 0) {
    exit("PHP must be 5.3.0+");
}
Phar::mapPhar();
/**
 * Default Temp Dir
 */
if (!defined('_MPDF_TEMP_PATH')) define("_MPDF_TEMP_PATH", sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'tmp/');
//TODO this
// sys_get_temp_dir() => if (!defined('_MPDF_TTFONTDATAPATH')) { define('_MPDF_TTFONTDATAPATH',_MPDF_PATH.'ttfontdata/'); }
if (!defined('_MPDF_URI')) {
    //define('_MPDF_URI', _MPDF_PATH);
    exit('Please Define Public mPDF folder');
}
$basePath = 'phar://' . __FILE__ . '/';
require_once $basePath . 'mpdf.php';
__HALT_COMPILER();
?>
