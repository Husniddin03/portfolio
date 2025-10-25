<x-blog>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('quotes.create') }}" class="btn btn-success mb-3">Yangi Quote qo‘shish</a>

    @foreach ($quotes as $quote)
        <div class="card mb-4">
            <div class="card-body">
                <blockquote class="blockquote mb-2">
                    <p>{{ $quote->quote }}</p>
                </blockquote>
                <footer class="blockquote-footer">
                    <strong>{{ $quote->name }}</strong>, {{ $quote->job }}
                </footer>

                @if ($quote->img)
                    <img src="{{ asset('storage/' . $quote->img) }}" class="img-thumbnail mt-3" style="max-width: 200px;">
                @endif

                <form action="{{ route('quotes.destroy', $quote->id) }}" method="POST" class="mt-3"
                    onsubmit="return confirm('Rostdan ham o‘chirmoqchimisiz?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">O‘chirish</button>
                </form>
            </div>
        </div>
    @endforeach

</x-blog>
