<?php

namespace App\View\Components;

use App\Models\Berita;
use App\Models\InfoSekolah;
use App\Models\Kontak;
use App\Models\Profile;
use App\Models\Sejarah;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data = [
            "profile"   => Profile::first(),
            "sejarah"   => Sejarah::first(),
            "beritas"    => Berita::latest()->take(2)->get(),
            "infos"      => InfoSekolah::latest()->take(2)->get(),
            "kontak"    => Kontak::first()
        ];
        return view('components.footer', $data);
    }
}
