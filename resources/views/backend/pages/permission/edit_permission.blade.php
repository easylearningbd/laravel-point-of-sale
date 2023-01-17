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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Permission</a></li>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Permission</h4>
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
        <form id="myForm" method="post" action="{{ route('permission.update') }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{ $permission->id }}">

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Edit Permission</h5>

            <div class="row">


    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Permission Name</label>
            <input type="text" name="name" class="form-control" value="{{ $permission->name }}"  >
           
        </div>
    </div>


              <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">Group Name </label>
            <select name="group_name" class="form-select" id="example-select">
                    <option selected disabled >Select Group  </option>
                   
        <option value="pos" {{ $permission->group_name == 'pos' ? 'selected' : '' }}> Pos</option>
        <option value="employee" {{ $permission->group_name == 'employee' ? 'selected' : '' }}> Employee</option>
        <option value="customer" {{ $permission->group_name == 'customer' ? 'selected' : '' }}> Customer</option>
        <option value="supplier" {{ $permission->group_name == 'supplier' ? 'selected' : '' }}> Supplier</option>
        <option value="salary" {{ $permission->group_name == 'salary' ? 'selected' : '' }}> Salary </option>
        <option value="attendence" {{ $permission->group_name == 'attendence' ? 'selected' : '' }}> Attendence </option>
        <option value="category" {{ $permission->group_name == 'category' ? 'selected' : '' }}> Category </option>
        <option value="product" {{ $permission->group_name == 'product' ? 'selected' : '' }}> Product </option>
        <option value="expense" {{ $permission->group_name == 'expense' ? 'selected' : '' }}> Expense </option>
        <option value="orders" {{ $permission->group_name == 'orders' ? 'selected' : '' }}> Orders</option>
        <option value="stock" {{ $permission->group_name == 'stock' ? 'selected' : '' }}> Stock </option>
        <option value="roles" {{ $permission->group_name == 'roles' ? 'selected' : '' }}> Roles</option> 
                     
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
                group_name: {
                    required : true,
                }, 
                
            },
            messages :{
                name: {
                    required : 'Please Enter Permission Name',
                }, 
                group_name: {
                    required : 'Please Select Group Name',
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

 



@endsection