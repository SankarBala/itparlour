@extends('admin.layouts.admin')

@section('content')
    {{--    <script src="{{asset('js/ckeditor.js')}}"></script>--}}
    <script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
    {{--<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>--}}

    <form method="post" action="{{route('post.store')}}">
        <div class="row p-3">
            <div class="col-6"><h2 class="">Create new post</h2></div>
            <div class="col-6">
                {{--                <a id="visit_post" class="btn btn-primary float-right disabled" href="">Visit post</a>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">post name</span>
                    </div>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" aria-label="Small"
                           aria-describedby="inputGroup-sizing-sm" name="name"
                           value="{{ old('name') }}"/>
                </div>
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-7">
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">post Title</span>
                    </div>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" aria-label="Small"
                           aria-describedby="inputGroup-sizing-sm" name="title" value="{{ old('title') }}"/>
                </div>
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <textarea name="contents" id="editor" hidden>{{ old('contents') }}</textarea>
            </div>
            <div class="col-md-3">
                <h4>Select post status</h4>
                <p class="is-invalid text-danger"> @error('status') {{$message}}    @enderror</p>
                <div class="radio">
                    <label>
                        <input type="radio" name="status"
                               value="draft" {{ old('status') == 'draft' ? 'checked' : null }}>
                        Draft
                    </label>
                    <label>
                        <input type="radio" name="status"
                               value="published" {{ old('status') == 'published' ? 'checked' :null }}>
                        Publish
                    </label>
                </div>
                <h4>Featured image</h4>
                <div id="featured_image" class="card  bg-info mb-3 featured_image d-flex justify-content-center">
                    <h5 id="select_image_req" class="text-center text-white">
                        Select image
                    </h5>
                    <input type="text" accept="image/*" name="image" value="" hidden/>
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-6">
                {{--                <input id="draft_post" class="btn btn-dark" type="button" value="Save as draft">--}}
            </div>
            <div class="col-6"><input id="save_post" class="btn btn-success float-right" type="submit" value="Save">
            </div>
        </div>
    </form>

    @push('scripts')
        <script>
            CKEDITOR.replace('editor', {
                filebrowserImageBrowseUrl: '/file-manager/ckeditor',
                filebrowserBrowseUrl: '/file-manager/ckeditor',
                filebrowserUploadUrl: '/file-manager/upload'
            });

            // const featured_image = document.getElementsByClassName('featured_image')[0];
            // const fileInput = document.getElementsByName('featured_image')[0];
            // featured_image.addEventListener('click', () => {
            //     // featured_image.style.color = 'red';
            //     document.getElementsByName('featured_image')[0].click();
            //     // alert(featured_image[0]);
            // });
            //
            // fileInput.onchange = () => {
            //     const selectedFiles = [...fileInput.files];
            //     console.log(selectedFiles);
            // }
            //


            // document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('featured_image').addEventListener('click', (event) => {
                event.preventDefault();
                window.open('/file-manager/fm-button', 'fm', 'width=1280,height=720');
            });
            // });

            // set file link
            function fmSetLink($url) {
                document.getElementsByName('image')[0].value = $url;
                document.getElementById('select_image_req').innerHTML = 'Change image';
                document.getElementById('select_image_req').classList.add("hover-text");
                document.getElementById('featured_image').style.backgroundImage = "url(" + $url + ")";
            }


            // const visit_post = document.getElementById('visit_post');
            // const draft_post = document.getElementById('draft_post');
            // const save_post = document.getElementById('save_post');
            // const post_url_link = document.getElementById('post_url_link');

            {{--draft_post.addEventListener('click', function () {--}}
            {{--    axios.post('{{route("post.store")}}', {--}}
            {{--        postName: 'Fred',--}}
            {{--        postTitle: 'Flintstone',--}}
            {{--        postContent: 'Flintstone',--}}
            {{--    })--}}
            {{--        .then(function (response) {--}}
            {{--            console.log(response);--}}
            {{--        })--}}
            {{--        .catch(function (error) {--}}
            {{--            console.log(error);--}}
            {{--        });--}}
            {{--});--}}

        </script>

        {{--<script>--}}
        {{--    ClassicEditor--}}
        {{--        .create( document.querySelector( '#editor' ) )--}}
        {{--        .then( editor => {--}}
        {{--            console.log( editor );--}}
        {{--        } )--}}
        {{--        .catch( error => {--}}
        {{--            console.error( error );--}}
        {{--        } );--}}
        {{--</script>--}}
    @endpush
    @push('styles')
        <style>
            .featured_image {
                width: 100%;
                height: 300px;
                cursor: pointer;
                background-size: cover;
                background-position: center;
            }

            .hover-text {
                visibility: hidden;
            }

            .featured_image:hover .hover-text {
                visibility: visible;
            }
        </style>
    @endpush
@endsection

