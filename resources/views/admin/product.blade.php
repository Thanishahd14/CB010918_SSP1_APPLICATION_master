<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.navbar')
      
      <div class="row " style="margin-top: 50px" >
        <div class="col-12 grid-margin">

      <form action="{{url('/addproduct')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required style="color: rgb(255, 255, 255)" />
        </div>
        <div class="form-group">
          <label for="price">Price:</label>
          <input type="number" class="form-control" id="price" name="price" required style="color: rgb(255, 255, 255)" />
        </div>
        <div class="form-group">
          <label for="image">Image:</label>
          <input type="file" class="form-control" id="image" name="image" required />
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>








      
          <div class="card" style="margin-top: 80px">
            <div class="card-body">
              <h4 class="card-title">Product</h4>
              <div class="table-responsive">
                <table class="table" style="background-color: azure">
                  <thead>
                    <tr style="color: black">
                      <th style="width: 150px"> Name </th>
                      <th style="width: 200px"> Price </th>
                      <th style="width: 200px"> Image </th>
                      <th style="width: 150px">Update</th>
                      <th style="width: 150px">Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($data as $data)
                        
                    
                    <tr >
                      <td style="color: black">{{$data->name}}</td>
                      <td style="color: black">{{$data->price}}</td>
                      <td><img src="/productimg/{{ $data->image }}" alt="" style="width: 200px; height: 200px"></td>
                      <td><a href="{{url('/updateproductview',$data->id)}}"><div class="badge badge-outline-warning">Update</div></a></td>
                      <td><a href="{{url('/deleteproduct',$data->id)}}"><div class="badge badge-outline-danger" >Delete</div></a></td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>












    </div>
    @include('admin.adminscript')
  </body>
</html>