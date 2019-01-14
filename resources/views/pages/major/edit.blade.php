@extends('layouts.admin')

@section('title', 'Majors')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item">

        <a href="{{ route('major') }}">Majors</a>

    </li>

    <li class="breadcrumb-item active">Edit</li>

@endsection

@section('content')

    {{-- Edit Major --}}
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <i class="far fa-edit"></i> Edit Major

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

            <form action="{{ route('major.update', $major->id) }}" method="POST">

                {{ csrf_field() }}

                {{-- form-group --}}
                <div class="form-group">
                    
                    <label for="inputName">Name</label>
                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" id="inputName" placeholder="ex: Computer Science" value="{{ $major->name }}">

                    @if ($errors->has('name'))

                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                        
                    @endif

                </div>
                {{-- /form-group --}}

                <div class="d-flex justify-content-end">

                    <button type="submit" class="btn btn-primary">Save</button>

                </div>

            </form>

        </div>
        {{-- /card-body --}}

    </div>

@endsection