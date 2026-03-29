<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Data untuk section perkenalan
        $profile = [
            'name' => 'Piaa',
            'age' => 21,
            'birthday' => '17 Februari 2005',
            'hobby' => ['Memasak', 'Traveling', 'Fotografi'],
            'motto' => 'Keluarga adalah rumah terindah',
            'quote' => 'Bersama keluarga, lebaran terasa lebih bermakna ✨'
        ];

        // Data untuk galeri momen
        $moments = [
            [
                'title' => 'Makan Bersama',
                'description' => 'Momen kebersamaan saat makan bersama keluarga',
                'image' => 'video/momen1.mp4',
                'type' => 'video'
            ],
            [
                'title' => 'Sepupu Tersayang',
                'description' => 'Foto bersama sepupu saat jalan-jalan',
                'image' => 'images/momen2.jpg',
                'type' => 'photo'
            ],
            [
                'title' => 'Bersama Keluarga',
                'description' => 'Foto bersama keluarga tercinta',
                'image' => 'images/momen3.jpg',
                'type' => 'photo'
            ]
        ];

        // Data silsilah keluarga
        $familyTree = [
            'grandparents' => [
                'name' => 'Kakek H. abdurahman & Nenek Hj. Selina',
                'children' => [
                    [
                        'name' => 'Om Zafran & Tante Widya',
                        'grandchildren' => ['Kak Zafira', 'Abang Asnul', 'Abang Mugiwara']
                    ],
                    [
                        'name' => 'ayah Syafrial & ibu Yuni',
                        'grandchildren' => ['Kak rani', 'Piaa', 'Adik ririn', 'Adik Dipa']
                    ],
                    [
                        'name' => 'Bibi Siti & Paman Dori',
                        'grandchildren' => ['Sinta', 'Amel', 'Lyla', 'Zenith']
                    ]
                ]
            ]
        ];

        return view('Home', compact('profile', 'moments', 'familyTree'));
    }
}
