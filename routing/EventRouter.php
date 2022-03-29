<?php namespace Calendar\Routing;

use Calendar\Controller\EventController;


class EventRouter
{
    public static function handle(string $operation, array $request)
    {
        if(!method_exists(__CLASS__, $operation)) return;

        call_user_func(__CLASS__ . "::" . $operation, $request);
    }

    private static function create(array $request)
    {
        EventController::create(
            $request['date'],
            $request['description'],
            $request['start_hour'],
            $request['end_hour']
        );
    }

    private static function read(array $request)
    {
        EventController::read($request['date']);
    }

    private static function update(array $request)
    {
        EventController::update(
            $request['date'],
            $request['id'],
            $request['description'],
            $request['start_hour'],
            $request['end_hour']
        );
    }

    private static function delete(array $request)
    {
        EventController::delete(
            $request['date'],
            $request['id']
        );
    }
}