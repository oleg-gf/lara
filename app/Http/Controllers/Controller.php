<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews(): array
    {
        $faker = Factory::create();

        $data = [];
        for ($i=0; $i < 10; $i++) { 
           $data[] = [
                'title' => $faker->jobTitle(),
                'author' => $faker->userName(),
                'image' => $faker->imageUrl(),
                'status' => $statusList[mt_rand(0,2)],
                'description'  => $faker->text( maxNbChars: 100),
            ];
        }
    }
}
