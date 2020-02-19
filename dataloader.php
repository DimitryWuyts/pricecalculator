<?php


class dataloader

{
    public function fetchData($filename)
    {
        $data = [];
        $data = json_decode(file_get_contents($filename), true);
        return $data;

    }

}