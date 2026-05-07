<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Articles publiés', Post::where('status', 'published')->count())
                ->description('Total des articles en ligne')
                ->descriptionIcon('heroicon-m-document-check')
                ->color('success'),

            Stat::make('Brouillons', Post::where('status', 'draft')->count())
                ->description('Articles non publiés')
                ->descriptionIcon('heroicon-m-pencil-square')
                ->color('warning'),

            Stat::make('Catégories', Category::count())
                ->description('Catégories créées')
                ->descriptionIcon('heroicon-m-tag')
                ->color('info'),

            Stat::make('Dernier article', Post::published()->latest('published_at')->first()?->published_at?->diffForHumans() ?? 'Aucun')
                ->description('Date de dernière publication')
                ->descriptionIcon('heroicon-m-clock')
                ->color('primary'),
        ];
    }
}