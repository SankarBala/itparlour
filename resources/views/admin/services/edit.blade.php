@extends('admin.layouts.admin')

@section('content')
    {{--    <script src="{{asset('js/ckeditor.js')}}"></script>--}}
    <script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
    {{--<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>--}}
    <form method="post" action="">
        <div class="row p-3">
            <div class="col-6"><h2 class="">Create new page</h2></div>
            <div class="col-6"><a target="_blank" id="visit_page" class="btn btn-primary float-right" href="{{route('post.show', $data->id)}}">View page</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Page name</span>
                    </div>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" aria-label="Small"
                           aria-describedby="inputGroup-sizing-sm" name="name"
                           value="{{$data->name}}"/>
                </div>

                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-7">
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Page Title</span>
                    </div>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" aria-label="Small"
                           aria-describedby="inputGroup-sizing-sm" name="title" value=" {{$data->title}}"/>
                </div>
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <textarea name="contents" id="editor" hidden> {{$data->contents}}</textarea>
            </div>
            <div class="col-md-3">
                <h3>Select page status</h3>
                <p class="is-invalid text-danger"> @error('status') {{$message}}    @enderror</p>
                <div class="radio">
                    <label>
                        <input type="radio" name="status"
                               value="draft" {{ $data->status == 'draft' ? 'checked' : null }}>
                        Draft
                    </label>
                    <label>
                        <input type="radio" name="status"
                               value="published" {{ $data->status == 'published' ? 'checked' :null }}>
                        Publish
                    </label>
                </div>
                <h4>Featured image</h4>
                <div id="featured_image" class="card  bg-info mb-3 featured_image d-flex justify-content-center">
                    <h5 id="select_image_req" class="text-center text-white {{$data->image==""? "": "hover-text"}}">
                        {{$data->image==""? "Select image": "Change image"}}
                    </h5>
                    <input type="text" accept="image/*" name="image" value="{{$data->image}}" hidden/>
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-6">
                {{--                <input id="draft_page" class="btn btn-dark" type="button" value="Save as draft">--}}
            </div>
            <div class="col-6"><input id="update_page" class="btn btn-success float-right" type="button" value="Update">
            </div>
        </div>
    </form>


    <script>
        CKEDITOR.replace('editor', {
            filebrowserImageBrowseUrl: '/file-manager/ckeditor',
            filebrowserBrowseUrl: '/file-manager/ckeditor',
            filebrowserUploadUrl: '/file-manager/upload'
        });

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


        const update_page = document.getElementById('update_page');

        update_page.addEventListener('click', function () {

            const name = document.getElementsByName('name')[0].value;
            const title = document.getElementsByName('title')[0].value;
            const contents = CKEDITOR.instances.editor.getData();
            const status = document.getElementsByName('status');
            const image = document.getElementsByName('image')[0].value;
            let status_value;
            for (let i = 0; i < status.length; i++) {
                if (status[i].checked) {
                    status_value = status[i].value;
                }
            }
            axios.put('{{route("post.update", $data->id)}}', {
                name: name,
                title: title,
                contents: contents,
                status: status_value,
                image: image,
            }).then(function (response) {
                console.log(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        });

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
    @push('styles')
        <style>
            .featured_image {
                width: 100%;
                height: 300px;
                cursor: pointer;
                background-image: url("{{$data->image}}");
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

