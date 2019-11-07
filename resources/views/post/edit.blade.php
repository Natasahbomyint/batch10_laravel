@extends('template')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<h1 class="mt-4">Post Edit Form</h1>
		
		  @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
         @endif
	

	<form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
		@csrf
      @method('PUT')
		<div class="form-group">
         <label>Title</label>
         <input type="text" name="title" class="form-control" value="{{$post->title}}">
      </div>

      <div class="form-group">
         <label>Content</label>
         <textarea name="content" class="form-control">{{$post->body}}</textarea>
      </div>

      <div class="form-group">
         <label>Photo</label>
         <span class="text-danger">[supported file types:jpeg,png]</span>
         <input type="file" name="photo" class="form-control">
         <img src="{{asset($post->image)}}" class="img-fluid" width="100" height="100">
         <input type="hidden" name="oldphoto" value="{{$post->image}}">
      </div>

      <div class="form-group">
         <label>Categories</label>
         <select name="category" class="form-control">
            <option value="">Choose Category</option>
            <---Accept Data and loop-->
            @foreach($categories as $row)
            <option value="{{$row->id}}"
               @if($row->id==$post->category_id)
               {{'selected'}}
               @endif
               >{{$row->name}}</option>
            @endforeach()

         </select>
      </div>


      <input type="submit" name="btnsubmit" class="btn btn-primary" value="Update">
      </div>   
	</form>


</div>
</div>

@endsection