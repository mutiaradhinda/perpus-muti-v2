<?php

namespace App\Exports;

use App\Models\Kategori;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class KategoriExport implements FromCollection, WithHeadings, ShouldAutoSize,  WithMapping, WithStyles, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kategori::all();
    }

    public function map($user):array
    {
        return [
            $user->kategori,
        ];
    }

    public function headings(): array
    {
       return [
       	 'Nama',
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