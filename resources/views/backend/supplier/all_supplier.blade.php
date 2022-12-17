@extends('admin_dashboard')
@section('admin')

 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
      <a href="{{ route('add.supplier') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Supplier </a>  
                                        </ol>
                                    </div>
                                    <h4 class="page-title">All Supplier</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                     
                    
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
    
        <tbody>
        	@foreach($supplier as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td> <img src="{{ asset($item->image) }}" style="width:50px; height: 40px;"> </td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->type }}</td>
                <td>
<a href="{{ route('edit.supplier',$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="{{ route('delete.supplier',$item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

<a href="{{ route('details.supplier',$item->id) }}" class="btn btn-info rounded-pill waves-effect waves-light" title="Details"><i class="fa fa-eye" aria-hidden="true"></i></a>

                </td>
            </tr>
            @endforeach
        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->


                      
                        
                    </div> <!-- container -->

                </div> <!-- content -->


@endsection 