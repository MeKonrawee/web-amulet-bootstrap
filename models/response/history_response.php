<?php

class HistoryResponse
{
    public $id;
    public $name;
    public $image;
    public $details;

    public function __construct($id, $image, $name, $details)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->details = $details;
    }

    public static function fromJson($json)
    {
        return new HistoryResponse(
            $json["id"],
            $json["name"],
            $json["image"],
            $json["details"]
        );
    }

    public function toJson()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "image" => $this->image,
            "details" => $this->details
        ];
    }
}

function historyResponseFromJson($str)
{
    $decoded = json_decode($str, true);
    $historyResponses = array();

    foreach ($decoded as $item) {
        $historyResponses[] = HistoryResponse::fromJson($item);
    }

    return $historyResponses;
}

function historyResponseToJson($data)
{
    $encoded = array();

    foreach ($data as $item) {
        $encoded[] = $item->toJson();
    }

    return json_encode($encoded);
}
