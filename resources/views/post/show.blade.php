@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center"> {{__('POST') }}</h1>
                <hr>
                <h3 class="text-center"> {{__('TITLE-'.$post->title) }}</h3>
                <hr>
                <h5 class="text-center"> {{__('DESCRIPTION-'.$post->description) }}</h5>
                <hr>
                <h1 class="text-center"> {{__('COMMENTS :'.$post->comments->count()) }}
                    <a href="{{ route('comment.create',  $post->id) }}"
                       class="btn btn-info">{{ __('Add comment.') }}</a>
                </h1>
                <hr>

                @if($post->comments->count()!==0)
            </div>
            <div class="col-md-12">
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row">
                            @each('comment.show',$comments,'comment')
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                {{$comments->links()}}
            </div>

            @else
                <hr>
                <h3 class="text-center">
                    No comments !
                </h3>
            @endif
        </div>
    </div>

@endsection
