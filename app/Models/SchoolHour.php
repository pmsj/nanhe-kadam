<?php

namespace App\Models;

use Carbon\Carbon;
use Filament\Forms;
use App\Models\SchoolSchedule;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SchoolHour extends Model
{
    public $timestamps = false;
   protected $fillable = [
    'school_schedule_id',
        'day_of_week',
        'order',
        'start_time',
        'end_time',
    ];
    public function schedule(): BelongsTo
    {
        return $this->belongsTo(SchoolSchedule::class, 'school_schedule_id');
    }

     public function fromToTime()
    {
        return Carbon::createFromFormat('H:i:s', $this->start_time)->format('g:i a') . '  -  ' .Carbon::createFromFormat('H:i:s', $this->end_time)->format('g:i a');
    }

    public function scopeWithActiveSchedule($query)
    {
        return $query->whereHas('schedule', fn ($q) => $q->active());
    }
    
        public static function getForm(): array
        {
            return [
                    Split::make([
                         Section::make('School Hours')
                        ->description('Fill the day with appropriate time duration')
                        ->schema([
                    Forms\Components\Select::make('school_schedule_id')
                        ->label('Schedule Type')
                        ->preload()
                        ->relationship('schedule', 'label') // uses the `schedule()` relationship
                        ->searchable()
                        ->required(),
                    Forms\Components\Select::make('day_of_week')
                        ->label('Day of the Week')
                        ->options([
                            'Monday'    => 'Monday',
                            'Tuesday'   => 'Tuesday',
                            'Wednesday' => 'Wednesday',
                            'Thursday'  => 'Thursday',
                            'Friday'    => 'Friday',
                            'Saturday'  => 'Saturday',
                            'Sunday'    => 'Sunday',
                        ])
                        ->required()
                        ->native(false) // Optional: for a more styled dropdown
                        ->searchable(), // Optional: searchable dropdown
                     Forms\Components\Select::make('order')
                        ->label('Day Order')
                        ->helperText('Monday = 1, Tuesday = 2....etc')
                        ->options([
                            1 => '1',
                            2 => '2',
                            3 => '3',
                            4 => '4',
                            5 => '5',
                            6 => '6',
                            7 => '7',
                        ])
                        ->required()
                        ->native(false),
                   ]),
                    Section::make('School Hours')
                        ->description('Fill the day with appropriate time duration')
                        ->schema([
                                    Forms\Components\TimePicker::make('start_time')->native(false),
                                    Forms\Components\TimePicker::make('end_time')->native(false),
                        ]),

                    ])->from('md')
            ];
        }
}
