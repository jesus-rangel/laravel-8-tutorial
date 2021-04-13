@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-left">{{ $story->title }}</h3>
                    <a href="{{ route('stories.index') }}" class="float-right">Back</a>
                </div>

                <div class="card-body">
                    {{ $story->body }}
                    <br><br>
                    <p><strong>
                      Status: {{ $story->status == 1 ? 'Yes' : 'No' }} <br>
                      Type: {{ $story->type }}
                    </strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection