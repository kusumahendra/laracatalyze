<aside class="main-sidebar">
    <section class="sidebar">

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVIGATION</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                 <li>
                    <a href="{{ route('admin.post.index') }}">
                        <i class="fa fa-file-text"></i> <span>Post</span>
                    </a>
                </li>
                 <li>
                    <a href="{{ route('admin.category.index') }}">
                        <i class="fa fa-folder"></i> <span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.tag.index') }}">
                        <i class="fa fa-tags"></i> <span>Tags</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.user.index') }}">
                        <i class="fa fa-user"></i> <span>User</span>
                    </a>
                </li>

           </ul>
        </ul>

    </section>
</aside>