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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Customer</a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Customer</h4>
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
        <form method="post" action="{{ route('customer.update') }}" enctype="multipart/form-data">
        	@csrf

            <input type="hidden" name="id" value="{{ $customer->id }}">

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Edit Customer</h5>

            <div class="row">


    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Customer Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $customer->name }}"  >
             @error('name')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>


              <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Customer Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"   value="{{ $customer->email }}"  >
             @error('email')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>




              <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Customer Phone    </label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"  value="{{ $customer->phone }}"   >
             @error('phone')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>


      <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Customer Address    </label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"  value="{{ $customer->address }}"   >
             @error('address')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>



      <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Customer Shope Name    </label>
            <input type="text" name="shopname" class="form-control @error('shopname') is-invalid @enderror"  value="{{ $customer->shopname }}"   >
             @error('shopname')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>



    


 <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Account Holder    </label>
            <input type="text" name="account_holder" class="form-control @error('account_holder') is-invalid @enderror"  value="{{ $customer->account_holder }}"   >
             @error('account_holder')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>

     <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Account Number    </label>
            <input type="text" name="account_number" class="form-control @error('account_number') is-invalid @enderror"  value="{{ $customer->account_number }}"   >
             @error('account_number')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>

      <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Bank Name    </label>
            <input type="text" name="bank_name" class="form-control @error('bank_name') is-invalid @enderror"  value="{{ $customer->bank_name }}"   >
             @error('bank_name')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>


      <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Bank Branch    </label>
            <input type="text" name="bank_branch" class="form-control @error('bank_branch') is-invalid @enderror" value="{{ $customer->bank_branch }}"    >
             @error('bank_branch')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>


     <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Customer City    </label>
            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ $customer->city }}"    >
             @error('city')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>




   <div class="col-md-12">
<div class="mb-3">
        <label for="example-fileinput" class="form-label">Customer Image</label>
        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
          @error('image')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
    </div>
 </div> <!-- end col -->


   <div class="col-md-12">
<div class="mb-3">
        <label for="example-fileinput" class="form-label"> </label>
        <img id="showImage" src="{{ asset($customer->image) }}" class="rounded-circle avatar-lg img-thumbnail"
                alt="profile-image">
    </div>
 </div> <!-- end col -->



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



<script type="text/javascript">
	
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload =  function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});

</script>







@endsection