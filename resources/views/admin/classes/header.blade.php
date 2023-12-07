<div class="main-header">
    <div class="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" style="width: 50px !important;
    margin-left: 30px !important;"></a>
    </div>
    <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div style="margin: auto"></div>
    <div class="header-part-right">
        <i class="fas fa-arrows-alt header-icon d-none d-sm-inline-block" data-fullscreen></i>
        <div class="dropdown">
            <div class="user col align-self-end">
                <i class="fas fa-user header-icon" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-header">
                        <i class="i-Lock-User mr-1"></i>
                        {{ auth()->user()->name ?? '' }}
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
