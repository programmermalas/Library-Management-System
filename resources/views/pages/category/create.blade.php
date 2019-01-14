@extends('layouts.admin')

@section('title', 'Categories')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item">

        <a href="{{ route('category') }}">Categories</a>

    </li>

    <li class="breadcrumb-item active">Add</li>

@endsection

@section('content')

    {{-- Add Category --}}
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <i class="fas fa-plus"></i> Add Category

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

            <form action="{{ route('category.store') }}" method="POST">

                {{ csrf_field() }}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputName">Name</label>
                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="inputName" placeholder="ex: Informatic Engginering" value="{{ old('name') }}">

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