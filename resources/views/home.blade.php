@extends('layouts.app')

@section('content')
<div class="menu" role="menu">
                <div class="alert text-center" role="alert">
                </div>
                <div class="searchbox">
            <div class="searc">
                <div class="input-group">
                    <span class="input-group-search-icon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control o_search_input" placeholder="Search for documents...">
                </div>
            </div>
        </div><div class="o_apps">

                        <a role="menuitem" class="o_app" href="#menu_id=92&amp;action_id=116" data-menu-id="92" data-menu-xmlid="mail.menu_root_discuss" data-action-id="116">
                            <div class="o_app_div" style="background-color:#cc6d8a">
                                <i class="fa fa-comments-o"></i>
                            </div>
                            <div class="o_app_name">
                                <h4>
                                    Discuss
                                </h4>
                                <p>
                                    Live Chats
                                </p>
                            </div>
                        </a>

                        <a role="menuitem" class="o_app" href="#menu_id=100&amp;action_id=142" data-menu-id="100" data-menu-xmlid="calendar.mail_menu_calendar" data-action-id="142">
                            <div class="o_app_div" style="background-color:#c8be7b">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="o_app_name">
                                <h4>
                                    Calendar
                                </h4>
                                <p>
                                    Invites and Planning
                                </p>
                            </div>
                        </a>

                        <a role="menuitem" class="o_app" href="#menu_id=104&amp;action_id=144" data-menu-id="104" data-menu-xmlid="contacts.menu_contacts" data-action-id="144">
                            <div class="o_app_div" style="background-color:#259094">
                                <i class="fa fa-address-book-o"></i>
                            </div>
                            <div class="o_app_name">
                                <h4>
                                    Contacts
                                </h4>
                                <p>
                                    Contact List
                                </p>
                            </div>
                        </a>

                        <a role="menuitem" class="o_app" href="#menu_id=135&amp;action_id=153" data-menu-id="135" data-menu-xmlid="crm.crm_menu_root" data-action-id="153">
                            <div class="o_app_div" style="background-color:#75799f">
                                <i class="fa fa-handshake-o"></i>
                            </div>
                            <div class="o_app_name">
                                <h4>
                                    CRM
                                </h4>
                                <p>
                                    Leads and Sales Pipeline
                                </p>
                            </div>
                        </a>

                        <a role="menuitem" class="o_app" href="#menu_id=128&amp;action_id=176" data-menu-id="128" data-menu-xmlid="helpdesk.menu_base" data-action-id="176">
                            <div class="o_app_div" style="background-color:#6da584">
                                <i class="fa fa-life-ring"></i>
                            </div>
                            <div class="o_app_name">
                                <h4>
                                    Helpdesk
                                </h4>
                                <p>
                                    Service Desk and Tickets
                                </p>
                            </div>
                        </a>

                        <a role="menuitem" class="o_app" href="#menu_id=243&amp;action_id=361" data-menu-id="243" data-menu-xmlid="ks_dashboard_ninja.board_menu_root" data-action-id="361">
                            <div class="o_app_div" style="background-color:#707270">
                                <i class="fa fa-dashboard"></i>
                            </div>
                            <div class="o_app_name">
                                <h4>
                                    My Dashboard
                                </h4>
                                <p>
                                    Report Builder
                                </p>
                            </div>
                        </a>

                        <a role="menuitem" class="o_app" href="#menu_id=157&amp;action_id=219" data-menu-id="157" data-menu-xmlid="project.menu_main_pm" data-action-id="219">
                            <div class="o_app_div" style="background-color:#75799f">
                                <i class="fa fa-puzzle-piece"></i>
                            </div>
                            <div class="o_app_name">
                                <h4>
                                    Project
                                </h4>
                                <p>
                                    Tasks and Planning
                                </p>
                            </div>
                        </a>

                        <a role="menuitem" class="o_app" href="#menu_id=264&amp;action_id=384" data-menu-id="264" data-menu-xmlid="hr_timesheet.timesheet_menu_root" data-action-id="384">
                            <div class="o_app_div" style="background-color:#a25656">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="o_app_name">
                                <h4>
                                    Timesheets
                                </h4>
                                <p>
                                    Employee Productivity
                                </p>
                            </div>
                        </a>

                        <a role="menuitem" class="o_app" href="#menu_id=286&amp;action_id=461" data-menu-id="286" data-menu-xmlid="mass_mailing.mass_mailing_menu_root" data-action-id="461">
                            <div class="o_app_div" style="background-color:#707270">
                                <i class="fa fa-paper-plane"></i>
                            </div>
                            <div class="o_app_name">
                                <h4>
                                    Email Marketing
                                </h4>
                                <p>
                                    Email Campaigns
                                </p>
                            </div>
                        </a>

                        <a role="menuitem" class="o_app" href="#menu_id=247&amp;action_id=373" data-menu-id="247" data-menu-xmlid="hr.menu_hr_root" data-action-id="373">
                            <div class="o_app_div" style="background-color:#259094">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="o_app_name">
                                <h4>
                                    Employees
                                </h4>
                                <p>
                                    Organization Directory
                                </p>
                            </div>
                        </a>

                        <a role="menuitem" class="o_app" href="#menu_id=1&amp;action_id=401" data-menu-id="1" data-menu-xmlid="base.menu_board_root" data-action-id="401">
                            <div class="o_app_div" style="background-color:#cc6d8a">
                                <i class="fa fa-dashboard"></i>
                            </div>
                            <div class="o_app_name">
                                <h4>
                                    Dashboards
                                </h4>
                                <p>
                                    Custom Dashboards
                                </p>
                            </div>
                        </a>

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
