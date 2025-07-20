@extends('admin.content.layout')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="{{ URL::to('admin') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ URL::to('admin/pages') }}">Pages</a></li>
                            <li class="breadcrumb-item active">{{ $title }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ $title }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        
        
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card m-b-30">
                    <div class="card-body">
                    {{ Form::open(['url'=>'admin/settings','enctype'=>'multipart','files'=>true]) }}

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" required value="{{ $data->name }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">X - link</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="url" name="x" required value="{{ $data->x }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">facebook - link</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="url" name="facebook" required value="{{ $data->facebook }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">tiktok - link</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="url" name="tiktok" required value="{{ $data->tiktok }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">instagram - link</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="url" name="instagram" required value="{{ $data->instagram }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Keywords</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="keywords"  value="{{ $data->keywords }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Logo</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="file" name="logo"  value="" id="example-text-input">
                            </div>
                            <div class="col-sm-3">
                                <img src="{{ URL::to($data->logo) }}" width="150" alt="" class="img-thumbnail" style="background: #000" srcset="">
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Fav icon</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="file" name="fav"  value="" id="example-text-input">
                            </div>
                            <div class="col-sm-3">
                                <img height="150" src="{{ URL::to($data->fav) }}" alt=""  style="background: #000" width="150" class="img-thumbnail" srcset="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Share image</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="file" name="share"  value="" id="example-text-input">
                            </div>
                            <div class="col-sm-3">
                                <img height="150" src="{{ URL::to($data->share) }}"  style="background: #000" alt="" class="img-thumbnail" srcset="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                {{ Form::textarea('text',$data->text,['class'=>'form-control','rows'=>6])  }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                               <button type="submit" class="btn btn-md btn-primary" >Save</button>
                            </div>
                        </div>
                    {{ Form::token()  }}
                    {{ Form::close()  }}
                    </div>
                    
                </div>
            </div>

            
        </div><!--end row-->                

    </div><!-- container -->

</div> <!-- Page content Wrapper -->
@stop