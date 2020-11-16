<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public static $quotes = array("The Black Knight Always Triumphs! - Monty Python",
                                  "Anyone who has never made a mistake has never tried anything new - Albert Einstein",
                                  "Never Stop Exploring - The North Face",
                                  "Be yourself; everyone else is already taken - Oscar Wilde",
                                  "So many books, so little time - Frank Zappa",
                                  "Be the change that you wish to see in the world - Mahatma Gandhi"
);

    public function index()
    {
        $randomNumber = (rand(1,15));
        $url = '"https://taller2tis.s3.amazonaws.com/';
        echo '<img src=' . $url . $randomNumber . '.jpg"/>';
        echo "<p>server_ip: " . gethostbyname(gethostname()) . "</p>";
        #return response()->json(['image' => "https://taller2tis.s3.amazonaws.com/" . $randomNumber .".jpg", 'server_ip' => gethostbyname(gethostname())]); 

    }
}
