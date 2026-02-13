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

    public function handle(): void
    {
        $this->info('Generating sitemap...');

        $sitemap = Sitemap::create();

        $routes = [
            'home' => 1.0,
            'services' => 0.9,
            'about' => 0.8,
            'portfolio' => 0.8,
            'contact' => 0.7,
        ];

        foreach (config('app.supported_locales') as $locale) {
            foreach ($routes as $name => $priority) {
                $sitemap->add(
                    Url::create(route($name, ['locale' => $locale]))
                        ->setLastModificationDate(Carbon::now())
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                        ->setPriority($priority)
                );
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}
