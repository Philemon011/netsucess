<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $ecommerce   = Category::where('slug', 'e-commerce')->first();
        $dropshipping = Category::where('slug', 'dropshipping')->first();

        Post::create([
            'category_id'      => $ecommerce->id,
            'title'            => 'Comment lancer une boutique e-commerce rentable en 2026',
            'slug'             => 'lancer-boutique-e-commerce-rentable-2026',
            'excerpt'          => 'Découvrez les étapes clés pour créer une boutique e-commerce qui génère des ventes dès les premiers jours.',
            'content'          => '
                <h2>Pourquoi lancer une boutique e-commerce en 2026 ?</h2>
                <p>Le commerce en ligne n\'a jamais été aussi accessible. Avec les bons outils et une stratégie claire, il est possible de générer ses premières ventes en moins d\'une semaine.</p>

                <h2>Étape 1 — Choisir la bonne niche</h2>
                <p>Le choix de la niche est la décision la plus importante. Une bonne niche doit répondre à trois critères : une demande existante, une concurrence gérable et une marge suffisante.</p>

                <h2>Étape 2 — Créer une boutique professionnelle</h2>
                <p>Le design de votre boutique reflète directement la confiance que vos visiteurs vous accordent. Un site amateur fait fuir les acheteurs potentiels avant même qu\'ils ne voient vos produits.</p>

                <h2>Étape 3 — Attirer du trafic qualifié</h2>
                <p>Une fois votre boutique en ligne, l\'objectif est d\'attirer des visiteurs ciblés. Les publicités Meta (Facebook & Instagram) restent le canal le plus efficace pour démarrer rapidement.</p>

                <h2>Conclusion</h2>
                <p>Lancer une boutique e-commerce rentable est à la portée de tous à condition de suivre les bonnes étapes. Chez Netsucess, nous vous accompagnons de A à Z pour transformer votre idée en une marque qui vend vraiment.</p>
            ',
            'meta_title'       => 'Comment lancer une boutique e-commerce rentable en 2026 | Netsucess',
            'meta_description' => 'Découvrez les étapes clés pour créer une boutique e-commerce rentable en 2026 : niche, design, trafic et premières ventes.',
            'status'           => 'published',
            'published_at'     => now(),
        ]);

        Post::create([
            'category_id'      => $dropshipping->id,
            'title'            => 'Les 5 meilleures niches dropshipping en 2026',
            'slug'             => 'meilleures-niches-dropshipping-2026',
            'excerpt'          => 'On a analysé des centaines de niches pour vous présenter les 5 secteurs les plus rentables pour faire du dropshipping cette année.',
            'content'          => '
                <h2>Pourquoi bien choisir sa niche est crucial ?</h2>
                <p>En dropshipping, la niche est tout. Elle détermine vos marges, votre audience cible et la facilité avec laquelle vous allez trouver des clients. Une mauvaise niche = des mois de travail pour rien.</p>

                <h2>Niche 1 — Beauté & Soins naturels</h2>
                <p>Le marché de la beauté naturelle explose. Les consommateurs recherchent des produits sains, sans produits chimiques. C\'est une niche avec une forte fidélisation client et d\'excellentes marges.</p>

                <h2>Niche 2 — Accessoires pour animaux</h2>
                <p>Les propriétaires d\'animaux dépensent sans compter pour leurs compagnons. Cette niche est très émotionnelle, ce qui facilite la conversion et le bouche-à-oreille.</p>

                <h2>Niche 3 — Fitness & Bien-être</h2>
                <p>Avec la montée du wellness, les produits fitness à domicile ont le vent en poupe. Résistances, tapis de yoga, accessoires de récupération — la demande est constante.</p>

                <h2>Niche 4 — Maison & Décoration</h2>
                <p>Les gens passent plus de temps chez eux et investissent dans leur intérieur. C\'est une niche avec des paniers moyens élevés et un fort potentiel sur Pinterest et Instagram.</p>

                <h2>Niche 5 — Tech & Gadgets</h2>
                <p>Les accessoires tech innovants génèrent beaucoup de curiosité et de partages organiques. C\'est idéal pour des campagnes virales à faible coût.</p>

                <h2>Conclusion</h2>
                <p>Quelle que soit la niche choisie, le succès en dropshipping repose avant tout sur la qualité de votre boutique et de votre marketing. Chez Netsucess, nous construisons des boutiques taillées pour convertir dans n\'importe quelle niche.</p>
            ',
            'meta_title'       => 'Les 5 meilleures niches dropshipping en 2026 | Netsucess',
            'meta_description' => 'Découvrez les 5 niches dropshipping les plus rentables en 2026 pour lancer votre boutique et générer vos premières ventes rapidement.',
            'status'           => 'published',
            'published_at'     => now()->subDays(3),
        ]);
    }
}