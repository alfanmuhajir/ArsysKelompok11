@section('content')
@section('plugins.Select2', true)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b>Graduation</b> | Institution
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{-- @livewire('arsys.admin.config.institution.selector', key('sele ctor')) --}}
                            @livewire('arsys.admin.config.institution.components.student')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
