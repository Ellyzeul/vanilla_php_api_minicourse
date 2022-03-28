<?php namespace Calendar\Controller;

use Calendar\Model\Event;
use Calendar\View\View;


class EventController
{
    public static function create(
        string $date, 
        string $description, 
        string $startHour, 
        string $endHour
    )
    {
        [$response, $statusCode] = Event::create(
            $date, 
            $description, 
            $startHour, 
            $endHour
        );

        View::render($response, $statusCode);
    }

    public static function read(string $date)
    {

    }

    public static function update(
        string $date, 
        int $id, 
        string $description, 
        string $startHour, 
        string $endHour
    )
    {

    }

    public static function delete(string $date, int $id)
    {

    }
}