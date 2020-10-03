<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="
    height: 150px;background-color:#05619b;color:white;
">
        
<ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <h3>Road & Building Department</h3>
    Estate Management System
      </li>
      
    </ul>



<ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="">

      <!-- Notifications Dropdown Menu -->
      
      <li class="" style="
    /* margin-top: -50px; */
">
        <div class="">
                
                <!-- /.form-group -->
                <div class="">
  <div style="margin-top: -25px;">{{ session::get('uname')}}</div>
  <br><select class="form-control" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true"  onchange="location = this.value;" >
                  
                    <option value="{{ url('locale/gn') }}">Gujarati</option>
                   <option value="{{ url('locale/en') }}" >English</option>
                    
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
      </li>
    </ul>
    
  </nav> 
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:gray">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="height:150px;text-align:center;background-color:#05619b">
      <img src="{{ URL::asset('images/national_emblem.gif') }}" alt="AdminLTE Logo" class=""
           style="height:100%">
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{url('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Dashboard
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('profile')}}" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
               User Profile
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('gras/useropration')}}" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
               User Oprations
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('gras/highercategory')}}" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Higher Category Quarter
               
              </p>
            </a>
          </li>
       </ul>
      
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>