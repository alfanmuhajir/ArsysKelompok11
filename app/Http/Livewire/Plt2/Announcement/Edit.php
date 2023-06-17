<?php

namespace App\Http\Livewire\Plt2\Announcement;

use Livewire\Component;
use App\Models\Plt\Announcement;

class Edit extends Component
{
    public $title, $body;
    public $announcementId = null; 
    public function render()
    {
        return view('livewire.plt2.announcement.edit');
    }

    public function mount($announcementId)
    
    {
        $this->announcementId = $announcementId;
        $announcement = Announcement::where('id', $announcementId)->first();
        $this->title = $announcement->title;
        $this->body = $announcement->body;
    }
    public function update()
    {
        Announcement::where('id', $this->announcementId)->update([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        $this->emit('announcementEdit_Disable');
    }
}
