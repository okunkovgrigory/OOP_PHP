<?php


class HungryCat
{
    public $name;
    public $color;
    public $favouriteFood;

    public function __construct($name, $color, $favouriteFood)
    {
        $this->name = $name;
        $this->color = $color;
        $this->favouriteFood = $favouriteFood;
    }

    public function eat($food)
    {
        if ($this->favouriteFood === $food) {
            echo "Голодный кот {$this->name}, особые приметы: цвет - {$this->color}, съел {$food} 
        и замурчал 'мррррр' от своей любимой еды" . PHP_EOL;
        } else {
            echo "Голодный кот {$this->name}, особые приметы: цвет - {$this->color}, съел {$food}" . PHP_EOL;
        }
    }

}