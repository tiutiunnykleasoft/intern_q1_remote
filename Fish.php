<?php

namespace Ocean;

class Fish
{
    protected $color;
    protected $length;
    protected $is_river;
    public $type;

    public function __construct($input)
    {
        $this->color = $input['color'];
        $this->length = $input['length'];
        $this->is_river = $input['river'];
        $this->type =  $this->whatFish();
    }

    protected function whatFish()
    {
        return "Непонятная рыбка";
    }
}
