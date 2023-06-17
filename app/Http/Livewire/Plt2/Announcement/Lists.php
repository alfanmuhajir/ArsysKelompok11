<?php
// class addnouncement/Lists
namespace App\Http\Livewire\Plt2\Announcement;

use Livewire\Component;
use App\Models\Plt\Announcement;

class Lists extends Component
{
    protected $listeners = ['refresh_AnnouncementList', 'delete'];
    public function render()
    {
        $announcements = Announcement::all();
        return view('livewire.plt2.announcement.lists',  ['announcements' => $announcements]);
    }

    public function refresh_AnnouncementList()
    {
        $this->render();
    }

    public function delete($id)
    {
        Announcement::find($id)->delete();
    }
}
