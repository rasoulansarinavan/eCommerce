<?php

namespace App\Http\Livewire\Admin\Seller;

use Livewire\Component;

class Card extends Component
{
    public function render()
    {
        return view('admin.livewire.seller.profile')->extends('admin.layouts.app');
    }
}
