<?php

namespace App\Livewire;

use AdinanCenci\RadioBrowser\RadioBrowser;
use App\Models\radio_station;
use Livewire\Component;
use LucianoTonet\GroqPHP\Groq;

class RadioStream extends Component
{
    public $station;
    public $desc;


    public function mount($uuid){
        $this->getData($uuid);
    }

    public function playRadio(){
        $this->play = !$this->play;
    }

    public function getData($uuid){
        $browser = new RadioBrowser();

        $this->station = $browser->getStationsByUuid($uuid);

        $groq = new Groq(getenv('GROQ_API_KEY'));
    
        $chatCompletion = $groq->chat()->completions()->create([
            'model' => 'llama3-70b-8192',
            'messages' => [
                [
                    'role' => 'user',
                    'content' => "Berikan deskripsi singkat untuk saluran radio '" . $this->station[0]['name'] . "' dengan bahasa indonesia. (berikan jawaban yang langsung to the point, tanpa mengulangi pertanyaan,tapi jangan terlalu singkat)"
                ],
            ]
        ]);

        $this->desc = $chatCompletion['choices'][0]['message']['content'];
    }

    public function render()
    {
        return view('livewire.radio-stream',[
            'radio' => radio_station::orderBy('votes', 'desc')->take(7)->get(),
        ]);
    }
}
