{{-- blade announcement.add --}}
<div>
    <div class="text-right">
        <x-adminlte-button wire:click="setAddAnnouncement2(0)" class="btn-xs" label="x" theme="danger"/>
    </div>
    <div class="card">
        <div class="card-header">
            <b>News</b> || Create News
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4 text-right">
                    Title
                </div>
                <div class="col-sm-8">
                    <x-adminlte-input wire:model="title" name="iLabel" placeholder="Please type the announcement title"/>
                </div>
                <div class="col-sm-4 text-right">
                    Body
                </div>
                <div class="col-sm-8">
                    <x-adminlte-textarea wire:model="body" name="taBasic" placeholder="Please type the announcement body"/>
                </div>
                <div class="col-sm-12 text-right">
                    <x-adminlte-button wire:click="save" class="btn-sm" label="Submit" theme="success" icon="fas fa-save"/>
                </div>

            </div>
            <p class="card-text"></p>
        </div>
        <div class="card-footer text-muted">
            @ArSys<i>2023</i>
        </div>
    </div>
</div>
