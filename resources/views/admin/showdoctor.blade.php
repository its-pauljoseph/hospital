{{-- <x-app-layout>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')

      <!-- partial -->
      
      @include('admin.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
        <div align="center">

            <table style="table-layout: fixed;
            width: 90%;
            border-collapse: collapse;
            font-family: sans-serif;
            margin: 2em;
            border: 1px solid black;">
            <thead style="padding: 5px;
            text-align: center;">
                <tr>
                    <th style="border: 1px solid black; padding: 5px; text-align: center;">Name</th>
                    <th style="border: 1px solid black; padding: 5px; text-align: center;">Phone</th>
                    <th style="border: 1px solid black; padding: 5px; text-align: center;">Speciality</th>
                    <th style="border: 1px solid black; padding: 5px; text-align: center;">Room Number</th>
                    <th style="border: 1px solid black; padding: 5px; text-align: center;">Image</th>
                    <th style="border: 1px solid black; padding: 5px; text-align: center;">Delete</th>
                    <th style="border: 1px solid black; padding: 5px; text-align: center;">Edit Doctor</th>
                </tr>
            </thead>
        
            @foreach($data as $appoint)
        
            <tbody>
                <tr>
                    <td style="border: 1px solid black; padding: 5px; text-align: center;">{{ $appoint->doctor }}</td>
                    <td style="border: 1px solid black; padding: 5px; text-align: center;">{{ $appoint->phone }}</td>
                    <td style="border: 1px solid black; padding: 5px; text-align: center;">{{ $appoint->speciality }}</td>
                    <td style="border: 1px solid black; padding: 5px; text-align: center;">{{ $appoint->room }}</td>
                    <td style="border: 1px solid black; padding: 5px; text-align: center;"><img height="100px" width="100px" src="doctor_image/{{ $appoint->image }}"></td>
                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                        <a onclick="return confirm('Are you sure you want to delete the doctor?')" class="btn btn-danger" href="{{ url('deletedoctor', $appoint->id)}}">
                            Delete
                        </a>
                    </td>
                    </td>
                    <td style="border: 1px solid black; padding: 5px; text-align: center;">
                        <a class="btn btn-primary" class="btn btn-primary" href="{{ url('updatedoctor', $appoint->id) }}">
                            Edit
                        </a>
                    </td>
                </tr>
            </tbody>
        
            @endforeach
        
            </table>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © theinfinits.net 2023</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://www.theinfinits.net" target="_blank">Great tech</a> from Infinitytech</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>