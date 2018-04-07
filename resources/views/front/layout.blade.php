<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->

<head>
	<meta charset="utf-8" />
	
	<title>
		Metronic | Dashboard
	</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>

	@include('common.linkCSS')
	<!--end::Base Styles -->

	<link rel="shortcut icon" href="{{URL::asset('assets/demo/default/media/img/logo/favicon.ico')}}" />

	<style>
		.hiden {
			display: none;
		}
	</style>
	<script>
	</script>
</head>

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
	<!-- begin:: Page -->
	{{-- @include('common.loading') --}}
	<div id="wait" style="display: none; position: fixed;left: 50%;z-index: 100000;top: 50%;" class="cssload-thecube">
	<div class="cssload-cube cssload-c1"></div>
	<div class="cssload-cube cssload-c2"></div>
	<div class="cssload-cube cssload-c4"></div>
	<div class="cssload-cube cssload-c3"></div>
</div>
{{-- <div id="wait" style="display:none;width:69px;height:89px;border:1px solid black;position:fixed;top:50%;left:50%;padding:2px;"><img src='demo_wait.gif' width="64" height="64" /><br>Loading..</div> --}}
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<!-- BEGIN: Header -->
		<header class="m-grid__item    m-header " data-minimize-offset="200" data-minimize-mobile-offset="200">
			<div class="m-container m-container--fluid m-container--full-height">
				<div class="m-stack m-stack--ver m-stack--desktop">
					<!-- BEGIN: Brand -->
					<div class="m-stack__item m-brand  m-brand--skin-dark ">
						<div class="m-stack m-stack--ver m-stack--general">
							<div class="m-stack__item m-stack__item--middle m-brand__logo">
								<a href="index.html" class="m-brand__logo-wrapper">
									<img alt="" src="assets/demo/default/media/img/logo/logo_default_dark.png" />
								</a>
							</div>
							<div class="m-stack__item m-stack__item--middle m-brand__tools">
								<!-- BEGIN: Left Aside Minimize Toggle -->
								<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
					 ">
									<span></span>
								</a>
								<!-- END -->
								<!-- BEGIN: Responsive Aside Left Menu Toggler -->
								<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
									<span></span>
								</a>
								<!-- END -->
								<!-- BEGIN: Responsive Header Menu Toggler -->
								<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
									<span></span>
								</a>
								<!-- END -->
								<!-- BEGIN: Topbar Toggler -->
								<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
									<i class="flaticon-more"></i>
								</a>
								<!-- BEGIN: Topbar Toggler -->
							</div>
						</div>
					</div>
					<!-- END: Brand -->
					<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
						<!-- BEGIN: Horizontal Menu -->
						<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
							<i class="la la-close"></i>
						</button>
						<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
							<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
								<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
									<a href="{{url('listsinhvien')}}" class="m-menu__link m-menu__toggle">
										<i class="m-menu__link-icon flaticon-add"></i>
										<span class="m-menu__link-text">
											Danh sách Sinh Viên
										</span>
										<i class="m-menu__hor-arrow la la-angle-down"></i>
										<i class="m-menu__ver-arrow la la-angle-right"></i>
									</a>
									<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
										<span class="m-menu__arrow m-menu__arrow--adjust"></span>
										<ul class="m-menu__subnav">
											<li class="m-menu__item clickThemSV" aria-haspopup="true">
												<a href="#duc" class="m-menu__link ">
													<i class="m-menu__link-icon flaticon-file"></i>
													<span class="m-menu__link-text">
														Thêm Sinh Viên
													</span>
												</a>
											</li>
											<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
												<a href="header/actions.html" class="m-menu__link ">
													<i class="m-menu__link-icon flaticon-diagram"></i>
													<span class="m-menu__link-title">
														<span class="m-menu__link-wrap">
															<span class="m-menu__link-text">
																Tạo Lớp Học
															</span>
															<span class="m-menu__link-badge">
																<span class="m-badge m-badge--success">
																	2
																</span>
															</span>
														</span>
													</span>
												</a>
											</li>
											<li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
												<a href="#" class="m-menu__link m-menu__toggle">
													<i class="m-menu__link-icon flaticon-business"></i>
													<span class="m-menu__link-text">
														Thêm Giảng Viên
													</span>
													<i class="m-menu__hor-arrow la la-angle-right"></i>
													<i class="m-menu__ver-arrow la la-angle-right"></i>
												</a>
												<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
													<span class="m-menu__arrow "></span>
													<ul class="m-menu__subnav">
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<span class="m-menu__link-text">

																</span>
															</a>
														</li>


													</ul>
												</div>
											</li>
											<li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
												<a href="#" class="m-menu__link m-menu__toggle">
													<i class="m-menu__link-icon flaticon-chat-1"></i>
													<span class="m-menu__link-text">
														Customer Feedbacks
													</span>
													<i class="m-menu__hor-arrow la la-angle-right"></i>
													<i class="m-menu__ver-arrow la la-angle-right"></i>
												</a>
												<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
													<span class="m-menu__arrow "></span>
													<ul class="m-menu__subnav">
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<span class="m-menu__link-text">
																	Customer Feedbacks
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<span class="m-menu__link-text">
																	Supplier Feedbacks
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<span class="m-menu__link-text">
																	Reviewed Feedbacks
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<span class="m-menu__link-text">
																	Resolved Feedbacks
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<span class="m-menu__link-text">
																	Feedback Reports
																</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
												<a href="header/actions.html" class="m-menu__link ">
													<i class="m-menu__link-icon flaticon-users"></i>
													<span class="m-menu__link-text">
														Register Member
													</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
									<a href="#" class="m-menu__link m-menu__toggle">
										<i class="m-menu__link-icon flaticon-line-graph"></i>
										<span class="m-menu__link-text">
											Reports
										</span>
										<i class="m-menu__hor-arrow la la-angle-down"></i>
										<i class="m-menu__ver-arrow la la-angle-right"></i>
									</a>
									<div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:1000px">
										<span class="m-menu__arrow m-menu__arrow--adjust"></span>
										<div class="m-menu__subnav">
											<ul class="m-menu__content">
												<li class="m-menu__item">
													<h3 class="m-menu__heading m-menu__toggle">
														<span class="m-menu__link-text">
															Finance Reports
														</span>
														<i class="m-menu__ver-arrow la la-angle-right"></i>
													</h3>
													<ul class="m-menu__inner">
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-map"></i>
																<span class="m-menu__link-text">
																	Annual Reports
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-user"></i>
																<span class="m-menu__link-text">
																	HR Reports
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-clipboard"></i>
																<span class="m-menu__link-text">
																	IPO Reports
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-graphic-1"></i>
																<span class="m-menu__link-text">
																	Finance Margins
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-graphic-2"></i>
																<span class="m-menu__link-text">
																	Revenue Reports
																</span>
															</a>
														</li>
													</ul>
												</li>



											</ul>
										</div>
									</div>
								</li>
								<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
									<a href="#" class="m-menu__link m-menu__toggle">
										<i class="m-menu__link-icon flaticon-paper-plane"></i>
										<span class="m-menu__link-title">
											<span class="m-menu__link-wrap">
												<span class="m-menu__link-text">
													Apps
												</span>
												<span class="m-menu__link-badge">
													<span class="m-badge m-badge--brand m-badge--wide">
														new
													</span>
												</span>
											</span>
										</span>
										<i class="m-menu__hor-arrow la la-angle-down"></i>
										<i class="m-menu__ver-arrow la la-angle-right"></i>
									</a>
									<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
										<span class="m-menu__arrow m-menu__arrow--adjust"></span>
										<ul class="m-menu__subnav">
											<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
												<a href="header/actions.html" class="m-menu__link ">
													<i class="m-menu__link-icon flaticon-business"></i>
													<span class="m-menu__link-text">
														eCommerce
													</span>
												</a>
											</li>
											<li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
												<a href="crud/datatable_v1.html" class="m-menu__link m-menu__toggle">
													<i class="m-menu__link-icon flaticon-computer"></i>
													<span class="m-menu__link-text">
														Audience
													</span>
													<i class="m-menu__hor-arrow la la-angle-right"></i>
													<i class="m-menu__ver-arrow la la-angle-right"></i>
												</a>
												<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
													<span class="m-menu__arrow "></span>
													<ul class="m-menu__subnav">
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-users"></i>
																<span class="m-menu__link-text">
																	Active Users
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-interface-1"></i>
																<span class="m-menu__link-text">
																	User Explorer
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-lifebuoy"></i>
																<span class="m-menu__link-text">
																	Users Flows
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-graphic-1"></i>
																<span class="m-menu__link-text">
																	Market Segments
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-graphic"></i>
																<span class="m-menu__link-text">
																	User Reports
																</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
												<a href="header/actions.html" class="m-menu__link ">
													<i class="m-menu__link-icon flaticon-map"></i>
													<span class="m-menu__link-text">
														Marketing
													</span>
												</a>
											</li>
											<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
												<a href="header/actions.html" class="m-menu__link ">
													<i class="m-menu__link-icon flaticon-graphic-2"></i>
													<span class="m-menu__link-title">
														<span class="m-menu__link-wrap">
															<span class="m-menu__link-text">
																Campaigns
															</span>
															<span class="m-menu__link-badge">
																<span class="m-badge m-badge--success">
																	3
																</span>
															</span>
														</span>
													</span>
												</a>
											</li>
											<li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
												<a href="#" class="m-menu__link m-menu__toggle">
													<i class="m-menu__link-icon flaticon-infinity"></i>
													<span class="m-menu__link-text">
														Cloud Manager
													</span>
													<i class="m-menu__hor-arrow la la-angle-right"></i>
													<i class="m-menu__ver-arrow la la-angle-right"></i>
												</a>
												<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
													<span class="m-menu__arrow "></span>
													<ul class="m-menu__subnav">
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-add"></i>
																<span class="m-menu__link-title">
																	<span class="m-menu__link-wrap">
																		<span class="m-menu__link-text">
																			File Upload
																		</span>
																		<span class="m-menu__link-badge">
																			<span class="m-badge m-badge--danger">
																				3
																			</span>
																		</span>
																	</span>
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-signs-1"></i>
																<span class="m-menu__link-text">
																	File Attributes
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-folder"></i>
																<span class="m-menu__link-text">
																	Folders
																</span>
															</a>
														</li>
														<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
															<a href="header/actions.html" class="m-menu__link ">
																<i class="m-menu__link-icon flaticon-cogwheel-2"></i>
																<span class="m-menu__link-text">
																	System Settings
																</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
						<!-- END: Horizontal Menu -->
						<!-- BEGIN: Topbar -->
						<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
							<div class="m-stack__item m-topbar__nav-wrapper">
								<ul class="m-topbar__nav m-nav m-nav--inline">
									
									<li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width"
									    data-dropdown-toggle="click" data-dropdown-persistent="true">
										<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
											<span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
											<span class="m-nav__link-icon">
												<i class="flaticon-music-2"></i>
											</span>
										</a>
										<div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
											<div class="m-dropdown__inner">
												<div class="m-dropdown__header m--align-center" style="background: url({{asset('assets/app/media/img/misc/notification_bg.jpg')}}; background-size: cover;">
													<span class="m-dropdown__header-title">
														9 New
													</span>
													<span class="m-dropdown__header-subtitle">
														User Notifications
													</span>
												</div>
												<div class="m-dropdown__body">
													<div class="m-dropdown__content">
														<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
															<li class="nav-item m-tabs__item">
																<a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
																	Alerts
																</a>
															</li>
															<li class="nav-item m-tabs__item">
																<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">
																	Events
																</a>
															</li>
															<li class="nav-item m-tabs__item">
																<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">
																	Logs
																</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
																<div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
																	<div class="m-list-timeline m-list-timeline--skin-light">
																		<div class="m-list-timeline__items">
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
																				<span class="m-list-timeline__text">
																					12 new users registered
																				</span>
																				<span class="m-list-timeline__time">
																					Just now
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge"></span>
																				<span class="m-list-timeline__text">
																					System shutdown
																					<span class="m-badge m-badge--success m-badge--wide">
																						pending
																					</span>
																				</span>
																				<span class="m-list-timeline__time">
																					14 mins
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge"></span>
																				<span class="m-list-timeline__text">
																					New invoice received
																				</span>
																				<span class="m-list-timeline__time">
																					20 mins
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge"></span>
																				<span class="m-list-timeline__text">
																					DB overloaded 80%
																					<span class="m-badge m-badge--info m-badge--wide">
																						settled
																					</span>
																				</span>
																				<span class="m-list-timeline__time">
																					1 hr
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge"></span>
																				<span class="m-list-timeline__text">
																					System error -
																					<a href="#" class="m-link">
																						Check
																					</a>
																				</span>
																				<span class="m-list-timeline__time">
																					2 hrs
																				</span>
																			</div>
																			<div class="m-list-timeline__item m-list-timeline__item--read">
																				<span class="m-list-timeline__badge"></span>
																				<span href="" class="m-list-timeline__text">
																					New order received
																					<span class="m-badge m-badge--danger m-badge--wide">
																						urgent
																					</span>
																				</span>
																				<span class="m-list-timeline__time">
																					7 hrs
																				</span>
																			</div>
																			<div class="m-list-timeline__item m-list-timeline__item--read">
																				<span class="m-list-timeline__badge"></span>
																				<span class="m-list-timeline__text">
																					Production server down
																				</span>
																				<span class="m-list-timeline__time">
																					3 hrs
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge"></span>
																				<span class="m-list-timeline__text">
																					Production server up
																				</span>
																				<span class="m-list-timeline__time">
																					5 hrs
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
																<div class="m-scrollable" m-scrollabledata-scrollable="true" data-max-height="250" data-mobile-max-height="200">
																	<div class="m-list-timeline m-list-timeline--skin-light">
																		<div class="m-list-timeline__items">
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																				<a href="" class="m-list-timeline__text">
																					New order received
																				</a>
																				<span class="m-list-timeline__time">
																					Just now
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
																				<a href="" class="m-list-timeline__text">
																					New invoice received
																				</a>
																				<span class="m-list-timeline__time">
																					20 mins
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																				<a href="" class="m-list-timeline__text">
																					Production server up
																				</a>
																				<span class="m-list-timeline__time">
																					5 hrs
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																				<a href="" class="m-list-timeline__text">
																					New order received
																				</a>
																				<span class="m-list-timeline__time">
																					7 hrs
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																				<a href="" class="m-list-timeline__text">
																					System shutdown
																				</a>
																				<span class="m-list-timeline__time">
																					11 mins
																				</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																				<a href="" class="m-list-timeline__text">
																					Production server down
																				</a>
																				<span class="m-list-timeline__time">
																					3 hrs
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
																<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
																	<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																		<span class="">
																			All caught up!
																			<br> No new logs.
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									
									<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
									    data-dropdown-toggle="click">
										<a href="#" class="m-nav__link m-dropdown__toggle">
											<span class="m-topbar__userpic">
												<img src="{{asset('assets/app/media/img/users/user4.jpg')}}" class="m--img-rounded m--marginless m--img-centered" alt=""
												/>
											</span>
											<span class="m-topbar__username m--hide">
												Nick
											</span>
										</a>
										<div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
											<div class="m-dropdown__inner">
												<div class="m-dropdown__header m--align-center" style="background: url({{asset('assets/app/media/img/misc/user_profile_bg.jpg')}}); background-size: cover;">
													<div class="m-card-user m-card-user--skin-dark">
														<div class="m-card-user__pic">
															<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
														</div>
														<div class="m-card-user__details">
															<span class="m-card-user__name m--font-weight-500">
														{{ Auth::user()->username }}	

															</span>
															<a href="" class="m-card-user__email m--font-weight-300 m-link">
																	{{ Auth::user()->email }}	
															</a>
														</div>
													</div>
												</div>
												<div class="m-dropdown__body">
													<div class="m-dropdown__content">
														<ul class="m-nav m-nav--skin-light">
															<li class="m-nav__section m--hide">
																<span class="m-nav__section-text">
																	Section
																</span>
															</li>
															<li class="m-nav__item">
																<a href="{{url('profileMe')}}" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-profile-1"></i>
																	<span class="m-nav__link-title">
																		<span class="m-nav__link-wrap">
																			<span class="m-nav__link-text">
																				Thông tin tài khoản
																			</span>
																			<span class="m-nav__link-badge">
																				<span class="m-badge m-badge--success">
																					2
																				</span>
																			</span>
																		</span>
																	</span>
																</a>
															</li>
															
															
															
															
															<li class="m-nav__separator m-nav__separator--fit"></li>
															<li class="m-nav__item">
																<a href="{{url('auth/logout')}}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																	Logout
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li id="m_quick_sidebar_toggle" class="m-nav__item">
										<a href="#" class="m-nav__link m-dropdown__toggle">
											<span class="m-nav__link-icon">
												<i class="flaticon-grid-menu"></i>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- END: Topbar -->
					</div>
				</div>
			</div>
		</header>
		<!-- END: Header -->
		<!-- begin::Body -->
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
			<!-- BEGIN: Left Aside -->
			<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
				<i class="la la-close"></i>
			</button>
			<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
				<!-- BEGIN: Aside Menu -->
				<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true"
				    data-menu-scrollable="false" data-menu-dropdown-timeout="500">
					<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
						<li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
							<a href="index.html" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-line-graph"></i>
								<span class="m-menu__link-title">
									<span class="m-menu__link-wrap">
										<span class="m-menu__link-text">
											Bảng Thông Tin Mới
										</span>
										<span class="m-menu__link-badge">
											<span class="m-badge m-badge--danger">
												2
											</span>
										</span>
									</span>
								</span>
							</a>
						</li>
						<li class="m-menu__section">
							<h4 class="m-menu__section-text">
								Quản lý
							</h4>
							<i class="m-menu__section-icon flaticon-more-v3"></i>
						</li>
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
							<a href="#" class="m-menu__link m-menu__toggle autoclick">
								<i class="m-menu__link-icon flaticon-layers"></i>
								<span class="m-menu__link-text">
										Quản lý 
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu">
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
										<a href="#" class="m-menu__link ">
											<span class="m-menu__link-text">
											Quản lý 
											</span>
										</a>
									</li>
									@if(session('statut') == 'admin' )
									<li class="m-menu__item " aria-haspopup="true">
										<a href="{{url("/listsinhvien")}}" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
													Quản Lý Danh sách sinh viên
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true">
										<a href="{{url('/listgiangvien')}}" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
														Quản lý danh sách giảng viên
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true">
										<a href="{{url("/listlopmonhoc")}}" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Quản lý danh sách Lớp môn học
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true">
										<a href="{{url("/quanlylistlophoc")}}" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Quản lý danh sách Lớp  học
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true">
										<a href="{{url("/quanlylistmon")}}" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Quản lý Môn Học
											</span>
										</a>
									</li>
									@endif
									@if(session('statut') == 'redac')

									<li class="m-menu__item " aria-haspopup="true">
										<a href="{{url("/listlopmonhocviewgiangvien")}}" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Đăng ký các lớp môn học
											</span>
										</a>
									</li>
									
									@endif
									
								</ul>
							</div>
						</li>

						<li class="m-menu__section">
							<h4 class="m-menu__section-text">
								 	 Quản lý lớp môn học
							</h4>
							<i class="m-menu__section-icon flaticon-more-v3"></i>
						</li>
							
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
							<a href="#" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-interface-3"></i>
								<span class="m-menu__link-text">
										@if(session('statut') == 'admin' )
									Tạo Lớp Môn Học
									@endif
										@if(session('statut') == 'redac' )
									Quản lý Lớp Môn Học
									@endif
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu">
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
										<a href="#" class="m-menu__link ">
											<span class="m-menu__link-text">
									@if(session('statut') == 'admin' )
									Tạo Lớp Môn Học
									@endif
									@if(session('statut') == 'redac' )
									Quản lý Lớp Môn Học
										@endif
											</span>
										</a>
									</li>
									@if(session('statut') == 'admin' )
									<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
										<a href="{{url('taolopmonhocbangtay')}}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
											Tạo Bằng tay 
											</span>
											
										</a>
										
									</li>
									<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
										<a href="{{url('taotudong')}}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Tạo Tự động 
											</span>
											
										</a>
										
									</li>
									@endif
									@if(session('statut') == 'redac' )
									<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
										<a href="{{url('viewlistlopmonhocGiangVien')}}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
											Tất cả các lớp môn học đã đăng ký
											</span>
											
										</a>
										
									</li>
									@endif
								</ul>
							</div>
						</li>

					</ul>
				</div>
				<!-- END: Aside Menu -->
			</div>
			<!-- END: Left Aside -->
			<div class="m-grid__item m-grid__item--fluid m-wrapper">
				<!-- BEGIN: Subheader -->
				{{-- <div class="m-subheader ">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
						
						</div>
						<div>
							<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
								<span class="m-subheader__daterange-label">
									<span class="m-subheader__daterange-title"></span>
									<span class="m-subheader__daterange-date m--font-brand"></span>
								</span>
								<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
									<i class="la la-angle-down"></i>
								</a>
							</span>
						</div>
					</div>
				</div> --}}
				<!-- END: Subheader -->
				<div class="m-content">
					@if(session('statut') == 'admin' )
					@section('m-content')
					
					
						@show
					@endif		
				
				@if(session('statut') == 'redac' )
				@section('content-giangvien')
				Welcome Giang Vien
				@show
				@endif
				</div>

			</div>
		</div>
		<!-- end:: Body -->
		<!-- begin::Footer -->
		<footer class="m-grid__item m-footer ">
			<div class="m-container m-container--fluid m-container--full-height m-page__container">
				<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
					<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
						<span class="m-footer__copyright">
							2018 &copy; Project Manager Student by
							<a href="https://github.com/ducga1998" class="m-link">
								Nguyễn Minh Đức

							</a>
						</span>
					</div>
					
				</div>
			</div>
		</footer>
		<!-- end::Footer -->
	</div>
	<!-- end:: Page -->
	<!-- begin::Quick Sidebar -->
	<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
		<div class="m-quick-sidebar__content m--hide">
			<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
				<i class="la la-close"></i>
			</span>
			<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
						Messages
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
						Settings
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
						Logs
					</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
					<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
						<div class="m-messenger__messages">
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-pic">
									<img src="assets/app/media/img//users/user3.jpg" alt="" />
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Hi Bob. What time will be the meeting ?
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Hi Megan. It's at 2.30PM
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-pic">
									<img src="assets/app/media/img//users/user3.jpg" alt="" />
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Will the development team be joining ?
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Yes sure. I invited them as well
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__datetime">
								2:30PM
							</div>
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-pic">
									<img src="assets/app/media/img//users/user3.jpg" alt="" />
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Noted. For the Coca-Cola Mobile App project as well ?
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Yes, sure.
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Please also prepare the quotation for the Loop CRM project as well.
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__datetime">
								3:15PM
							</div>
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-no-pic m--bg-fill-danger">
									<span>
										M
									</span>
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Noted. I will prepare it.
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Thanks Megan. I will see you later.
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-pic">
									<img src="assets/app/media/img//users/user3.jpg" alt="" />
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Sure. See you in the meeting soon.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__seperator"></div>
						<div class="m-messenger__form">
							<div class="m-messenger__form-controls">
								<input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
							</div>
							<div class="m-messenger__form-tools">
								<a href="" class="m-messenger__form-attachment">
									<i class="la la-paperclip"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
					<div class="m-list-settings">
						<div class="m-list-settings__group">
							<div class="m-list-settings__heading">
								General Settings
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Email Notifications
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Site Tracking
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									SMS Alerts
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Backup Storage
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Audit Logs
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
						</div>
						<div class="m-list-settings__group">
							<div class="m-list-settings__heading">
								System Settings
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									System Logs
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Error Reporting
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Applications Logs
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Backup Servers
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Audit Logs
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
					<div class="m-list-timeline">
						<div class="m-list-timeline__group">
							<div class="m-list-timeline__heading">
								System Logs
							</div>
							<div class="m-list-timeline__items">
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										12 new users registered
										<span class="m-badge m-badge--warning m-badge--wide">
											important
										</span>
									</a>
									<span class="m-list-timeline__time">
										Just now
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										System shutdown
									</a>
									<span class="m-list-timeline__time">
										11 mins
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
									<a href="" class="m-list-timeline__text">
										New invoice received
									</a>
									<span class="m-list-timeline__time">
										20 mins
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
									<a href="" class="m-list-timeline__text">
										Database overloaded 89%
										<span class="m-badge m-badge--success m-badge--wide">
											resolved
										</span>
									</a>
									<span class="m-list-timeline__time">
										1 hr
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										System error
									</a>
									<span class="m-list-timeline__time">
										2 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										Production server down
										<span class="m-badge m-badge--danger m-badge--wide">
											pending
										</span>
									</a>
									<span class="m-list-timeline__time">
										3 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										Production server up
									</a>
									<span class="m-list-timeline__time">
										5 hrs
									</span>
								</div>
							</div>
						</div>
						<div class="m-list-timeline__group">
							<div class="m-list-timeline__heading">
								Applications Logs
							</div>
							<div class="m-list-timeline__items">
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										New order received
										<span class="m-badge m-badge--info m-badge--wide">
											urgent
										</span>
									</a>
									<span class="m-list-timeline__time">
										7 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										12 new users registered
									</a>
									<span class="m-list-timeline__time">
										Just now
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										System shutdown
									</a>
									<span class="m-list-timeline__time">
										11 mins
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
									<a href="" class="m-list-timeline__text">
										New invoices received
									</a>
									<span class="m-list-timeline__time">
										20 mins
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
									<a href="" class="m-list-timeline__text">
										Database overloaded 89%
									</a>
									<span class="m-list-timeline__time">
										1 hr
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										System error
										<span class="m-badge m-badge--info m-badge--wide">
											pending
										</span>
									</a>
									<span class="m-list-timeline__time">
										2 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										Production server down
									</a>
									<span class="m-list-timeline__time">
										3 hrs
									</span>
								</div>
							</div>
						</div>
						<div class="m-list-timeline__group">
							<div class="m-list-timeline__heading">
								Server Logs
							</div>
							<div class="m-list-timeline__items">
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										Production server up
									</a>
									<span class="m-list-timeline__time">
										5 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										New order received
									</a>
									<span class="m-list-timeline__time">
										7 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										12 new users registered
									</a>
									<span class="m-list-timeline__time">
										Just now
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										System shutdown
									</a>
									<span class="m-list-timeline__time">
										11 mins
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
									<a href="" class="m-list-timeline__text">
										New invoice received
									</a>
									<span class="m-list-timeline__time">
										20 mins
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
									<a href="" class="m-list-timeline__text">
										Database overloaded 89%
									</a>
									<span class="m-list-timeline__time">
										1 hr
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										System error
									</a>
									<span class="m-list-timeline__time">
										2 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										Production server down
									</a>
									<span class="m-list-timeline__time">
										3 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										Production server up
									</a>
									<span class="m-list-timeline__time">
										5 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										New order received
									</a>
									<span class="m-list-timeline__time">
										1117 hrs
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end::Quick Sidebar -->
	<!-- begin::Scroll Top -->
	<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
		<i class="la la-arrow-up"></i>
	</div>
	<!-- end::Scroll Top -->
	<!-- begin::Quick Nav -->
	<ul class="m-nav-sticky" style="margin-top: 30px;">
		<!--
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
				<a href="">
					<i class="la la-eye"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
				<a href="" >
					<i class="la la-comments-o"></i>
				</a>
			</li>
			-->
		<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
			<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">
				<i class="la la-cart-arrow-down"></i>
			</a>
		</li>
		<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
			<a href="http://keenthemes.com/metronic/documentation.html" target="_blank">
				<i class="la la-code-fork"></i>
			</a>
		</li>
		<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
			<a href="http://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
				<i class="la la-life-ring"></i>
			</a>
		</li>
	</ul>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="{{URL::asset('handleAjax.js')}}"></script>  
	<script src="{{URL::asset('handleAjAx_Form.js')}}"></script>
	
	<script >
		function noneLoading() {

			$(".full-page-absolute").addClass("None");
		}

		setTimeout(() => {
			$(".full-page-absolute").addClass("opacity");
			setTimeout(() => {
				noneLoading()
			}, 1000);
		}, 3000);
	</script>

	<script src="{{ URL::asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
	<script src="{{ URL::asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('assets/demo/default/custom/components/base/blockui.js')}}" type="text/javascript"></script>
	<script src="{{ URL::asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
	<script src="{{ URL::asset('assets/demo/default/custom/components/forms/widgets/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
	<script src="{{ URL::asset('assets/app/js/dashboard.js')}}" type="text/javascript"></script>

</body>
<!-- end::Body -->

</html>