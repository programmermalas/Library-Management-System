@extends('layouts.admin')

@section('title', 'Majors')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item active">Majors</li>
    
@endsection

@section('content')

    <!-- DataTables Latest Majors -->
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <div class="d-flex justify-content-between align-items-center">

                {{-- label-group --}}
                <div class="label-group">

                    <i class="fas fa-table"></i> Latest Majors  

                </div>
                {{-- /label-group --}}

                <a href="{{ route('major.create') }}" class="btn btn-primary btn-sm">Add</a>

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

                            <th>Name</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Action</th>

                        </tr>

                    </thead>
                    {{-- /thead --}}

                    {{-- tfoot --}}
                    <tfoot>

                        <tr>

                            <th>Name</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Action</th>

                        </tr>
                        
                    </tfoot>
                    {{-- /tfoot --}}

                    {{-- tbody --}}
                    <tbody>

                        @foreach ($majors as $major)

                            <tr>

                                <td>{{ $major->name }}</td>
                                <td>{{ $major->created_at }}</td>
                                <td>{{ $major->updated_at }}</td>
                                <td>

                                    <form action="{{ route('major.destroy', $major->id) }}" method="post">

                                        {{ csrf_field() }}
                                
                                        {{-- Button Edit Major --}}
                                        <a href="{{ route('major.edit', $major->id) }}" class="btn btn-primary btn-sm">

                                            Edit

                                        </a>
                                        
                                        {{-- Button Edit Major --}}
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
        {{-- card-body --}}

    </div>

@endsection