<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.navbar')
      

      <form action="{{url('/userupdate',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" required style="color: rgb(255, 255, 255)" />
        </div>
        <div class="form-group">
          <label for="price">User type:</label>
          <input type="number" class="form-control" id="usertype" name="usertype" value="{{$data->usertype}}" required style="color: rgb(255, 255, 255)" />
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
      </form>


    </div>
    @include('admin.adminscript')
  </body>
</html>