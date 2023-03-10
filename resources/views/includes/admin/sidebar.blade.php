


{{-- Sidebar --}}


<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
            <div class="nav-profile-image">
                <img src="https://cdn.discordapp.com/attachments/1029099282411815003/1048895679700946994/285211096_5707646869249546_3794167620640227648_n.jpg" alt="profile">
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">Amro Al-Wageei</span>
                <span class="text-secondary text-small">Front-End Web Developer</span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
    </li>

    {{-- Dashboard  Sidebar --}}
    <li class="nav-item">
        <a class="nav-link" href="{{url('/redirects')}}">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
        </a>
    </li>
    {{-- Dashboard  Sidebar --}}
{{-- The problem disapper for item on drop down list --}}
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic" >
            <span class="menu-title"> All Reservation </span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html" style="color: black">Reservation For Today</a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Reservation For This Month</a></li>
        </ul>
    </div>
</li>


{{-- Users Sidebar --}}

<li class="nav-item">
    <a class="nav-link" href="{{url('/users')}}">
        <span class="menu-title">Users</span>
        <i class="mdi mdi-contacts menu-icon"></i>
    </a>
</li>

{{-- Users Sidebar --}}


<li class="nav-item">
    <a class="nav-link" href="../../pages/forms/basic_elements.html">
        <span class="menu-title"> New Patient</span>
        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="../../pages/charts/chartjs.html">
        <span class="menu-title">Statistics</span>
        <i class="mdi mdi-chart-bar menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="../../pages/tables/basic-table.html">
        <span class="menu-title">Services</span>
        <i class="mdi mdi-table-large menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="../../pages/tables/basic-table.html">
        <span class="menu-title">Contact Form </span>
        <i class="mdi mdi-table-large menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Sample Pages</span>
        <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item sidebar-actions">
        <span class="nav-link">
            <div class="border-bottom">
                <h6 class="font-weight-normal mb-3">Doctors</h6>
            </div>
            <button class="btn btn-block btn-lg btn-gradient-primary mt-4 "  style=" background: linear-gradient(to right, #84d9d2, #07cdae);">+ Add a doctore</button>
            <div class="mt-4">
                <div class="border-bottom">
                    <p class="text-secondary">Categories</p>
                </div>
                <ul class="gradient-bullet-list mt-4">
                    <li>Free</li>
                    <li>Pro</li>
                </ul>
            </div>
        </span>
    </li>
</ul>
</nav>


{{-- Sidebar --}}