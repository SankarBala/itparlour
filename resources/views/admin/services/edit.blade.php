@extends('admin.layouts.admin')

@section('content')
    {{--    <script src="{{asset('js/ckeditor.js')}}"></script>--}}
    <script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
    {{--<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>--}}
    <script src="{{asset('/js/multiselect.min.js')}}"></script>
    <link href="{{asset('css/multiselect.css')}}" rel="stylesheet"/>
    <form method="post" action="">
        <div class="row p-3">
            <div class="col-6"><h2 class="">Create new page</h2></div>
            <div class="col-6"><a target="_blank" id="visit_page" class="btn btn-primary float-right"
                                  href="{{route('service.show', $data->id)}}">View service</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-sm mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Service name</span>
                    </div>
                    <input type="text" class="form-control aria-label="
                           aria-describedby="inputGroup-sizing-sm" name="name"
                           value="{{ $data->name }}"/>
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
                           aria-describedby="inputGroup-sizing-sm" name="price" value="{{ $data->price }}"/>
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
                           value="{{ $data->lowest_price }}"/>
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
                           value="{{ $data->highest_price }}"/>
                </div>
                @error('highest_price')
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
                <h4>Technology use</h4>
                <div class="select-wrapper m-0">
                    <span class="autocomplete-select"></span>
                    <div id="technology_list" class="">
                        @foreach (explode(',', $data->technology_used) as $technology)
                            <input name="technology[]" value="{{$technology}}" hidden/>
                        @endforeach
                    </div>
                </div>
                <br/>
                <h4>Featured image</h4>
                <div id="featured_image" class="card  bg-info mb-3 featured_image d-flex justify-content-center">
                    <h5 id="select_image_req"
                        class="text-center text-white {{$data->featured_image==""? "": "hover-text"}}">
                        {{$data->featured_image==""? "Select image": "Change image"}}
                    </h5>
                    <input type="text" accept="image/*" name="image" value="{{$data->featured_image}}" hidden/>
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

    @push('scripts')
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
                const price = document.getElementsByName('price')[0].value;
                const lowest_price = document.getElementsByName('lowest_price')[0].value;
                const highest_price = document.getElementsByName('highest_price')[0].value;
                const contents = CKEDITOR.instances.editor.getData();
                const status = document.getElementsByName('status');
                const image = document.getElementsByName('image')[0].value;

                const technology = document.getElementsByName('technology[]');
                let technology_list = [];
                technology.forEach(function (value, i) {
                    technology_list.push(technology[i].value);
                });

                let status_value;
                for (let i = 0; i < status.length; i++) {
                    if (status[i].checked) {
                        status_value = status[i].value;
                    }
                }
                axios.put('{{route("service.update", $data->id)}}', {
                    name: name,
                    price: price,
                    lowest_price: lowest_price,
                    highest_price: highest_price,
                    contents: contents,
                    status: status_value,
                    image: image,
                    technology: technology_list,
                }).then(function (response) {
                    if (response.data.data === 'Updated') {
                        update_page.value = response.data.data;
                        update_page.classList.remove('btn-success');
                        update_page.classList.add('btn-warning');
                        setTimeout(() => {
                            update_page.value = 'Update';
                            update_page.classList.remove('btn-warning');
                            update_page.classList.add('btn-success');
                        }, 2000);
                    }
                }).catch(function (error) {
                    console.log(error);
                });
            });

            // Auto complete script

            const autocomplete = new SelectPure(".autocomplete-select", {
                options: [
                    {label: "Html", value: "html"},
                    {label: "JavaScript", value: "javascript"},
                    {label: "CSS", value: "css"},
                    {label: "SCSS", value: "scss"},
                    {label: "Bootstrap", value: "bootstrap"},
                    {label: "Tailwind CSS", value: "tailwindcss"},
                    {label: "React", value: "jsx"},
                    {label: "Angular", value: "angular"},
                    {label: "Vue", value: "vue"},
                    {label: "jQuery", value: "jquery"},
                    {label: "PHP", value: "php"},
                    {label: "Wordpress", value: "wordpress"},
                    {label: "Laravel", value: "laravel"},
                    {label: "Code Igniter", value: "code_igniter"},
                    {label: "Node.js", value: "node"},
                    {label: "Express", value: "express"},
                    {label: "Nuxt", value: "nuxt"},
                    {label: "Others", value: "others"},
                ],
                value: [@foreach (explode(',', $data->technology_used) as $technology)"{{$technology}}", @endforeach],
                multiple: true,
                autocomplete: true,
                icon: "fa fa-times mt-1",
                onChange: value => {
                    const input_wrapper = document.getElementById("technology_list");
                    input_wrapper.innerHTML = '';
                    for (let i = 0; i < value.length; i++) {
                        const input = document.createElement("input");
                        input.name = "technology[]";
                        input.value = value[i];
                        input.hidden = true;
                        input_wrapper.appendChild(input);
                    }
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
                background-image: url("{{$data->featured_image}}");
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

