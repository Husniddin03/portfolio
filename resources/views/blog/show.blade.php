<x-blog title="Blog show">
    <div>
        <h1>{{ $post->title }}</h1>
        @foreach ($post->contents as $content)
            <p>{{ $content->content }}</p>
            @foreach ($content->mediaFiles as $file)
                @if ($file->type === 'image')
                    <img src="{{ asset('storage/' . $file->url) }}" class="img-fluid rounded mb-3" alt="Post image"
                        style="max-width: 500px;">
                @elseif($file->type === 'video')
                    <video controls class="w-100 rounded mb-3" style="max-width: 500px;">
                        <source src="{{ asset('storage/' . $file->url) }}" type="video/mp4">
                        Sizning brauzeringiz video formatini qo‘llab-quvvatlamaydi.
                    </video>
                @elseif($file->type === 'url')
                    <div style="width: 50%" class="ratio ratio-16x9 mb-3">
                        {!! $file->url !!}
                    </div>
                @endif
            @endforeach
        @endforeach

        @foreach ($post->comments as $comment)
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-1">{{ $comment->user->name ?? 'Ism yo‘q' }}</h5>
                    <h6 class="card-subtitle text-muted mb-2">{{ $comment->user->email ?? 'Email yo‘q' }}</h6>
                    <p class="card-text">{{ $comment->message }}</p>
                </div>
            </div>
        @endforeach

    </div>
</x-blog>
