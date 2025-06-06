<?php

namespace App\Models;

use Carbon\Carbon;
use Filament\Forms;
use App\Models\SchoolHour;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SchoolSchedule extends Model
{
        protected $fillable = [
        'label',
        'start_date',
        'end_date',
    ];

    public function hours(): HasMany
    {
        return $this->hasMany(SchoolHour::class);
    }

  public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function fromToDate()
    {
        if (!$this->start_date || !$this->end_date) 
        {
        return 'Duration not set!';
        }

        return Carbon::parse($this->start_date)->format('d M Y') . '  to  ' . Carbon::parse($this->end_date)->format('d M Y');
    }
   

    public static function getForm(): array
    {
        return [
           Split::make([
              Section::make('School Schedule')
                ->description('You can create particular schedule for particular time period or season')
                ->schema([
                     Forms\Components\TextInput::make('label')
                        ->placeholder('example: Summer Schedule')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('start_date')->native(false),
                    Forms\Components\DatePicker::make('end_date')->native(false),
                ]),
                  Section::make('Activate the schedule')
                ->description('when toggled active, the schedule will display in the website')
                ->schema([
                    Forms\Components\Toggle::make('is_active'),
                ])->grow(false),
           ])->from('md')
        ];
    }
}
