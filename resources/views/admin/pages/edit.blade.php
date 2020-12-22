@extends('admin.layouts.admin')

@section('content')
    {{--    <script src="{{asset('js/ckeditor.js')}}"></script>--}}
    <script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
    {{--<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>--}}
    <form method="post" action="">
        <div class="row p-3">
            <div class="col-6"><h2 class="">Create new page</h2></div>
            <div class="col-6"><a id="visit_page" class="btn btn-primary float-right" href="">Visit page</a>
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
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status"
                               value="published" {{ $data->status == 'published' ? 'checked' :null }}>
                        Publish
                    </label>
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


        const update_page = document.getElementById('update_page');

        update_page.addEventListener('click', function () {

            const name = document.getElementsByName('name')[0].value;
            const title = document.getElementsByName('title')[0].value;
            const contents = CKEDITOR.instances.editor.getData();
            const status = document.getElementsByName('status');
            let status_value;
            for (let i = 0; i < status.length; i++) {
                if (status[i].checked) {
                    status_value = status[i].value;
                }
            }
            axios.put('{{route("page.update", $data->id)}}', {
                name: name,
                title: title,
                contents: contents,
                status: status_value,
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


@endsection

