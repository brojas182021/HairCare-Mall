<?php
class Views {
    public function load($viewName) {
        include('./app/views/' . $viewName . '/'.$viewName.'.php');
    }
}
?>