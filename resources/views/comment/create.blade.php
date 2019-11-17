@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center"> {{ __ ('Create comment.') }} </h3>
            </div>
            <form action="{{route ('comment.store')}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="postId" name="postId" value="{{$postId}}">
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" max="50" pattern="^[a-zA-Z0-9 ]+$"
                               required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email"
                           class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" maxlength="255"
                               pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$"
                               required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="homepage"
                           class="col-md-4 col-form-label text-md-right">{{ __('Home page') }}</label>
                    <div class="col-md-6">
                        <input id="homepage" type="url" class="form-control @error('homepage') is-invalid @enderror"
                               name="homepage" value="{{ old('homepage') }}" maxlength="1024"
                               autocomplete="home page">
                        @error('homepage')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="comment"
                           class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>
                    <div class="col-md-6">
                        <p><textarea rows="10" cols="45" name="comment" id="comment" cols="40" rows="5"
                                     class="form-control @error('comment') is-invalid @enderror"
                                     maxlength="100" required placeholder="comment"
                                     autofocus>{{ old('comment') }}</textarea></p>
                        @error('comment')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="loadfile" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>
                    <div class="col-md-6">
                        <input id="loadfile" type="file" class="form-control @error('loadfile') is-invalid @enderror"
                               name="loadfile" value="{{ old('loadfile') }}"
                               accept="image/jpeg,image/png,image/gif,text/plain"
                               autocomplete="file">
                        @error('loadfile')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                {{--                https://web-programming.com.ua/ispolzuem-kapchu-v-laravel/--}}
                {{--                <div class="form-group">--}}
                {{--                    <label for=""></label>--}}
                {{--                    <img src="{{ captcha_src() }}" alt="captcha" class="captcha-img"--}}
                {{--                         data-refresh-config="default">--}}
                {{--                    <a href="#" id="refresh"><span class="glyphicon glyphicon-refresh"></span></a></p>--}}
                {{--                </div>--}}
                {{--                <div class="form-group">--}}
                {{--                    <label>captcha</label>--}}
                {{--                    <input class="form-control" type="text" name="captcha"/>--}}
                {{--                </div>--}}

                <button type="submit" class="btn btn-primary">Create comment.</button>

            </form>
        </div>
    </div>
    <div class="col-md-12">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
@endsection













