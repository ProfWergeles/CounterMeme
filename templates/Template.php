<?php
class Template {
    function build($templateFilePath) {
        // suppress non-existent variable warnings
        error_reporting(E_ALL - E_NOTICE);
        ob_start();     
        include($templateFilePath);
        return ob_get_clean();
    }
}
?>
