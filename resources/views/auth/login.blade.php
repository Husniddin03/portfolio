<x-user>
    <div class="unslate_co--section" id="blog-single-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="pt-5">
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Kirish</h3>
                            <form action="{{ route('checklogin') }}" method="post" class="">
                                @csrf
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
                                    <div style="margin-left: 10px"><a href="{{ route('register') }}">Ro'yxatdan o'tish</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user>
