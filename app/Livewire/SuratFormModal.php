<?php

namespace App\Livewire;

use App\Models\Surat;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SuratFormModal extends Component
{
    use WithFileUploads, WithPagination;

    public $showModal = false;
    public $deleteId = null;
    public $editMode = false;

    public $kategori = '';
    public $noSurat, $kodeSurat, $perihal, $tanggalSurat, $tertuju, $jenisSurat, $file, $old_file;
    public $surat_id;

    public $search = '';

    protected $rules = [
        'noSurat' => 'required|string|max:225',
        'kodeSurat' => 'required|string|max:225',
        'perihal' => 'required|string',
        'tanggalSurat' => 'required|date',
        'tertuju' => 'required|string|max:225',
        'jenisSurat' => 'required|string|max:225',
        'file' => 'required|file|mimes:pdf|max:2048',

    ];

    protected $messages = [
        'noSurat.required' => 'Nomor Surat wajib diisi.',
        'kodeSurat.required' => 'Kode Surat wajib diisi.',
        'perihal.required' => 'Perihal wajib diisi.',
        'tanggalSurat.required' => 'Tanggal Surat wajib diisi.',
        'tertuju.required' => 'Tertuju wajib diisi.',
        'jenisSurat.required' => 'Jenis Surat wajib diisi.',
        'file.required' => 'File Surat wajib diunggah.',
        'file.mimes' => 'File Surat harus berupa file berformat PDF.',
        'file.max' => 'Ukuran file maksimal adalah 2MB.',
    ];



    protected $paginationTheme = 'tailwind';

    public function mount($kategori = 'Kelembagaan')
    {
        $this->kategori = $kategori;
    }

    public function openModal()
    {
        $this->resetInput();
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function resetInput()
    {
        $this->reset(['noSurat', 'kodeSurat', 'perihal', 'tanggalSurat', 'tertuju', 'jenisSurat', 'file']);
    }

    // create
    public function simpan()
    {
        $this->validate();
        $path = $this->old_file;
        if ($this->file) {
            $path = $this->file->store('surat', 'public');
        }

        Surat::updateOrCreate(
            ['id' => $this->surat_id],
            [
                'kategori' => $this->kategori,
                'no_surat' => $this->noSurat,
                'kode_surat' => $this->kodeSurat,
                'perihal' => $this->perihal,
                'tanggal_surat' => $this->tanggalSurat,
                'tertuju' => $this->tertuju,
                'jenis_surat' => $this->jenisSurat,
                'file' => $path,
            ]
        );
        session()->flash('success', $this->editMode ? 'Data berhasil diperbaharui.' : 'Data berhasil disimpan.');
        $this->closeModal();
    }

    // edit
    public function edit($id)
    {
        $surat = Surat::findOrFail($id);

        $this->surat_id = $surat->id;
        $this->noSurat = $surat->no_surat;
        $this->kodeSurat = $surat->kode_surat;
        $this->perihal = $surat->perihal;
        $this->tanggalSurat = $surat->tanggal_surat;
        $this->jenisSurat = $surat->jenis_surat;
        $this->tertuju = $surat->tertuju;
        $this->old_file = $surat->file;

        $this->editMode = true;
        $this->showModal = true;
    }

    // delete
    public function confirmDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $surat = Surat::findOrFail($this->deleteId);
        if ($surat->file && file_exists(storage_path('app/public' . $surat->file))) {
            unlink(storage_path('app/public' . $surat->file));
        }
        $surat->delete();
        $this->reset('deleteId');
        session()->flash('success', 'Data berhasil dihapus.');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $surats = Surat::query()
            ->where('kategori', $this->kategori)
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('no_surat', 'like', '%' . $this->search . '%')
                        ->orWhereDate('tanggal_surat', 'like', '%' . $this->search . '%')
                        ->orWhere('jenis_surat', 'like', '%' . $this->search . '%')
                        ->orWhere('tertuju', 'like', '%' . $this->search . '%')
                        ->orWhere('perihal', 'like', '%' . $this->search . '%')
                        ->orWhere('kode_surat', 'like', '%' . $this->search . '%');
                });
            })->latest()->paginate(10);
        return view('livewire.surat-form-modal', ['surats' => $surats]);
    }
}
