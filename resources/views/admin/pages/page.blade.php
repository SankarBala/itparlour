@extends('admin.layouts.admin')

@section('content')
    {{--    <script src="{{asset('js/ckeditor.js')}}"></script>--}}
    <script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
    {{--<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>--}}

    <form method="post" action="{{route('page.store')}}">
        <div class="row p-3">
            <div class="col-6"><h2 class="">Create new page</h2></div>
            <div class="col-6">
{{--                <a id="visit_page" class="btn btn-primary float-right disabled" href="">Visit page</a>--}}
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
                           value="{{ old('name') }}"/>
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
                <h3>Select page status</h3>
                <p class="is-invalid text-danger"> @error('status') {{$message}}    @enderror</p>
                <div class="radio">
                    <label>
                        <input type="radio" name="status"
                               value="draft" {{ old('status') == 'draft' ? 'checked' : null }}>
                        Draft
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status"
                               value="published" {{ old('status') == 'published' ? 'checked' :null }}>
                        Publish
                    </label>
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-6">
                {{--                <input id="draft_page" class="btn btn-dark" type="button" value="Save as draft">--}}
            </div>
            <div class="col-6"><input id="save_page" class="btn btn-success float-right" type="submit" value="Save">
            </div>
        </div>
    </form>


    <script>
        CKEDITOR.replace('editor', {
            filebrowserImageBrowseUrl: '/file-manager/ckeditor',
            filebrowserBrowseUrl: '/file-manager/ckeditor',
            filebrowserUploadUrl: '/file-manager/upload'
        });

        // const visit_page = document.getElementById('visit_page');
        // const draft_page = document.getElementById('draft_page');
        // const save_page = document.getElementById('save_page');
        // const page_url_link = document.getElementById('page_url_link');

        {{--draft_page.addEventListener('click', function () {--}}
        {{--    axios.post('{{route("page.store")}}', {--}}
        {{--        pageName: 'Fred',--}}
        {{--        pageTitle: 'Flintstone',--}}
        {{--        pageContent: 'Flintstone',--}}
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


@endsection

