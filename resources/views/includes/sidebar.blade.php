<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><i class="fa fa-child"></i> <span>   CNIS  <span></a>
        </div>
        
        <div class="clearfix"></div>
        
        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Avatar of {{ Auth::user()->name }}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        
        <br />
        
        <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                 <ul class="nav side-menu">
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-home"></i> Home </a></li>   

                  <li><a href="{{ url('/admins') }}"><i class="fa fa-eye"></i> Administrators </a></li>                 
                
                  <li><a href="{{ url('/users') }}"><i class="fa fa-users"></i> Users</a></li>

                   <li><a><i class="fa fa-user"></i> Contributors <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-apple"></i> Nutritionists</a></li>
                      <li><a href="{{ url('/logout') }}"><i class="fa fa-plus-square"></i>Doctors</a></li>
                      <li><a href="{{ url('/logout') }}"><i class="fa fa-plus-circle"></i>Nurses</a></li>
                    </ul>
                  </li>  

                  <li><a><i class="fa fa-envelope-o"></i> Messages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/logout') }}"><i class="fa fa-check-square"></i> Sent</a></li>
                      <li><a href="{{ url('/logout') }}"><i class="fa fa-arrow-circle-down"></i>Received</a></li>
                      <li><a href="{{ url('/logout') }}"><i class="fa fa-clock-o"></i>Scheduled</a></li>
                    </ul>
                  </li>  

                  <li><a href="{{ url('/diagnosis') }}"><i class="fa fa-stethoscope"></i> Diagnosis</a></li> 

                  <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Log Out</a></li>  

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->        
        </div>
</div>
@yield('main_container')
