<?php

namespace App\Livewire;

use App\Models\Surat;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $dataCount = [
            'kelembagaan' => Surat::where('kategori', 'kelembagaan')->count(),
            'pengembangan' => Surat::where('kategori', 'pengembangan')->count(),
            'pemberdayaan' => Surat::where('kategori', 'pemberdayaan')->count(),
            'pengawasan' => Surat::where('kategori', 'pengawasan')->count(),
            'sekretariat' => Surat::where('kategori', 'sekretariat')->count(),
            'kepegawaian' => Surat::where('kategori', 'kepegawaian')->count(),
            'total' => Surat::count(),
        ];
        return view('livewire.dashboard', compact('dataCount'));
    }
}
