@extends('layouts.app')

@section('content')
<div class="page">
			<div class="page-main">
					<!--aside open-->
                    <aside class="app-sidebar">
                        <div class="app-sidebar__logo">
                            <a class="header-brand" href="https://uhelp.spruko.com/uhelp/admin">


                                <img src="https://uhelp.spruko.com/uhelp/uploads/logo/logo/logo-white.png" class="header-brand-img dark-logo" alt="logo">



                                <img src="https://uhelp.spruko.com/uhelp/uploads/logo/darklogo/logo.png" class="header-brand-img desktop-lgo" alt="dark-logo">



                                <img src="https://uhelp.spruko.com/uhelp/uploads/logo/icon/icon.png" class="header-brand-img mobile-logo" alt="mobile-logo">



                                <img src="https://uhelp.spruko.com/uhelp/uploads/logo/darkicon/icon-white.png" class="header-brand-img darkmobile-logo" alt="mobile-dark-logo">

                            </a>
                        </div>
                        <div class="app-sidebar3 ps">
                            <div class="app-sidebar__user">
                                <div class="dropdown user-pro-body text-center">
                                    <div class="user-pic">

                                            <img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="avatar-xxl rounded-circle mb-1" alt="default">

                                    </div>
                                    <div class="user-info">
                                        <h5 class=" mb-2">Agent Agent</h5>

                                        <span class="text-muted app-sidebar__user-name text-sm">Agent</span>

                                        <div class="allprofilerating pt-1" data-rating="3.6791443850267"><div class="jq-star" style="width:20px;  height:20px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:15px;" xml:space="preserve"><style type="text/css">.svg-empty-190{fill:url(#190_SVGID_1_);}.svg-hovered-190{fill:url(#190_SVGID_2_);}.svg-active-190{fill:url(#190_SVGID_3_);}.svg-rated-190{fill:crimson;}</style><linearGradient id="190_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#17263a"></stop><stop offset="1" style="stop-color:#17263a"></stop> </linearGradient><linearGradient id="190_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:orange"></stop><stop offset="1" style="stop-color:orange"></stop> </linearGradient><linearGradient id="190_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#F2B827"></stop><stop offset="1" style="stop-color:#F2B827"></stop> </linearGradient><polygon data-side="center" class="svg-empty-190" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: #556a86;"></polygon><polygon data-side="left" class="svg-active-190" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon><polygon data-side="right" class="svg-active-190" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon></svg></div><div class="jq-star" style="width:20px;  height:20px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:15px;" xml:space="preserve"><style type="text/css">.svg-empty-190{fill:url(#190_SVGID_1_);}.svg-hovered-190{fill:url(#190_SVGID_2_);}.svg-active-190{fill:url(#190_SVGID_3_);}.svg-rated-190{fill:crimson;}</style><linearGradient id="190_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#17263a"></stop><stop offset="1" style="stop-color:#17263a"></stop> </linearGradient><linearGradient id="190_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:orange"></stop><stop offset="1" style="stop-color:orange"></stop> </linearGradient><linearGradient id="190_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#F2B827"></stop><stop offset="1" style="stop-color:#F2B827"></stop> </linearGradient><polygon data-side="center" class="svg-empty-190" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: #556a86;"></polygon><polygon data-side="left" class="svg-active-190" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon><polygon data-side="right" class="svg-active-190" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon></svg></div><div class="jq-star" style="width:20px;  height:20px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:15px;" xml:space="preserve"><style type="text/css">.svg-empty-190{fill:url(#190_SVGID_1_);}.svg-hovered-190{fill:url(#190_SVGID_2_);}.svg-active-190{fill:url(#190_SVGID_3_);}.svg-rated-190{fill:crimson;}</style><linearGradient id="190_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#17263a"></stop><stop offset="1" style="stop-color:#17263a"></stop> </linearGradient><linearGradient id="190_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:orange"></stop><stop offset="1" style="stop-color:orange"></stop> </linearGradient><linearGradient id="190_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#F2B827"></stop><stop offset="1" style="stop-color:#F2B827"></stop> </linearGradient><polygon data-side="center" class="svg-empty-190" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: #556a86;"></polygon><polygon data-side="left" class="svg-active-190" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon><polygon data-side="right" class="svg-active-190" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon></svg></div><div class="jq-star" style="width:20px;  height:20px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:15px;" xml:space="preserve"><style type="text/css">.svg-empty-190{fill:url(#190_SVGID_1_);}.svg-hovered-190{fill:url(#190_SVGID_2_);}.svg-active-190{fill:url(#190_SVGID_3_);}.svg-rated-190{fill:crimson;}</style><linearGradient id="190_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#17263a"></stop><stop offset="1" style="stop-color:#17263a"></stop> </linearGradient><linearGradient id="190_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:orange"></stop><stop offset="1" style="stop-color:orange"></stop> </linearGradient><linearGradient id="190_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#F2B827"></stop><stop offset="1" style="stop-color:#F2B827"></stop> </linearGradient><polygon data-side="center" class="svg-empty-190" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: #556a86;"></polygon><polygon data-side="left" class="svg-active-190" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon><polygon data-side="right" class="svg-empty-190" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon></svg></div><div class="jq-star" style="width:20px;  height:20px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305; stroke-width:15px;" xml:space="preserve"><style type="text/css">.svg-empty-190{fill:url(#190_SVGID_1_);}.svg-hovered-190{fill:url(#190_SVGID_2_);}.svg-active-190{fill:url(#190_SVGID_3_);}.svg-rated-190{fill:crimson;}</style><linearGradient id="190_SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#17263a"></stop><stop offset="1" style="stop-color:#17263a"></stop> </linearGradient><linearGradient id="190_SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:orange"></stop><stop offset="1" style="stop-color:orange"></stop> </linearGradient><linearGradient id="190_SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="250"><stop offset="0" style="stop-color:#F2B827"></stop><stop offset="1" style="stop-color:#F2B827"></stop> </linearGradient><polygon data-side="center" class="svg-empty-190" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: #556a86;"></polygon><polygon data-side="left" class="svg-empty-190" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;"></polygon><polygon data-side="right" class="svg-empty-190" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;"></polygon></svg></div></div>
                                    </div>
                                </div>
                            </div>
                            <ul class="side-menu custom-ul">

                                <li class="slide">
                                    <a class="side-menu__item" href="https://uhelp.spruko.com/uhelp/admin">
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
																				5 minutes ago
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
																				5 minutes ago
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
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2">Ticket Information</span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!--Row-->
							<div class="row">
								<div class="col-xl-12 col-md-12 col-lg-12">
									<div class="row">
										<div class="col-xl-9 col-lg-12 col-md-12">
											<div class="card">
												<div class="card-header border-0 mb-1 d-block">
													<div class="d-sm-flex d-block">
														<div>
															<h4 class="card-title mb-1 fs-22">Et quasi aliquid voluptatem ipsam animi quia praesentium. </h4>
														</div>
														<div class="card-options float-sm-end ticket-status">

															<span class="badge badge-info">Inprogress</span>

														</div>
													</div>
													<small class="fs-13"><i class="feather feather-clock text-muted me-1"></i>Last Updated on <span class="text-muted">5 minutes ago</span></small>
												</div>
												<div class="card-body pt-2 readmores px-6 mx-1">
													<div class="end">
														<span>Est magnam quaerat perferendis rerum quae blanditiis. Culpa odio sit sint fuga quas inventore. Consequatur laborum repudiandae dolor nihil itaque nam. Qui incidunt molestiae ratione nesciunt laborum. Quo velit maiores veritatis laudantium nulla qui. Impedit laboriosam est iure. Atque debitis earum dolor sit eligendi dignissimos. Exercitationem exercitationem qui earum occaecati perferendis molestiae sint reprehenderit. Aut autem provident sequi nihil. Placeat possimus dicta sit et mollitia explicabo. Culpa quia et doloribus voluptas excepturi iure. Recusandae nulla incidunt repellat est. Asperiores fugit optio nihil necessitatibus expedita amet atque magnam. Et nam voluptatum at. Qui autem quos exercitationem neque totam aut. Ut nulla expedita et eveniet velit quia odio. Et quasi aut suscipit explicabo omnis quis ipsa. Saepe sed quisquam eum reprehenderit rerum vel. Deserunt iste recusandae occaecati. Sed sint officia vel et soluta saepe et. Eligendi consequatur repellendus in non. Excepturi tempore quas officia modi. Qui sequi sint ab tempora. Natus aut labore ex voluptatum tenetur eius quidem.</span>

														<div class="row galleryopen">

														</div>
													</div>

												</div>
											</div>


											<div class="card">
												<div class="card-header border-0">
													<h4 class="card-title">Reply Ticket</h4>
												</div>
												<form method="POST" action="https://uhelp.spruko.com/uhelp/admin/ticket/SPG-29" enctype="multipart/form-data">
													<input type="hidden" name="_token" value="tgT6sZadzLBvL4gXu4RbC91DcOp0M8BMHi1niF5Q">
													<div id="my_name_lRyTaRuMnOVBC3aP_wrap" style="display:none;">
        <input name="my_name_lRyTaRuMnOVBC3aP" type="text" value="" id="my_name_lRyTaRuMnOVBC3aP">
        <input name="valid_from" type="text" value="eyJpdiI6IjJzOEhvc3dpSnZ2MDI3NmZSSW5LSFE9PSIsInZhbHVlIjoiQW0vSXE4QVFuM0VDdndId3N6SlpEQT09IiwibWFjIjoiODgxMmI5NWYwZjRhNDUwNmNjMzMwMDk4NjUwNTFhOTdjZjYyNmEzODExNGZkNzNhMGQwOWM1YzQ1NDQ3NTNhZiIsInRhZyI6IiJ9">
    </div>
													<input type="hidden" name="ticket_id" value="29">
													<div class="card-body status">
														<textarea class="summernote d-none " name="comment" aria-multiline="true" style="display: none;"></textarea><div class="note-editor note-frame panel panel-default"><div class="note-dropzone"><div class="note-dropzone-message"></div></div><div class="panel-heading note-toolbar" role="toolbar"><div class="note-btn-group btn-group note-style"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-bs-toggle="dropdown"><i class="note-icon-magic"></i> <span class="note-icon-caret"></span></button><ul class="note-dropdown-menu dropdown-menu dropdown-style" aria-label="Style"><li aria-label="p"><a href="#" data-value="p"><p>Normal</p></a></li><li aria-label="blockquote"><a href="#" data-value="blockquote"><blockquote>Quote</blockquote></a></li><li aria-label="pre"><a href="#" data-value="pre"><pre>Code</pre></a></li><li aria-label="h1"><a href="#" data-value="h1"><h1>Header 1</h1></a></li><li aria-label="h2"><a href="#" data-value="h2"><h2>Header 2</h2></a></li><li aria-label="h3"><a href="#" data-value="h3"><h3>Header 3</h3></a></li><li aria-label="h4"><a href="#" data-value="h4"><h4>Header 4</h4></a></li><li aria-label="h5"><a href="#" data-value="h5"><h5>Header 5</h5></a></li><li aria-label="h6"><a href="#" data-value="h6"><h6>Header 6</h6></a></li></ul></div></div><div class="note-btn-group btn-group note-font"><button type="button" class="note-btn btn btn-default btn-sm note-btn-bold" tabindex="-1"><i class="note-icon-bold"></i></button><button type="button" class="note-btn btn btn-default btn-sm note-btn-underline" tabindex="-1"><i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-eraser"></i></button></div><div class="note-btn-group btn-group note-fontname"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-bs-toggle="dropdown"><span class="note-current-fontname" style="font-family: Roboto;">Roboto</span> <span class="note-icon-caret"></span></button><ul class="note-dropdown-menu dropdown-menu note-check dropdown-fontname" aria-label="Font Family"><li aria-label="Arial"><a href="#" data-value="Arial"><i class="note-icon-menu-check"></i> <span style="font-family: 'Arial'">Arial</span></a></li><li aria-label="Courier New"><a href="#" data-value="Courier New"><i class="note-icon-menu-check"></i> <span style="font-family: 'Courier New'">Courier New</span></a></li><li aria-label="Helvetica"><a href="#" data-value="Helvetica"><i class="note-icon-menu-check"></i> <span style="font-family: 'Helvetica'">Helvetica</span></a></li><li aria-label="Times New Roman"><a href="#" data-value="Times New Roman"><i class="note-icon-menu-check"></i> <span style="font-family: 'Times New Roman'">Times New Roman</span></a></li><li aria-label="Roboto"><a href="#" data-value="Roboto" class="checked"><i class="note-icon-menu-check"></i> <span style="font-family: 'Roboto'">Roboto</span></a></li></ul></div></div><div class="note-btn-group btn-group note-fontsize"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-bs-toggle="dropdown"><span class="note-current-fontsize">14</span> <span class="note-icon-caret"></span></button><ul class="note-dropdown-menu dropdown-menu note-check dropdown-fontsize" aria-label="Font Size"><li aria-label="8"><a href="#" data-value="8"><i class="note-icon-menu-check"></i> 8</a></li><li aria-label="9"><a href="#" data-value="9"><i class="note-icon-menu-check"></i> 9</a></li><li aria-label="10"><a href="#" data-value="10"><i class="note-icon-menu-check"></i> 10</a></li><li aria-label="11"><a href="#" data-value="11"><i class="note-icon-menu-check"></i> 11</a></li><li aria-label="12"><a href="#" data-value="12"><i class="note-icon-menu-check"></i> 12</a></li><li aria-label="14"><a href="#" data-value="14" class="checked"><i class="note-icon-menu-check"></i> 14</a></li><li aria-label="18"><a href="#" data-value="18"><i class="note-icon-menu-check"></i> 18</a></li><li aria-label="24"><a href="#" data-value="24"><i class="note-icon-menu-check"></i> 24</a></li><li aria-label="36"><a href="#" data-value="36"><i class="note-icon-menu-check"></i> 36</a></li></ul></div></div><div class="note-btn-group btn-group note-color"><div class="note-btn-group btn-group note-color note-color-all"><button type="button" class="note-btn btn btn-default btn-sm note-current-color-button" tabindex="-1" data-bs-backcolor="#FFFF00" data-bs-forecolor="#000000"><i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0); color: rgb(0, 0, 0);"></i></button><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-bs-toggle="dropdown"> <span class="note-icon-caret"></span></button><ul class="note-dropdown-menu dropdown-menu"><div class="note-palette"><div class="note-palette-title">Background Color</div><div><button type="button" class="note-color-reset btn btn-light btn-default" data-event="backColor" data-value="transparent">Transparent</button></div><div class="note-holder" data-event="backColor"><!-- back colors --><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="Black" aria-label="Black" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="Tundora" aria-label="Tundora" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="Dove Gray" aria-label="Dove Gray" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="Star Dust" aria-label="Star Dust" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="Pale Slate" aria-label="Pale Slate" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="Gallery" aria-label="Gallery" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="Alabaster" aria-label="Alabaster" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="White" aria-label="White" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="Red" aria-label="Red" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="Orange Peel" aria-label="Orange Peel" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="Yellow" aria-label="Yellow" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="Green" aria-label="Green" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="Cyan" aria-label="Cyan" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="Blue" aria-label="Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="Electric Violet" aria-label="Electric Violet" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="Magenta" aria-label="Magenta" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="Azalea" aria-label="Azalea" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="Karry" aria-label="Karry" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="Egg White" aria-label="Egg White" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="Zanah" aria-label="Zanah" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="Botticelli" aria-label="Botticelli" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="Tropical Blue" aria-label="Tropical Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="Mischka" aria-label="Mischka" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="Twilight" aria-label="Twilight" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="Tonys Pink" aria-label="Tonys Pink" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="Peach Orange" aria-label="Peach Orange" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="Cream Brulee" aria-label="Cream Brulee" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="Sprout" aria-label="Sprout" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="Casper" aria-label="Casper" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="Perano" aria-label="Perano" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="Cold Purple" aria-label="Cold Purple" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="Careys Pink" aria-label="Careys Pink" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="Mandy" aria-label="Mandy" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="Rajah" aria-label="Rajah" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="Dandelion" aria-label="Dandelion" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="Olivine" aria-label="Olivine" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="Gulf Stream" aria-label="Gulf Stream" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="Viking" aria-label="Viking" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="Blue Marguerite" aria-label="Blue Marguerite" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="Puce" aria-label="Puce" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="Guardsman Red" aria-label="Guardsman Red" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="Fire Bush" aria-label="Fire Bush" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="Golden Dream" aria-label="Golden Dream" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="Chelsea Cucumber" aria-label="Chelsea Cucumber" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="Smalt Blue" aria-label="Smalt Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="Boston Blue" aria-label="Boston Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="Butterfly Bush" aria-label="Butterfly Bush" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="Cadillac" aria-label="Cadillac" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="Sangria" aria-label="Sangria" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="Mai Tai" aria-label="Mai Tai" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="Buddha Gold" aria-label="Buddha Gold" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="Forest Green" aria-label="Forest Green" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="Eden" aria-label="Eden" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="Venice Blue" aria-label="Venice Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="Meteorite" aria-label="Meteorite" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="Claret" aria-label="Claret" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="Rosewood" aria-label="Rosewood" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="Cinnamon" aria-label="Cinnamon" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="Olive" aria-label="Olive" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="Parsley" aria-label="Parsley" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="Tiber" aria-label="Tiber" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="Midnight Blue" aria-label="Midnight Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="Valentino" aria-label="Valentino" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="Loulou" aria-label="Loulou" data-bs-toggle="button" tabindex="-1"></button></div></div></div><div><button type="button" class="note-color-select btn btn-light btn-default" data-event="openPalette" data-value="backColorPicker">Select</button><input type="color" id="backColorPicker" class="note-btn note-color-select-btn" value="#FFFF00" data-event="backColorPalette"></div><div class="note-holder-custom" id="backColorPalette" data-event="backColor"><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button></div></div></div></div><div class="note-palette"><div class="note-palette-title">Text Color</div><div><button type="button" class="note-color-reset btn btn-light btn-default" data-event="removeFormat" data-value="foreColor">Reset to default</button></div><div class="note-holder" data-event="foreColor"><!-- fore colors --><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="Black" aria-label="Black" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="Tundora" aria-label="Tundora" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="Dove Gray" aria-label="Dove Gray" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="Star Dust" aria-label="Star Dust" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="Pale Slate" aria-label="Pale Slate" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="Gallery" aria-label="Gallery" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="Alabaster" aria-label="Alabaster" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="White" aria-label="White" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="Red" aria-label="Red" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="Orange Peel" aria-label="Orange Peel" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="Yellow" aria-label="Yellow" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="Green" aria-label="Green" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="Cyan" aria-label="Cyan" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="Blue" aria-label="Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="Electric Violet" aria-label="Electric Violet" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="Magenta" aria-label="Magenta" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="Azalea" aria-label="Azalea" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="Karry" aria-label="Karry" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="Egg White" aria-label="Egg White" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="Zanah" aria-label="Zanah" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="Botticelli" aria-label="Botticelli" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="Tropical Blue" aria-label="Tropical Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="Mischka" aria-label="Mischka" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="Twilight" aria-label="Twilight" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="Tonys Pink" aria-label="Tonys Pink" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="Peach Orange" aria-label="Peach Orange" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="Cream Brulee" aria-label="Cream Brulee" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="Sprout" aria-label="Sprout" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="Casper" aria-label="Casper" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="Perano" aria-label="Perano" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="Cold Purple" aria-label="Cold Purple" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="Careys Pink" aria-label="Careys Pink" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="Mandy" aria-label="Mandy" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="Rajah" aria-label="Rajah" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="Dandelion" aria-label="Dandelion" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="Olivine" aria-label="Olivine" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="Gulf Stream" aria-label="Gulf Stream" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="Viking" aria-label="Viking" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="Blue Marguerite" aria-label="Blue Marguerite" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="Puce" aria-label="Puce" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="Guardsman Red" aria-label="Guardsman Red" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="Fire Bush" aria-label="Fire Bush" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="Golden Dream" aria-label="Golden Dream" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="Chelsea Cucumber" aria-label="Chelsea Cucumber" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="Smalt Blue" aria-label="Smalt Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="Boston Blue" aria-label="Boston Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="Butterfly Bush" aria-label="Butterfly Bush" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="Cadillac" aria-label="Cadillac" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="Sangria" aria-label="Sangria" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="Mai Tai" aria-label="Mai Tai" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="Buddha Gold" aria-label="Buddha Gold" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="Forest Green" aria-label="Forest Green" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="Eden" aria-label="Eden" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="Venice Blue" aria-label="Venice Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="Meteorite" aria-label="Meteorite" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="Claret" aria-label="Claret" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="Rosewood" aria-label="Rosewood" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="Cinnamon" aria-label="Cinnamon" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="Olive" aria-label="Olive" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="Parsley" aria-label="Parsley" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="Tiber" aria-label="Tiber" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="Midnight Blue" aria-label="Midnight Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="Valentino" aria-label="Valentino" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="Loulou" aria-label="Loulou" data-bs-toggle="button" tabindex="-1"></button></div></div></div><div><button type="button" class="note-color-select btn btn-light btn-default" data-event="openPalette" data-value="foreColorPicker">Select</button><input type="color" id="foreColorPicker" class="note-btn note-color-select-btn" value="#000000" data-event="foreColorPalette"></div><div class="note-holder-custom" id="foreColorPalette" data-event="foreColor"><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button></div></div></div></div></ul></div></div><div class="note-btn-group btn-group note-para"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-unorderedlist"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-orderedlist"></i></button><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-bs-toggle="dropdown"><i class="note-icon-align-left"></i> <span class="note-icon-caret"></span></button><ul class="note-dropdown-menu dropdown-menu"><div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-align-justify"></i></button></div><div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-align-indent"></i></button></div></ul></div></div><div class="note-btn-group btn-group note-table"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-bs-toggle="dropdown"><i class="note-icon-table"></i> <span class="note-icon-caret"></span></button><ul class="note-dropdown-menu dropdown-menu note-table" aria-label="Table"><div class="note-dimension-picker"><div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;"></div><div class="note-dimension-picker-highlighted"></div><div class="note-dimension-picker-unhighlighted"></div></div><div class="note-dimension-display">1 x 1</div></ul></div></div><div class="note-btn-group btn-group note-insert"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-picture"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-video"></i></button></div><div class="note-btn-group btn-group note-view"><button type="button" class="note-btn btn btn-default btn-sm btn-fullscreen note-codeview-keep" tabindex="-1"><i class="note-icon-arrows-alt"></i></button></div><div class="note-btn-group btn-group note-help"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-question"></i></button></div></div><div class="note-editing-area"><div class="note-handle"><div class="note-control-selection"><div class="note-control-selection-bg"></div><div class="note-control-holder note-control-nw"></div><div class="note-control-holder note-control-ne"></div><div class="note-control-holder note-control-sw"></div><div class="note-control-sizing note-control-se"></div><div class="note-control-selection-info"></div></div></div><textarea class="note-codable" aria-multiline="true"></textarea><div class="note-editable" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true" style="height: 200px;" contenteditable="true"><p><br></p></div></div><output class="note-status-output" role="status" aria-live="polite"></output><div class="note-statusbar" role="status"><div class="note-resizebar" aria-label="Resize"><div class="note-icon-bar"></div><div class="note-icon-bar"></div><div class="note-icon-bar"></div></div></div><div class="modal note-modal link-dialog" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Link"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h6 class="modal-title">Insert Link</h6> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" aria-hidden="true">×</button></div><div class="modal-body"><div class="form-group note-form-group"><label for="note-dialog-link-txt-16465450704201" class="note-form-label">Text to display</label><input id="note-dialog-link-txt-16465450704201" class="note-link-text form-control note-form-control note-input" type="text"></div><div class="form-group note-form-group"><label for="note-dialog-link-url-16465450704201" class="note-form-label">To what URL should this link go?</label><input id="note-dialog-link-url-16465450704201" class="note-link-url form-control note-form-control note-input" type="text" value="http://"></div><div class="checkbox sn-checkbox-open-in-new-window"><label><input type="checkbox" checked="" aria-checked="true">Open in new window</label></div><div class="checkbox sn-checkbox-use-protocol"><label><input type="checkbox" checked="" aria-checked="true">Use default protocol</label></div></div><div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-link-btn" value="Insert Link" disabled=""></div></div></div></div><div class="note-popover popover in note-link-popover bottom"><div class="arrow"></div><div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span><div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-chain-broken"></i></button></div></div></div><div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Image"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h6 class="modal-title">Insert Image</h6> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" aria-hidden="true">×</button></div><div class="modal-body"><div class="form-group note-form-group note-group-select-from-files"><label for="note-dialog-image-file-16465450704201" class="note-form-label">Select from files</label><input id="note-dialog-image-file-16465450704201" class="note-image-input form-control-file note-form-control note-input" type="file" name="files" accept="image/*" multiple="multiple"></div><div class="form-group note-group-image-url"><label for="note-dialog-image-url-16465450704201" class="note-form-label">Image URL</label><input id="note-dialog-image-url-16465450704201" class="note-image-url form-control note-form-control note-input" type="text"></div></div><div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-image-btn" value="Insert Image" disabled=""></div></div></div></div><div class="note-popover popover in note-image-popover bottom"><div class="arrow"></div><div class="popover-content note-children-container"><div class="note-btn-group btn-group note-resize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><span class="note-fontsize-10">100%</span></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><span class="note-fontsize-10">50%</span></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><span class="note-fontsize-10">25%</span></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-rollback"></i></button></div><div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-float-left"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-float-right"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-rollback"></i></button></div><div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-trash"></i></button></div></div></div><div class="note-popover popover in note-table-popover bottom"><div class="arrow"></div><div class="popover-content note-children-container"><div class="note-btn-group btn-group note-add"><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-row-below"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-row-above"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-col-before"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-col-after"></i></button></div><div class="note-btn-group btn-group note-delete"><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-row-remove"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-col-remove"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-trash"></i></button></div></div></div><div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Video"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h6 class="modal-title">Insert Video</h6> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" aria-hidden="true">×</button></div><div class="modal-body"><div class="form-group note-form-group row-fluid"><label for="note-dialog-video-url-16465450704201" class="note-form-label">Video URL <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label><input id="note-dialog-video-url-16465450704201" class="note-video-url form-control note-form-control note-input" type="text"></div></div><div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-video-btn" value="Insert Video" disabled=""></div></div></div></div><div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Help"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h6 class="modal-title">Help</h6> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" aria-hidden="true">×</button></div><div class="modal-body" style="max-height: 300px; overflow: scroll;"><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ESC</kbd></label><span>Escape</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undo the last command</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redo the last command</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span></div><div class="modal-footer"><p class="text-center"><a href="http://summernote.org/" target="_blank">Summernote 0.8.18</a> · <a href="https://github.com/summernote/summernote" target="_blank">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a></p></div></div></div></div></div>

														<div class="form-group">
															<label class="form-label">Upload Image</label>
															<div class="file-browser">
																<div class="needsclick dropzone dz-clickable" id="document-dropzone"><div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div></div>
															</div>
															<small class="text-muted"><i>The file size should not be more than 3MB</i></small>
														</div>

														<div class="custom-controls-stacked d-md-flex" id="text">
															<label class="form-label mt-1 me-5">Status</label>
															<label class="custom-control form-radio success me-4">

																<input type="radio" class="custom-control-input hold" name="status" value="Inprogress" checked="">
																<span class="custom-control-label">Inprogress</span>

															</label>
															<label class="custom-control form-radio success me-4">
																<input type="radio" class="custom-control-input hold" name="status" value="Solved">
																<span class="custom-control-label">Solved</span>
															</label>
															<label class="custom-control form-radio success me-4">
																<input type="radio" class="custom-control-input" name="status" id="onhold" value="On-Hold">
																<span class="custom-control-label">On-Hold</span>
															</label>
														</div>
													</div>

													<div class="card-footer">
														<div class="form-group float-end">
															<input type="submit" class="btn btn-secondary" value="Reply" onclick="this.disabled=true;this.form.submit();">
														</div>
													</div>
												</form>
											</div>




											<div class="card  mb-0">
												<div class="card-header border-0">
													<h4 class="card-title">Conversions</h4>
												</div>
												<div class="suuport-convercontentbody">
													<input type="hidden" name="_token" value="tgT6sZadzLBvL4gXu4RbC91DcOp0M8BMHi1niF5Q">
													<div id="spruko_loaddata">
														<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">

																		<h5 class="mt-1 mb-1 font-weight-semibold">Rudolph Mueller<span class="badge badge-primary-light badge-md ms-2">Manager</span></h5>

																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Qui dolorem et perferendis nesciunt exercitationem repellat. Dolorum non est vitae pariatur consequatur rerum sint. Enim aut molestias qui aut quo aliquid. Molestias fugiat amet quae placeat fugiat. Provident sint fugiat tempora laboriosam rerum suscipit temporibus. Doloribus vel tempora voluptatem nihil explicabo.
																		</div>
																		<div class="editsupportnote-icon animated" id="supportnote-icon-355">
																			<form action="https://uhelp.spruko.com/uhelp/admin/ticket/editcomment/355" method="POST">
																				<input type="hidden" name="_token" value="tgT6sZadzLBvL4gXu4RbC91DcOp0M8BMHi1niF5Q">
																				<textarea class="editsummernote" name="editcomment" style="display: none;"> Qui dolorem et perferendis nesciunt exercitationem repellat. Dolorum non est vitae pariatur consequatur rerum sint. Enim aut molestias qui aut quo aliquid. Molestias fugiat amet quae placeat fugiat. Provident sint fugiat tempora laboriosam rerum suscipit temporibus. Doloribus vel tempora voluptatem nihil explicabo.</textarea><div class="note-editor note-frame panel panel-default"><div class="note-dropzone"><div class="note-dropzone-message"></div></div><div class="panel-heading note-toolbar" role="toolbar"><div class="note-btn-group btn-group note-style"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-bs-toggle="dropdown"><i class="note-icon-magic"></i> <span class="note-icon-caret"></span></button><ul class="note-dropdown-menu dropdown-menu dropdown-style" aria-label="Style"><li aria-label="p"><a href="#" data-value="p"><p>Normal</p></a></li><li aria-label="blockquote"><a href="#" data-value="blockquote"><blockquote>Quote</blockquote></a></li><li aria-label="pre"><a href="#" data-value="pre"><pre>Code</pre></a></li><li aria-label="h1"><a href="#" data-value="h1"><h1>Header 1</h1></a></li><li aria-label="h2"><a href="#" data-value="h2"><h2>Header 2</h2></a></li><li aria-label="h3"><a href="#" data-value="h3"><h3>Header 3</h3></a></li><li aria-label="h4"><a href="#" data-value="h4"><h4>Header 4</h4></a></li><li aria-label="h5"><a href="#" data-value="h5"><h5>Header 5</h5></a></li><li aria-label="h6"><a href="#" data-value="h6"><h6>Header 6</h6></a></li></ul></div></div><div class="note-btn-group btn-group note-font"><button type="button" class="note-btn btn btn-default btn-sm note-btn-bold" tabindex="-1"><i class="note-icon-bold"></i></button><button type="button" class="note-btn btn btn-default btn-sm note-btn-underline" tabindex="-1"><i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-eraser"></i></button></div><div class="note-btn-group btn-group note-fontname"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-bs-toggle="dropdown"><span class="note-current-fontname" style="font-family: Roboto;">Roboto</span> <span class="note-icon-caret"></span></button><ul class="note-dropdown-menu dropdown-menu note-check dropdown-fontname" aria-label="Font Family"><li aria-label="Arial"><a href="#" data-value="Arial"><i class="note-icon-menu-check"></i> <span style="font-family: 'Arial'">Arial</span></a></li><li aria-label="Courier New"><a href="#" data-value="Courier New"><i class="note-icon-menu-check"></i> <span style="font-family: 'Courier New'">Courier New</span></a></li><li aria-label="Helvetica"><a href="#" data-value="Helvetica"><i class="note-icon-menu-check"></i> <span style="font-family: 'Helvetica'">Helvetica</span></a></li><li aria-label="Times New Roman"><a href="#" data-value="Times New Roman"><i class="note-icon-menu-check"></i> <span style="font-family: 'Times New Roman'">Times New Roman</span></a></li><li aria-label="Roboto"><a href="#" data-value="Roboto" class="checked"><i class="note-icon-menu-check"></i> <span style="font-family: 'Roboto'">Roboto</span></a></li></ul></div></div><div class="note-btn-group btn-group note-fontsize"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-bs-toggle="dropdown"><span class="note-current-fontsize">14</span> <span class="note-icon-caret"></span></button><ul class="note-dropdown-menu dropdown-menu note-check dropdown-fontsize" aria-label="Font Size"><li aria-label="8"><a href="#" data-value="8"><i class="note-icon-menu-check"></i> 8</a></li><li aria-label="9"><a href="#" data-value="9"><i class="note-icon-menu-check"></i> 9</a></li><li aria-label="10"><a href="#" data-value="10"><i class="note-icon-menu-check"></i> 10</a></li><li aria-label="11"><a href="#" data-value="11"><i class="note-icon-menu-check"></i> 11</a></li><li aria-label="12"><a href="#" data-value="12"><i class="note-icon-menu-check"></i> 12</a></li><li aria-label="14"><a href="#" data-value="14" class="checked"><i class="note-icon-menu-check"></i> 14</a></li><li aria-label="18"><a href="#" data-value="18"><i class="note-icon-menu-check"></i> 18</a></li><li aria-label="24"><a href="#" data-value="24"><i class="note-icon-menu-check"></i> 24</a></li><li aria-label="36"><a href="#" data-value="36"><i class="note-icon-menu-check"></i> 36</a></li></ul></div></div><div class="note-btn-group btn-group note-color"><div class="note-btn-group btn-group note-color note-color-all"><button type="button" class="note-btn btn btn-default btn-sm note-current-color-button" tabindex="-1" data-bs-backcolor="#FFFF00" data-bs-forecolor="#000000"><i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0); color: rgb(0, 0, 0);"></i></button><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-bs-toggle="dropdown"> <span class="note-icon-caret"></span></button><ul class="note-dropdown-menu dropdown-menu"><div class="note-palette"><div class="note-palette-title">Background Color</div><div><button type="button" class="note-color-reset btn btn-light btn-default" data-event="backColor" data-value="transparent">Transparent</button></div><div class="note-holder" data-event="backColor"><!-- back colors --><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="Black" aria-label="Black" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="Tundora" aria-label="Tundora" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="Dove Gray" aria-label="Dove Gray" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="Star Dust" aria-label="Star Dust" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="Pale Slate" aria-label="Pale Slate" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="Gallery" aria-label="Gallery" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="Alabaster" aria-label="Alabaster" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="White" aria-label="White" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="Red" aria-label="Red" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="Orange Peel" aria-label="Orange Peel" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="Yellow" aria-label="Yellow" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="Green" aria-label="Green" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="Cyan" aria-label="Cyan" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="Blue" aria-label="Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="Electric Violet" aria-label="Electric Violet" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="Magenta" aria-label="Magenta" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="Azalea" aria-label="Azalea" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="Karry" aria-label="Karry" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="Egg White" aria-label="Egg White" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="Zanah" aria-label="Zanah" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="Botticelli" aria-label="Botticelli" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="Tropical Blue" aria-label="Tropical Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="Mischka" aria-label="Mischka" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="Twilight" aria-label="Twilight" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="Tonys Pink" aria-label="Tonys Pink" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="Peach Orange" aria-label="Peach Orange" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="Cream Brulee" aria-label="Cream Brulee" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="Sprout" aria-label="Sprout" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="Casper" aria-label="Casper" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="Perano" aria-label="Perano" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="Cold Purple" aria-label="Cold Purple" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="Careys Pink" aria-label="Careys Pink" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="Mandy" aria-label="Mandy" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="Rajah" aria-label="Rajah" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="Dandelion" aria-label="Dandelion" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="Olivine" aria-label="Olivine" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="Gulf Stream" aria-label="Gulf Stream" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="Viking" aria-label="Viking" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="Blue Marguerite" aria-label="Blue Marguerite" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="Puce" aria-label="Puce" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="Guardsman Red" aria-label="Guardsman Red" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="Fire Bush" aria-label="Fire Bush" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="Golden Dream" aria-label="Golden Dream" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="Chelsea Cucumber" aria-label="Chelsea Cucumber" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="Smalt Blue" aria-label="Smalt Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="Boston Blue" aria-label="Boston Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="Butterfly Bush" aria-label="Butterfly Bush" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="Cadillac" aria-label="Cadillac" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="Sangria" aria-label="Sangria" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="Mai Tai" aria-label="Mai Tai" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="Buddha Gold" aria-label="Buddha Gold" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="Forest Green" aria-label="Forest Green" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="Eden" aria-label="Eden" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="Venice Blue" aria-label="Venice Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="Meteorite" aria-label="Meteorite" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="Claret" aria-label="Claret" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="Rosewood" aria-label="Rosewood" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="Cinnamon" aria-label="Cinnamon" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="Olive" aria-label="Olive" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="Parsley" aria-label="Parsley" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="Tiber" aria-label="Tiber" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="Midnight Blue" aria-label="Midnight Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="Valentino" aria-label="Valentino" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="Loulou" aria-label="Loulou" data-bs-toggle="button" tabindex="-1"></button></div></div></div><div><button type="button" class="note-color-select btn btn-light btn-default" data-event="openPalette" data-value="backColorPicker">Select</button><input type="color" id="backColorPicker" class="note-btn note-color-select-btn" value="#FFFF00" data-event="backColorPalette"></div><div class="note-holder-custom" id="backColorPalette" data-event="backColor"><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button></div></div></div></div><div class="note-palette"><div class="note-palette-title">Text Color</div><div><button type="button" class="note-color-reset btn btn-light btn-default" data-event="removeFormat" data-value="foreColor">Reset to default</button></div><div class="note-holder" data-event="foreColor"><!-- fore colors --><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="Black" aria-label="Black" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="Tundora" aria-label="Tundora" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="Dove Gray" aria-label="Dove Gray" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="Star Dust" aria-label="Star Dust" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="Pale Slate" aria-label="Pale Slate" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="Gallery" aria-label="Gallery" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="Alabaster" aria-label="Alabaster" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="White" aria-label="White" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="Red" aria-label="Red" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="Orange Peel" aria-label="Orange Peel" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="Yellow" aria-label="Yellow" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="Green" aria-label="Green" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="Cyan" aria-label="Cyan" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="Blue" aria-label="Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="Electric Violet" aria-label="Electric Violet" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="Magenta" aria-label="Magenta" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="Azalea" aria-label="Azalea" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="Karry" aria-label="Karry" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="Egg White" aria-label="Egg White" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="Zanah" aria-label="Zanah" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="Botticelli" aria-label="Botticelli" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="Tropical Blue" aria-label="Tropical Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="Mischka" aria-label="Mischka" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="Twilight" aria-label="Twilight" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="Tonys Pink" aria-label="Tonys Pink" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="Peach Orange" aria-label="Peach Orange" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="Cream Brulee" aria-label="Cream Brulee" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="Sprout" aria-label="Sprout" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="Casper" aria-label="Casper" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="Perano" aria-label="Perano" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="Cold Purple" aria-label="Cold Purple" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="Careys Pink" aria-label="Careys Pink" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="Mandy" aria-label="Mandy" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="Rajah" aria-label="Rajah" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="Dandelion" aria-label="Dandelion" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="Olivine" aria-label="Olivine" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="Gulf Stream" aria-label="Gulf Stream" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="Viking" aria-label="Viking" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="Blue Marguerite" aria-label="Blue Marguerite" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="Puce" aria-label="Puce" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="Guardsman Red" aria-label="Guardsman Red" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="Fire Bush" aria-label="Fire Bush" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="Golden Dream" aria-label="Golden Dream" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="Chelsea Cucumber" aria-label="Chelsea Cucumber" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="Smalt Blue" aria-label="Smalt Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="Boston Blue" aria-label="Boston Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="Butterfly Bush" aria-label="Butterfly Bush" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="Cadillac" aria-label="Cadillac" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="Sangria" aria-label="Sangria" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="Mai Tai" aria-label="Mai Tai" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="Buddha Gold" aria-label="Buddha Gold" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="Forest Green" aria-label="Forest Green" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="Eden" aria-label="Eden" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="Venice Blue" aria-label="Venice Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="Meteorite" aria-label="Meteorite" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="Claret" aria-label="Claret" data-bs-toggle="button" tabindex="-1"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="Rosewood" aria-label="Rosewood" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="Cinnamon" aria-label="Cinnamon" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="Olive" aria-label="Olive" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="Parsley" aria-label="Parsley" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="Tiber" aria-label="Tiber" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="Midnight Blue" aria-label="Midnight Blue" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="Valentino" aria-label="Valentino" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="Loulou" aria-label="Loulou" data-bs-toggle="button" tabindex="-1"></button></div></div></div><div><button type="button" class="note-color-select btn btn-light btn-default" data-event="openPalette" data-value="foreColorPicker">Select</button><input type="color" id="foreColorPicker" class="note-btn note-color-select-btn" value="#000000" data-event="foreColorPalette"></div><div class="note-holder-custom" id="foreColorPalette" data-event="foreColor"><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="#FFFFFF" aria-label="#FFFFFF" data-bs-toggle="button" tabindex="-1"></button></div></div></div></div></ul></div></div><div class="note-btn-group btn-group note-para"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-unorderedlist"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-orderedlist"></i></button><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-bs-toggle="dropdown"><i class="note-icon-align-left"></i> <span class="note-icon-caret"></span></button><ul class="note-dropdown-menu dropdown-menu"><div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-align-justify"></i></button></div><div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-align-indent"></i></button></div></ul></div></div><div class="note-btn-group btn-group note-table"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-bs-toggle="dropdown"><i class="note-icon-table"></i> <span class="note-icon-caret"></span></button><ul class="note-dropdown-menu dropdown-menu note-table" aria-label="Table"><div class="note-dimension-picker"><div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;"></div><div class="note-dimension-picker-highlighted"></div><div class="note-dimension-picker-unhighlighted"></div></div><div class="note-dimension-display">1 x 1</div></ul></div></div><div class="note-btn-group btn-group note-insert"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-picture"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-video"></i></button></div><div class="note-btn-group btn-group note-view"><button type="button" class="note-btn btn btn-default btn-sm btn-fullscreen note-codeview-keep" tabindex="-1"><i class="note-icon-arrows-alt"></i></button></div><div class="note-btn-group btn-group note-help"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-question"></i></button></div></div><div class="note-editing-area"><div class="note-handle"><div class="note-control-selection"><div class="note-control-selection-bg"></div><div class="note-control-holder note-control-nw"></div><div class="note-control-holder note-control-ne"></div><div class="note-control-holder note-control-sw"></div><div class="note-control-sizing note-control-se"></div><div class="note-control-selection-info"></div></div></div><textarea class="note-codable" aria-multiline="true"></textarea><div class="note-editable" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true" style="height: 200px;" contenteditable="true"> Qui dolorem et perferendis nesciunt exercitationem repellat. Dolorum non est vitae pariatur consequatur rerum sint. Enim aut molestias qui aut quo aliquid. Molestias fugiat amet quae placeat fugiat. Provident sint fugiat tempora laboriosam rerum suscipit temporibus. Doloribus vel tempora voluptatem nihil explicabo.</div></div><output class="note-status-output" role="status" aria-live="polite"></output><div class="note-statusbar" role="status"><div class="note-resizebar" aria-label="Resize"><div class="note-icon-bar"></div><div class="note-icon-bar"></div><div class="note-icon-bar"></div></div></div><div class="modal note-modal link-dialog" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Link"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h6 class="modal-title">Insert Link</h6> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" aria-hidden="true">×</button></div><div class="modal-body"><div class="form-group note-form-group"><label for="note-dialog-link-txt-16465450704842" class="note-form-label">Text to display</label><input id="note-dialog-link-txt-16465450704842" class="note-link-text form-control note-form-control note-input" type="text"></div><div class="form-group note-form-group"><label for="note-dialog-link-url-16465450704842" class="note-form-label">To what URL should this link go?</label><input id="note-dialog-link-url-16465450704842" class="note-link-url form-control note-form-control note-input" type="text" value="http://"></div><div class="checkbox sn-checkbox-open-in-new-window"><label><input type="checkbox" checked="" aria-checked="true">Open in new window</label></div><div class="checkbox sn-checkbox-use-protocol"><label><input type="checkbox" checked="" aria-checked="true">Use default protocol</label></div></div><div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-link-btn" value="Insert Link" disabled=""></div></div></div></div><div class="note-popover popover in note-link-popover bottom"><div class="arrow"></div><div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span><div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-chain-broken"></i></button></div></div></div><div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Image"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h6 class="modal-title">Insert Image</h6> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" aria-hidden="true">×</button></div><div class="modal-body"><div class="form-group note-form-group note-group-select-from-files"><label for="note-dialog-image-file-16465450704842" class="note-form-label">Select from files</label><input id="note-dialog-image-file-16465450704842" class="note-image-input form-control-file note-form-control note-input" type="file" name="files" accept="image/*" multiple="multiple"></div><div class="form-group note-group-image-url"><label for="note-dialog-image-url-16465450704842" class="note-form-label">Image URL</label><input id="note-dialog-image-url-16465450704842" class="note-image-url form-control note-form-control note-input" type="text"></div></div><div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-image-btn" value="Insert Image" disabled=""></div></div></div></div><div class="note-popover popover in note-image-popover bottom"><div class="arrow"></div><div class="popover-content note-children-container"><div class="note-btn-group btn-group note-resize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><span class="note-fontsize-10">100%</span></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><span class="note-fontsize-10">50%</span></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><span class="note-fontsize-10">25%</span></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-rollback"></i></button></div><div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-float-left"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-float-right"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-rollback"></i></button></div><div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"><i class="note-icon-trash"></i></button></div></div></div><div class="note-popover popover in note-table-popover bottom"><div class="arrow"></div><div class="popover-content note-children-container"><div class="note-btn-group btn-group note-add"><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-row-below"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-row-above"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-col-before"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-col-after"></i></button></div><div class="note-btn-group btn-group note-delete"><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-row-remove"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-col-remove"></i></button><button type="button" class="note-btn btn btn-default btn-sm btn-md" tabindex="-1"><i class="note-icon-trash"></i></button></div></div></div><div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Video"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h6 class="modal-title">Insert Video</h6> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" aria-hidden="true">×</button></div><div class="modal-body"><div class="form-group note-form-group row-fluid"><label for="note-dialog-video-url-16465450704842" class="note-form-label">Video URL <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label><input id="note-dialog-video-url-16465450704842" class="note-video-url form-control note-form-control note-input" type="text"></div></div><div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-video-btn" value="Insert Video" disabled=""></div></div></div></div><div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Help"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h6 class="modal-title">Help</h6> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" aria-hidden="true">×</button></div><div class="modal-body" style="max-height: 300px; overflow: scroll;"><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ESC</kbd></label><span>Escape</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undo the last command</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redo the last command</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span></div><div class="modal-footer"><p class="text-center"><a href="http://summernote.org/" target="_blank">Summernote 0.8.18</a> · <a href="https://github.com/summernote/summernote" target="_blank">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a></p></div></div></div></div></div>
																			<div class="btn-list mt-1">
																				<input type="submit" class="btn btn-secondary" onclick="this.disabled=true;this.form.submit();" value="Update">
																			</div>
																			</form>
																		</div>


																			<div class="row galleryopen">

																			</div>

																	</div>

																</div>
															</div>






															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">
																		<h5 class="mt-1 mb-1 font-weight-semibold">Pasquale Kessler<span class="badge badge-danger-light badge-md ms-2">Guest</span></h5>
																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Eum animi iure soluta in minima quisquam sunt incidunt. Similique quaerat animi iusto omnis. Animi quibusdam corrupti modi deleniti ex magnam necessitatibus inventore. Mollitia neque repudiandae sed id id explicabo quos. Perspiciatis voluptates veniam dolorem id. Nihil neque rerum quo. Saepe ipsum corporis rerum nisi rerum. Consequatur consequuntur ea aut quasi et. Similique sit eos et culpa.

																		</div>
																		<div class="row galleryopen">

																		</div>
																	</div>
																</div>
															</div>




															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">

																		<h5 class="mt-1 mb-1 font-weight-semibold">Reilly Smith<span class="badge badge-primary-light badge-md ms-2">Agent</span></h5>

																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Quis quae iure vitae eos eum dolorem. Sequi qui vel id debitis architecto aut illum. Omnis et nesciunt odio tenetur voluptates eligendi tenetur nesciunt. Explicabo autem aliquid est recusandae. Est voluptatem non magni eos et. Laudantium quibusdam autem sunt eos. Est perspiciatis non et qui. Sequi non rerum eligendi.
																		</div>
																		<div class="row galleryopen">

																		</div>
																	</div>
																</div>
															</div>






															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">
																		<h5 class="mt-1 mb-1 font-weight-semibold">Pasquale Kessler<span class="badge badge-danger-light badge-md ms-2">Guest</span></h5>
																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Sint et accusantium quo tempora id ullam maiores modi. Non officiis non eum et et soluta. Porro nesciunt aut et recusandae eius. Sit voluptatem nostrum porro quibusdam aut et iusto et. Odit similique voluptatem iure architecto. Et et aspernatur et maxime architecto.

																		</div>
																		<div class="row galleryopen">

																		</div>
																	</div>
																</div>
															</div>




															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">

																		<h5 class="mt-1 mb-1 font-weight-semibold">Hayley Hills<span class="badge badge-primary-light badge-md ms-2">Agent</span></h5>

																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Quo est quos minima at debitis. Minima amet voluptate cupiditate. Excepturi veniam et dolore quidem rerum qui similique. Aut esse nihil expedita sed. Reprehenderit ex similique aperiam. Ut ullam quo veritatis tenetur necessitatibus totam voluptatem.
																		</div>
																		<div class="row galleryopen">

																		</div>
																	</div>
																</div>
															</div>






															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">
																		<h5 class="mt-1 mb-1 font-weight-semibold">Pasquale Kessler<span class="badge badge-danger-light badge-md ms-2">Guest</span></h5>
																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Sed esse minima quasi quia. Minus ullam modi ea odio asperiores. Veritatis non aperiam praesentium ut illum nihil. Quos quis sequi voluptatum. Minus nostrum quod voluptas ea omnis suscipit. Illo consequatur illo et qui. Sed voluptas ab qui. Iste voluptatem sed sunt facilis voluptatem quia.

																		</div>
																		<div class="row galleryopen">

																		</div>
																	</div>
																</div>
															</div>




															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">

																		<h5 class="mt-1 mb-1 font-weight-semibold">Kaelyn Fritsch<span class="badge badge-primary-light badge-md ms-2">Team Leader</span></h5>

																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Eligendi tempore eos pariatur et velit iure. Accusantium libero voluptatibus sunt praesentium vel. Atque quis expedita voluptates quia libero rerum esse. Autem tempora quis possimus ipsam officiis est. Omnis cumque voluptate est qui. Debitis autem laboriosam dolor aliquid amet architecto sit. Maiores assumenda fugit quis assumenda. Ex earum nobis alias et et. Velit qui iure officiis qui hic. Eum voluptas reiciendis aut et veritatis ab accusantium vel. Pariatur est qui qui autem sed. Qui dolore temporibus quidem et est omnis.
																		</div>
																		<div class="row galleryopen">

																		</div>
																	</div>
																</div>
															</div>






															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">
																		<h5 class="mt-1 mb-1 font-weight-semibold">Pasquale Kessler<span class="badge badge-danger-light badge-md ms-2">Guest</span></h5>
																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Sapiente libero quidem distinctio ut mollitia eaque. Consequuntur dignissimos iure non odio dolores. Veniam quia qui deserunt nemo. Occaecati libero quaerat earum et totam. Eligendi soluta perferendis aut facilis rerum nulla voluptas exercitationem. Dolores inventore sit reiciendis sit repellendus distinctio veritatis.

																		</div>
																		<div class="row galleryopen">

																		</div>
																	</div>
																</div>
															</div>




															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">

																		<h5 class="mt-1 mb-1 font-weight-semibold">Patience Ratke<span class="badge badge-primary-light badge-md ms-2">Agent</span></h5>

																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Aspernatur ut aperiam occaecati laudantium rerum nihil corrupti. Recusandae molestiae libero sed consequatur id. Consequatur quasi et quae nihil consectetur pariatur. Voluptatibus id delectus suscipit ad fugit saepe laudantium. Ut laborum illum dolores ea. Quia libero accusantium voluptatum esse aut ea.
																		</div>
																		<div class="row galleryopen">

																		</div>
																	</div>
																</div>
															</div>






															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">
																		<h5 class="mt-1 mb-1 font-weight-semibold">Pasquale Kessler<span class="badge badge-danger-light badge-md ms-2">Guest</span></h5>
																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Et facilis aut beatae natus commodi voluptatem. Fugiat modi quia laudantium cupiditate dolor voluptates pariatur. Praesentium quia enim maiores excepturi deserunt temporibus. Labore dolorem beatae velit deleniti accusamus consequatur. Eligendi labore eos est quia soluta et consequuntur. Iusto sed aliquid saepe.

																		</div>
																		<div class="row galleryopen">

																		</div>
																	</div>
																</div>
															</div>



													<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">

																		<h5 class="mt-1 mb-1 font-weight-semibold">Lilla Halvorson<span class="badge badge-primary-light badge-md ms-2">Agent</span></h5>

																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Suscipit qui harum et laborum beatae. Cum atque iure libero aliquid aut aut facere. Nihil nihil eveniet soluta quis iure consequuntur. Inventore culpa rerum dolor deserunt. Ut officiis deserunt optio. Blanditiis et illum ut vel aperiam nesciunt dolorem totam. Qui suscipit amet deserunt qui quisquam rem aliquam. Natus quisquam non rem natus error officia quasi maiores. Voluptas repellendus fugit perspiciatis suscipit.
																		</div>
																		<div class="editsupportnote-icon animated" id="supportnote-icon-365">
																			<form action="https://uhelp.spruko.com/uhelp/admin/ticket/editcomment/365" method="POST">
																				<input type="hidden" name="_token" value="tgT6sZadzLBvL4gXu4RbC91DcOp0M8BMHi1niF5Q">
																				<textarea class="editsummernote" name="editcomment"> Suscipit qui harum et laborum beatae. Cum atque iure libero aliquid aut aut facere. Nihil nihil eveniet soluta quis iure consequuntur. Inventore culpa rerum dolor deserunt. Ut officiis deserunt optio. Blanditiis et illum ut vel aperiam nesciunt dolorem totam. Qui suscipit amet deserunt qui quisquam rem aliquam. Natus quisquam non rem natus error officia quasi maiores. Voluptas repellendus fugit perspiciatis suscipit.</textarea>
																			<div class="btn-list mt-1">
																				<input type="submit" class="btn btn-secondary" onclick="this.disabled=true;this.form.submit();" value="Update">
																			</div>
																			</form>
																		</div>


																			<div class="row galleryopen">

																			</div>

																	</div>

																</div>
															</div>






															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">
																		<h5 class="mt-1 mb-1 font-weight-semibold">Pasquale Kessler<span class="badge badge-danger-light badge-md ms-2">Guest</span></h5>
																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Officiis qui nostrum aperiam autem odit aut dolor qui. Qui quidem voluptates sed et. Numquam ut hic in earum laborum libero. Vitae aut et sed quaerat unde cupiditate repellat voluptas. Id animi error eos quis. Vitae voluptatum rerum at consectetur. Asperiores corporis in repudiandae quas sint quod minima sunt. Qui commodi tenetur aspernatur optio. Voluptate unde sit cumque consequuntur magnam.

																		</div>
																		<div class="row galleryopen">

																		</div>
																	</div>
																</div>
															</div>




															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">

																		<h5 class="mt-1 mb-1 font-weight-semibold">Emmett Rau<span class="badge badge-primary-light badge-md ms-2">Agent</span></h5>

																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Sed incidunt voluptatem dolore odio. Aut ut quas veritatis aut aut. Dolore dignissimos atque quam expedita iure neque. Ea corporis repudiandae ad maxime rerum perferendis mollitia qui. Aspernatur esse quo sit. Nihil ullam amet perferendis iure culpa et molestiae. Magnam rem facilis voluptatem ullam. Nisi possimus nobis ipsum sint debitis fugit. Ipsa at sint et explicabo eum blanditiis inventore. At nihil ullam sed expedita magnam blanditiis id. Vel nihil quod et consectetur sunt et.
																		</div>
																		<div class="row galleryopen">

																		</div>
																	</div>
																</div>
															</div>






															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">

																			<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="media-object brround avatar-lg" alt="default">

																		</a>
																	</div>
																	<div class="media-body">
																		<h5 class="mt-1 mb-1 font-weight-semibold">Pasquale Kessler<span class="badge badge-danger-light badge-md ms-2">Guest</span></h5>
																		<small class="text-muted"><i class="feather feather-clock"></i> 9 years ago</small>
																		<div class="fs-13 mb-0 mt-1">
																			Non amet rerum vero reiciendis. Architecto nihil blanditiis aperiam hic molestias. Est quia velit quia deleniti autem et. Incidunt nulla accusamus nobis dolor voluptatem et commodi reprehenderit. Ducimus et aliquid quis debitis. Et nobis ea rerum quidem velit mollitia esse a. Aperiam voluptatem quas placeat et ea.

																		</div>
																		<div class="row galleryopen">

																		</div>
																	</div>
																</div>
															</div>


																								</div>
												</div>
											</div>


										</div>

										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<div class="card-header  border-0">
													<div class="card-title">Ticket Information</div>
												</div>
												<div class="card-body pt-2 ps-0 pe-0 pb-0">
													<div class="table-responsive tr-lastchild">
														<table class="table mb-0 table-information">
															<tbody>

																<tr>
																	<td>
																		<span class="w-50">Ticket ID</span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold">#SPG-29</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50">Ticket Category</span>
																	</td>
																	<td>:</td>
																	<td>

																		<span class="font-weight-semibold">est</span>

																		<a href="javascript:void(0)" data-id="SPG-29" class="p-1 sprukocategory border border-primary br-7 text-white bg-primary ms-2"> <i class="feather feather-edit-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Change Category" aria-label="Change Category"></i></a>


																	</td>
																</tr>

																<tr>
																	<td>
																		<span class="w-50">Ticket Priority</span>
																	</td>
																	<td>:</td>
																	<td id="priorityid">

																			<span class="badge badge-danger-light">High</span>
																																			</td>
																</tr>

																<tr>
																	<td>
																		<span class="w-50">Open Date</span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold">May-12-2012, 03:05</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50">Status</span>
																	</td>
																	<td>:</td>
																	<td>

																		<span class="badge badge-info">Inprogress</span>

																	</td>
																</tr>

															</tbody>
														</table>
													</div>
												</div>
												<div class="card-footer ticket-buttons">

															<button data-id="29" id="assigned" class="btn btn-primary my-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Assign">
																<i class="feather feather-users"></i> Assign
															</button>

														<button class="btn btn-secondary my-1" id="priority">Change Priority</button>

												</div>
											</div>
											<div class="card">
												<div class="card-header  border-0">
													<div class="card-title">Customer Details</div>
												</div>
												<div class="card-body text-center pt-2 px-0 pb-0 py-0">
													<div class="profile-pic">
														<div class="profile-pic-img mb-2">
															<span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Online" aria-label="Online"></span>

																<img src="https://uhelp.spruko.com/uhelp/uploads/profile/user-profile.png" class="brround avatar-xxl" alt="default">

														</div>
														<a href="#" class="text-dark">
															<h5 class="mb-1 font-weight-semibold2">Pasquale Kessler</h5>
															<small class="text-muted ">nsauer@rath.net
															</small>
														</a>
													</div>
													<div class="table-responsive text-start tr-lastchild">
														<table class="table mb-0 table-information">
															<tbody>
																<tr>
																	<td>
																		<span class="w-50">Gender</span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold">Female</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50">IP</span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold">134.4.78.46</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50">Mobile Number</span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold">1-973-758-2123</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50">Country</span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold">Barbados</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50">Timezone</span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold">America/Nipigon</span>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>

											<div class="card">
												<div class="card-header  border-0">
													<div class="card-title">Ticket Note</div>
													<div class="card-options">

														<a href="javascript:void(0)" class="btn btn-secondary " id="create-new-note"><i class="feather feather-plus"></i></a>

													</div>
												</div>
												<div class="card-body  item-user">
													<div id="refresh">

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
