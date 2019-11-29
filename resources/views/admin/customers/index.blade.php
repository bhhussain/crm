@extends('layouts.admin')
@section('content')


  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Customer List</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Customers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
      <p>
      <a href="{{ route('admin.customers.create') }}" class="btn btn-primary btn-sm">Add New</a>
      </p>
    
        <table class = "table table-bordered table-striped">
          <tr>
                   
          <th> ID </th>                      
            <th> Name </th>
            <th> Tel </th>
            <th> Mobile </th>
            <th> Email </th>         
            <th> Date </th>  
            
            
            <th> Action </th>
            </tr>
            @if(count($customers))
            
            @foreach($customers as $c)
            
            <tr>
            <td>{{ $c->id }}</td>     
            <td>{{ $c->name }}</td>            
            <td>{{ $c->telephone }}</td>
            <td>{{ $c->mobile }}</td>
            <td>{{ $c->email}}</td>        
            

            <td>{{ date('d-m-Y', strtotime($c->created_at)) }}</td>
            
            
            <td>             
                      

            
            <a href="{{ route('admin.customers.edit',$c->id) }}">
            <i class="fa fa-edit"></i>
            </a>
            /

            <a href="javascript:void(0)" onclick = "$(this).parent().find('form').submit()">
            <i class="fa fa-trash text-red"></i
            ></a>
            <form action = "{{ route('admin.customers.destroy', $c->id)}}" method = "POST">
            @method('DELETE')
            <input type="hidden" name="_token" value = "{{ csrf_token() }}">
            </form>
          </td>                
            
            </tr>
            @endforeach
            
            @else
            <tr><td colspan="11">No Record Found</td></tr>
            @endif
            
        </table>
        {{ $customers->render() }}
      </div>
    </section>
@endsection