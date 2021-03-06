<?php

namespace Dejury\FakerFoodNames\Provider;

use Faker\Provider\Base;
use Illuminate\Support\Str;
use stdClass;

class FoodName extends Base
{
    protected static $foodnames = [
        "Pietje Pizza",
        "Barry Barbeque",
        "Steven Steengrill",
        "Andre Andijvie",
        "Berend Berenklauw",
        "Frida Fritessaus",
        "Frits Frikandel",
        "Jody Jodenkoek",
        "Karel KaassoufflĂ©",
        "Coco Kokosbrood",
        "Loes Loempia",
        "Mo Moorkop",
        "Rozemarijn Roze Koek",
        "Tijmen Tijgerbrood",
        "Tom Pouce",
        "Vanice Vanillevla",
        "Wendy Wentelteef",
        "Chef Jambek",
    ];

    /**
     * @return string
     */
    public function foodName(): stdClass
    {
        $randomElement = Str::of(static::randomElement(static::$foodnames))->explode(" ");


        $ret = new stdClass;
        $ret->fullName = (string) $randomElement->implode(" ");
        $ret->firstName = $randomElement->shift();
        $ret->lastName = $randomElement->implode(" ");

        return $ret;
    }
}
