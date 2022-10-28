<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="/dist/assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Mark Jeckson</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false"><i class="ti-home"></i><span class="hide-menu">Dashboard</span></a></li>
                {{-- <li class="nav-small-cap">Professional</li> --}}
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu">Band</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{ route('bands.show') }}">All Band</a> </li>
                        <li> <a href="{{ route('bands.create') }}">Add Band</a> </li>
                    </ul>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-microphone-alt"></i><span class="hide-menu">Genres</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{ route('genres.show') }}">All Genres</a> </li>
                        <li> <a href="{{ route('genres.create') }}">Add Genre</a> </li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-microphone"></i><span class="hide-menu">Albums</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{ route('albums.show') }}">All Albums</a> </li>
                        <li> <a href="{{ route('albums.create') }}">Add Album</a> </li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-music-alt"></i><span class="hide-menu">lyric</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{ route('lyrics.show') }}">All Lyric</a> </li>
                        <li> <a href="{{ route('lyrics.create') }}">Add Lyric</a> </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
