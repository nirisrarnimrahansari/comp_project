<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text creative-text logo-normal">
            {{ __('Creative Tim') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'file_manager' ? ' active' : '' }}">
                <a href="{{ route('media', 'media') }}">
                <i class="fa fa-file" aria-hidden="true"></i>
                    <p>{{ __('File Manager') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'prospect' ? 'active' : '' }}">
                <a href="{{ route('prospect.index', 'prospect') }}">
                <i class="fa fa-user"></i>
                    <p>{{ __('Prospect') }}</p>
                </a>
            </li> 
            <li class="{{ $elementActive == 'country' ? 'active' : '' }}">
                <a href="{{ route('country.index', 'country') }}">
                <i class="fa fa-globe" aria-hidden="true"></i>
                    <p>{{ __('Country') }}</p>
                </a>
            </li> 
           
            <li class="{{ $elementActive == 'state' ? 'active' : '' }}">
                <a href="{{ route('state.index', 'state') }}">
                <i class="fa fa-building-o" aria-hidden="true"></i>
                    <p>{{ __('State') }}</p>
                </a>
            </li> 
            <li class="{{ $elementActive == 'generate_quotation' ? 'active' : '' }}">
                <a href="{{ route('generate-quotation.index', 'generate_quotation') }}">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
                    <p>{{ __('Upload Quotation') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'discount' ? 'active' : '' }}">
                <a href="{{ route('discount.index', 'discount') }}">
                <i class="fa fa-percent " aria-hidden="true"></i>
                    <p>{{ __('Discount') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'measurement' ? 'active' : '' }}">
                <a href="{{ route('measurement.index', 'measurement') }}">
                <i class="fa fa-bars" aria-hidden="true"></i>
                    <p>{{ __('Measurement') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'work_name' ? 'active' : '' }}">
                <a href="{{ route('work-name.index', 'work_name') }}">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                    <p>{{ __('Work Name') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'rate' ? 'active' : '' }}">
                <a href="{{ route('rate.index', 'rate') }}">
                <i class="fa fa-usd" aria-hidden="true"></i>
                    <p>{{ __('Rate') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'package' ? 'active' : '' }}">
            @php
                $work_name_id = '1';
              @endphp 
              <a href="{{ route('package', [$work_name_id]) }}">
                <i class="fa fa-square" aria-hidden="true"></i>
                    <p>{{ __('Package') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'service' ? 'active' : '' }}">
                <a href="{{ route('service.index') }}">
                <i class="fa fa-cog" aria-hidden="true"></i>
                    <p>{{ __('Service') }}</p>
                </a>
            </li>
           
            <!-- <li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                            {{ __('Laravel examples') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                            </a>
                        </li>
                      <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                            </a>
                        </li> -->
                    <!-- </ul>
                </div>
            </li> --> 
            <!-- <li class="{{ $elementActive == 'icons' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'icons') }}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li> -->
            <!-- <li class="{{ $elementActive == 'map' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'map') }}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li> -->
            <!-- <li class="{{ $elementActive == 'notifications' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'notifications') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'tables') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'typography' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li class="active-pro {{ $elementActive == 'upgrade' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'upgrade') }}" class="bg-danger">
                    <i class="nc-icon nc-spaceship text-white"></i>
                    <p class="text-white">{{ __('Upgrade to PRO') }}</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>
