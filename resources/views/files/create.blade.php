<x-blog title="My files">

    <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input name="url_img" class="form-control" type="file">
        </div>

        <div class="mb-3">
            <label class="form-label">Video</label>
            <input name="url_video" class="form-control" type="file">
        </div>

        <div class="mb-3">
            <label class="form-label">YouTube iframe</label>
            <input name="url" class="form-control" type="text" placeholder="<iframe ...>">
        </div>

        <button type="submit" class="btn btn-primary">Saqlash</button>
    </form>
</x-blog>
