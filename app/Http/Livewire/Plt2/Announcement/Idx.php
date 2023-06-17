<?php
// class addnouncement/Idx
namespace App\Http\Livewire\Plt2\Announcement;

use Livewire\Component;

class Idx extends Component
{
    public $addAnnouncement = 0;
    public $announcementId = 0;
    protected $listeners = ['setAddAnnouncement', 'editEnablef', 'announcementEdit_Disable', 'delete'];
    public $editEnable = false;

    public function render()
    {
        return view('livewire.plt2.announcement.idx');
    }

    public function setAddAnnouncement($addVal){
        $this->addAnnouncement = $addVal;
    }
    public function editEnablef($id) 

    {
        //dd("edit enablef");
        $this->editEnable = true;
        $this->announcementId = $id;
    }
    public function announcementEdit_Disable()
    {
        $this->editEnable = false;
    }


}
