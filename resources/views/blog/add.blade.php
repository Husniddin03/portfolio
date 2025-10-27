<x-blog title="Blog create">

    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <input readonly value="{{ $post->title }}" name="title" type="text" class="form-control" id="floatingInput"
                placeholder="Enter post title!">
            @error('title')
                {{ $message }}
            @enderror
            <label for="floatingInput">Post title</label>
        </div>

        <div class="form-floating mb-4">
            <textarea name="content" class="form-control" placeholder="Enter the post content" id="editor" style="height: 300px">{{ old('content') }}</textarea>
            @error('content')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
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

    {{-- ✅ TinyMCE bilan kod highlight va API key --}}
    <script src="https://cdn.tiny.cloud/1/{{ config('services.tinymce.api_key') }}/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#editor',
            height: 500,
            plugins: 'codesample code advlist autolink lists link image charmap preview anchor searchreplace visualblocks fullscreen insertdatetime media table help wordcount',
            toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link image media | codesample code preview',
            menubar: false,
            branding: false,
            content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
            codesample_languages: [{
                    text: 'HTML/XML',
                    value: 'markup'
                },
                {
                    text: 'JavaScript',
                    value: 'javascript'
                },
                {
                    text: 'CSS',
                    value: 'css'
                },
                {
                    text: 'PHP',
                    value: 'php'
                },
                {
                    text: 'Python',
                    value: 'python'
                },
                {
                    text: 'C',
                    value: 'c'
                },
                {
                    text: 'C++',
                    value: 'cpp'
                }
            ]
        });
    </script>

    {{-- ✅ Highlight.js (rangli kod uchun) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>
</x-blog>
