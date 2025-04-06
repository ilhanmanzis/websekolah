<?php

namespace App\Filament\Widgets;

use App\Models\TenagaKependidikan;
use App\Models\TenagaPendidik;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $pendidik = TenagaPendidik::count();
        $kependidikan = TenagaKependidikan::count();
        return [
            Stat::make('Tenaga Pendidik', $pendidik),
            Stat::make('Tenaga Kependidikan', $kependidikan)
        ];
    }
}
