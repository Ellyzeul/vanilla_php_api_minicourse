<?php namespace Calendar\Routing;

use Calendar\Routing\EventRouter;


class Router
{
    public static function handle(string $uri, array $request)
    {
        $uriParts = explode('/', $uri);
        $model = $uriParts[1];
        $operation = $uriParts[2];

        if(!method_exists(__CLASS__, $model)) return;

        call_user_func(__CLASS__ . "::" . $model, $operation, $request);
    }

    public static function event(string $operation, array $request)
    {
        EventRouter::handle($operation, $request);
    }
}