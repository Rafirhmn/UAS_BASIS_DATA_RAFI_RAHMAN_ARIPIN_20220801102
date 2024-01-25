<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Product;
use App\Models\User;
use App\Models\Tag;
use App\Models\Category;

class TotalProduct extends BaseWidget
{
    protected function getStats(): array
    {
        $reserve = Product::all()->count();
        $user = User::all()->count();
        $tagging = Tag::all()->count();
        $cat = Category::all()->count();
        return [
            Stat::make(' ', $reserve)
                ->description('Total Product')
                ->descriptionIcon('heroicon-o-building-storefront')
                ->color('success'),
            Stat::make('Jumlah User', $user),
            Stat::make('Jumlah Tags', $tagging),
            Stat::make('Jumlah Category', $cat),
        ];
    }
}
