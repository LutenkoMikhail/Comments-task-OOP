<div class="col-md-12">
    <div class="album py-5 bg-light">
        <div class="container">
            <h3>{{__ ($comment->user_name)}}</h3>
            <hr>
            {{__ ($comment->created_at->format('d M Y - H:i:s'))}}
            <hr>
            {{__ ($comment->text)}}
            <hr>
        </div>
        {{--        <div class="d-flex justify-content-between align-items-center">--}}
        {{--            <div class="btn-group">--}}
        {{--                <a href="{{ route('comment.create',  $post->id) }}"--}}
        {{--                   class="btn btn-dark">{{ __('reply') }}</a>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</div>
