@extends('admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<style type="text/css">
    
    .form-check-label{
        text-transform: capitalize;
    }
</style>

 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Role In Permission</a></li>
                        
                    </ol>
                </div>
                <h4 class="page-title">Edit Role In Permission</h4>
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
        <form id="myForm" method="post" action="{{ route('role.permission.update',$role->id) }}" enctype="multipart/form-data">
            @csrf
 

            <div class="row"> 

        <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="firstname" class="form-label"> Roles Name </label>
            <h3> {{ $role->name }} </h3>
           
        </div>
    </div>

       <div class="form-check mb-2 form-check-primary">
        <input class="form-check-input" type="checkbox" value="" id="customckeck15"  >
        <label class="form-check-label" for="customckeck15">Primary</label>
       </div>
 
        <hr>

        @foreach($permission_groups as $group)
        <div class="row">
            <div class="col-3">

    @php
    $permissions = App\Models\User::getpermissionByGroupName($group->group_name);
    @endphp  

                <div class="form-check mb-2 form-check-primary">
        <input class="form-check-input" type="checkbox" value="" id="customckeck1" {{ App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : ''}}  >
        <label class="form-check-label" for="customckeck1">{{ $group->group_name }}</label>
       </div>

            </div>

            <div class="col-9">

            

        @foreach($permissions as $permission)
         <div class="form-check mb-2 form-check-primary">
        <input class="form-check-input" type="checkbox" name="permission[]" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }} value="{{ $permission->id }}" id="customckeck{{ $permission->id }}"  >
        <label class="form-check-label" for="customckeck{{ $permission->id }}">{{ $permission->name }}</label>
       </div>
       @endforeach
       <br>

            </div>
            
        </div> <!-- end row -->
        @endforeach

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
        $('#customckeck15').click(function(){
            if ($(this).is(':checked')) {
                $('input[type = checkbox]').prop('checked',true);
            }else{
                $('input[type = checkbox]').prop('checked',false);
            } 

        });
   </script>

 


@endsection