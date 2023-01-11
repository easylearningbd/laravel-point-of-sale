@extends('admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">POS</a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">POS</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

<div class="row">
    <div class="col-lg-6 col-xl-6">
        <div class="card text-center">
            <div class="card-body"> 
                                   
 
            </div>                                 
        </div> <!-- end card -->

                                

                            </div> <!-- end col-->

                            <div class="col-lg-6 col-xl-6">
                                <div class="card">
                                    <div class="card-body"> 
                                           

    <!-- end timeline content-->

    <div class="tab-pane" id="settings">


           <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Image</th>
                                <th>Name</th> 
                                 <th> </th> 
                            </tr>
                        </thead>
                    
    
        <tbody>
            @foreach($product as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td> <img src="{{ asset($item->product_image) }}" style="width:50px; height: 40px;"> </td>
                <td>{{ $item->product_name }}</td>
                <td><button type="submit" style="font-size: 20px; color: #000;" > <i class="fas fa-plus-square"></i> </button> </td> 
            </tr>
            @endforeach
        </tbody>
                    </table>


    
    </div>
    <!-- end settings content-->
    
                                       
                                    </div>
                                </div> <!-- end card-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->


 






@endsection