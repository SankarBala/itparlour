@extends('admin.layouts.admin')

@section('content')
    {{--    <script src="{{asset('js/ckeditor.js')}}"></script>--}}
    {{--    <script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>--}}
    {{--<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>--}}
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script src="{{asset('/js/multiselect.min.js')}}"></script>
    <link href="{{asset('css/multiselect.css')}}" rel="stylesheet"/>

    <form method="post" action="{{route('post.store')}}">
        <div class="row p-3">
            <div class="col-6"><h2 class="">Create new post</h2></div>
            <div class="col-6">
                {{--                <a id="visit_post" class="btn btn-primary float-right disabled" href="">Visit post</a>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Service name</span>
                    </div>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" aria-label="Small"
                           aria-describedby="inputGroup-sizing-sm" name="name"
                           value="{{ old('name') }}"/>
                </div>
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-2">
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Prices &dollar;</span>
                    </div>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" aria-label="Small"
                           aria-describedby="inputGroup-sizing-sm" name="price" value="{{ old('price') }}"/>
                </div>
                @error('price')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-2">
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Lowest Prices &dollar;</span>
                    </div>
                    <input type="number" class="form-control @error('lowest_price') is-invalid @enderror"
                           aria-label="Small"
                           aria-describedby="inputGroup-sizing-sm" name="lowest_price"
                           value="{{ old('lowest_price') }}"/>
                </div>
                @error('lowest_price')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-2">
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Highest Prices &dollar;</span>
                    </div>
                    <input type="number" class="form-control @error('highest_price') is-invalid @enderror"
                           aria-label="Small"
                           aria-describedby="inputGroup-sizing-sm" name="highest_price"
                           value="{{ old('highest_price') }}"/>
                </div>
                @error('highest_price')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <textarea name="contents" id="editor" hidden>{{ old('details') }}</textarea>
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
                <h4>Technology use</h4>
                <div class="select-wrapper m-0">
                    <span class="autocomplete-select"></span>
                    <input type="array" name="technology[]" value="" />
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

            // File manager script

            document.getElementById('featured_image').addEventListener('click', (event) => {
                event.preventDefault();
                window.open('/file-manager/fm-button', 'fm', 'width=1280,height=720');
            });

            // set file link
            function fmSetLink($url) {
                document.getElementsByName('image')[0].value = $url;
                document.getElementById('select_image_req').innerHTML = 'Change image';
                document.getElementById('select_image_req').classList.add("hover-text");
                document.getElementById('featured_image').style.backgroundImage = "url(" + $url + ")";
            }


            // Auto complete script

            const autocomplete = new SelectPure(".autocomplete-select", {
                options: [
                    {label: "Html", value: "html"},
                    {label: "JavaScript", value: "javascript"},
                    {label: "CSS", value: "css"},
                    {label: "SCSS", value: "scss"},
                    {label: "Bootstrap", value: "bs"},
                    {label: "Tailwind CSS", value: "twcss"},
                    {label: "React", value: "jsx"},
                    {label: "Angular", value: "ang"},
                    {label: "Vue", value: "vue"},
                    {label: "jQuery", value: "jquery"},
                    {label: "PHP", value: "php"},
                    {label: "Wordpress", value: "wordpress"},
                    {label: "Laravel", value: "laravel"},
                    {label: "Code Igniter", value: "cod_igniter"},
                    {label: "Node.js", value: "node"},
                    {label: "Express", value: "express"},
                    {label: "Nuxt", value: "nuxt"},
                    {label: "Others", value: "others"},
                ],
                value: ["html", "css", "javascript"],
                multiple: true,
                autocomplete: true,
                icon: "fa fa-times",
                onChange: value => {
                    console.log(value);
                },

            });

        </script>
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

