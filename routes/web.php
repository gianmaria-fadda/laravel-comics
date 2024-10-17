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
    $linkFirst = [
        [
            'name' => 'Character',
            'link' => '#'
        ],
        [
            'name' => 'Comics',
            'link' => '#'
        ],
        [
            'name' => 'Movies',
            'link' => '#'
        ],
        [
            'name' => 'TV',
            'link' => '#'
        ],
        [
            'name' => 'Games',
            'link' => '#'
        ],
        [
            'name' => 'Videos',
            'link' => '#'
        ],
        [
            'name' => 'News',
            'link' => '#'
        ]
    ];
    $linkSecond = [
        [
            'name' => 'Shop DC',
            'link' => '#'
        ],
        
        [
            'name' => 'Shop DC Collectibles',
            'link' => '#'
        ]
    ];
    $linkThird = [
        [
            'name' => 'Term of Use',
            'link' => '#'
        ],
        [
            'name' => 'Privacy Policy (New)',
            'link' => '#'
        ],
        [
            'name' => 'Ad Choise',
            'link' => '#'
        ],
        [
            'name' => 'Adversting',
            'link' => '#'
        ],
        [
            'name' => 'Jobs',
            'link' => '#'
        ],
        [
            'name' => 'Subscription',
            'link' => '#'
        ],
        [
            'name' => 'Talent Workshop',
            'link' => '#'
        ],
        [
            'name' => 'CPSC Certificates',
            'link' => '#'
        ],
        [
            'name' => 'Ratings',
            'link' => '#'
        ],
        [
            'name' => 'Shop Help',
            'link' => '#'
        ],
        [
            'name' => 'Contact Us',
            'link' => '#'
        ]
    ];
    $linkFourth = [  
        [
            'name' => 'DC',
            'link' => '#'
        ],
        [
            'name' => 'MAD Magazine',
            'link' => '#'
        ],
        [
            'name' => 'DC Kids',
            'link' => '#'
        ],
        [
            'name' => 'DC Univerce',
            'link' => '#'
        ],
        [
            'name' => 'DC Power Visa',
            'link' => '#'
        ]
    ];
    $comics = config('comics');

    return view('pages.welcome', compact('menuLinks', 'comics', 'menuItems', 'linkFirst', 'linkSecond', 'linkThird', 'linkFourth'));
})->name('homePage');