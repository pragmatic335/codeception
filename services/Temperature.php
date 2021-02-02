<?php


namespace app\services;


class Temperature
{
    public function now() {
        return rand(-10, 10);
    }
}