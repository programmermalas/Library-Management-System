@extends('layouts.admin')

@section('title', 'Categories')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item active">Categories</li>

@endsection

@section('content')

    <!-- DataTables Latest Borrower -->
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <div class="d-flex justify-content-between">

                {{-- group --}}
                <div class="group">

                    <i class="fas fa-table"></i> Latest Category  

                </div>

                <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Add</a>

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

                        @foreach ($categories as $category)
                            
                            <tr>

                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td>

                                    <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                    
                                        {{ csrf_field() }}

                                        {{-- Button Edit Category --}}
                                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary btn-sm">
                                        
                                            Edit

                                        </a>

                                        {{-- Button Delete Category --}}
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