<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $menuLinks = [
        [
            'name' => 'CHARACTER',
            'current' => false
        ],
        [
            'name' => 'COMICS',
            'current' => true
        ],
        [
            'name' => 'MOVIES',
            'current' => false
        ],
        [
            'name' => 'TV',
            'current' => false
        ],
        [
            'name' => 'GAMES',
            'current' => false
        ],
        [
            'name' => 'COLLECTIBLES',
            'current' => false
        ],
        [
            'name' => 'VIDEOS',
            'current' => false
        ],
        [
            'name' => 'FANS',
            'current' => false
        ],
        [
            'name' => 'NEWS',
            'current' => false
        ],
        [
            'name' => 'SHOP',
            'current' => false
        ]
    ];
    $menuItems = [
        [
            'name' => 'DIGITAL COMICS',
            'image' => 'buy-comics-digital-comics.png'
        ],
        [
            'name' => 'DC MERCHANDISE',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'name' => 'SUBSCRIPTION',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'name' => 'COMICS SHOP LOCATOR',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'name' => 'DC POWER VISA',
            'image' => 'buy-dc-power-visa.svg'
        ],
    ];
    $comics = config('comics');

    return view('pages.welcome', compact('menuLinks', 'comics', 'menuItems'));
})->name('homePage');