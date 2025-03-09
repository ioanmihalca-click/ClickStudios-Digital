<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.';

    public function handle()
    {
        $this->info('Generating sitemap...');
        
        $sitemap = Sitemap::create();

        // Add static pages with their priorities
        $staticPages = [
            '/' => 1.0,
            '/ro' => 1.0,
            '/en/web-development' => 0.9,
            '/ro/web-development' => 0.9,
            '/en/services' => 0.9,
            '/ro/services' => 0.9,
            '/en/portfolio' => 0.8,
            '/ro/portfolio' => 0.8,
        ];

        foreach ($staticPages as $url => $priority) {
            $sitemap->add(Url::create($url)
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority($priority));
        }

        // Save sitemap
        $sitemap->writeToFile(public_path('sitemap.xml'));
        
        $this->info('Sitemap generated successfully!');
    }
}