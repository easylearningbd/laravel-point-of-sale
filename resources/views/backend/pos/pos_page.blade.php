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



<div class="table-responsive">
        <table class="table table-bordered border-primary mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>QTY</th>
                    <th>Price</th>
                    <th>SubTotal</th>
                    <th>Action</th>
                </tr>
            </thead>

            @php
            $allcart = Cart::content();
            @endphp
            <tbody>
                @foreach($allcart as $cart)
                <tr>
                    <td>{{ $cart->name }}</td>
                    <td>
       <form method="post" action="{{ url('/cart-update/'.$cart->rowId) }}">
       @csrf

    <input type="number" name="qty" value="{{ $cart->qty }}" style="width:40px;" min="1">
 <button type="submit" class="btn btn-sm btn-success" style="margin-top:-2px ;"> <i class="fas fa-check"></i> </button>   

   </form> 
                    </td>
                    <td>{{ $cart->price }}</td>
                    <td>{{ $cart->price*$cart->qty }}</td>
     <td> <a href="{{ url('/cart-remove/'.$cart->rowId) }}"><i class="fas fa-trash-alt" style="color:#ffffff"></i></a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="bg-primary">
        <br>
        <p style="font-size:18px; color:#fff"> Quantity : {{ Cart::count() }} </p>
        <p style="font-size:18px; color:#fff"> SubTotal : {{ Cart::subtotal() }} </p>
        <p style="font-size:18px; color:#fff"> Vat : {{ Cart::tax() }} </p>
        <p><h2 class="text-white"> Total </h2> <h1 class="text-white"> {{ Cart::total() }}</h1>   </p>
         <br>
    </div>

 <br>
    <form id="myForm" method="post" action="{{ url('/create-invoice') }}">
        @csrf
     
        <div class="form-group mb-3">
            <label for="firstname" class="form-label">All Customer </label>

              <a href="{{ route('add.customer') }}" class="btn btn-primary rounded-pill waves-effect waves-light mb-2">Add Customer </a>  


            <select name="customer_id" class="form-select" id="example-select">
                    <option selected disabled >Select Customer </option>
                    @foreach($customer as $cus)
        <option value="{{ $cus->id }}">{{ $cus->name }}</option>
                     @endforeach
                </select>
           
        </div>
    
        <button class="btn btn-blue waves-effect waves-light">Create Invoice</button>


    </form>






                                   
 
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

    <form method="post" action="{{ url('/add-cart') }}">
        @csrf

        <input type="hidden" name="id" value="{{ $item->id }}">
        <input type="hidden" name="name" value="{{ $item->product_name }}">
        <input type="hidden" name="qty" value="1">
        <input type="hidden" name="price" value="{{ $item->selling_price }}">

                <td>{{ $key+1 }}</td>
                <td> <img src="{{ asset($item->product_image) }}" style="width:50px; height: 40px;"> </td>
                <td>{{ $item->product_name }}</td>
                <td><button type="submit" style="font-size: 20px; color: #000;" > <i class="fas fa-plus-square"></i> </button> </td> 
           

  </form>
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


 
<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                customer_id: {
                    required : true,
                }, 
                
            },
            messages :{
                customer_id: {
                    required : 'Please Select Customer',
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