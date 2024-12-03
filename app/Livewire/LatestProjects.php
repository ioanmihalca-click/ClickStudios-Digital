<?php

namespace App\Livewire;

use Livewire\Component;

class LatestProjects extends Component
{
    public $projects = [
        [
            'title' => 'SportClubPro',
            'description' => 'Platformă gratuită pentru managementul cluburilor sportive',
            'image' => '/assets/projects/sportclubpro.webp',
            'url' => 'https://sportclubpro.ro',
            'technologies' => ['Laravel PHP', 'Alpine.js', 'Tailwind', 'Livewire']
        ],
      
        [
            'title' => 'AIpoftă',
            'description' => 'Prima platforma de Rețete Personalizate Generate cu AI  din Romania',
            'image' => '/assets/projects/aipofta-com.webp',
            'url' => 'https://aipofta.com',
            'technologies' => ['Laravel', 'Tailwind', 'Livewire', 'AI & LLMs']
        ],
        [
            'title' => 'Click Music RO',
            'description' => 'Platforma de streaming muzical, blog & magazin',
            'image' => '/assets/projects/clickmusic-ro.webp',
            'url' => 'https://clickmusic.ro',
            'technologies' => ['Laravel', 'Alpine.js', 'Tailwind', 'Livewire']
        ]
    ];

    public function render()
    {
        return view('livewire.latest-projects');
    }
}