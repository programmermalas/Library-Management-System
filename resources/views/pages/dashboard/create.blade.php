@extends('layouts.admin')

@section('title', 'Borrowers')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item active">Add Borrower</li>

@endsection

@section('content')

    {{-- Add Category --}}
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <i class="fas fa-plus"></i> Add Borrower

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

            <form action="{{ route('borrower.store') }}" method="POST">

                {{ csrf_field() }}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputBook">Name Book</label>
                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="inputBook" placeholder="ex: Hary Potter" value="{{ old('name') }}">

                    @if ($errors->has('name'))

                        <div class="invalid-feedback">

                            {{ $errors->first('name') }}

                        </div>
                        
                    @endif

                </div>
                {{-- /form-group --}}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputNim">NIM Student</label>
                    <input name="nim" type="text" class="form-control {{ $errors->has('nim') ? 'is-invalid' : '' }}" id="inputnim" placeholder="ex: 1718xxxx" value="{{ old('nim') }}">

                    @if ($errors->has('nim'))

                        <div class="invalid-feedback">

                            {{ $errors->first('nim') }}

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