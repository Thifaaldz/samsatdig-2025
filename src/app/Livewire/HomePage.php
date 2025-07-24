<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page')->layout('components.layouts.app');
    }

    public function index()
    {
        $materi = SimMateri::latest()->get();
        return view('home', compact('materi'));
    }
}
