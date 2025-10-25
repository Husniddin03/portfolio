<x-user>
    <div class="unslate_co--section" id="blog-single-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="pt-5">

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Ro'yxatdan o'tish</h3>
                            <form action="{{ route('writeRegister') }}" method="post" class="">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input name="name" type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input name="email" type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Password</label>
                                    <input name="password" type="password" class="form-control" id="website">
                                </div>
                                <div class="form-group" style="display: flex; align-items: center">
                                    <input type="submit" value="Yuborish" class="btn btn-primary btn-md">
                                    <div style="margin-left: 10px"><a href="{{ route('login') }}">Kirish</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user>
