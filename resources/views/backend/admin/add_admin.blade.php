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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Add Admin</a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Admin</h4>
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
        <form id="myForm" method="post" action="{{ route('admin.store') }}" enctype="multipart/form-data">
        	@csrf

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Add Admin</h5>

            <div class="row">


    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label"> Name</label>
            <input type="text" name="name" class="form-control"   >
           
        </div>
    </div>

      <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label"> Email</label>
            <input type="email" name="email" class="form-control"   >
           
        </div>
    </div>


      <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label"> Phone</label>
            <input type="text" name="phone" class="form-control"   >
           
        </div>
    </div>


      <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label"> Password </label>
            <input type="password" name="password" class="form-control"   >
           
        </div>
    </div>
 
         
      


      <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Asign Roles </label>
            <select name="roles" class="form-select" id="example-select">
                    <option selected disabled >Select Roles </option>
                    @foreach($roles as $role)
        <option value="{{ $role->id }}">{{ $role->name }}</option>
                     @endforeach
                </select>
           
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


<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                }, 
                email: {
                    required : true,
                }, 
                phone: {
                    required : true,
                }, 
                photo: {
                    required : true,
                }, 
                password: {
                    required : true,
                }, 
                roles: {
                    required : true,
                }, 
            },
            messages :{
                name: {
                    required : 'Please Enter User Name',
                }, 
                email: {
                    required : 'Please Enter User Email',
                },
                phone: {
                    required : 'Please Enter User Phone',
                }, 
                password: {
                    required : 'Please Enter User Password',
                },
                photo: {
                    required : 'Please Select User Photo',
                },
                roles: {
                    required : 'Please Select User Role',
                }, 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>


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