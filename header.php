<header class="container-fluid justify-content-between align-item-center">
    
    <div class="col">
    <button class="navbarpull-left menu-icon" onclick="menu()" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    </div>
    <div class="nav-toolbar ">
    <ul class="dropdown list-unstyled collased toolbar">
            <li class="toolbar-list"><a class="item" href="" data-bs-toggle="dropdown">
                <i class="fa-regular fa-bell"></i></a>
                <div class="dropdown-menu notification ">
                    <p class=""> Notification</p>
                    <p class="">Message</p>
                </div>
            </li>
            <li class="dropdown toolbar-list">
                <a class="item" href="" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-ellipsis-vertical"></i></a>
                    <ul class="dropdown-menu settings ">
                        <li class="dropdown-item"><a href="../user_profile"><i class="fa-regular fa-user"></i> My Profile</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-item"><a href="" ><i class="fa-solid fa-wrench"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-item"><a href="" data-bs-toggle="modal" data-bs-target="#logout"><i class="fa-solid fa-power-off"></i> Sign out </a></li>
                    </ul>
            </li>
            
        </ul>
        <div style="width:100%" class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content" >
                <div class="modal-header p-2  ">
                    <h5 class="modal-title text-black" id="exampleModalLabel">Employee Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size:10px"></button>
                </div>
                <div class="modal-body p-2" >
                    Are you sure you want to logout ?...
                </div>
                <div class="modal-footer p-1">
                    <button type="button" class="btn btn-warning btn-flat text-white p-1" data-bs-dismiss="modal">Close</button>
                    <a href="../" class="btn btn-primary btn-flat p-1">Sign Out</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</header>
