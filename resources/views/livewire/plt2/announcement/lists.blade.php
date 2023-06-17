{{-- blade announcement.lists --}}
<div>
    <b><h3>List of Announcement</h3></b>
    @foreach ($announcements as $index => $announcement)
        {{$index+1}}. {{$announcement->title}} 
        <i class="fa fa-edit fa-xs" style="cursor: pointer;" wire:click="$emitUp('editEnablef', {{$announcement->id}})"></i>
        <i class="fa fa-trash fa-xs" style="cursor: pointer;" wire:click="delete({{$announcement->id}})"></i>
        <br />
    @endforeach
</div>
