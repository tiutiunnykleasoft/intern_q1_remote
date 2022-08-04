<?php

namespace Ocean;
require_once "Fish.php";

class SortingTrophy extends Fish
{
    /**
     * @return string
     */
    protected function whatFish(): string
    {
        if ($this->color == 'blue' && $this->is_river && $this->length == 10) {
            return "Карп";
        } elseif ($this->color == 'yellow') {
            if ($this->length == 10) {
                if ($this->is_river) {
                    return "Карась";
                } elseif (!$this->is_river) {
                    return "Бычек";
                }
            } else {
                return "Зубатка";
            }
        } elseif ($this->color == 'blue' && !$this->is_river && $this->length == 12) {
            return 'Окунь';
        } else {
            return 'Плотва';
        }
        echo "Питца тайм";
        return parent::whatFish();
    }
}