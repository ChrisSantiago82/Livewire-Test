<div>

    {{-- BEGIN: Sidebar--}}
    <div class="page-sidebar custom-scroll" id="sidebar">


        <div class="sidebar-header text-nowrap"><a class="sidebar-brand" href="/home"></a><a class="sidebar-brand-mini" href="index.html"></a><span
                class="sidebar-points"></span></div>
        <ul class="sidebar-menu metismenu">

            <li class="@if($shownPage == 'Pagination') mm-active @endif"><a href="javascript:window.livewire.emit('selectPage', 'Pagination')"><i class="sidebar-item-icon ft-user"></i><span class="nav-label">Pagination</span></a></li>

        </ul>

    </div>


    {{-- END: Sidebar--}}


    {{-- BEGIN: Header--}}


    <div class="content-area" style="min-height: 100%" id="navbarWith">
        <nav class="navbar navbar-expand navbar-light fixed-top header">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link navbar-icon sidebar-toggler" id="sidebar-toggler" href="#"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
                </li>
            </ul>

            <ul class="nav navbar-nav mr-auto">
                <span style="min-width: 80px !important;">&nbsp;</span>
                <li class="nav-item"><h4><strong>{{ config('app.name', 'Laravel') }}</strong></h4></li>
            </ul>

            <ul class="navbar-brand">
                {{-- <img src="/assets/logo.png" style="height: auto; width: 100px; padding-top: 20px">--}}
            </ul>
        </nav>

        <div class="page-wrapper" style="min-height: calc(100vh - 70px)">
            @if ($shownPage == 'Pagination')
                @livewire('pagination')
            @endif
        </div>

        {{-- End: Header--}}

    </div>


</div>

