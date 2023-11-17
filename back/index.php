<?php
require_once 'back/House.php';
require_once 'back/Terrain.php';
require_once 'back/Apartment.php';
require_once 'back/User.php';

// Example usage:

// Create an instance of the House class
$myHouse = new House(
    $myHouse->referenceId = 'H001',
    $myHouse->state = 'Available',
    $myHouse->description = 'esta casa ta boena wacho',
    $myHouse->images = 'despues vemo q onda',
    $myHouse->street = 'Mones roses',
    $myHouse->department = 'monte',
    $myHouse->neighborhood = 'carra',
    $myHouse->dorms = 3,
    $myHouse->baths = 2,
    $myHouse->area = 150,
    $myHouse->totalArea = 200,
    $myHouse->garage = true,
    $myHouse->year = 2013,

);
// Set other properties...

// Create an instance of the User class
$user = new User(
    $user->userNumber = 'U001',
    $user->mail = 'user@example.com',
    $user->password = 'password123',
    $user->house = $myHouse,
    $user->apartment = null,
    $user->terrain = null
);

// Set other properties...

// Accessing properties
echo $user->house->referenceId; // Output: H001
