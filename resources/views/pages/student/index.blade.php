@extends('layouts.admin')

@section('title', 'Students')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item active">Students</li>

@endsection

@section('content')

    <!-- DataTables Latest Students -->
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <div class="d-flex justify-content-between align-items-center">

                {{-- label-group --}}
                <div class="label-group">

                    <i class="fas fa-table"></i> Latest Students  

                </div>
                {{-- /label-group --}}

                <a href="{{ route('student.create') }}" class="btn btn-primary btn-sm">Add</a>

            </div>

        </div>
        {{-- /card-header --}}
        
        {{-- card-body --}}
        <div class="card-body">

            {{-- table-responsive --}}
            <div class="table-responsive">

                {{-- table --}}
                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">

                    {{-- thead --}}
                    <thead>

                        <tr>

                            <th>NIK</th>
                            <th>NIM</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Major</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    {{-- /thead --}}

                    {{-- tfoot --}}
                    <tfoot>

                        <tr>

                            <th>NIK</th>
                            <th>NIM</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Major</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>
                    {{-- /tfoot --}}

                    {{-- tbody --}}
                    <tbody>
                        
                        @foreach ($students as $student)
                        
                            <tr>

                                <td>{{ $student->nik }}</td>
                                <td>{{ $student->nim }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->major->name }}</td>
                                <td>

                                    <form action="{{ route('student.destroy', $student->nim) }}" method="post">

                                        {{ csrf_field() }}
                                
                                        {{-- Button Edit Student --}}
                                        <a href="{{ route('student.edit', $student->nim) }}" class="btn btn-primary btn-sm">

                                            Edit

                                        </a>
                                        
                                        {{-- Button Delete Student --}}
                                        <button type="submit" class="btn btn-danger btn-sm">

                                            Delete
                                            
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>
                    {{-- /tbody --}}

                </table>
                {{-- /table --}}

            </div>
            {{-- /table-responsive --}}

        </div>
        {{-- /card-body --}}

    </div>

@endsection