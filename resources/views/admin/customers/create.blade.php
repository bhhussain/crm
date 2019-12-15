<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<!-- This below code is used to calculate the amount field  -->


    <!-- End -->
    <!-- This script is used to allow only number in the bill amount field -->
    <script>    
			function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode != 46 && charCode > 31 
				&& (charCode < 48 || charCode > 57))
				return false;
				return true;
			}  
    </script>
    <!-- End -->

    

    <!-- End -->


@extends('layouts.admin')
@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Customer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Customer</li>
              

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
     <form class="needs-validation" novalidate method = "post" action="{{ route('admin.customers.store') }}" enctype="multipart/form-data">
     <input type="hidden" name="_token" value = "{{ csrf_token() }}">
     <div class="bg-secondary text-white row mt-2">Basic Info</div>
     <DIV>`</DIV>
     
     <div class="form-group">     
     <div class = "row no-gutters">
     <label class = "col-lg-1" for="">Name *</label>
     <div class = "col-lg-7">
     <input class="form-control" data-error="Please enter customer name." type="text" name = "name" class = "form-control" placeholder="Enter customer name" required>    
     <div class = "clear-fix"></div>
    </div>     
     </div>
     
     <div class="form-group">     
     <div class = "row no-gutters">
     <label class = "col-lg-1" for="">Address</label>
     <div class = "col-lg-7">
     <input class="form-control" data-error="Please enter customer address." type="text" name = "address" class = "form-control" placeholder="Enter customer address" >    
     <div class = "clear-fix"></div>
    </div>     
     </div>


     <div class="form-group">
     <div class = "row">
     <label class = "col-lg-1" for="">Telephone</label>
     <div class = "col-lg-3">
     <input class = "form-control datepicker" id="datepicker" name = "telephone" placeholder="Enter telephone number" >  
         
    
    
  </div>
     

     <label class = "col-lg-1" for="">Mobile</label>
     <div class = "col-lg-3">
     <input type="text" name = "mobile" class = "form-control" placeholder="Enter mobile number" >
     <div class = "clear-fix"></div>
    </div>
</div>
    
    <div class="form-group">
     <div class = "row">
     <label class = "col-lg-1" for="">Email</label>     
     <div class = "col-lg-3">     
     <input type="email" name = "email" class = "form-control"  placeholder="Enter email address"> </div>     
     <label class = "col-lg-1" for="">Contact</label>
      <div class = "col-lg-3">
     <input type="text" name = "contact" class = "form-control" placeholder="Enter contact person name">
     <div class = "clear-fix"></div>
    </div>
    </div>

    
    
    
    <div class="form-group">
    <div class="bg-secondary text-white row mt-2">Procurement Department</div>
    <DIV>`</DIV>
     <div class = "row">     
     <label class = "col-lg-1" for="">Contact Name</label>     
     <div class = "col-lg-3">     
     <input type="text" name = "proc_contact" class = "form-control"  placeholder="Enter procurement contact name"> </div>    

     <label class = "col-lg-1" for="">Contact Number</label>     
     <div class = "col-lg-3">     
     <input type="text" name = "proc_telephone" class = "form-control"  placeholder="Enter procurement contact number"> </div>  

     <label class = "col-lg-1" for="">Email address</label>
      <div class = "col-lg-3">
     <input type="email" name = "proc_email" class = "form-control" placeholder="Enter procurement email address">
     <div class = "clear-fix"></div>
    </div>
    </div>

    

    <div class="form-group">
    <div class="bg-secondary text-white row mt-2">IT Department</div>
    <DIV>`</DIV>
     <div class = "row">     
     <label class = "col-lg-1" for="">Contact Name</label>     
     <div class = "col-lg-3">     
     <input type="text" name = "it_contact" class = "form-control"  placeholder="Enter IT contact name" > </div>    

     <label class = "col-lg-1" for="">Contact Number</label>     
     <div class = "col-lg-3">     
     <input type="text" name = "it_telephone" class = "form-control"  placeholder="Enter IT contact number" > </div>  

     <label class = "col-lg-1" for="">Email address</label>
      <div class = "col-lg-3">
     <input type="email" name = "it_email" class = "form-control" placeholder="Enter IT email address">
     <div class = "clear-fix"></div>
    </div>
    </div>

    <div class="form-group">
    <div class="bg-secondary text-white row mt-2">Status</div>
    <DIV>`</DIV>
     <div class = "row">     
     <label class = "col-lg-1" for="">Feedback</label>     
     <div class = "col-lg-3">     
     <textarea name = "feedback" class="form-control" rows="4" id="comment" placeholder="Enter the feedback" ></textarea> 
      </div>   

     

     <label class = "col-lg-1" for="">Customer Response</label>     
     <div class = "col-lg-3">     
     <textarea name = "customer_response" class="form-control" rows="4" id="comment" placeholder="Enter the customer response" ></textarea> 
     </div>  

     <label class = "col-lg-1" for="">Followup</label>
      <div class = "col-lg-3">
      <textarea name = "followup1" class="form-control" rows="4" id="comment" placeholder="Enter the follow up" ></textarea> 
     <div class = "clear-fix"></div>
    </div>
    </div>

    

    
 

    

    <div class="form-group">
    <input type="submit" class = "btn btn-info" Value ="Save">
    </div>
     


     </form>
      </div>


      
    </section>
@endsection