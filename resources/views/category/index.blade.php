@extends('template')

@section('content')


 
      <div class="col-lg-9">
      
      <div class="row mt-3">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                   <thead> 
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody id="tbody">
                    @foreach( $categories as $rows)
                    <tr>
                      <td>{{$rows->id}}</td>
                      <td>{{$rows->name}}</td>
                      
                      
                      <td><a href="{{route('category.edit',$rows->id)}}" class="btn btn-warning">Edit</a></td>
                      <td><form method="post" action="{{route('category.destroy',$rows->id)}}">
                      @csrf
                      @method('DELETE')

                      <td><input type="submit" name="btnsubmit" value="Delete" onclick="return confirm('Are you sure to delete?')"></td>
                    </form>
                  </td>
 

                    </tr>
                   @endforeach

                  </tbody>

                 
                </table>
        </div>

    </div>
  </div>








  @endsection