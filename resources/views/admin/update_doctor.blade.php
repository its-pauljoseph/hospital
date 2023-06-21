{{-- <x-app-layout>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
  <style>
    label {
      display: inline-block;
      width: 200px;
    }
  </style>
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

            <div class="container" align="center" style="padding-top: 100px;">

              @if(session()->has('message'))
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismis="alert">
                      x
                    </button>
                    {{ session()->get('message') }}
                  </div>
                  @endif
  
            <h1>Add Doctors</h1>
            
              <form action="{{ url('editdoctor', $data->id) }}" method="POST" enctype="multipart/form-data">
  
                @csrf
  
                <div style="padding: 15px;">
                  <label for="name">Name</label>
                  <input type="text" name="doctor" id="name" placeholder="Doctors Name" style="color: black;" value="{{ $data->doctor }}">
                </div>
                <div style="padding: 15px;">
                  <label for="name">Number</label>
                  <input type="number" name="phone" id="phone" placeholder="Doctors Number" style="color: black;" value="{{ $data->phone }}">
                </div>
                <div style="padding: 15px;">
                  <label for="speciality">Speciality</label>
  
                  <select name="speciality" id="speciality"  style="color: black;" value="{{ $data->speciality }}">
                    <option value="first">--Select--</option>
                    <option value="neurosurgeon">Neurosurgeon</option>
                    <option value="cardiologist">Cardiologist</option>
                    <option value="oncologist">Oncologist</option>
                    <option value="radiologist">Radiologist</option>
                    <option value="psychiatrist">Psychiatrist</option>
                  </select>
  
                </div>
                <div style="padding: 15px;">
                  <label for="name">Room Number</label>
                  <input type="room" name="room" id="room" placeholder="Room Number" style="color: black;" value="{{ $data->room }}">
                </div>
  
                <div style="padding: 15px; height: 150px;">
                  <label for="name">Old Image</label>
                  <img src="doctor_image/{{ $data->image }}">
                </div>

                <br>
                <br>
                <br>
                <br>

                <div style="padding: 15px; height: 150px;">
                  <label for="name">Select a new Image</label>
                  <input type="file" name="file" id="file" style="color: black;">
                </div>
  
                <input type="submit" value="Submit" class="btn btn-primary">
  
              </form>
            
          </div>
  
          </div>
          
        
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