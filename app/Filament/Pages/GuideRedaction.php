<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class GuideRedaction extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Guide Rédaction SEO';
    protected static ?string $title = 'Guide Rédaction SEO';
    protected static ?int $navigationSort = 3;
    protected static string $view = 'filament.pages.guide-redaction';
}