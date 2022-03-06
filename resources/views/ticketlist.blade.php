@extends('layouts.app')

@section('content')
<div class="page">
			<div class="page-main is-expanded">
					<!--aside open-->
                    <aside class="app-sidebar open">
                        <div class="app-sidebar__logo">
                            <a class="header-brand" href="https://uhelp.spruko.com/uhelp/admin">


                                <img src="https://uhelp.spruko.com/uhelp/uploads/logo/logo/logo-white.png" class="header-brand-img dark-logo" alt="logo">



                                <img src="https://uhelp.spruko.com/uhelp/uploads/logo/darklogo/logo.png" class="header-brand-img desktop-lgo" alt="dark-logo">



                                <img src="https://uhelp.spruko.com/uhelp/uploads/logo/icon/icon.png" class="header-brand-img mobile-logo" alt="mobile-logo">



                                <img src="https://uhelp.spruko.com/uhelp/uploads/logo/darkicon/icon-white.png" class="header-brand-img darkmobile-logo" alt="mobile-dark-logo">

                            </a>
                        </div>
                        <div class="app-sidebar3 ps is-expanded">
                            <div class="app-sidebar__user active is-expanded">
                                <div class="dropdown user-pro-body text-center">
                                    <div class="user-pic">

                                            <img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="avatar-xxl rounded-circle mb-1" alt="default">

                                    </div>
                                    <div class="user-info">
                                        <h5 class=" mb-2">Agent Agent</h5>

                                        <span class="text-muted app-sidebar__user-name text-sm">Agent</span>

                                        <div class="allprofilerating pt-1" data-rating="3.6791443850267"><div class="jq-star" style="width:20px;  height:20px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:15px;" xml:space="preserve"><style type="text/css">.svg-empty-639{fill:url(#639_SVGID_1_);}.svg-hovered-639{fill:url(#639_SVGID_2_);}.svg-active-639{fill:url(#639_SVGID_3_);}.svg-rated-639{fill:crimson;}</style><linearGradient id="639_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#17263a"></stop><stop offset="1" style="stop-color:#17263a"></stop> </linearGradient><linearGradient id="639_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:orange"></stop><stop offset="1" style="stop-color:orange"></stop> </linearGradient><linearGradient id="639_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#F2B827"></stop><stop offset="1" style="stop-color:#F2B827"></stop> </linearGradient><polygon data-side="center" class="svg-empty-639" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: #556a86;"></polygon><polygon data-side="left" class="svg-active-639" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon><polygon data-side="right" class="svg-active-639" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon></svg></div><div class="jq-star" style="width:20px;  height:20px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:15px;" xml:space="preserve"><style type="text/css">.svg-empty-639{fill:url(#639_SVGID_1_);}.svg-hovered-639{fill:url(#639_SVGID_2_);}.svg-active-639{fill:url(#639_SVGID_3_);}.svg-rated-639{fill:crimson;}</style><linearGradient id="639_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#17263a"></stop><stop offset="1" style="stop-color:#17263a"></stop> </linearGradient><linearGradient id="639_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:orange"></stop><stop offset="1" style="stop-color:orange"></stop> </linearGradient><linearGradient id="639_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#F2B827"></stop><stop offset="1" style="stop-color:#F2B827"></stop> </linearGradient><polygon data-side="center" class="svg-empty-639" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: #556a86;"></polygon><polygon data-side="left" class="svg-active-639" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon><polygon data-side="right" class="svg-active-639" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon></svg></div><div class="jq-star" style="width:20px;  height:20px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:15px;" xml:space="preserve"><style type="text/css">.svg-empty-639{fill:url(#639_SVGID_1_);}.svg-hovered-639{fill:url(#639_SVGID_2_);}.svg-active-639{fill:url(#639_SVGID_3_);}.svg-rated-639{fill:crimson;}</style><linearGradient id="639_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#17263a"></stop><stop offset="1" style="stop-color:#17263a"></stop> </linearGradient><linearGradient id="639_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:orange"></stop><stop offset="1" style="stop-color:orange"></stop> </linearGradient><linearGradient id="639_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#F2B827"></stop><stop offset="1" style="stop-color:#F2B827"></stop> </linearGradient><polygon data-side="center" class="svg-empty-639" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: #556a86;"></polygon><polygon data-side="left" class="svg-active-639" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon><polygon data-side="right" class="svg-active-639" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon></svg></div><div class="jq-star" style="width:20px;  height:20px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:15px;" xml:space="preserve"><style type="text/css">.svg-empty-639{fill:url(#639_SVGID_1_);}.svg-hovered-639{fill:url(#639_SVGID_2_);}.svg-active-639{fill:url(#639_SVGID_3_);}.svg-rated-639{fill:crimson;}</style><linearGradient id="639_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#17263a"></stop><stop offset="1" style="stop-color:#17263a"></stop> </linearGradient><linearGradient id="639_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:orange"></stop><stop offset="1" style="stop-color:orange"></stop> </linearGradient><linearGradient id="639_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#F2B827"></stop><stop offset="1" style="stop-color:#F2B827"></stop> </linearGradient><polygon data-side="center" class="svg-empty-639" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: #556a86;"></polygon><polygon data-side="left" class="svg-active-639" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon><polygon data-side="right" class="svg-empty-639" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon></svg></div><div class="jq-star" style="width:20px;  height:20px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:15px;" xml:space="preserve"><style type="text/css">.svg-empty-639{fill:url(#639_SVGID_1_);}.svg-hovered-639{fill:url(#639_SVGID_2_);}.svg-active-639{fill:url(#639_SVGID_3_);}.svg-rated-639{fill:crimson;}</style><linearGradient id="639_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#17263a"></stop><stop offset="1" style="stop-color:#17263a"></stop> </linearGradient><linearGradient id="639_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:orange"></stop><stop offset="1" style="stop-color:orange"></stop> </linearGradient><linearGradient id="639_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#F2B827"></stop><stop offset="1" style="stop-color:#F2B827"></stop> </linearGradient><polygon data-side="center" class="svg-empty-639" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: #556a86;"></polygon><polygon data-side="left" class="svg-empty-639" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon><polygon data-side="right" class="svg-empty-639" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon></svg></div></div>
                                    </div>
                                </div>
                            </div>
                            <ul class="side-menu custom-ul open">

                                <li class="slide is-expanded">
                                    <a class="side-menu__item active" href="https://uhelp.spruko.com/uhelp/admin">
                                        <svg class="sidemenu_icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"></path></svg>
                                        <span class="side-menu__label">Dashboard</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" href="https://uhelp.spruko.com/uhelp/admin/profile">
                                        <svg class="sidemenu_icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 9c2.7 0 5.8 1.29 6 2v1H6v-.99c.2-.72 3.3-2.01 6-2.01m0-11C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"></path></svg>
                                        <span class="side-menu__label">Profile</span>
                                    </a>
                                </li>

                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                        <svg class="sidemenu_icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M22 10V6c0-1.11-.9-2-2-2H4c-1.1 0-1.99.89-1.99 2v4c1.1 0 1.99.9 1.99 2s-.89 2-2 2v4c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-4c-1.1 0-2-.9-2-2s.9-2 2-2zm-2-1.46c-1.19.69-2 1.99-2 3.46s.81 2.77 2 3.46V18H4v-2.54c1.19-.69 2-1.99 2-3.46 0-1.48-.8-2.77-1.99-3.46L4 6h16v2.54zM11 15h2v2h-2zm0-4h2v2h-2zm0-4h2v2h-2z"></path></svg>
                                        <span class="side-menu__label">Tickets</span><i class="angle fa fa-angle-right"></i>
                                    </a>
                                    <ul class="slide-menu custom-ul">

                                        <li><a href="https://uhelp.spruko.com/uhelp/admin/createticket" class="slide-item">Create Ticket</a></li>


                                        <li><a href="https://uhelp.spruko.com/uhelp/admin/alltickets" class="slide-item">All Tickets</a></li>

                                        <li><a href="https://uhelp.spruko.com/uhelp/admin/myticket" class="slide-item">My Tickets</a></li>

                                        <li><a href="https://uhelp.spruko.com/uhelp/admin/activeticket" class="slide-item">Active Tickets</a></li>

                                        <li><a href="https://uhelp.spruko.com/uhelp/admin/closedticket" class="slide-item">Closed Tickets</a></li>

                                        <li><a href="https://uhelp.spruko.com/uhelp/admin/assignedtickets" class="slide-item">Assigned Tickets</a></li>

                                        <li><a href="https://uhelp.spruko.com/uhelp/admin/myassignedtickets" class="slide-item">My Assigned Tickets</a></li>

                                        <li><a href="https://uhelp.spruko.com/uhelp/admin/onholdtickets" class="slide-item"> On-Hold Tickets </a></li>

                                        <li><a href="https://uhelp.spruko.com/uhelp/admin/overduetickets" class="slide-item"> Overdue Tickets</a></li>

                                    </ul>
                                </li>

                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                        <svg class="sidemenu_icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"></path></svg>
                                        <span class="side-menu__label">Notifications</span><i class="angle fa fa-angle-right"></i>
                                    </a>
                                    <ul class="slide-menu custom-ul">
                                        <li><a href="https://uhelp.spruko.com/uhelp/admin/notifications" class="slide-item smark-all">All Notifications</a></li>


                                    </ul>
                                </li>

                            </ul>

                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    </aside>
                    <!--aside closed-->

					<div class="app-content main-content">
						<div class="side-app">
							<!--app header-->
							<div class="app-header header header-main">
								<div class="container-fluid">
									<div class="d-flex">
										<a class="header-brand" href="https://uhelp.spruko.com/uhelp/admin">


										<img src="https://uhelp.spruko.com/uhelp/uploads/logo/logo/logo-white.png" class="header-brand-img dark-logo" alt="logo">


										<img src="https://uhelp.spruko.com/uhelp/uploads/logo/darklogo/logo.png" class="header-brand-img desktop-lgo" alt="dark-logo">



										<img src="https://uhelp.spruko.com/uhelp/uploads/logo/icon/icon.png" class="header-brand-img mobile-logo" alt="mobile-logo">



										<img src="https://uhelp.spruko.com/uhelp/uploads/logo/darkicon/icon-white.png" class="header-brand-img darkmobile-logo" alt="mobile-dark-logo">


										</a>
										<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
											<a class="open-toggle" href="#">
												<i class="feather feather-menu"></i>
											</a>
											<a class="close-toggle" href="#">
												<i class="feather feather-x"></i>
											</a>
										</div>
										<div class="header-buttons-main">
											<a class="btn btn-outline-light header-buttons text-center" href="https://uhelp.spruko.com/uhelp/admin/createticket"><i class="fa fa-paper-plane-o pe-lg-2"></i><span class="d-m-none">Create Ticket</span></a>
											<a class="btn btn-outline-light header-buttons text-center visitsite ms-2" href="https://uhelp.spruko.com/uhelp" target="_blank"><i class="fe fe-globe pe-lg-2"></i><span class="d-m-none">Visit Site</span></a>

										</div><!-- SEARCH -->
										<div class="d-flex order-lg-2 my-auto ms-auto dropdown-container align-items-center">

											<div class="dropdown header-flags">
												<a href="#" class="nav-link text-uppercase dropdown-toggle" data-bs-toggle="dropdown">
													<span class="">en </span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated text-uppercase">

														<a href="https://uhelp.spruko.com/uhelp/admin/language/ar" class="dropdown-item d-flex">
														<span class="">ar</span>
														</a>

														<a href="https://uhelp.spruko.com/uhelp/admin/language/en" class="dropdown-item d-flex">
														<span class="">en</span>
														</a>

												</div>
											</div>

											<div class="dropdown header-fullscreen">
												<a class="nav-link icon full-screen-link">
													<i class="feather feather-maximize fullscreen-button fullscreen header-icons"></i>
													<i class="feather feather-minimize fullscreen-button exit-fullscreen header-icons"></i>
												</a>
											</div>
											<div class="dropdown header-message">
												<a class="nav-link icon" data-bs-toggle="dropdown">
													<i class="feather feather-bell header-icon"></i>
													<!-- Counter - Alerts -->
													<span class="badge badge-success badge-counter">4</span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated p-0 notification-dropdown-container">
													<div class="header-dropdown-list message-menu" id="message-menu">

															<a class="dropdown-item border-bottom mark-as-read" href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-1" data-id="8bc64002-fe7c-4753-a2e0-a4cdd13461b7">
																<div class="d-flex align-items-center">
																	<div class="">
																		<span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20 text-success"></i></span>
																	</div>
																	<div class="d-flex">
																		<div class="ps-3">
																			<h6 class="mb-1">Ab sed iste dolorem aliquam di...</h6>
																			<p class="fs-13 mb-1 text-wrap"> A new ticket has been created SP-1</p>
																			<div class="small text-muted">
																				3 minutes ago
																			</div>
																		</div>
																	</div>
																</div>
															</a>

															<a class="dropdown-item border-bottom mark-as-read" href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-1" data-id="d697a845-82e6-44c3-9bd9-821e2826b362">
																<div class="d-flex align-items-center">
																	<div class="">
																		<span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20 text-success"></i></span>
																	</div>
																	<div class="d-flex">
																		<div class="ps-3">
																			<h6 class="mb-1">Ab sed iste dolorem aliquam di...</h6>
																			<p class="fs-13 mb-1 text-wrap"> A new ticket has been created SP-1</p>
																			<div class="small text-muted">
																				3 minutes ago
																			</div>
																		</div>
																	</div>
																</div>
															</a>

													</div>
													<div class="text-center p-2">
														<a href="https://uhelp.spruko.com/uhelp/admin/notifications" class="smark-all">See All Notifications (4)</a>
													</div>
												</div>
											</div>
											<div class="dropdown profile-dropdown">
												<a href="#" class="nav-link pe-1 ps-0 leading-none" data-bs-toggle="dropdown">
													<span>

															<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="avatar avatar-md bradius rounded-circle" alt="default">

													</span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
													<div class="p-3 text-center border-bottom">
														<a href="https://uhelp.spruko.com/uhelp/admin/profile" class="text-center user pb-0 font-weight-bold">Agent Agent</a>
																												<p class="text-center user-semi-title">Agent</p>
																											</div>
													<a class="dropdown-item d-flex" href="https://uhelp.spruko.com/uhelp/admin/profile">
														<i class="feather feather-user me-3 fs-16 my-auto"></i>
														<div class="mt-1">Profile</div>
													</a>
													<form id="logout-form" action="https://uhelp.spruko.com/uhelp/admin/logout" method="POST">
														<input type="hidden" name="_token" value="tgT6sZadzLBvL4gXu4RbC91DcOp0M8BMHi1niF5Q">
														<button type="submit" class="dropdown-item d-flex">
															<i class="feather feather-power me-3 fs-16 my-auto"></i>
															<div class="mt-1">Log Out</div>
														</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/app header-->

						<div class="alert alert-success sprukoclosebtn mt-5" style="">
								<button class="btn-close sprukoalertclose">×</button>
								Due to the demo mode, the data in this application will be reset every 30 minutes.
							</div>


							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2">Dashboard</span></h4>
								</div>
								<div class="page-rightheader ms-md-auto">
									<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
										<div class="d-flex breadcrumb-res">
											<div class="header-datepicker me-3">
												<div class="input-group">
													<div class="input-group-text">
															<i class="feather feather-calendar"></i>
													</div><input class="form-control fc-datepicker pb-0 pt-0" value="Mar-06-2022" type="text" disabled="">
												</div>
											</div>
											<div class="header-datepicker picker2 me-3">
												<div class="input-group">
													<div class="input-group-text">
															<i class="feather feather-clock"></i>
													</div><!-- input-group-text -->
													<input id="tpBasic " type="text" placeholder="07:35 AM" class="form-control input-small pb-0 pt-0" disabled="">
												</div>
											</div><!-- wd-150 -->
										</div>
									</div>
								</div>
							</div>
							<!--End Page header-->

							<!--Row-->
							<div class="row">
								<div class="col-xl-12 col-md-12 col-lg-12">
									<div class="row">
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="https://uhelp.spruko.com/uhelp/admin/alltickets" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"><span class="fs-14 font-weight-semibold">All Tickets</span>
																<h3 class="mb-0 mt-1 mb-2">30</h3>
															</div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="https://uhelp.spruko.com/uhelp/admin/activeticket" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold">Active Tickets</span>
															<h3 class="mb-0 mt-1  mb-2">15</h3> </div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary brround my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="https://uhelp.spruko.com/uhelp/admin/closedticket" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold">Closed Tickets</span>
																<h3 class="mb-0 mt-1 mb-2">9</h3>
															</div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="https://uhelp.spruko.com/uhelp/admin/onholdtickets" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold">On-Hold Tickets</span>
															<h3 class="mb-0 mt-1  mb-2">6</h3> </div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary brround my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="https://uhelp.spruko.com/uhelp/admin/myticket" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"><span class="fs-14 font-weight-semibold">My Tickets</span>
																<h3 class="mb-0 mt-1 mb-2">0</h3>
															</div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="https://uhelp.spruko.com/uhelp/admin/assignedtickets" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold">Assigned Tickets</span>
															<h3 class="mb-0 mt-1  mb-2">0</h3> </div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary brround my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="https://uhelp.spruko.com/uhelp/admin/myassignedtickets" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"><span class="fs-14 font-weight-semibold">My Assigned Tickets</span>
																<h3 class="mb-0 mt-1 mb-2">0</h3>
															</div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="https://uhelp.spruko.com/uhelp/admin/overduetickets" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold">Overdue Tickets</span>
															<h3 class="mb-0 mt-1  mb-2">2</h3> </div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary brround my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="card mb-0">
												<div class="card-header border-0">
													<h4 class="card-title">Tickets Summary</h4>
													<div class="card-options card-header-styles">
														<small class="me-1 mt-1">Enable Auto Refresh (every 30sec)</small>
														<div class="float-end mt-0">
															<div class="switch-toggle">
																<a class="onoffswitch2">
																	<input type="checkbox" data-id="7" name="checkbox" id="myonoffswitch18" class=" toggle-class onoffswitch2-checkbox" value="1">
																	<label for="myonoffswitch18" class="toggle-class onoffswitch2-label" data-id="7"></label>
																</a>
															</div>
														</div>
													</div>
												</div>
												<div class="card-body">
													<div class="table-responsive delete-button">
													<div id="supportticket-dashe_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-md-12 col-lg-1"><div class="dataTables_length" id="supportticket-dashe_length"><label>Show <select name="supportticket-dashe_length" aria-controls="supportticket-dashe" class="form-select form-select-sm select2-hidden-accessible" data-select2-id="select2-data-1-7ofg" tabindex="-1" aria-hidden="true"><option value="10" data-select2-id="select2-data-3-ivk2">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-6qy4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-supportticket-dashe_length-ak-container" aria-controls="select2-supportticket-dashe_length-ak-container"><span class="select2-selection__rendered" id="select2-supportticket-dashe_length-ak-container" role="textbox" aria-readonly="true" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> entries</label></div></div><div class="col-md-12 col-lg-4"><div class="dt-buttons btn-group flex-wrap"> <button class="btn btn-outline-light ticketdelete" tabindex="0" aria-controls="supportticket-dashe" type="button"><span><i class="fe fe-trash"></i> Delete</span></button> <button class="btn btn-outline-light" tabindex="0" aria-controls="supportticket-dashe" type="button"><span> <i class="fe fe-refresh-cw"></i> </span></button> </div></div><div class="col-md-12 col-lg-7"><div id="supportticket-dashe_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="supportticket-dashe"></label></div></div><div id="supportticket-dashe_processing" class="dataTables_processing card" style="display: none;">Processing...</div></div><table class="table table-vcenter text-nowrap table-bordered table-striped w-100 ticketdeleterow dataTable no-footer dtr-inline collapsed" id="supportticket-dashe" role="grid" aria-describedby="supportticket-dashe_info" style="width: 1470px;">
														<thead>
															<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 34px;" aria-label="S.No">S.No</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 18px;" aria-label="


																" width="10">
																	<input type="checkbox" id="customCheckAll">
																	<label for="customCheckAll"></label>
																</th><th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 181px;" aria-label="#ID: activate to sort column ascending">#ID</th><th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 114px;" aria-label="User: activate to sort column ascending">User</th><th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 260px;" aria-label="Title: activate to sort column ascending">Title</th><th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 67px;" aria-label="Priority: activate to sort column ascending">Priority</th><th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 86px;" aria-label="Category: activate to sort column ascending">Category</th><th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 87px;" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 87px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 166px;" aria-label="Assign To: activate to sort column ascending">Assign To</th><th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Last Reply: activate to sort column ascending">Last Reply</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Actions">Actions</th></tr>
														</thead>
														<tbody id="refresh">

														<tr class="odd"><td class="dtr-control">1</td><td><input type="checkbox" name="student_checkbox[]" class="checkall" value="29"></td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SPG-29">SPG-29</a> <span class="badge badge-danger-light">Overdue</span></td><td>Pasquale Kessler</td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SPG-29">Et quasi aliquid voluptatem ipsam animi...</a></td><td><span class="badge badge-danger-light">High</span></td><td>est</td><td>May-12-2012</td><td><span class="badge badge-info">Inprogress</span></td><td><a href="javascript:void(0)" data-id="29" id="assigned" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Assign">
                            Assign
                            </a></td><td style="display: none;">9 years ago</td><td style="display: none;"><div class="d-flex"><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SPG-29" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"></i></a><a href="javascript:void(0)" data-id="29" class="action-btns1" id="show-delete"><i class="feather feather-trash-2 text-danger" data-id="29" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"></i></a></div></td></tr><tr class="even"><td class="dtr-control">2</td><td><input type="checkbox" name="student_checkbox[]" class="checkall" value="30"></td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SPG-30">SPG-30</a> <span class="badge badge-danger-light">Overdue</span> <span class="badge badge-warning-light">Note</span></td><td>Casimer Hill</td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SPG-30">Perspiciatis temporibus commodi ducimus...</a></td><td><span class="badge badge-success-light">Low</span></td><td>accusantium</td><td>May-12-2012</td><td><span class="badge badge-info">Inprogress</span></td><td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">

                                <a href="javascript:void(0)" data-id="30" class="btn btn-outline-primary" id="assigned" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Change">Stephania Tremblay</a>

                                <a href="javascript:void(0)" data-id="30" class="btn btn-outline-primary" id="btnremove" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Unassign" aria-label="Unassign"><i class="fe fe-x"></i></a>
                                </div>
                                </td><td style="display: none;">9 years ago</td><td style="display: none;"><div class="d-flex"><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SPG-30" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"></i></a><a href="javascript:void(0)" data-id="30" class="action-btns1" id="show-delete"><i class="feather feather-trash-2 text-danger" data-id="30" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"></i></a></div></td></tr><tr class="odd"><td class="dtr-control">3</td><td><input type="checkbox" name="student_checkbox[]" class="checkall" value="27"></td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-27">SP-27</a> <span class="badge badge-danger-light"></span></td><td>Gail Wilderman</td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-27">Recusandae inventore in id cumque fugit...</a></td><td>~</td><td>est</td><td>May-12-2012</td><td><span class="badge badge-teal">Re-Open</span> </td><td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">

                                <a href="javascript:void(0)" data-id="27" class="btn btn-outline-primary" id="assigned" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Change">Hayley Hills</a>

                                <a href="javascript:void(0)" data-id="27" class="btn btn-outline-primary" id="btnremove" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Unassign" aria-label="Unassign"><i class="fe fe-x"></i></a>
                                </div>
                                </td><td style="display: none;">9 years ago</td><td style="display: none;"><div class="d-flex"><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-27" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"></i></a><a href="javascript:void(0)" data-id="27" class="action-btns1" id="show-delete"><i class="feather feather-trash-2 text-danger" data-id="27" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"></i></a></div></td></tr><tr class="even"><td class="dtr-control">4</td><td><input type="checkbox" name="student_checkbox[]" class="checkall" value="28"></td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SPG-28">SPG-28</a> <span class="badge badge-danger-light"></span> <span class="badge badge-warning-light">Note</span></td><td>Sabina Volkman</td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SPG-28">Suscipit ad qui nobis corporis et.</a></td><td>~</td><td>omnis</td><td>May-12-2012</td><td><span class="badge badge-teal">Re-Open</span> </td><td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">

                                <a href="javascript:void(0)" data-id="28" class="btn btn-outline-primary" id="assigned" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Change">Emmett Rau</a>

                                <a href="javascript:void(0)" data-id="28" class="btn btn-outline-primary" id="btnremove" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Unassign" aria-label="Unassign"><i class="fe fe-x"></i></a>
                                </div>
                                </td><td style="display: none;">9 years ago</td><td style="display: none;"><div class="d-flex"><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SPG-28" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"></i></a><a href="javascript:void(0)" data-id="28" class="action-btns1" id="show-delete"><i class="feather feather-trash-2 text-danger" data-id="28" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"></i></a></div></td></tr><tr class="odd"><td class="dtr-control">5</td><td><input type="checkbox" name="student_checkbox[]" class="checkall" value="25"></td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-25">SP-25</a> <span class="badge badge-danger-light"></span> <span class="badge badge-warning-light">Note</span></td><td>Chaz Abshire</td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-25">Et occaecati nisi architecto iste nostru...</a></td><td><span class="badge badge-danger-light">High</span></td><td>accusantium</td><td>May-12-2012</td><td><span class="badge badge-danger">Closed</span></td><td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">

                                <a href="javascript:void(0)" data-id="25" class="btn btn-outline-primary" id="assigned" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Change">Ola Hilpert</a>

                                <a href="javascript:void(0)" data-id="25" class="btn btn-outline-primary" id="btnremove" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Unassign" aria-label="Unassign"><i class="fe fe-x"></i></a>
                                </div>
                                </td><td style="display: none;">9 years ago</td><td style="display: none;"><div class="d-flex"><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-25" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"></i></a><a href="javascript:void(0)" data-id="25" class="action-btns1" id="show-delete"><i class="feather feather-trash-2 text-danger" data-id="25" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"></i></a></div></td></tr><tr class="even"><td class="dtr-control">6</td><td><input type="checkbox" name="student_checkbox[]" class="checkall" value="26"></td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-26">SP-26</a> <span class="badge badge-danger-light"></span> <span class="badge badge-warning-light">Note</span></td><td>Odie McGlynn</td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-26">Ut velit sint labore voluptatem inventor...</a></td><td><span class="badge badge-warning-light">Medium</span></td><td>omnis</td><td>May-12-2012</td><td><span class="badge badge-danger">Closed</span></td><td><a href="javascript:void(0)" data-id="26" id="assigned" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Assign">
                            Assign
                            </a></td><td style="display: none;">9 years ago</td><td style="display: none;"><div class="d-flex"><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-26" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"></i></a><a href="javascript:void(0)" data-id="26" class="action-btns1" id="show-delete"><i class="feather feather-trash-2 text-danger" data-id="26" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"></i></a></div></td></tr><tr class="odd"><td class="dtr-control">7</td><td><input type="checkbox" name="student_checkbox[]" class="checkall" value="23"></td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-23">SP-23</a> <span class="badge badge-danger-light"></span></td><td>Elmer Okuneva</td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-23">Quae et eligendi incidunt nobis.</a></td><td><span class="badge badge-danger-dark">Critical</span></td><td>omnis</td><td>May-12-2012</td><td><span class="badge badge-danger">Closed</span></td><td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">

                                <a href="javascript:void(0)" data-id="23" class="btn btn-outline-primary" id="assigned" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Change">Patience Ratke</a>

                                <a href="javascript:void(0)" data-id="23" class="btn btn-outline-primary" id="btnremove" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Unassign" aria-label="Unassign"><i class="fe fe-x"></i></a>
                                </div>
                                </td><td style="display: none;">9 years ago</td><td style="display: none;"><div class="d-flex"><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-23" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"></i></a><a href="javascript:void(0)" data-id="23" class="action-btns1" id="show-delete"><i class="feather feather-trash-2 text-danger" data-id="23" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"></i></a></div></td></tr><tr class="even"><td class="dtr-control">8</td><td><input type="checkbox" name="student_checkbox[]" class="checkall" value="24"></td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-24">SP-24</a> <span class="badge badge-danger-light"></span></td><td>Freda Berge</td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-24">Amet est autem et et id.</a></td><td><span class="badge badge-success-light">Low</span></td><td>accusantium</td><td>May-12-2012</td><td><span class="badge badge-danger">Closed</span></td><td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">

                                <a href="javascript:void(0)" data-id="24" class="btn btn-outline-primary" id="assigned" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Change">Marcia Stokes</a>

                                <a href="javascript:void(0)" data-id="24" class="btn btn-outline-primary" id="btnremove" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Unassign" aria-label="Unassign"><i class="fe fe-x"></i></a>
                                </div>
                                </td><td style="display: none;">9 years ago</td><td style="display: none;"><div class="d-flex"><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-24" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"></i></a><a href="javascript:void(0)" data-id="24" class="action-btns1" id="show-delete"><i class="feather feather-trash-2 text-danger" data-id="24" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"></i></a></div></td></tr><tr class="odd"><td class="dtr-control">9</td><td><input type="checkbox" name="student_checkbox[]" class="checkall" value="22"></td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-22">SP-22</a> <span class="badge badge-danger-light"></span> <span class="badge badge-warning-light">Note</span></td><td>Wyman Gulgowski</td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-22">Sed cum fugiat cupiditate ab.</a></td><td><span class="badge badge-warning-light">Medium</span></td><td>est</td><td>May-12-2012</td><td><span class="badge badge-warning">On-Hold</span></td><td><a href="javascript:void(0)" data-id="22" id="assigned" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Assign">
                            Assign
                            </a></td><td style="display: none;">9 years ago</td><td style="display: none;"><div class="d-flex"><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-22" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"></i></a><a href="javascript:void(0)" data-id="22" class="action-btns1" id="show-delete"><i class="feather feather-trash-2 text-danger" data-id="22" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"></i></a></div></td></tr><tr class="even"><td class="dtr-control">10</td><td><input type="checkbox" name="student_checkbox[]" class="checkall" value="19"></td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-19">SP-19</a> <span class="badge badge-danger-light"></span></td><td>Devante Kerluke</td><td><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-19">Molestiae recusandae ex sunt possimus pa...</a></td><td><span class="badge badge-danger-dark">Critical</span></td><td>accusantium</td><td>May-12-2012</td><td><span class="badge badge-info">Inprogress</span></td><td><a href="javascript:void(0)" data-id="19" id="assigned" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Assign">
                            Assign
                            </a></td><td style="display: none;">9 years ago</td><td style="display: none;"><div class="d-flex"><a href="https://uhelp.spruko.com/uhelp/admin/ticket-view/SP-19" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"></i></a><a href="javascript:void(0)" data-id="19" class="action-btns1" id="show-delete"><i class="feather feather-trash-2 text-danger" data-id="19" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"></i></a></div></td></tr></tbody>
													</table><div class="dataTables_info" id="supportticket-dashe_info" role="status" aria-live="polite">Showing 1 to 10 of 30 entries</div><div class="dataTables_paginate paging_simple_numbers" id="supportticket-dashe_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="supportticket-dashe_previous"><a href="#" aria-controls="supportticket-dashe" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="supportticket-dashe" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="supportticket-dashe" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="supportticket-dashe" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="supportticket-dashe_next"><a href="#" aria-controls="supportticket-dashe" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li></ul></div></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div><!-- end app-content-->
			</div>
			<!--Footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							<p class="mb-0">Copyright © 2022 <a href="https://web.facebook.com/profile.php?id=100078985773725"> Baltus Dreyer </a>. Developed by <a href="https://web.facebook.com/profile.php?id=100078985773725">Baltus Dreyer</a></p>
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->

		</div>
@endsection
