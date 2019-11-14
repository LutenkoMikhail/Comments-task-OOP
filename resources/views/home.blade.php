@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center"> {{ __ ('Blog posts') }} </h3>
            </div>
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if (count($posts)!==0)
                    <div class="col-md-12">
                        <div class="album py-5 bg-light">
                            <div class="container">
                                <div class="row ">
                                    @each('post.index',$posts,'post')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        {{$posts->links()}}
                    </div>
                @else
                    <hr>
                    <h3 class="text-center">
                        No blog posts !
                    </h3>
                @endif
            </div>
        </div>
    </div>
@endsection













