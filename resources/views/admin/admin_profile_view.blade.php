@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">

        
        <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  
                    <div>
                        <img class="wd-100 rounded-circle" src="{{(!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="profile">
                        
                        <span class="h4 ms-3">{{$profileData->username}}</span>
                    </div>
                  
                </div>
              
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                  <p class="text-muted">{{$profileData->name}}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                  <p class="text-muted">{{$profileData->email}}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                  <p class="text-muted">{{$profileData->phone}}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                  <p class="text-muted">{{$profileData->address}}</p>
                </div>
                <div class="mt-3 d-flex social-links">
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="github"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="twitter"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="instagram"></i>
                  </a>
                </div>
            </div>
        </div>
    </div>
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Update Admin Profile</h6>

                        <form method="post" action="{{route('admin.profile.store')}}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" autocomplete="off" value="{{$profileData->name}}" >
                            </div>
                            
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" autocomplete="off" value="{{$profileData->username}}" >
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" autocomplete="off" value="{{$profileData->email}}" >
                            </div>
                           

                            <div class="mb-3">
                                <label for="photo" class="form-label">Display Image</label>
                                <input type="file" class="form-control" id="image" name="photo" autocomplete="off"  >
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label"></label>
                                <img id="showImage" class="wd-80 rounded-circle" src="{{(!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="profile">
                            </div>
                           
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" autocomplete="off" value="{{$profileData->phone}}" >
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" autocomplete="off" value="{{$profileData->address}}" >
                            </div>
                         
                            <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                            
                        </form>

                    </div>
                </div>  
              
            </div>
        </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
          
          <!-- right wrapper end -->
    </div>

</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection