<?php

namespace App\Livewire;

use AdinanCenci\RadioBrowser\RadioBrowser;
use App\Models\radio_station;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class RadioPage extends Component
{

    use WithPagination, WithoutUrlPagination;

    // public function mount()
    // {
    //     $this->getRadio();
    // }

    // public function getRadio()
    // {
    //     $browser = new RadioBrowser();
    //     $orderBy = 'clickcount'; // optional
    //     $reverse = true;         // ( decrescent ) optional
    //     $hideBroken = false;        // optional
    //     $offset = 0;            // optional
    //     $limit = 20;           // optional

    //     $this->station = $browser->getStationsByCountry('Indonesia', $orderBy, $reverse, $hideBroken, $offset, $limit);
    // }

    public function render()
    {
        return view('livewire.radio-page',[
            'station' => radio_station::simplePaginate(10),
        ]);
    }
}
