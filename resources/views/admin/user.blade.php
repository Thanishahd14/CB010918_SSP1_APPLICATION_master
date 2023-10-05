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
      
      








      <div class="row "  style="margin: 50px">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">USERS</h4>
              <div class="table-responsive">
                <table class="table" style="background-color: azure">
                  <thead>
                    <tr>
                      <th style="width: 150px" style="color: black"> Name </th>
                      <th style="width: 200px" style="color: black"> Email </th>
                      <th style="width: 150px" style="color: black">Update</th>
                      <th style="width: 150px" style="color: black">Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($data as $data)
                        
                    
                    <tr>
                      <td style="color: black">{{$data->name}}</td>
                      <td style="color: black">{{$data->email}}</td>
                      @if ($data->usertype==0)
                      
                        <td><a href="{{url('/updateuserview',$data->id)}}"><div class="badge badge-outline-warning">Update</div></a></td>
                      <td><a href="{{url('/deleteuser',$data->id)}}"><div class="badge badge-outline-danger">Delete</div></a></td>
                      
                      @else
                      
                        <td style="color: black">Not Allowed</td>
                      <td style="color: black">Not Allowed</td>
                      
                         
                      @endif
                      
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