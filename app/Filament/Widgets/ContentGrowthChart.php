<?php

namespace App\Filament\Widgets;

use App\Models\Slider;
use App\Models\Testimonial;
use Filament\Widgets\ChartWidget;

class ContentGrowthChart extends ChartWidget
{
    public ?string $heading = 'Content Growth';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $months = collect(range(5, 0))->map(fn (int $offset) => now()->subMonths($offset));

        $sliders = $months->map(fn ($month) => Slider::query()
            ->whereYear('created_at', $month->year)
            ->whereMonth('created_at', $month->month)
            ->count());

        $testimonials = $months->map(fn ($month) => Testimonial::query()
            ->whereYear('created_at', $month->year)
            ->whereMonth('created_at', $month->month)
            ->count());

        return [
            'datasets' => [
                [
                    'label' => 'Sliders',
                    'data' => $sliders->values()->all(),
                    'borderColor' => 'rgb(56, 189, 248)',
                    'backgroundColor' => 'rgba(56, 189, 248, 0.2)',
                ],
                [
                    'label' => 'Testimonials',
                    'data' => $testimonials->values()->all(),
                    'borderColor' => 'rgb(16, 185, 129)',
                    'backgroundColor' => 'rgba(16, 185, 129, 0.2)',
                ],
            ],
            'labels' => $months->map(fn ($month) => $month->format('M Y'))->all(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
