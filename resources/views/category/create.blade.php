@extends('template')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<h1 class="mt-4">Post Create Form</h1>
		
		  @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
         @endif


  

	

	<form method="post" action="{{route('category.store')}}" >
      @csrf
		
		<div class="form-group">
         <label>Name</label>
         <input type="text" name="name" class="form-control">
      </div>

      

      <input type="submit" name="btnsubmit" class="btn btn-primary" value="Save">
      </div>   
	</form>


</div>
</div>

@endsection