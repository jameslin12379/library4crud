@extends('layouts.app')

@section('content')

    <div class="container pt-100">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h3 class="login-heading mb-4 text-center">Create book</h3>
                <form action="/books" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title" value="{{ old('title') }}" name="title" required>
                    </div>
                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description" value="{{ old('description') }}" name="description" required>
                    </div>
                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isbn" value="{{ old('isbn') }}" name="isbn" required>
                    </div>
                    @if ($errors->has('isbn'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Length" value="{{ old('length') }}" name="length" required>
                    </div>
                    @if ($errors->has('length'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('length') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Author id" value="{{ old('author_id') }}" name="author_id" required>
                    </div>
                    @if ($errors->has('author_id'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('author_id') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Category id" value="{{ old('category_id') }}" name="category_id" required>
                    </div>
                    @if ($errors->has('category_id'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Publisher id" value="{{ old('publisher_id') }}" name="publisher_id" required>
                    </div>
                    @if ($errors->has('publisher_id'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('publisher_id') }}</strong>
                                    </span>
                    @endif


                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection