<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Buku;

class Bukus extends Component
{
    public $bukus, $judul_buku, $tahun_terbit, $stok, $penulis, $genre, $buku_id;
    public $isModal = 0;
    public function render()
    {
        $this->buku = Buku::OrderBy('created_at', 'DESC')->get();
        return view('livewire.bukus');
    }

    public function tambahbuku()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function resetFields()
    {
        $this->judul_buku = '';
        $this->tahun_terbit = '';
        $this->stok = '';
        $this->penulis = '';
        $this->gender = '';
        $this->buku_id = '';
    }

    public function tambahbuku1()
    {
        $this->validate([
            'judul_buku' => 'string',
            'tahun_terbit' => 'string,',
            'stok' => 'string',
            'penulis' => 'string',
            'genre' => 'string'
        ]);

        Buku::updateOrcreate([
            'judul_buku' => $this->judul_buku,
            'tahun_terbit' => $this->tahun_terbit,
            'stok' => $this->stok,
            'penulis' => $this->penulis,
            'genre' => $this->genre,
        ]);

        $this->closeModal(); 
        $this->resetFields(); 
    }
}
