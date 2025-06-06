<?php

namespace App\Filament\Resources\SchoolHourResource\Pages;

use App\Filament\Resources\SchoolHourResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListSchoolHours extends ListRecords
{
    protected static string $resource = SchoolHourResource::class;

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Schedules')
                          ->modifyQueryUsing(function ($query) {
                                return $query
                                    ->join('school_schedules', 'school_hours.school_schedule_id', '=', 'school_schedules.id')
                                    ->orderBy('school_schedules.label')
                                    ->orderBy('school_hours.order')
                                    ->select('school_hours.*'); 
                            }),
            'active' => Tab::make('Active Schedule')
                            ->modifyQueryUsing(function ($query){
                                return $query->whereHas('schedule', function ($q) {
                                    $q->where('is_active', true);
                                })
                                ->orderBy('order');
                            }),
            'inactive' => Tab::make('Inactive Schedules')
                            ->modifyQueryUsing(function ($query){
                                return $query->whereHas('schedule', function ($q) {
                                    $q->where('is_active', false);
                                });
                            })
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
