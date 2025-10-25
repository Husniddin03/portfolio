<x-blog title="All blogs">
    <div class="text-end"><a href="{{ route('blog.create') }}" class="btn btn-success mb-3">Create new post</a></div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Add</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th class="position-relative" scope="row" width='10'><span
                            class="position-absolute top-50 start-0 translate-middle-y">{{ $post->id }}</span></th>
                    <td class="position-relative">
                        <a class="position-absolute top-50 start-0 translate-middle-y"
                            href="{{ route('blog.show', $post->id) }}" style="color: black !important"
                            class="link-secondary link-underline-opacity-0 link-underline-opacity-75-hover link-offset-2 link-offset-3-hover">
                            {{ $post->title }}
                        </a>
                    </td>
                    <td class="position-relative" width="24">
                        <a class="position-absolute top-50 start-50 translate-middle"
                            href="{{ route('blog.add', $post->id) }}">
                            <i class="bi bi-plus-circle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                            </svg>
                        </a>
                    </td>
                    <td width="24">
                        <form action="{{ route('blog.destroy', $post->id) }}" method="POST"
                            onsubmit="return confirm('Rostdan ham o‘chirmoqchimisiz?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn d-block">
                                <i class="bi bi-x-circle"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-blog>
