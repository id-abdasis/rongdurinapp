<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-users"></i>
                        <span> Penduduk </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            </i><a href="{{ route('penduduk.data-penduduk') }}"><i class="fas fa-plus mr-1"></i> Daftar Penduduk</a>
                        </li>
                        <li>
                            </i><a href="{{ route('penduduk.tambah-penduduk') }}"><i class="fas fa-plus mr-1"></i> Tambah Penduduk</a>
                        </li>
                        <li>
                            </i><a href="#"><i class="fas fa-plus mr-1"></i> Statistik Penduduk</a>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>