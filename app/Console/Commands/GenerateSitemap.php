<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Post;
use App\Models\Tag;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.';

    public function handle()
    {
        $this->info('Generating sitemap...');
        
        $sitemap = Sitemap::create();

        // Adăugare pagină principală
        $sitemap->add(Url::create('/')
            ->setLastModificationDate(Carbon::now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(1.0));

        // Adăugare pagini statice
        $staticPages = [
            '/dezvoltare-web' => 0.9,
            '/servicii' => 0.9,
            '/portofoliu' => 0.9,
            '/blog' => 0.9,
        ];

        foreach ($staticPages as $url => $priority) {
            $sitemap->add(Url::create($url)
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority($priority));
        }

        // Adăugare postări blog
        Post::all()->each(function (Post $post) use ($sitemap) {
            $sitemap->add(Url::create("/blog/postari/{$post->slug}")
                ->setLastModificationDate($post->updated_at)
                ->setPriority(0.8));
        });

        // Adăugare pagini de etichete
        Tag::all()->each(function (Tag $tag) use ($sitemap) {
            $sitemap->add(Url::create("/blog/etichete/{$tag->slug}")
                ->setLastModificationDate($tag->updated_at)
                ->setPriority(0.7));
        });

        // Salvare sitemap
        $sitemap->writeToFile(public_path('sitemap.xml'));
        
        $this->info('Sitemap generated successfully!');
    }
}