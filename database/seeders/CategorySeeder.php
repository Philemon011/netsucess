<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name'        => 'E-commerce',
                'slug'        => 'e-commerce',
                'description' => 'Conseils et stratégies pour développer votre boutique en ligne.',
            ],
            [
                'name'        => 'Dropshipping',
                'slug'        => 'dropshipping',
                'description' => 'Tout savoir sur le dropshipping pour démarrer et scaler.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}