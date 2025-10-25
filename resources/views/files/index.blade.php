<x-blog title="My files">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="text-end"><a href="{{ route('files.create') }}" class="btn btn-success mb-3">Upload new file</a></div>

    @foreach ($files as $file)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">{{ $file->title }}</h5>
                <p class="card-text">{{ $file->content }}</p>

                @if ($file->type == 'image')
                    <img src="{{ asset('storage/' . $file->url) }}" class="img-fluid rounded" style="max-width: 500px;">
                @elseif($file->type == 'video')
                    <video controls class="w-100 rounded" style="max-width: 500px;">
                        <source src="{{ asset('storage/' . $file->url) }}" type="video/mp4">
                    </video>
                @elseif($file->type == 'url')
                    <div class="ratio ratio-4x3">
                        @php
                            $segments = explode('/', $file->url);
                            $lastSegment = end($segments);
                            $videoId = explode('?', $lastSegment)[0];
                        @endphp
                        <a href="{{ $file->url }}">
                            <p>To'liq tomosho qiling</p>
                            <img class="img-fluid"
                                src="https://img.youtube.com/vi/{{ $videoId }}/maxresdefault.jpg"
                                alt="Video Thumbnail" />
                        </a>
                    </div>
                @endif

                <form action="{{ route('files.destroy', $file->id) }}" method="POST" class="mt-3"
                    onsubmit="return confirm('Rostdan ham o‘chirmoqchimisiz?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">O‘chirish</button>
                </form>
            </div>
        </div>
    @endforeach

</x-blog>
