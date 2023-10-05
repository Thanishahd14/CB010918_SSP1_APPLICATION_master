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
      

      <form action="{{url('/updateproduct',$data->id)}}" method="post" enctype="multipart/form-data" style="margin-right: 500px; margin-top:60px">
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required value="{{$data->name}}" style="color: rgb(255, 255, 255)" />
        </div>
        <div class="form-group">
          <label for="price">Price:</label>
          <input type="number" class="form-control" id="price" name="price" value="{{$data->price}}" required style="color: rgb(255, 255, 255)" />
        </div>
        <div class="form-group">
            <label for="image">Old Image:</label>
            <img src="/productimg/{{ $data->image }}" alt="" style="width: 200px; height: 200px">
          </div>
        <div class="form-group">
            <label for="image">Select New Image:</label>
            <input type="file" class="form-control" id="image" name="image" required />
          </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>

    </div>
    @include('admin.adminscript')
  </body>
</html>