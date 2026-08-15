<?php

namespace App\Filament\Widgets;

use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $sliders = Slider::count();
        $testimonials = Testimonial::count();
        $users = User::count();

        $published = Slider::where('published', true)->count()
            + Testimonial::where('published', true)->count();

        return [
            Stat::make('Sliders', $sliders)
                ->description(number_format(Slider::where('published', true)->count()) . ' published')
                ->descriptionIcon('heroicon-m-photo')
                ->color('primary')
                ->chart([7, 3, 4, 8, 6, 9, 12]),

            Stat::make('Testimonials', $testimonials)
                ->description(number_format(Testimonial::where('published', true)->count()) . ' published')
                ->descriptionIcon('heroicon-m-chat-bubble-oval-left-ellipsis')
                ->color('success')
                ->chart([4, 7, 2, 6, 5, 8, 10]),

            Stat::make('Users', $users)
                ->description(number_format(User::where('status', '1')->count()) . ' active')
                ->descriptionIcon('heroicon-m-users')
                ->color('warning')
                ->chart([2, 5, 3, 7, 4, 6, 8]),

            Stat::make('Published Items', $published)
                ->description('across all content')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('info'),
        ];
    }
}
