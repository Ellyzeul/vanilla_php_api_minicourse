<?php namespace Calendar\Model;

use Calendar\Model\Service\Database;


class Event
{
    public static function create(
        string $date, 
        string $description, 
        string $startHour, 
        string $endHour
    )
    {
        $insertQuery =
           "INSERT INTO event (
               date,
               description,
               start_hour,
               end_hour
            ) VALUES (?,?,?,?)";

        $db = Database::getDB();

        $stmt = $db->prepare($insertQuery);
        $stmt->bind_param("ssss", $date, $description, $startHour, $endHour);
        $stmt->execute();

        if($db->errno != 0) return [[
            "error_message" => "{$db->errno}: {$db->error}"
        ], 500];

        return [[
            "id" => $db->insert_id,
            "message" => "Evento inserido com sucesso",
        ], 201];
    }


}