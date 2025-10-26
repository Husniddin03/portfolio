<x-user>

    <div class="cover-v1 jarallax overlay" style="background-image: url('{{ asset('images/work_1_full.jpg') }}');">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-8 mx-auto text-center">
                    <h1 class="blog-heading" data-aos="fade-up" data-aos-delay="0">{{ $post->title }}
                    </h1>
                    <div class="post-meta" data-aos="fade-up" data-aos-delay="100">
                        {{ $post->created_at->diffForHumans() }}
                        &bullet; {{ $post->views }} marta o'qilgan</div>
                </div>

            </div>
        </div>


        <!-- dov -->
        <a href="#blog-single-section" class="mouse-wrap smoothscroll">
            <span class="mouse">
                <span class="scroll"></span>
            </span>
            <span class="mouse-label">Scroll</span>
        </a>

    </div>
    <!-- END .cover-v1 -->

    <div class="unslate_co--section" id="blog-single-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h3 class="mb-4">{{ $post->title }}</h3>
                    @foreach ($post->contents as $content)
                        <p id="editor">{!! $content->content !!}</p>
                        @foreach ($content->mediaFiles as $media)
                            @if ($media->type == 'image')
                                <p>
                                    <img src="{{ asset('storage/' . $media->url) }}" alt="Image" class="img-fluid">
                                </p>
                            @elseif($media->type == 'url')
                                @php
                                    $segments = explode('/', $media->url);
                                    $lastSegment = end($segments);
                                    $videoId = explode('?', $lastSegment)[0];
                                @endphp
                                <a href="{{ $media->url }}">
                                    <p>To'liq tomosho qiling</p>
                                    <img class="img-fluid"
                                        src="https://img.youtube.com/vi/{{ $videoId }}/maxresdefault.jpg"
                                        alt="Video Thumbnail" />
                                </a>
                            @endif
                        @endforeach
                    @endforeach
                    <div style="text-align: end" class="pt-5 categories_tags ">
                        <p>{{ $post->created_at->diffForHumans() }}
                            &bullet; {{ $post->views }} marta o'qilgan</p>
                    </div>
                    <div class="post-single-navigation d-flex align-items-stretch">
                        <a href="{{ route('myblog', $otherPosts[1]->id) }}" class="mr-auto w-50 pr-4">
                            <span class="d-block">Oldingi post</span>
                            {{ $otherPosts[1]->title }}
                        </a>
                        <a href="{{ route('myblog', $otherPosts[0]->id) }}" class="ml-auto w-50 text-right pl-4">
                            <span class="d-block">Keyingi post</span>
                            {{ $otherPosts[0]->title }}
                        </a>
                    </div>


                    <div class="pt-5">
                        <h3 class="mb-5">{{ $post->comments->count() }} Izohlar</h3>
                        <ul class="comment-list">
                            @foreach ($post->comments->reverse() as $comment)
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="{{ asset('images/person_woman_2.jpg') }}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>{{ $comment->user->name }}</h3>
                                        <div class="meta">{{ $comment->created_at->diffForHumans() }}</div>
                                        <p>{{ $comment->message }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Izoh qoldiring</h3>
                            <form action="{{ route('addComment', $post->id) }}" method="post" class="">
                                @csrf

                                <div class="form-group">
                                    <label for="message">Izoh</label>
                                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" value="Post Comment" class="btn btn-primary btn-md">Izohni
                                        yuborish</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

</x-user>



<style>
    pre {
        position: relative;
        background: #1e1e1e;
        color: #fff;
        border-radius: 10px;
        overflow-x: auto;
        margin-bottom: 20px;
    }

    /* Copy tugmasi */
    .copy-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: #0c0f13;
        color: white;
        border: none;
        padding: 3px 5px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 13px;
        opacity: 0.8;
        transition: 0.2s;
    }

    .copy-btn:hover {
        opacity: 1;
        background: #2c343d;
    }
</style>

<script>
    // Har bir code block uchun copy tugmasi qo‘shamiz
    document.querySelectorAll('pre code').forEach(block => {
        const button = document.createElement('button');
        button.className = 'copy-btn';
        button.textContent = 'Copy';
        block.parentNode.appendChild(button);

        button.addEventListener('click', async () => {
            const text = block.innerText;
            try {
                await navigator.clipboard.writeText(text);
                button.textContent = 'Copied!';
                setTimeout(() => button.textContent = 'Copy', 1500);
            } catch (err) {
                console.error('Nusxalashda xatolik:', err);
            }
        });
    });
</script>
