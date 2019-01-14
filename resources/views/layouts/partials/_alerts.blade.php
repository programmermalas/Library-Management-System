{{-- session success --}}
@if (session('success'))

    {{-- alert --}}
    <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{ session('success') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

            <span aria-hidden="true">&times;</span>

        </button>

    </div>
    {{-- /alert --}}

@endif

{{-- session danger --}}
@if (session('danger'))

    {{-- alert --}}
    <div class="alert alert-danger alert-dismissible fade show" role="alert">

        {{ session('danger') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

            <span aria-hidden="true">&times;</span>

        </button>

    </div>
    {{-- /alert --}}
    
@endif

{{-- session warning --}}
@if (session('warning'))

    {{-- alert --}}
    <div class="alert alert-warning alert-dismissible fade show" role="alert">

        {{ session('warning') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

            <span aria-hidden="true">&times;</span>

        </button>

    </div>
    {{-- /alert --}}
    
@endif