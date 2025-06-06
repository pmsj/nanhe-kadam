<div>
    @if($schedules->count() > 0)
    <div class="my-20">
        <x-card title="General Time Table" subtitle="Our findings about you" />
        <div class="lg:flex space-x-10 justify-center">
            <x-card title="Calender" subtitle="" separator class="text-center">
                {{-- Shortcuts config to `locale`, `sunday-start` and weekend-highlight --}}
                <x-calendar locale="eng" weekend-highlight sunday-start class="items-center" />
            </x-card>
                    @php
                        $ScheduleName = $schedules->first();
                    @endphp
            <x-card title="School Hours" subtitle="{{ $ScheduleName->schedule->label }} ({{ $ScheduleName->schedule->fromToDate() }})" separator class="text-center">
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>Days of the week</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $schedule)
                            <!-- row 1 -->
                            <tr>
                                <td>{{ $schedule->day_of_week}}</td>
                                <td>{{ $schedule->fromToTime()}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </x-card>
        </div>
    </div>
    @endif
</div>