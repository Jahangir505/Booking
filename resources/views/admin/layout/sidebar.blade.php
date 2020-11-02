<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">

            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"></div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>

            <li class="nav-item  @if(request()->path() == 'admin/home') active open @endif">
                <a href="{{url('admin/home')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item
            @if(request()->path() == 'admin/users') active open
                @elseif(request()->path() == 'admin/user/search') active open
                @elseif(request()->path() == 'admin/banned/users') active open
                @elseif(request()->path() == 'admin/user-translog') active open
                @elseif(request()->path() == 'admin/user-loan') active open
                @elseif(request()->path() == 'admin/broadcast') active open
                @elseif(request()->path() == 'admin/banned') active open
            @endif">
                <a href="#" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">User Management</span>
                    <span class="arrow 
                    @if(request()->path() == 'admin/users') active open
                    @elseif(request()->path() == 'admin/user/search')  open
                    @elseif(request()->path() == 'admin/banned/users')  open
                    @elseif(request()->path() == 'admin/user-translog')  open
                    @elseif(request()->path() == 'admin/user-loan')  open
                    @elseif(request()->path() == 'admin/broadcast')  open
                    @elseif(request()->path() == 'admin/banned')  open
                    @endif"></span>
                    <span class="selected"></span>
                </a>

                {{-- <ul class="sub-menu">
                    <li class="nav-item @if(request()->path() == 'admin/users') active open
                    @elseif(request()->path() == 'admin/user/search') active open
                    @endif">
                        <a href="{{route('users')}}" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">Users</span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->path() == 'admin/broadcast') active open @endif">
                        <a href="{{route('broadcast')}}" class="nav-link ">
                            <i class="icon-envelope"></i>
                            <span class="title">Broadcast Email</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/banned') active open @endif">
                        <a href="{{route('user.ban')}}" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title">Banned Users</span>
                        </a>
                    </li>
                </ul>
            </li> --}}


            <li class="nav-item @if(request()->path() == 'admin/general') active open
            @elseif(request()->path() == 'admin/logo') active open
            @elseif(request()->path() == 'admin/footer') active open
            @elseif(request()->path() == 'admin/banner/create') active open
            @elseif(request()->path() == 'admin/navigation') active open
            @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-sitemap" aria-hidden="true"></i>
                    <span class="title">Website Control</span>
                    <span class="arrow @if(request()->path() == 'admin/general')  open
                        @elseif(request()->path() == 'admin/logo')  open
                        @elseif(request()->path() == 'admin/footer')  open
                        @elseif(request()->path() == 'admin/banner/create')  open
                        @elseif(request()->path() == 'admin/navigation')  open
                        @endif"></span>
                    <span class="selected"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if(request()->path() == 'admin/general') active open @endif">
                        <a href="{{route('general')}}" class="nav-link ">
                            <i class="fa fa-cog"></i>
                            <span class="title">General Settings</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/banner/create') active open @endif">
                        <a href="{{route('create.banner')}}" class="nav-link ">
                            <i class="fa fa-picture-o"></i>
                            <span class="title">Banner</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/logo') active open @endif">
                        <a href="{{route('logo')}}" class="nav-link ">
                            <i class="fa fa-picture-o"></i>
                            <span class="title">Logo and Icon</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/navigation') active open @endif">
                        <a href="{{route('navigation.create')}}" class="nav-link ">
                            <i class="fa fa-level-up" aria-hidden="true"></i>
                            <span class="title">Navigation Settings</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/footer') active open @endif">
                        <a href="{{route('footer.create')}}" class="nav-link ">
                            <i class="fa fa-level-down" aria-hidden="true"></i>
                            <span class="title">Footer Settings</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item @if(request()->path() == 'admin/stuff-management') active open
                @elseif(request()->path() == 'admin/user/create') active open
                @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-user"></i>
                    <span class="title">Accounts</span>
                    <span class="selected"></span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    {{-- <li class="nav-item @if(request()->path() == 'admin/stuff-management') active open @endif">
                        <a href="{{route('stuff.home')}}" class="nav-link ">
                            <i class="fa fa-user"></i>
                            <span class="title"> Stuff Management</span>
                            <span class="selected"></span>
                        </a>
                    </li> --}}
                    <li class="nav-item @if(request()->path() == 'admin/user/roles') active open @endif">
                        <a href="{{route('roles.list')}}" class="nav-link">
                            <i class="fa fa-list-ul" aria-hidden="true"></i>
                            <span class="title">Role</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/accounts/admins') active open @endif">
                        <a href="{{route('admins.list')}}" class="nav-link">
                            <i class="fa fa-list-ul" aria-hidden="true"></i>
                            <span class="title">Admins</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/accounts/customers') active open @endif">
                        <a href="{{route('customers.list')}}" class="nav-link">
                            <i class="fa fa-list-ul" aria-hidden="true"></i>
                            <span class="title">Customers</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item @if(request()->path() == 'admin/flights') active open
                @elseif(request()->path() == 'admin/flights') active open
                @elseif(request()->path() == 'admin/flights/create') active open
                @elseif(request()->path() == 'admin/flights/airlines') active open
                @elseif(request()->path() == 'admin/flights/airlines/create') active open
                @elseif(request()->path() == 'admin/flights/routes') active open
                @elseif(request()->path() == 'admin/flights/routes/create') active open
                @elseif(request()->path() == 'admin/flights/prices') active open
                @elseif(request()->path() == 'admin/flights/prices/create') active open
                @elseif(isset($flight)) active open
                @elseif(isset($flightPrice)) active open
                @elseif(isset($route)) active open
                @elseif(isset($airline)) active open
                @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-plane" aria-hidden="true"></i>
                    <span class="title">Flight Management</span>
                    <span class="selected"></span>
                    <span class="arrow 
                    @if(request()->path() == 'admin/flights')  open
                    @elseif(request()->path() == 'admin/flights/create')  open
                    @elseif(request()->path() == 'admin/flights/airlines')  open
                    @elseif(request()->path() == 'admin/flights/airlines/create')  open
                    @elseif(request()->path() == 'admin/flights/routes')  open
                    @elseif(request()->path() == 'admin/flights/routes/create')  open
                    @elseif(request()->path() == 'admin/flights/prices')  open
                    @elseif(request()->path() == 'admin/flights/prices/create')  open
                    @endif"></span>
                </a>
                <ul class="sub-menu">
                    
                    <li class="nav-item @if(request()->path() == 'admin/flights/airlines') active open @endif">
                        <a href="{{route('airlines')}}" class="nav-link">
                            <i class="fa fa-list-ul" aria-hidden="true"></i>
                            <span class="title">Airlines</span>
                            {{-- <span class="arrow "></span> --}}
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/flights/airlines/create') active open @endif">
                        <a href="{{route('airlines.create')}}" class="nav-link">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span class="title">Add Airline</span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->path() == 'admin/flights/routes') active open @endif">
                        <a href="{{route('routes')}}" class="nav-link">
                            <i class="fa fa-list-ul" aria-hidden="true"></i>
                            <span class="title">Routes</span>

                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/flights/routes/create') active open @endif">
                        <a href="{{route('routes.create')}}" class="nav-link">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span class="title">Add Transit/Route</span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->path() == 'admin/flights/prices') active open @endif">
                        <a href="{{route('flightprices')}}" class="nav-link">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                            <span class="title">Flight Prices</span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->path() == 'admin/flights/prices/create') active open @endif">
                        <a href="{{route('flightprices.create')}}" class="nav-link">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span class="title">Add FlightPrice</span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->path() == 'admin/flights') active open @endif">
                        <a href="{{route('flights')}}" class="nav-link ">
                            <i class="fa fa-list-ul" aria-hidden="true"></i>
                            <span class="title">Flights</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/flights/create') active open @endif">
                        <a href="{{route('flights.create')}}" class="nav-link">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span class="title">Create Flight</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item @if(request()->path() == 'admin/hotels') active open
                @elseif(request()->path() == 'admin/hotels') active open
                @elseif(request()->path() == 'admin/hotels/create') active open
                @elseif(request()->path() == 'admin/rooms/add') active open
                @elseif(request()->path() == 'admin/rooms/edit') active open
                @elseif(request()->path() == 'admin/rooms') active open
                @elseif(request()->path() == 'admin/rates') active open
                @elseif(request()->path() == 'admin/rates/create') active open
                @elseif(request()->path() == 'admin/promotions') active open
                @elseif(request()->path() == 'admin/promotions/create') active open
                @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-bed" aria-hidden="true"></i>
                    <span class="title">Hotels Management</span>
                    <span class="arrow @if(request()->path() == 'admin/hotels')  open
                        @elseif(request()->path() == 'admin/hotels')  open
                        @elseif(request()->path() == 'admin/hotels/create')  open
                        @elseif(request()->path() == 'admin/rooms/add')  open
                        @elseif(request()->path() == 'admin/rooms/edit')  open
                        @elseif(request()->path() == 'admin/rooms')  open
                        @elseif(request()->path() == 'admin/rates')  open
                        @elseif(request()->path() == 'admin/rates/create')  open
                        @elseif(request()->path() == 'admin/promotions')  open
                        @elseif(request()->path() == 'admin/promotions/create')  open
                        @endif"></span>
                    <span class="selected"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if(request()->path() == 'admin/hotels') active open
                        @elseif(request()->path() == 'admin/hotels') active open
                        @elseif(request()->path() == 'admin/hotels/create') active open
                        @endif">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-bed" aria-hidden="true"></i>
                            <span class="title">Hotels </span>
                            <span class="arrow @if(request()->path() == 'admin/hotels')  open
                                @elseif(request()->path() == 'admin/hotels')  open
                                @elseif(request()->path() == 'admin/hotels/create')  open
                                @endif"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item @if(request()->path() == 'admin/hotels') active open @endif">
                                <a href="{{route('hotels')}}" class="nav-link ">
                                    <i class="fa fa-list-ul" aria-hidden="true"></i>
                                    <span class="title">Hotels</span>
                                </a>
                            </li>
                            <li class="nav-item @if(request()->path() == 'admin/hotels/create') active open @endif">
                                <a href="{{route('hotels.create')}}" class="nav-link ">
                                    <i class="fa fa-plus"></i>
                                    <span class="title">Create Hotel</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/rooms') active open
                        @elseif(request()->path() == 'admin/rooms/add') active open
                        @elseif(request()->path() == 'admin/rooms/edit') active open
                        @elseif(request()->path() == 'admin/rooms') active open
                        @elseif(request()->path() == 'admin/rates') active open
                        @elseif(request()->path() == 'admin/rates/create') active open
                        @isset($room) active open
                        @endisset
                        @endif">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-glass" aria-hidden="true"></i>
                            <span class="title">Room Management</span>
                            <span class="arrow @if(request()->path() == 'admin/rooms')  open
                                @elseif(request()->path() == 'admin/rooms/add')  open
                                @elseif(request()->path() == 'admin/rooms/edit')  open
                                @elseif(request()->path() == 'admin/rooms')  open
                                @elseif(request()->path() == 'admin/rates')  open
                                @elseif(request()->path() == 'admin/rates/create')  open
                                @endif"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item @if(request()->path() == 'admin/rooms') active open @endif">
                                <a href="{{route('rooms')}}" class="nav-link ">
                                    <i class="fa fa-bed"></i>
                                    <span class="title">Rooms</span>
                                </a>
                            </li>
                            <li class="nav-item @if(request()->path() == 'admin/rooms/add') active open @endif">
                                <a href="{{route('rooms.add')}}" class="nav-link ">
                                    <i class="fa fa-plus"></i>
                                    <span class="title">Add Room</span>
                                </a>
                            </li>
        
                            <li class="nav-item @if(request()->path() == 'admin/rates') active open @endif">
                                <a href="{{route('rates')}}" class="nav-link ">
                                    <i class="fa fa-list-ul"></i>
                                    <span class="title">Rates</span>
                                </a>
                            </li>
        
                            <li class="nav-item @if(request()->path() == 'admin/rates/create') active open @endif">
                                <a href="{{route('rates.create')}}" class="nav-link ">
                                    <i class="fa fa-plus"></i>
                                    <span class="title">Create Rates</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/promotions') active open
                        @elseif(request()->path() == 'admin/promotions/create') active open
                        @isset($promotion) active open
                        @endisset
                        @endif">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-angellist" aria-hidden="true"></i>
                            <span class="title">Promotions</span>
                            <span class="arrow @if(request()->path() == 'admin/promotions')  open
                                @elseif(request()->path() == 'admin/promotions/create')  open
                                @endif"></span>
                        </a>
                        <ul class="sub-menu">
                            
                            <li class="nav-item @if(request()->path() == 'admin/promotions') active open @endif">
                                <a href="{{route('promotions')}}" class="nav-link ">
                                    <i class="fa fa-list-ul"></i>
                                    <span class="title">Promotions list</span>
                                </a>
                            </li>
                            <li class="nav-item @if(request()->path() == 'admin/promotions/create') active open @endif">
                                <a href="{{route('promotions.create')}}" class="nav-link ">
                                    <i class="fa fa-plus"></i>
                                    <span class="title">Create Promotion</span>
                                </a>
                            </li>
        
                        </ul>
                    </li>
                </ul>
            </li>


            <li class="nav-item @if(request()->path() == 'admin/facilities') active open
                @elseif(request()->path() == 'admin/facilities/create') active open
                @isset($facility) active open
                @endisset
                @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    <span class="title">Facility Management</span>
                    <span class="arrow  @if(request()->path() == 'admin/facilities')  open
                        @elseif(request()->path() == 'admin/facilities/create')  open
                        @endif"></span>
                    <span class="selected"></span>
                </a>
                <ul class="sub-menu">
                    
                    <li class="nav-item @if(request()->path() == 'admin/facilities') active open @endif">
                        <a href="{{route('facilities')}}" class="nav-link ">
                            <i class="fa fa-list-ul"></i>
                            <span class="title">Facilities</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/facilities/create') active open @endif">
                        <a href="{{route('facilities.create')}}" class="nav-link ">
                            <i class="fa fa-plus"></i>
                            <span class="title">Create Facility</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item @if(request()->path() == 'admin/stopsales') active open
                @elseif(request()->path() == 'admin/stopsales/create') active open
                @isset($stopsale) active open
                @endisset
                @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
                    <span class="title">Stopsale Management</span>
                    <span class="arrow @if(request()->path() == 'admin/stopsales')  open
                        @elseif(request()->path() == 'admin/stopsales/create')  open
                        @endif"></span>
                    <span class="selected"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if(request()->path() == 'admin/stopsales') active open @endif">
                        <a href="{{route('stopsale')}}" class="nav-link ">
                            <i class="fa fa-list-ul"></i>
                            <span class="title">StopSales</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/stopsales/create') active open @endif">
                        <a href="{{route('stopsale.create')}}" class="nav-link ">
                            <i class="fa fa-plus"></i>
                            <span class="title">Creat Stop Sale</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item @if(request()->path() == 'admin/transfers') active open
                @elseif(request()->path() == 'admin/transfers/create') active open
                @elseif(request()->path() == 'admin/transfers/pricings') active open
                @elseif(request()->path() == 'admin/transfers/pricings/create') active open
                @elseif(request()->path() == 'admin/transfers/pricings') active open
                @isset($transfer) active open
                @endisset
                @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                    <span class="title">Transfer Management</span>
                    <span class="arrow @if(request()->path() == 'admin/transfers')  open
                        @elseif(request()->path() == 'admin/transfers/create')  open
                        @elseif(request()->path() == 'admin/transfers/pricings')  open
                        @elseif(request()->path() == 'admin/transfers/pricings/create')  open
                        @elseif(request()->path() == 'admin/transfers/pricings')  open
                        @endif"></span>
                    <span class="selected"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if(request()->path() == 'admin/transfers') active open @endif">
                        <a href="{{route('transfers')}}" class="nav-link ">
                            <i class="fa fa-list-ul"></i>
                            <span class="title">Vehicles</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/transfers/create') active open @endif">
                        <a href="{{route('transfers.create')}}" class="nav-link ">
                            <i class="fa fa-plus"></i>
                            <span class="title">Create Vehicle</span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->path() == 'admin/transfers/pricings') active open @endif">
                        <a href="{{route('pricings')}}" class="nav-link ">
                            <i class="fa fa-list-ul"></i>
                            <span class="title">All  Pricings</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/transfers/pricings/create') active open @endif">
                        <a href="{{route('pricings.create')}}" class="nav-link ">
                            <i class="fa fa-plus"></i>
                            <span class="title">Create Pricings</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item @if(request()->path() == 'admin/cruises') active open
                @elseif(request()->path() == 'admin/cruises/create') active open
                @elseif(request()->path() == 'admin/cruises/rooms/create') active open
                @elseif(request()->path() == 'admin/cruises/rooms') active open
                @elseif(request()->path() == 'admin/cruises/rooms/create') active open
                @elseif(request()->path() == 'admin/sailings') active open
                @elseif(request()->path() == 'admin/sailings/create') active open
                @elseif(request()->path() == 'admin/mealplans/create') active open
                @elseif(request()->path() == 'admin/mealplans/foods') active open
                @elseif(request()->path() == 'admin/mealplans/foods/create') active open
                @elseif(request()->path() == 'admin/mealplans/meals') active open
                @elseif(request()->path() == 'admin/mealplans/meals/create') active open
                @elseif(request()->path() == 'admin/mealplans') active open
                @isset($cruise) active open
                @endisset
                @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-ship" aria-hidden="true"></i>
                    <span class="title">Cruise Management</span>
                    <span class="selected"></span>
                    <span class="arrow @if(request()->path() == 'admin/cruises')  open
                        @elseif(request()->path() == 'admin/cruises/create')  open
                        @elseif(request()->path() == 'admin/cruises/rooms/create')  open
                        @elseif(request()->path() == 'admin/cruises/rooms')  open
                        @elseif(request()->path() == 'admin/cruises/rooms/create')  open
                        @elseif(request()->path() == 'admin/sailings')  open
                        @elseif(request()->path() == 'admin/sailings/create')  open
                        @elseif(request()->path() == 'admin/mealplans/create')  open
                        @elseif(request()->path() == 'admin/mealplans/foods')  open
                        @elseif(request()->path() == 'admin/mealplans/foods/create')  open
                        @elseif(request()->path() == 'admin/mealplans/meals')  open
                        @elseif(request()->path() == 'admin/mealplans/meals/create')  open
                        @elseif(request()->path() == 'admin/mealplans')  open
                        @isset($cruise)  open
                        @endisset
                        @endif"></span>

                </a>
                <ul class="sub-menu">
                    <li class="nav-item @if(request()->path() == 'admin/cruises') active open @endif">
                        <a href="{{route('cruises')}}" class="nav-link ">
                            <i class="fa fa-list-ul"></i>
                            <span class="title">Cruises</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/cruises/create') active open @endif">
                        <a href="{{route('cruises.create')}}" class="nav-link ">
                            <i class="fa fa-plus"></i>
                            <span class="title">Creat Cruise</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/cruises/rooms') active open @endif">
                        <a href="{{route('cruises.rooms')}}" class="nav-link ">
                            <i class="fa fa-list-ul"></i>
                            <span class="title">Cruise Rooms</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/cruises/rooms/create') active open @endif">
                        <a href="{{route('cruises.rooms.create')}}" class="nav-link ">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Room</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/sailings') active open @endif">
                        <a href="{{route('sailings')}}" class="nav-link ">
                            <i class="fa fa-list-ul"></i>
                            <span class="title">Sailing Date List</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/sailings/create') active open @endif">
                        <a href="{{route('sailings.create')}}" class="nav-link ">
                            <i class="fa fa-plus"></i>
                            <span class="title">Add Sailing Date</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == 'admin/mealplans') active open
                        @elseif(request()->path() == 'admin/mealplans/create') active open
                        @elseif(request()->path() == 'admin/mealplans/foods') active open
                        @elseif(request()->path() == 'admin/mealplans/foods/create') active open
                        @elseif(request()->path() == 'admin/mealplans/meals') active open
                        @elseif(request()->path() == 'admin/mealplans/meals/create') active open
                        @endif">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-cutlery" aria-hidden="true"></i>
                            <span class="title">Meal Plan</span>
                            <span class="arrow @if(request()->path() == 'admin/mealplans') active open
                                @elseif(request()->path() == 'admin/mealplans/create') active open
                                @elseif(request()->path() == 'admin/mealplans/foods') active open
                                @elseif(request()->path() == 'admin/mealplans/foods/create') active open
                                @elseif(request()->path() == 'admin/mealplans/meals') active open
                                @elseif(request()->path() == 'admin/mealplans/meals/create') active open
                                @endif"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item @if(request()->path() == 'admin/mealplans') active open @endif">
                                <a href="{{route('mealplans')}}" class="nav-link ">
                                    <i class="fa fa-list-ul"></i>
                                    <span class="title">Meal Plans</span>
                                </a>
                            </li>
                            <li class="nav-item @if(request()->path() == 'admin/mealplans/create') active open @endif">
                                <a href="{{route('mealplans.create')}}" class="nav-link ">
                                    <i class="fa fa-plus"></i>
                                    <span class="title">Add Meal Plan</span>
                                </a>
                            </li>
                            <li class="nav-item @if(request()->path() == 'admin/mealplans/foods') active open @endif">
                                <a href="{{route('foods')}}" class="nav-link ">
                                    <i class="fa fa-list-ul"></i>
                                    <span class="title">Food List</span>
                                </a>
                            </li>
                            <li class="nav-item @if(request()->path() == 'admin/mealplans/foods/create') active open @endif">
                                <a href="{{route('foods.create')}}" class="nav-link ">
                                    <i class="fa fa-plus"></i>
                                    <span class="title">Add New Food</span>
                                </a>
                            </li>
        
                            <li class="nav-item @if(request()->path() == 'admin/mealplans/meals') active open @endif">
                                <a href="{{route('meals')}}" class="nav-link ">
                                    <i class="fa fa-list-ul"></i>
                                    <span class="title">Meal List</span>
                                </a>
                            </li>
                            <li class="nav-item @if(request()->path() == 'admin/mealplans/meals/create') active open @endif">
                                <a href="{{route('meals.create')}}" class="nav-link ">
                                    <i class="fa fa-plus"></i>
                                    <span class="title">Add New Meal</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
</div>