@extends('layouts.admin')

@section('title', 'Students')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item">

        <a href="{{ route('student') }}">Students</a>

    </li>

    <li class="breadcrumb-item active">Edit</li>

@endsection

@section('content')

    {{-- Edit Student --}}
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <i class="far fa-edit"></i> Edit Student

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

            <form action="{{ route('student.update', $student->nim) }}" method="POST">

                {{ csrf_field() }}

                {{-- form-row --}}
                <div class="form-row">

                    {{-- form-group --}}
                    <div class="form-group col-md-6">

                        <label for="inputNIM">NIM</label>
                        <input name="nim" type="text" class="form-control {{ $errors->has('nim') ? 'is-invalid' : ''}}" id="inputNIM" placeholder="ex: 1718xxx" value="{{ $student->nim }}">

                        @if ($errors->has('nim'))

                            <div class="invalid-feedback">

                                {{ $errors->first('nim') }}

                            </div>
                            
                        @endif

                    </div>
                    {{-- /form-group --}}

                    {{-- form-group --}}
                    <div class="form-group col-md-6">

                        <label for="inputName">Name</label>
                        <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" id="inputName" placeholder="ex: Jhon Doe" value="{{ $student->name }}">

                        @if ($errors->has('name'))

                            <div class="invalid-feedback">

                                {{ $errors->first('name') }}

                            </div>
                            
                        @endif

                    </div>
                    {{-- /form-group --}}

                </div>
                {{-- /form-row --}}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputAddress">Address</label>
                    <input name="address" type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" id="inputAddress" placeholder="ex: 1234 Main St" value="{{ $student->address }}">

                    @if ($errors->has('address'))

                        <div class="invalid-feedback">

                            {{ $errors->first('address') }}

                        </div>
                        
                    @endif

                </div>
                {{-- /form-group --}}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputPhone">Phone</label>
                    <input name="phone" type="text" class="form-control{{ $errors->has('phone') ? 'is-invalid' : ''}}" id="inputPhone" placeholder="ex: 08xxxxxxxxx" value="{{ $student->phone }}">

                    @if ($errors->has('phone'))

                        <div class="invalid-feedback">

                            {{ $errors->first('phone') }}

                        </div>
                        
                    @endif

                </div>
                {{-- /form-group --}}

                {{-- form-row --}}
                <div class="form-row">

                    {{-- form-group --}}
                    <div class="form-group col-md-6">

                        <label for="inputNIK">NIK</label>
                        <input name="nik" type="text" class="form-control {{ $errors->has('nik') ? 'is-invalid' : ''}}" id="inputNIK" placeholder="ex: 0176xxxxxxxxxxxxx" value="{{ $student->nik }}">

                        @if ($errors->has('nik'))

                            <div class="invalid-feedback">
                                
                                {{ $errors->first('nik') }}
                                
                            </div>
                            
                        @endif

                    </div>
                    {{-- /form-group --}}

                    {{-- form-group --}}
                    <div class="form-group col-md-6">

                        <label for="inputEmail">Email</label>
                        <input name="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" id="inputEmail" placeholder="ex: jhon.doe@mail.com" value="{{ $student->email }}">

                        @if ($errors->has('email'))

                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                            
                        @endif

                    </div>
                    {{-- /form-group --}}

                </div>
                {{-- /form-row --}}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputMajor">Major</label>
                    <select name="id_major" id="inputMajor" class="form-control">

                        @foreach ($majors as $major)

                            <option value="{{ $major->id }}" {{ $major->id === $student->id_major ? 'selected' : '' }}>
                                {{ $major->name }}
                            </option>
                            
                        @endforeach

                    </select>

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