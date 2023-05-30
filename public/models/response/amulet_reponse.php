<?php

class AmuletResponse
{
    public $id;
    public $name;
    public $image;

    public function __construct($id, $image, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
    }

    public static function fromJson($json)
    {
        return new AmuletResponse(
            $json["id"],
            $json["name"],
            $json["image"]
        );
    }

    public function toJson()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "image" => $this->image
        ];
    }
}

function amuletResponseFromJson($str)
{
    $decoded = json_decode($str, true);
    $amuletResponses = array();

    foreach ($decoded as $item) {
        $amuletResponses[] = AmuletResponse::fromJson($item);
    }

    return $amuletResponses;
}

function amuletResponseToJson($data)
{
    $encoded = array();

    foreach ($data as $item) {
        $encoded[] = $item->toJson();
    }

    return json_encode($encoded);
}
