@extends('layouts.admin')

@section('title', 'Book Cases')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item active">Book Cases</li>

@endsection

@section('content')

    <!-- DataTables Latest Book Cases -->
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <div class="d-flex justify-content-between">

                {{-- group --}}
                <div class="group">

                    <i class="fas fa-table"></i> Latest Book Cases  

                </div>
                {{-- /group --}}

                <a href="{{ route('case.create') }}" class="btn btn-primary btn-sm">Add</a>

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

                        @foreach ($cases as $case)
                            
                            <tr>

                                <td>{{ $case->name }}</td>
                                <td>{{ $case->created_at }}</td>
                                <td>{{ $case->updated_at }}</td>
                                <td>

                                    <form action="{{ route('case.destroy', $case->id) }}" method="post">
                                    
                                        {{ csrf_field() }}

                                        {{-- Button Edit Book Case --}}
                                        <a href="{{ route('case.edit', $case->id) }}" class="btn btn-primary btn-sm">
                                        
                                            Edit
                                            
                                        </a>

                                        {{-- Button Delete Book Case --}}
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