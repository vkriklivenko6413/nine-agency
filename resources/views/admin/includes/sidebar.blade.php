<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a href="{{ route('admin.homepage.index') }}">
            @if ($websiteLogo)
                <img class="my-4" src="{{ Storage::url($websiteLogo) }}" alt="" style="max-height:100px;">
            @else
                <span style="color:#fff;">Logo</span>
            @endif
        </a>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-group">

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

            <a class="nav-link" href="{{ route('admin.seo.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-diamond"></use>
                </svg> Seo
            </a>

            <a class="nav-link" href="{{ route('admin.clients.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-briefcase"></use>
                </svg> Clients
            </a>

            <a class="nav-link" href="{{ route('admin.videos.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-video"></use>
                </svg> Videos
            </a>

            <a class="nav-link" href="{{ route('admin.settings.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                </svg> Settings
            </a>

            <a class="nav-link" href="/admin/translations">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-language"></use>
                </svg> Static Translations
            </a>
        </li>
    </ul>
</div>
