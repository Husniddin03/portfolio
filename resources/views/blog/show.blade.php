<x-blog title="Blog show">
    <div>
        <h1>{{ $post->title }}</h1>
        @foreach ($post->contents as $content)
            <p>{!! $content->content !!}</p>
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
                        @php
                            $segments = explode('/', $file->url);
                            $lastSegment = end($segments);
                            $videoId = explode('?', $lastSegment)[0];
                        @endphp

                        <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                            <a href="{{ $file->url }}" class="portfolio-item isotope-item gsap-reveal-img"
                                data-fancybox="gallery" data-caption="Showreel 2019">
                                <img src="https://img.youtube.com/vi/{{ $videoId }}/maxresdefault.jpg"
                                    class="lazyload img-fluid" alt="Video Thumbnail" />
                            </a>
                        </div>

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
