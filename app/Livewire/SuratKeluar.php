<?php

namespace App\Livewire;

use Livewire\Component;

class SuratKeluar extends Component
{
    public $showModal = false;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.surat-keluar');
    }
}
