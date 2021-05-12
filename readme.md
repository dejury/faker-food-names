# Faker Food Names

This package helps you get fancy-pancy foodnames in Faker!
Pietje Pizza? Berend Barbeque? 

## Setup 

```bash
composer require dejury/faker-food-names
```

## Installation
After adding this into your project, you can initialize the provider by doing:

```php
<?php
require 'vendor/autoload.php';

$faker = \Faker\Factory::create();
$faker->addProvider(new \Dejury\FakerFoodNames\Provider\FoodName($faker));
```

## Usage
You can easily get a food name by executing:
```php
echo $faker->foodName->fullName; // Andre Andijvie
echo $faker->foodName->firstName; // Andre
echo $faker->foodName->lastName; // Andijvie
```

## Enjoy
Enjoy your meal!