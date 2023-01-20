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
      <a href="{{ url('backup/now')  }}" class="btn btn-primary rounded-pill waves-effect waves-light">Backup Now </a>  
                                        </ol>
                                    </div>
                                    <h4 class="page-title">All Backup</h4>
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
                                <th>File Name </th>
                                <th>Size </th>
                                <th>Path</th> 
                                <th>Action</th>
                            </tr>
                        </thead>
                    
    
        <tbody>
        	@foreach($files as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td> 
                <td>{{ $item->getFilename() }}</td>
                <td>{{ $item->getSize() }}</td>
                <td>{{ $item->getPath() }}</td> 
                <td>
                
<a href="{{ url($item->getFilename()) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Download </a> 
 
<a href="{{ url('delete/database/'.$item->getFilename()) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a>
 
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