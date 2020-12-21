<?php
namespace Core\Controllers;

class DefaultController{

    /**
     * @param string $filename le nom de la vue
     * @param array $param les informations que l'on souhaite passer à la vue comme les commandes
     * @return void
     */
    public function render($filename, $param = array()){
        // ob_start();
        extract($param);
        require ROOT."/src/views/$filename.php";
        // $content = ob_get_clean();
        // require ROOT."/Src/View/base.php";
    }
}