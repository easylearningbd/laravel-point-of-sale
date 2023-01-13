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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Order Details </a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Order Details</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

<div class="row">
    

  <div class="col-lg-8 col-xl-12">
<div class="card">
    <div class="card-body">
                                    
                                      
                                         
                                           

    <!-- end timeline content-->

    <div class="tab-pane" id="settings">
        <form method="post" action="{{ route('customer.store') }}" enctype="multipart/form-data">
        	@csrf

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Order Details</h5>

            <div class="row">


    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Customer Image</label>
             <img id="showImage" src="{{ asset($order->customer->image ) }}" class="rounded-circle avatar-lg img-thumbnail"
                alt="profile-image">
           
        </div>
    </div>


              <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Customer Name</label>
             <p class="text-danger"> {{ $order->customer->name }} </p>
        </div>
    </div>



    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Customer Email</label>
             <p class="text-danger"> {{ $order->customer->email }} </p>
        </div>
    </div>


       <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Customer Phone</label>
             <p class="text-danger"> {{ $order->customer->phone }} </p>
        </div>
    </div>


  <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Order Date </label>
             <p class="text-danger"> {{ $order->order_date }} </p>
        </div>
    </div>

 <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Order Invoice </label>
             <p class="text-danger"> {{ $order->invoice_no }} </p>
        </div>
    </div>

    


   <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Payment Status </label>
             <p class="text-danger"> {{ $order->payment_status }} </p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Paid Amount </label>
             <p class="text-danger"> {{ $order->pay }} </p>
        </div>
    </div>
 

 <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Due Amount </label>
             <p class="text-danger"> {{ $order->due }} </p>
        </div>
    </div>
 
 


            </div> <!-- end row -->
 
        
            
            <div class="text-end">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Complete Order </button>
            </div>
        </form>
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