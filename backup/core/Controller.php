<?php

class Controller {
    protected function render($view, $data = []) {
        extract($data);
        
        $viewPath = __DIR__ . '/../Views/' . $view . '.php';

        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            throw new Exception("View file not found: {$viewPath}");
        }
    }
}
