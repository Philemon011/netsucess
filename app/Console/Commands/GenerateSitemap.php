<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Post;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Générer le sitemap XML du site';

    public function handle()
    {
        $sitemap = Sitemap::create();

        // Pages statiques
        $sitemap->add(
            Url::create('/')
                ->setPriority(1.0)
                ->setChangeFrequency('weekly')
        );

        $sitemap->add(
            Url::create('/blog')
                ->setPriority(0.9)
                ->setChangeFrequency('daily')
        );

        // Articles publiés
        Post::published()->get()->each(function (Post $post) use ($sitemap) {
            $sitemap->add(
                Url::create("/blog/{$post->slug}")
                    ->setLastModificationDate($post->updated_at)
                    ->setPriority(0.8)
                    ->setChangeFrequency('monthly')
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap généré avec succès !');
    }
}