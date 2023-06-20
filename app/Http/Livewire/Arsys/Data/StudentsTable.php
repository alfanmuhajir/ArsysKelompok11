<?php

namespace App\Http\Livewire\Arsys\Data;

use App\Models\ArSys\Student;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\ArSys\Research;
use App\Models\ArSys\StudyProgram;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;


class StudentsTable extends DataTableComponent
{
    protected $model = Research::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            // Column::make("NIM", "student_id")
            //     ->sortable(),
            // Column::make("Nama Depan", "first_name")
            // ->sortable(),
            // Column::make("Nama Belakang", "last_name")
            // ->sortable(),
            // Column::make("Nama Lengkap", "full_name")
            // ->sortable(),
            // // Column::make('FullName')->searchable()->sortable(),
            // Column::make("Program Studi", "program.description")
            //     ->sortable(),
            // Column::make("Spesialisasi", "specialization.description")
            //     ->sortable(),
            Column::make("NIM", "student.student_id")
            ->sortable(),
            Column::make("Nama Depan", "student.first_name")
            ->sortable(),
            Column::make("Nama Belakang", "student.last_name")
            ->sortable(),
            Column::make("Program Studi", "student.program.description")
            ->sortable(),
            Column::make("Konsentrasi", "student.specialization.description")
            ->sortable(),
            Column::make("Status", "researchmilestone.milestone")
            ->sortable(),


        ];

    }

}
