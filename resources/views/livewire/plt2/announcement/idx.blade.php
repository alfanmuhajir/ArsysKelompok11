{{-- blade announcement.idx --}}
<div>
    {{-- In work, do what you enjoy. --}}
    <br />
    <div>
        @if ($addAnnouncement != 1)
            <div class="row">
                <div class="col-sm-12 text-right">
                    <x-adminlte-button wire:click="setAddAnnouncement(1)" class="btn-sm" label="Add Announcement" theme="dark" icon="fas fa-adjust"/>
                </div>
            </div>
        @else 
            @livewire('plt2.announcement.add')
        @endif

        <hr>

        <div class="row">
            <div class="col-sm-12">
                @if ($editEnable == true)
                    @livewire('plt2.announcement.edit', ['announcementId' => $announcementId])
                @else
                    @livewire('plt2.announcement.lists')
                @endif
            </div>
        </div>
    </div>
</div>
