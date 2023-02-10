
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('site.index') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{ env('APP_NAME') }}</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- About  -->
            @canany(['about-list','about-create','about-edit','about-delete'])
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseabout"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>About</span>
                    </a>
                    <div id="collapseabout" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('admin.abouts.index') }}">all about</a>
                            @can('about-create')
                            <a class="collapse-item" href="{{ route('admin.abouts.create') }}">add about</a>
                            @endcan
                            <a class="collapse-item" href="{{ route('admin.abouts.trash') }}">trach</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
            @endcanany

             <!-- Proces  -->
            @canany(['proces-list','proces-create','proces-edit','proces-delete'])
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseproces"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Proces</span>
                    </a>
                    <div id="collapseproces" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('admin.proces.index') }}">all proces</a>
                            @can('proces-create')
                            <a class="collapse-item" href="{{ route('admin.proces.create') }}">add proces</a>
                            @endcan
                            <a class="collapse-item" href="{{ route('admin.proces.trash') }}">trach</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
            @endcanany

              <!-- Testimonial  -->
            @canany(['testimonial-list','testimonial-create','testimonial-edit','testimonial-delete'])
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetestimonials"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Testimonial</span>
                    </a>
                    <div id="collapsetestimonials" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('admin.testimonials.index') }}">all testimonials</a>
                            @can('testimonial-create')
                            <a class="collapse-item" href="{{ route('admin.testimonials.create') }}">add testimonials</a>
                            @endcan
                            <a class="collapse-item" href="{{ route('admin.testimonials.trash') }}">trach</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
            @endcanany

              <!-- Neew  -->
            @canany(['neew-list','neew-create','neew-edit','neew-delete'])
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseneews"
                            aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Neew</span>
                        </a>
                        <div id="collapseneews" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="{{ route('admin.neews.index') }}">all neews</a>
                                @can('neew-create')
                                <a class="collapse-item" href="{{ route('admin.neews.create') }}">add neews</a>
                                @endcan
                                <a class="collapse-item" href="{{ route('admin.neews.trash') }}">trach</a>
                            </div>
                        </div>
                    </li>
                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">
            @endcanany


               <!-- Project  -->
            @canany(['project-list','project-create','project-edit','project-delete'])
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProject"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Project</span>
                    </a>
                    <div id="collapseProject" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('admin.projects.index') }}">all projects</a>
                            @can('project-create')
                            <a class="collapse-item" href="{{ route('admin.projects.create') }}">add projects</a>
                            @endcan
                            <a class="collapse-item" href="{{ route('admin.projects.trash') }}">trach</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
            @endcanany


                <!-- Role  -->
            @canany(['role-list','role-create','role-edit','role-delete'])
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRole"
                            aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Role</span>
                        </a>
                        <div id="collapseRole" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="{{ route('admin.roles.index') }}">all roles</a>
                                @can('role-create')
                                <a class="collapse-item" href="{{ route('admin.roles.create') }}">add roles</a>
                                @endcan
                            </div>
                        </div>
                    </li>
                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">
            @endcanany

                 <!-- User  -->
            @canany(['user-list','user-create','user-edit','user-delete'])
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>User</span>
                </a>
                <div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.users.index') }}">all users</a>
                        @can('user-create')
                        <a class="collapse-item" href="{{ route('admin.users.create') }}">add users</a>
                        @endcan
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            @endcanany

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
