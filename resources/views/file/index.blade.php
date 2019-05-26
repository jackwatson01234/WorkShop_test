@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            <strong>{{ session('success') }}</strong>
        </div>
    @endif
    <p>
        <a href="{{ route('formfile') }}" class="btn btn-primary">upload File</a>
        <div class="row">
            @foreach ($files as $file)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ Storage::url($file->path) }}" class="card-img-top">
                        <div class="card-body">
                            <strong class="card-title">{{ $file->title }}</strong>
                            <p class="card-text">{{ $file->created_at->diffForHumans() }}</p>
                            <form method="post" action="{{ route('deletefile', $file->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <a href="{{ route('downloadfile', $file->id) }}" class="btn btn-primary">
                                Download</a>
                                <a href="{{ route('emailfile', $file->id) }}" class="btn btn-success">Email</a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </p>
</div>
@endsection
