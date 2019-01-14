@extends('layouts.admin')

@section('title', 'Publishers')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item">

        <a href="{{ route('publisher') }}">Publishers</a>

    </li>

    <li class="breadcrumb-item active">Edit</li>

@endsection

@section('content')

    {{-- Edit Publisher --}}
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <i class="fas fa-edit"></i> Edit Publisher
            
        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

            <form action="{{ route('publisher.update', $publisher->id) }}" method="POST">

                {{ csrf_field() }}

                {{-- form-row --}}
                <div class="form-row">

                    {{-- form-group --}}
                    <div class="form-group col-md-6">

                        <label for="inputName">Name</label>
                        <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="inputName" placeholder="ex: Jhon Doe" value="{{ $publisher->name }}">

                        @if ($errors->has('name'))

                            <div class="invalid-feedback">

                                {{ $errors->first('name') }}

                            </div>
                            
                        @endif

                    </div>
                    {{-- /form-group --}}

                    {{-- form-group --}}
                    <div class="form-group col-md-6">

                        <label for="inputPhone">Phone</label>
                        <input name="phone" type="text" class="form-control {{ $errors->has('phone') }}" id="inputPhone" placeholder="ex: 08xxxxxxxxx" value="{{ $publisher->phone }}">

                        @if ($errors->has('phone'))

                            <div class="invalid-feedback">

                                {{ $errors->first('phone') }}

                            </div>
                            
                        @endif

                    </div>
                    {{-- /form-group --}}

                </div>
                {{-- /form-row --}}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputAddress">Address</label>
                    <input name="address" type="text" class="form-control {{ $errors->has('address') }}" id="inputAddress" placeholder="ex: 1234 Main St" value="{{ $publisher->address }}">

                    @if ($errors->has('address'))

                        <div class="invalid-feedback">

                            {{ $errors->first('address') }}

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