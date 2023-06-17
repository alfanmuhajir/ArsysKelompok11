<?php
// class addnouncement/Add
namespace App\Http\Livewire\Plt2\Announcement;

use Livewire\Component;
use App\Models\Plt\Announcement;

class Add extends Component
{
    public $title, $body;
    public function render()
    {
        return view('livewire.plt2.announcement.add');
    }

    public function setAddAnnouncement2($addVal){
        $this->emit('setAddAnnouncement', $addVal);
    }

    public function save(){
        Announcement::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        $this->title = '';
        $this->body = '';
        $this->emit('refresh_AnnouncementList');
    }
}
