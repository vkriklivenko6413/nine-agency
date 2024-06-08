<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a href="{{ route('admin.homepage.index') }}">
            <img class="my-4" src="/admin-src/assets/brand/bde.png" alt="" width="80">
        </a>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-group">
            {{-- <!--<a class="nav-link nav-group-toggle" href="{{ route('admin.events.index') }}">-->
            <!--    <svg class="nav-icon">-->
            <!--        <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>-->
            <!--    </svg> Events-->
            <!--</a>-->
            <!--<ul class="nav-group-items">-->
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link" href="{{ route('admin.events.index') }}">-->
                <!--        <span class="nav-icon"></span> List-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li class="nav-item">--> 
                <!--    <a class="nav-link" href="{{ route('admin.events.add') }}">-->
                <!--        <span class="nav-icon"></span> Add new-->
                <!--    </a>-->
                <!--</li>-->
            <!--</ul>--> --}}
            <a class="nav-link" href="{{ route('admin.homepage.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                </svg> Homepage
            </a>

            <a class="nav-link" href="{{ route('admin.news.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-newspaper"></use>
                </svg> News
            </a>

            <a class="nav-link" href="{{ route('admin.projects.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-diamond"></use>
                </svg> Projects
            </a>

            <a class="nav-link" href="">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                </svg> Settings
            </a>
        </li>
    </ul>
    <!--<button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>-->
</div>
