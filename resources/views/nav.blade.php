<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
            </li>
            <li><a href="/home" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Dashboard</span></a></li>
            <li><a href="rhemastars" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Rhema Stars</span></a></li>
            {{--@if(auth()->user()->role ==1)--}}
            <li><a href="testimony" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Testimonies</span></a></li>
            {{--@endif--}}
            <li><a href="gallery" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Gallery</span></a></li>
            <li><a href="outreach" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Outreachs</span></a></li>
            {{--@if(auth()->user()->role !=3)--}}
            <li><a href="rhema" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Rhemas</span></a></li>
            {{--@endif--}}
        </ul>
    </div>
</div>
