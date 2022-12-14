<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class BukuExport implements FromCollection, WithHeadings, ShouldAutoSize,  WithMapping, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Book::all();
    }

    public function map($user):array
    {
        return [
            $user->nama,
            $user->tahun_terbit,
            $user->author->nama,
            $user->publisher->nama,
            $user->kategori->kategori,
            $user->sinopsis,
        ];
    }

    public function headings(): array
    {
       return [
         'Judul Buku',
         'Tahun Terbit',
         'Penulis',
         'Penerbit',
         'Kategori',
         'Sinopsis'
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