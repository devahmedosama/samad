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
                            <li class="breadcrumb-item"><a href="{{ URL::to('admin/projects') }}">projects</a></li>
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
                    {{ Form::open(['url'=>'admin/projects/edit/'.$data->id,'enctyp'=>'multipart']) }}

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" required value="{{ $data->name }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Sub title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="sub_title"  value="{{ $data->sub_title }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Sub title2</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="sub_title2"  value="{{ $data->sub_title2 }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Link</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="link"  value="{{ $data->link }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="file" name="image"  value="" id="example-text-input">
                            </div>
                            <div class="col-sm-3">
                                <img width="150" src="{{ URL::to($data->image) }}" alt="" class="img-thumbnail" srcset="">
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Header background</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="file" name="image2"  value="" id="example-text-input">
                            </div>
                            <div class="col-sm-3">
                                <img height="150" src="{{ URL::to($data->image2) }}" alt="" class="img-thumbnail" srcset="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Video </label>
                            <div class="col-sm-7">
                                <input class="form-control" type="file" name="video"  value="" id="example-text-input">
                            </div>
                            <div class="col-sm-3">
                                <video width="150" controls>
                                    <source src="{{ URL::to($data->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                {{ Form::textarea('text',$data->text,['class'=>'form-control','rows'=>6])  }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-12">
                                 {{ Form::textarea('text2',$data->text2,['class'=>'form-control','rows'=>6])  }}
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
                    <div class="col-md-12">
                        @include('admin.projects.items')
                    </div>
                </div>
            </div>

            
        </div><!--end row-->                

    </div><!-- container -->

</div> <!-- Page content Wrapper -->
@stop