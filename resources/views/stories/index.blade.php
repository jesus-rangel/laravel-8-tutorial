@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-left">{{ __('Stories') }}</h3>
                    <a href="{{ route('stories.create') }}" class="float-right">Add a Story</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stories as $story)
                                <tr>
                                    <td>
                                        {{ $story->title }}
                                    </td>
                                    <td>
                                        {{ ucwords($story->type) }}
                                    </td>
                                    <td>
                                        {{ $story->status == 1 ? 'Yes' : 'No' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('stories.show', [$story]) }}" class="btn btn-info text-light">View Story</a>
                                        <a href="{{ route('stories.edit', [$story]) }}" class="btn btn-info text-light">
                                            <i class="fas fa-pencil-alt fa-lg"></i>
                                        </a>
                                        <form 
                                            action="{{ route('stories.destroy', [$story]) }}" method="post"
                                            style="display: inline-block;"
                                        >
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-info text-light">
                                                <i class="fas fa-trash fa-lg"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $stories->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
