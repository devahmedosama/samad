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
                    {{ Form::open(['url'=>'admin/pages/add','enctyp'=>'multipart']) }}

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" required value="" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Sub title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="sub_title"  value="" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Sub title 2</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="sub_title2"  value="" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <textarea name="text"  rows="6"  class="form-control"></textarea>
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