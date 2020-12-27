@extends('admin.layouts.admin')


@section('content')

    <div class="container pt-5">

        <form action="{{route('settings.store')}}" method="post">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Site Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{$data->name ?? null}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mobile" value="{{$data->mobile ?? null}}"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="{{$data->email ?? null}}"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" value="{{$data->address ?? null}}"/>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="environment" id="gridRadios1"
                                   value="production"
                                {{$data->environment=="production" ? "checked" : null}}/>
                            <label class="form-check-label" for="gridRadios1">
                                Production
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="environment" id="gridRadios2"
                                   value="development" {{$data->environment=="development" ? "checked" : null}}/>
                            <label class="form-check-label" for="gridRadios2">
                                Development
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="environment" id="gridRadios3"
                                   value="shutdown" {{$data->environment=="shutdown" ? "checked" : null}}/>

                            <label class="form-check-label" for="gridRadios3">
                                Shut Down
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection

