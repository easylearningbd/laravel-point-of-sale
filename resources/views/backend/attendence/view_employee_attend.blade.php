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
      <a href="{{ route('add.employee.attend') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Employee Attendance  </a>  
                                        </ol>
                                    </div>
                                    <h4 class="page-title">All Employee Attendance</h4>
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
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
    
        <tbody>
        	@foreach($allData as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td> 
                <td>{{ date('Y-m-d', strtotime($item->date))  }}</td>
                <td>
<a href=" " class="btn btn-blue rounded-pill waves-effect waves-light">Edit</a>
<a href=" " class="btn btn-danger rounded-pill waves-effect waves-light" >View</a>

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