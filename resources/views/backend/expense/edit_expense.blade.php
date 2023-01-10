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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Expense </a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Expense </h4>
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
        <form method="post" action="{{ route('expense.update') }}" enctype="multipart/form-data">
        	@csrf

            <input type="hidden" name="id" value="{{ $expense->id }}">

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Add Expense </h5>

            <div class="row">


    <div class="col-md-12">
        <div class="mb-3">
            <label for="firstname" class="form-label">Expense Details</label>
           <textarea name="details" class="form-control" id="example-textarea" rows="3">
            {{ $expense->details }}
           </textarea>
        </div>
    </div>


    <div class="col-md-12">
        <div class="mb-3">
            <label for="firstname" class="form-label">Amount </label>
            <input type="text" name="amount" class="form-control" value="{{ $expense->amount }}"   > 
        </div>
    </div>
 
  <div class="col-md-12">
        <div class="mb-3">
             
            <input type="hidden" name="date" class="form-control" value="{{ date('d-m-Y') }}"   > 
        </div>
    </div>

     <div class="col-md-12">
        <div class="mb-3">
           
            <input type="hidden" name="month" class="form-control" value="{{ date('F') }}" > 
        </div>
    </div>

     <div class="col-md-12">
        <div class="mb-3">
            
            <input type="hidden" name="year" class="form-control" value="{{ date('Y') }}"   > 
        </div>
    </div>
       


            </div> <!-- end row -->
 
        
            
            <div class="text-end">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
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