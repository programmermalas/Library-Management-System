@extends('layouts.admin')

@section('title', 'Categories')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item">

        <a href="{{ route('book') }}">Books</a>

    </li>

    <li class="breadcrumb-item active">Create</li>

@endsection

@section('content')

    {{-- Create Student --}}
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">
            
            <i class="fas fa-plus"></i> Add Book

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

            <form action="{{ route('book.store') }}" method="POST">

                {{ csrf_field() }}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputName">Name</label>
                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="inputName" placeholder="ex: Harry Potter" value="{{ old('name') }}">

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
                            
                            <option value="{{ $author->id }}" {{ old('author') === $author->name ? 'selected' : '' }}> {{ $author->name }} </option>

                        @endforeach

                    </select>

                </div>
                {{-- /form-group --}}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputPublisher">Publisher</label>
                    <select name="publisher" id="inputPublisher" class="form-control">

                        @foreach ($publishers as $publisher)
                            
                            <option value="{{ $publisher->id }}" {{ old('publisher') === $publisher->name ? 'selected' : '' }}> {{ $publisher->name }} </option>

                        @endforeach

                    </select>

                </div>
                {{-- /form-group --}}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputCategory">Category</label>
                    <select name="category" id="inputCategory" class="form-control">

                        @foreach ($categories as $category)
                            
                            <option value="{{ $category->id }}" {{ old('category') === $category->name ? 'selected' : '' }}> {{ $category->name }} </option>

                        @endforeach

                    </select>

                </div>
                {{-- /form-group --}}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputCase">Book Cases</label>
                    <select name="case" id="inputCase" class="form-control">

                        @foreach ($cases as $case)
                            
                            <option value="{{ $case->id }}" {{ old('case') === $case->name ? 'selected' : '' }}> {{ $case->name }} </option>

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