@extends('layouts.admin')
@section('content')

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

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Engineering</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Engineering</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
     <form  class="needs-validation" novalidate method = "post" action="{{ route('admin.categories.store') }}" 
     enctype="multipart/form-data">
     <input type="hidden" name="_token" value = "{{ csrf_token() }}">
     <div class="form-group">
     <div class = "row">
     <label class = "col-md-3" for="">Title</label>
     <div class = "col-md-6">    
     <input type="text" class="form-control" id="validationCustom01" name="title" placeholder="First name" required>
     <div class = "clear-fix"></div>
     </div>     
     </div>
     </div>

     <div class="form-group">
     <div class = "row">
     <label class = "col-md-3" for="">Item Table</label>
     <div class = "col-md-6">    
     <input type="text" class="form-control" id="validationCustom02" name="item_name" placeholder="Item Name" required>
     <div class = "clear-fix"></div>
     </div>     
     </div>
     </div>

     <div class="form-group">
     <div class = "row">
     <label class = "col-md-3" for="">Image</label>
     <div class = "col-md-6">    
     <input type="file" id="validationCustom01" name="image" placeholder="First name" required>
     <div class = "clear-fix"></div>
     </div>     
     </div>
     </div>
     
     



     <div class="form-group">
     <input type="submit" class = "btn btn-info" Value ="Save">
     </div>
     </form>
      </div>
    </section>
@endsection