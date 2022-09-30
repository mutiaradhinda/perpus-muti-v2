<?php

namespace App\Exports;

use App\Models\Publisher;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PenerbitExport implements FromCollection, WithHeadings, ShouldAutoSize,  WithMapping, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Publisher::all();
    }

    public function map($user):array
    {
        return [
            $user->nama,
            $user->alamat,
            $user->telepon,
            $user->email,
        ];
    }

    public function headings(): array
    {
       return [
       	 'Nama',
       	 'Alamat',
       	 'telepon',
       	 'email',
       ];
    }

	public function styles(Worksheet $sheet)	
	{
	    return [
	       // Style the first row as bold text.
	       1    => ['font' => ['bold' => true]],
	    ];
	}	
}