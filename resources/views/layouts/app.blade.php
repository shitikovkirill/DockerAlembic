@extends('layouts.page')

@section('header-right-menu')
    <ul class="header-nav header-nav-options">
        <li>
            <!-- Search form -->
            <form class="navbar-search" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
                </div>
                <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
            </form>
        </li>
        <li class="dropdown hidden-xs">
            <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                <i class="fa fa-bell"></i><sup class="badge style-danger">4</sup>
            </a>
            <ul class="dropdown-menu animation-expand">
                <li class="dropdown-header">Today's messages</li>
                <li>
                    <a class="alert alert-callout alert-warning" href="javascript:void(0);">
                        <img class="pull-right img-circle dropdown-avatar" src="{{ secure_asset(env('THEME')) }}/img/avatar2.jpg?1404026449" alt="" />
                        <strong>Alex Anistor</strong><br/>
                        <small>Testing functionality...</small>
                    </a>
                </li>
                <li>
                    <a class="alert alert-callout alert-info" href="javascript:void(0);">
                        <img class="pull-right img-circle dropdown-avatar" src="{{ secure_asset(env('THEME')) }}/img/avatar3.jpg?1404026799" alt="" />
                        <strong>Alicia Adell</strong><br/>
                        <small>Reviewing last changes...</small>
                    </a>
                </li>
                <li class="dropdown-header">Options</li>
                <li><a href="../../html/pages/login.html">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                <li><a href="../../html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
            </ul><!--end .dropdown-menu -->
        </li><!--end .dropdown -->
        <li class="dropdown hidden-xs">
            <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                <i class="fa fa-area-chart"></i>
            </a>
            <ul class="dropdown-menu animation-expand">
                <li class="dropdown-header">Server load</li>
                <li class="dropdown-progress">
                    <a href="javascript:void(0);">
                        <div class="dropdown-label">
                            <span class="text-light">Server load <strong>Today</strong></span>
                            <strong class="pull-right">93%</strong>
                        </div>
                        <div class="progress"><div class="progress-bar progress-bar-danger" style="width: 93%"></div></div>
                    </a>
                </li><!--end .dropdown-progress -->
                <li class="dropdown-progress">
                    <a href="javascript:void(0);">
                        <div class="dropdown-label">
                            <span class="text-light">Server load <strong>Yesterday</strong></span>
                            <strong class="pull-right">30%</strong>
                        </div>
                        <div class="progress"><div class="progress-bar progress-bar-success" style="width: 30%"></div></div>
                    </a>
                </li><!--end .dropdown-progress -->
                <li class="dropdown-progress">
                    <a href="javascript:void(0);">
                        <div class="dropdown-label">
                            <span class="text-light">Server load <strong>Lastweek</strong></span>
                            <strong class="pull-right">74%</strong>
                        </div>
                        <div class="progress"><div class="progress-bar progress-bar-warning" style="width: 74%"></div></div>
                    </a>
                </li><!--end .dropdown-progress -->
            </ul><!--end .dropdown-menu -->
        </li><!--end .dropdown -->
    </ul><!--end .header-nav-options -->
    <ul class="header-nav header-nav-profile">
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                <img src="{{ secure_asset(env('THEME')) }}/img/avatar1.jpg?1403934956" alt="" />
                <span class="profile-info">
									Daniel Johnson
									<small>Administrator</small>
								</span>
            </a>
            <ul class="dropdown-menu animation-dock">
                <li class="dropdown-header">Config</li>
                <li><a href="../../html/pages/profile.html">My profile</a></li>
                <li><a href="../../html/pages/blog/post.html">My blog <span class="badge style-danger pull-right">16</span></a></li>
                <li><a href="../../html/pages/calendar.html">My appointments</a></li>
                <li class="divider"></li>
                <li><a href="../../html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
                <li><a href="../../html/pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
            </ul><!--end .dropdown-menu -->
        </li><!--end .dropdown -->
    </ul><!--end .header-nav-profile -->
    <ul class="header-nav header-nav-toggle">
        <li>
            <a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                <i class="fa fa-ellipsis-v"></i>
            </a>
        </li>
    </ul><!--end .header-nav-toggle -->
@endsection

