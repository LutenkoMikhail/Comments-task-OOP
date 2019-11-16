<div class="container">
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h2>
                <a href="{{route('post.show',$post->id)}}" class="card-link">{{__($post->title) }}</a>
            </h2>
            <hr>
            <h7>Create : {{__($post->created_at->format('d M Y - H:i:s')) }}</h7>
            <hr>
            <p class="card-text">{{__($post->description) }}</p>
            <hr>
            <h5>
                Comments:
                <a href="{{route('post.show',$post->id)}}" class="card-link">{{__($post->comments->count()) }}</a>
            </h5>
        </div>
    </div>
</div>
