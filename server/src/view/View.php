<?php namespace Calendar\View;


class View
{
    public static function render(array $response, int $statusCode)
    {
        $json = json_encode($response);
        http_response_code($statusCode);

        echo $json;
    }
}