<?php

namespace App\Livewire;

use Livewire\Component;

class LatestProjects extends Component
{
    public $projects = [
        [
            'title' => 'AIpoftă',
            'description' => 'Prima platforma de Rețete Personalizate Generate cu AI  din Romania',
            'image' => '/assets/projects/aipofta-com.webp',
            'url' => 'https://aipofta.com',
            'technologies' => ['Laravel', 'Alpine.js', 'Tailwind', 'Livewire', 'AI & LLMs']
        ],
        [
            'title' => 'Click Music RO',
            'description' => 'Platforma de streaming muzical, blog & magazin',
            'image' => '/assets/projects/clickmusic-ro.webp',
            'url' => '#',
            'technologies' => ['Laravel', 'Alpine.js', 'Tailwind', 'Livewire']
        ],
        [
            'title' => 'Povestitorul Magic',
            'description' => 'Platformă de povești cu ilustrații pentru copii, generate cu AI ',
            'image' => '/assets/projects/povestitorul-magic.webp',
            'url' => '#',
            'technologies' => ['Laravel', 'Alpine.js', 'Tailwind', 'Livewire', 'AI & LLMs']
        ]
    ];

    public function render()
    {
        return view('livewire.latest-projects');
    }
}