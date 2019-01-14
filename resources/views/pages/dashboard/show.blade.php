@extends('layouts.admin')

@section('title', 'Borrowers')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item active">Details Borrower</li>

@endsection

@section('content')

    {{-- Details Category --}}
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <i class="fas fa-plus"></i> Details Borrower

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

            <form action="{{ route('borrower.verification', $borrower->id) }}" method="POST">

                {{ csrf_field() }}

                {{-- Details Student --}}
                <div class="card mb-3">

                    {{-- card-header --}}
                    <div class="card-header">

                        Details Student

                    </div>
                    {{-- /card-header --}}

                    {{-- card-body --}}
                    <div class="card-body">

                        {{-- form-row --}}
                        <div class="form-row">
        
                            {{-- form-group --}}
                            <div class="form-group col-md-6">
        
                                <label for="inputNIM">NIM</label>
                                <input name="nim" type="text" class="form-control {{ $errors->has('nim') ? 'is-invalid' : '' }}" id="inputNIM" value="{{ $borrower->student->nim }}" disabled>
        
                            </div>
                            {{-- /form-group --}}
        
                            {{-- form-group --}}
                            <div class="form-group col-md-6">
        
                                <label for="inputName">Name</label>
                                <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="inputName" value="{{ $borrower->student->name }}" disabled>
        
                            </div>
                            {{-- /form-group --}}
        
                        </div>
                        {{-- /form-row --}}
        
                        {{-- form-group --}}
                        <div class="form-group">
        
                            <label for="inputAddress">Address</label>
                            <input name="address" type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" id="inputAddress" value="{{ $borrower->student->address }}" disabled>
        
                        </div>
                        {{-- /form-group --}}
        
                        {{-- form-group --}}
                        <div class="form-group">
        
                            <label for="inputPhone">Phone</label>
                            <input name="phone" type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="inputPhone" value="{{ $borrower->student->phone }}" disabled>
        
                        </div>
                        {{-- /form-group --}}
        
                        {{-- form-row --}}
                        <div class="form-row">
        
                            {{-- form-group --}}
                            <div class="form-group col-md-6">
        
                                <label for="inputNIK">NIK</label>
                                <input name="nik" type="text" class="form-control {{ $errors->has('nik') ? 'is-invalid' : '' }}" id="inputNIK" value="{{ $borrower->student->nik }}" disabled>
        
                            </div>
                            {{-- /form-group --}}
        
                            {{-- form-group --}}
                            <div class="form-group col-md-6">
        
                                <label for="inputEmail">Email</label>
                                <input name="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="inputEmail" value="{{ $borrower->student->email }}" disabled>
        
                            </div>
                            {{-- /form-group --}}
                            
                        </div>
                        {{-- /form-row --}}
        
                        {{-- form-group --}}
                        <div class="form-group">
        
                            <label for="inputMajor">Major</label>
                            <input name="id_major" type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="inputMajor" value="{{ $borrower->student->major->name }}" disabled>
        
                        </div>
                        {{-- /form-group --}}

                    </div>
                    {{-- /card-body --}}

                </div>

                {{-- Details Book --}}
                <div class="card mb-3">

                    {{-- card-header --}}
                    <div class="card-header">

                        Details Book

                    </div>
                    {{-- /card-header --}}

                    {{-- card-body --}}
                    <div class="card-body">

                        {{-- form-group --}}
                        <div class="form-group">
        
                            <label for="inputBook">Name Book</label>
                            <input name="name" type="text" class="form-control" id="inputBook" value="{{ $borrower->book->name }}" disabled>
        
                        </div>
                        {{-- /form-group --}}

                    </div>
                    {{-- /card-body   --}}

                </div>

                <div class="d-flex justify-content-end">

                    <button type="submit" class="btn btn-primary">Verification</button>

                </div>

            </form>

        </div>
        {{-- /card-body --}}

    </div>

@endsection