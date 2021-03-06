<body class="fix-header fix-sidebar">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item "> <a class="nav-link nav-toggler  hidden-md-up  waves-effect waves-dark" href="javascript:void(0)"><i class="fas  fa-bars"></i></a></li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars"></i></a> </li>
                     <li class="nav-item mt-2">DASHBOARD</li>
					</ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item"><a href="/Logout" class="btn btn-sm btn-danger">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider mt-0" style="margin-bottom: 5px"></li>
                        <li> <a href="{{url('/')}}" ><span> <i class="fas fa-home"></i> </span><span class="hide-menu">Home</span></a></li>
                        <li> <a href="{{url('/visitor')}}" ><span> <i class="fas fa-users"></i> </span><span class="hide-menu">Visitor</span></a></li>
                        <li> <a href="{{url('/ClassCategoryIndex')}}" ><span> <i class="fas fa-stream"></i> </span><span class="hide-menu">Class Category</span></a></li>
                        <li> <a href="{{url('/ClassListIndex')}}" ><span> <i class="fas fa-list-ol"></i> </span><span class="hide-menu">Class List</span></a></li>
                        <li> <a href="{{url('/CompleteClassIndex')}}" ><span> <i class="fas fa-check-circle"></i> </span><span class="hide-menu">Complete Class</span></a></li>
                        <li> <a href="{{url('/CoursePlanIndex')}}" ><span> <i class="far fa-lightbulb"></i> </span><span class="hide-menu">Course Plan</span></a></li>
                        <li> <a href="{{url('/FileDocumentIndex')}}" ><span> <i class="far fa-file-alt"></i> </span><span class="hide-menu">File Document</span></a></li>
					</ul>
                </nav>
            </div>
        </aside>
<div class="page-wrapper">
