<?php

namespace App\Exports;
use App\Author;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class AuthorsExportView implements FromView
{
    public function view(): View
    {
        return view('author.table', [
            'author' => Author::orderBy('id', 'nama', 'alamat', 'telepon', 'email')->take(100)->get()
        ]);
    }
}
