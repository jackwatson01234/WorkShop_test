@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('dropzone') }}" method="post" class="dropzone"
                enctype="multipart/form-data">@csrf</form>
            </div>
        </div>
    </div>
@endsection
