<x-blog title="Blog create">

    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <input readonly value="{{$post->title}}" name="title" type="text" class="form-control" id="floatingInput" placeholder="Enter post title!">
            @error('title')
                {{ $message }}
            @enderror
            <label for="floatingInput">Post title</label>
        </div>

        <div class="form-floating">
            <textarea name="content" class="form-control" placeholder="Enter the post content" id="floatingTextarea2"
                style="height: 100px"></textarea>
            @error('content')
                {{ $message }}
            @enderror
            <label for="floatingTextarea2">Comments</label>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Images</label>
            <input name="url_img" class="form-control" type="file" id="formFile">
            @error('url')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Video</label>
            <input name="url_video" class="form-control" type="file" id="formFile">
            @error('url')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Url</label>
            <input name="url" class="form-control" type="text" id="formFile">
            @error('url')
                {{ $message }}
            @enderror
        </div>
        <div class="text-end"><button type="submit" class="btn btn-success">Success</button></div>
    </form>

</x-blog>
