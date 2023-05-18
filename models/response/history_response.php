<?php

class HistoryResponse
{
    public $id;
    public $name;
    public $image;
    public $history;

    public function __construct($id, $image, $name, $history)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->history = $history;
    }

    public static function fromJson($json)
    {
        return new HistoryResponse(
            $json["id"],
            $json["name"],
            $json["image"],
            $json["history"]
        );
    }

    public function toJson()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "image" => $this->image,
            "quantity" => $this->history
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
