@extends('layouts.admin')

@section('title', 'Authors')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item active">Authors</li>

@endsection

@section('content')

    <!-- DataTables Latest Authors -->
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <div class="d-flex justify-content-between">

                {{-- group --}}
                <div class="group">

                    <i class="fas fa-table"></i> Latest Authors

                </div>
                {{-- /group --}}

                <a href="{{ route('author.create') }}" class="btn btn-primary btn-sm">Add</a>

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

                        @foreach ($authors as $author)
                            
                            <tr>
                                
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->created_at }}</td>
                                <td>{{ $author->updated_at }}</td>
                                <td>

                                    <form action="{{ route('author.destroy', $author->id) }}" method="post">
                                    
                                        {{ csrf_field() }}

                                        {{-- Button Edit Author --}}
                                        <a href="{{ route('author.edit', $author->id) }}" class="btn btn-primary btn-sm">
                                        
                                            Edit

                                        </a>

                                        {{-- Button Delete Author --}}
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

            </div>
            {{-- /table-responsive --}}

        </div>
        {{-- /card-body --}}

    </div>

@endsection