<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a href="{{ route('admin.home') }}">
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
            <a class="nav-link" href="{{ route('admin.events.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-diamond"></use>
                </svg> Events
            </a>
            
            <a class="nav-link" href="{{ route('admin.menu.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-list"></use>
                </svg> Website Menu
            </a>

            <a class="nav-link" href="{{ route('admin.socials.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-external-link"></use>
                </svg> Social icons
            </a>

            <a class="nav-link" href="{{ route('admin.sponsors.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-money"></use>
                </svg> Sponsors
            </a>

            <a class="nav-link" href="{{ route('admin.story.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-short-text"></use>
                </svg> BDE Story
            </a>

            <a class="nav-link" href="{{ route('admin.smhq.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-music-note"></use>
                </svg> SMHQ
            </a>

            <a class="nav-link" href="{{ route('admin.explore.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-short-text"></use>
                </svg> Explore
            </a>

            <a class="nav-link" href="{{ route('admin.vipbackstage.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-short-text"></use>
                </svg> VIP & Backstage
            </a>

            <a class="nav-link" href="{{ route('admin.ecosystem.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-short-text"></use>
                </svg> Ecosystem
            </a>

            <a class="nav-link" href="{{ route('admin.collection.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-short-text"></use>
                </svg> Collection
            </a>

            <a class="nav-link" href="{{-- route('admin.orders.index') --}}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-short-text"></use>
                </svg> Orders
            </a>

            <a class="nav-link" href="{{ route('admin.settings.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="/admin-src/vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                </svg> Settings
            </a>
        </li>
    </ul>
    <!--<button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>-->
</div>
