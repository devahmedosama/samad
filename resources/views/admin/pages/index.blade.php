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
                            <li class="breadcrumb-item active">Pages</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Pages</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        
        
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h5 class="header-title">Home Parts </h5>
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allData  as $data )
                                        <tr class="">
                                            <th scope="row">{{ $data->id }}</th>
                                            <td class="">{{ $data->name }}</td>
                                            <td class="">
                                                <a href="{{ URL::to('admin/pages/edit/'.$data->id) }}" 
								                   class="btn btn-primary btn-xs"> Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                    
                                    <tr class="">
                                        <td colspan="4">{{ $allData->links() }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            
        </div><!--end row-->                

    </div><!-- container -->

</div> <!-- Page content Wrapper -->
@stop