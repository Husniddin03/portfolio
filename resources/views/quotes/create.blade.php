<x-blog>
    <form action="{{ route('quotes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Quote</label>
            <textarea name="quote" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Job</label>
            <input name="job" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Image (optional)</label>
            <input name="img" type="file" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Saqlash</button>
    </form>

</x-blog>
