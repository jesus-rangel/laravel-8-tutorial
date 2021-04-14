@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-left">Edit Story</h3>
                    <a href="{{ route('stories.index') }}" class="float-right">Back</a>
                </div>

                <div class="card-body">
                  <form action="{{ route('stories.update', [$story]) }}" method="post">
                    @csrf
                    @method('PUT')

                    @include('layouts.story_form')
                    
                    <button class="btn btn-primary">Save</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection