<?php

class Controller
{

    public function getRoute(string $page, string $action): string
    {
        $path = __DIR__ . '/../pages/' .$page.'/' . $action . '.php';

        if (file_exists($path)) {
            return $path;
        }

        return __DIR__ . '/../pages/users/index.php';
    }
}