@section('main-menu')
    <ul id="main-menu" class="gui-controls">

        <!-- BEGIN DASHBOARD -->
        <li>
            <a href="../../html/dashboards/dashboard.html" >
                <div class="gui-icon"><i class="md md-home"></i></div>
                <span class="title">Dashboard</span>
            </a>
        </li><!--end /menu-li -->
        <!-- END DASHBOARD -->

        <!-- BEGIN EMAIL -->
        <li class="gui-folder">
            <a>
                <div class="gui-icon"><i class="md md-email"></i></div>
                <span class="title">Email</span>
            </a>
            <!--start submenu -->
            <ul>
                <li><a href="../../html/mail/inbox.html" ><span class="title">Inbox</span></a></li>
                <li><a href="../../html/mail/compose.html" ><span class="title">Compose</span></a></li>
                <li><a href="../../html/mail/reply.html" ><span class="title">Reply</span></a></li>
                <li><a href="../../html/mail/message.html" ><span class="title">View message</span></a></li>
            </ul><!--end /submenu -->
        </li><!--end /menu-li -->
        <!-- END EMAIL -->

        <!-- BEGIN DASHBOARD -->
        <li>
            <a href="../../html/layouts/builder.html" >
                <div class="gui-icon"><i class="md md-web"></i></div>
                <span class="title">Layouts</span>
            </a>
        </li><!--end /menu-li -->
        <!-- END DASHBOARD -->

        <!-- BEGIN UI -->
        <li class="gui-folder">
            <a>
                <div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
                <span class="title">UI elements</span>
            </a>
            <!--start submenu -->
            <ul>
                <li><a href="../../html/ui/colors.html" ><span class="title">Colors</span></a></li>
                <li><a href="../../html/ui/typography.html" ><span class="title">Typography</span></a></li>
                <li><a href="../../html/ui/cards.html" ><span class="title">Cards</span></a></li>
                <li><a href="../../html/ui/buttons.html" ><span class="title">Buttons</span></a></li>
                <li><a href="../../html/ui/lists.html" ><span class="title">Lists</span></a></li>
                <li><a href="../../html/ui/tabs.html" ><span class="title">Tabs</span></a></li>
                <li><a href="../../html/ui/accordions.html" ><span class="title">Accordions</span></a></li>
                <li><a href="../../html/ui/messages.html" ><span class="title">Messages</span></a></li>
                <li><a href="../../html/ui/offcanvas.html" ><span class="title">Off-canvas</span></a></li>
                <li><a href="../../html/ui/grid.html" ><span class="title">Grid</span></a></li>
                <li class="gui-folder">
                    <a href="javascript:void(0);">
                        <span class="title">Icons</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../../html/ui/icons/materialicons.html" ><span class="title">Material Design Icons</span></a></li>
                        <li><a href="../../html/ui/icons/fontawesome.html" ><span class="title">Font Awesome</span></a></li>
                        <li><a href="../../html/ui/icons/glyphicons.html" ><span class="title">Glyphicons</span></a></li>
                        <li><a href="../../html/ui/icons/skycons.html" ><span class="title">Skycons</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
            </ul><!--end /submenu -->
        </li><!--end /menu-li -->
        <!-- END UI -->

        <!-- BEGIN TABLES -->
        <li class="gui-folder">
            <a>
                <div class="gui-icon"><i class="fa fa-table"></i></div>
                <span class="title">Tables</span>
            </a>
            <!--start submenu -->
            <ul>
                <li><a href="../../html/tables/static.html" ><span class="title">Static Tables</span></a></li>
                <li><a href="../../html/tables/dynamic.html" ><span class="title">Dynamic Tables</span></a></li>
                <li><a href="../../html/tables/responsive.html" ><span class="title">Responsive Table</span></a></li>
            </ul><!--end /submenu -->
        </li><!--end /menu-li -->
        <!-- END TABLES -->

        <!-- BEGIN FORMS -->
        <li class="gui-folder">
            <a>
                <div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
                <span class="title">Forms</span>
            </a>
            <!--start submenu -->
            <ul>
                <li><a href="../../html/forms/basic.html" ><span class="title">Form basic</span></a></li>
                <li><a href="../../html/forms/advanced.html" ><span class="title">Form advanced</span></a></li>
                <li><a href="../../html/forms/layouts.html" ><span class="title">Form layouts</span></a></li>
                <li><a href="../../html/forms/editors.html" ><span class="title">Editors</span></a></li>
                <li><a href="../../html/forms/validation.html" ><span class="title">Form validation</span></a></li>
                <li><a href="../../html/forms/wizard.html" ><span class="title">Form wizard</span></a></li>
            </ul><!--end /submenu -->
        </li><!--end /menu-li -->
        <!-- END FORMS -->

        <!-- BEGIN PAGES -->
        <li class="gui-folder">
            <a>
                <div class="gui-icon"><i class="md md-computer"></i></div>
                <span class="title">Pages</span>
            </a>
            <!--start submenu -->
            <ul>
                <li class="gui-folder">
                    <a href="javascript:void(0);">
                        <span class="title">Contacts</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../../html/pages/contacts/search.html" ><span class="title">Search</span></a></li>
                        <li><a href="../../html/pages/contacts/details.html" ><span class="title">Contact card</span></a></li>
                        <li><a href="../../html/pages/contacts/add.html" ><span class="title">Insert contact</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <li class="gui-folder">
                    <a href="javascript:void(0);">
                        <span class="title">Search</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../../html/pages/search/results-text.html" ><span class="title">Results - Text</span></a></li>
                        <li><a href="../../html/pages/search/results-text-image.html" ><span class="title">Results - Text and Image</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <li class="gui-folder">
                    <a href="javascript:void(0);">
                        <span class="title">Blog</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../../html/pages/blog/masonry.html" ><span class="title">Blog masonry</span></a></li>
                        <li><a href="../../html/pages/blog/list.html" ><span class="title">Blog list</span></a></li>
                        <li><a href="../../html/pages/blog/post.html" ><span class="title">Blog post</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <li class="gui-folder">
                    <a href="javascript:void(0);">
                        <span class="title">Error pages</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../../html/pages/404.html" ><span class="title">404 page</span></a></li>
                        <li><a href="../../html/pages/500.html" ><span class="title">500 page</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <li><a href="../../html/pages/profile.html" ><span class="title">User profile<span class="badge style-accent">42</span></span></a></li>
                <li><a href="../../html/pages/invoice.html" ><span class="title">Invoice</span></a></li>
                <li><a href="../../html/pages/calendar.html" ><span class="title">Calendar</span></a></li>
                <li><a href="../../html/pages/pricing.html" ><span class="title">Pricing</span></a></li>
                <li><a href="../../html/pages/timeline.html" ><span class="title">Timeline</span></a></li>
                <li><a href="../../html/pages/maps.html" ><span class="title">Maps</span></a></li>
                <li><a href="../../html/pages/locked.html" ><span class="title">Lock screen</span></a></li>
                <li><a href="../../html/pages/login.html" ><span class="title">Login</span></a></li>
                <li><a href="../../html/pages/blank.html" class="active"><span class="title">Blank page</span></a></li>
            </ul><!--end /submenu -->
        </li><!--end /menu-li -->
        <!-- END FORMS -->

        <!-- BEGIN CHARTS -->
        <li>
            <a href="../../html/charts/charts.html" >
                <div class="gui-icon"><i class="md md-assessment"></i></div>
                <span class="title">Charts</span>
            </a>
        </li><!--end /menu-li -->
        <!-- END CHARTS -->

        <!-- BEGIN LEVELS -->
        <li class="gui-folder">
            <a>
                <div class="gui-icon"><i class="fa fa-folder-open fa-fw"></i></div>
                <span class="title">Menu levels demo</span>
            </a>
            <!--start submenu -->
            <ul>
                <li><a href="#"><span class="title">Item 1</span></a></li>
                <li><a href="#"><span class="title">Item 1</span></a></li>
                <li class="gui-folder">
                    <a href="javascript:void(0);">
                        <span class="title">Open level 2</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="#"><span class="title">Item 2</span></a></li>
                        <li class="gui-folder">
                            <a href="javascript:void(0);">
                                <span class="title">Open level 3</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href="#"><span class="title">Item 3</span></a></li>
                                <li><a href="#"><span class="title">Item 3</span></a></li>
                                <li class="gui-folder">
                                    <a href="javascript:void(0);">
                                        <span class="title">Open level 4</span>
                                    </a>
                                    <!--start submenu -->
                                    <ul>
                                        <li><a href="#"><span class="title">Item 4</span></a></li>
                                        <li class="gui-folder">
                                            <a href="javascript:void(0);">
                                                <span class="title">Open level 5</span>
                                            </a>
                                            <!--start submenu -->
                                            <ul>
                                                <li><a href="#"><span class="title">Item 5</span></a></li>
                                                <li><a href="#"><span class="title">Item 5</span></a></li>
                                            </ul><!--end /submenu -->
                                        </li><!--end /submenu-li -->
                                    </ul><!--end /submenu -->
                                </li><!--end /submenu-li -->
                            </ul><!--end /submenu -->
                        </li><!--end /submenu-li -->
                    </ul><!--end /submenu -->
                </li><!--end /submenu-li -->
            </ul><!--end /submenu -->
        </li><!--end /menu-li -->
        <!-- END LEVELS -->

    </ul><!--end .main-menu -->
@endsection