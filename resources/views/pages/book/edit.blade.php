@extends('layouts.admin')

@section('title', 'Books')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item">

        <a href="{{ route('book') }}">Books</a>

    </li>

    <li class="breadcrumb-item active">Edit</li>

@endsection

@section('content')

    {{-- Edit Book --}}
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <i class="far fa-edit"></i> Edit Book

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

            <form action="{{ route('book.update', $book->id) }}" method="POST">

                {{ csrf_field() }}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputName">Name</label>
                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="inputName" placeholder="ex: Harry Potter" value="{{ $book->name }}">

                    @if ($errors->has('name'))

                        <div class="invalid-feedback">

                            {{ $errors->first('name') }}

                        </div>
                        
                    @endif

                </div>
                {{-- /form-group --}}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputAuthor">Author</label>
                    <select name="author" id="inputAuthor" class="form-control">

                        @foreach ($authors as $author)
                            
                            <option value="{{ $author->id }}" {{ $author->id === $book->id_author ? 'selected' : '' }}> {{ $author->name }} </option>

                        @endforeach

                    </select>

                </div>
                {{-- /form-group --}}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputPublisher">Publisher</label>
                    <select name="publisher" id="inputPublisher" class="form-control">

                        @foreach ($publishers as $publisher)
                            
                            <option value="{{ $publisher->id }}" {{ $publisher->id === $book->id_publisher ? 'selected' : '' }}> {{ $publisher->name }} </option>

                        @endforeach

                    </select>
                    
                </div>
                {{-- /form-group --}}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputCategory">Category</label>
                    <select name="category" id="inputCategory" class="form-control">

                        @foreach ($categories as $category)
                            
                            <option value="{{ $category->id }}" {{ $category->id === $book->id_category ? 'selected' : '' }}> {{ $category->name }} </option>

                        @endforeach

                    </select>

                </div>
                {{-- /form-group --}}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputCase">Book Cases</label>
                    <select name="case" id="inputCase" class="form-control">

                        @foreach ($cases as $case)
                            
                            <option value="{{ $case->id }}" {{ $case->id === $book->id_book_case ? 'selected' : '' }}> {{ $case->name }} </option>
                        
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