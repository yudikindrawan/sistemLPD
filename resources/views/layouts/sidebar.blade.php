                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                      @if (Auth::user()->roles_id == 4)
                      <li><a><i class="fa fa-home"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="javascript:void(0)">Dashboard</a></li>
                            <li><a href="javascript:void(0)">Dashboard2</a></li>
                            <li><a href="javascript:void(0)">Dashboard3</a></li>
                          </ul>
                      </li>
                      @else
                      <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="backend/default/form.html">General Form</a></li>
                            <li><a href="backend/default/form_advanced.html">Advanced Components</a></li>
                            <li><a href="backend/default/form_validation.html">Form Validation</a></li>
                            <li><a href="backend/default/form_wizards.html">Form Wizard</a></li>
                            <li><a href="backend/default/form_upload.html">Form Upload</a></li>
                            <li><a href="backend/default/form_buttons.html">Form Buttons</a></li>
                          </ul>
                      </li>
                      <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="backend/default/general_elements.html">General Elements</a></li>
                            <li><a href="backend/default/media_gallery.html">Media Gallery</a></li>
                            <li><a href="backend/default/typography.html">Typography</a></li>
                            <li><a href="backend/default/icons.html">Icons</a></li>
                            <li><a href="backend/default/glyphicons.html">Glyphicons</a></li>
                            <li><a href="backend/default/widgets.html">Widgets</a></li>
                            <li><a href="backend/default/invoice.html">Invoice</a></li>
                            <li><a href="backend/default/inbox.html">Inbox</a></li>
                            <li><a href="backend/default/calendar.html">Calendar</a></li>
                          </ul>
                      </li>
                      <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                          <li><a href="backend/default/tables.html">Tables</a></li>
                          <li><a href="backend/default/tables_dynamic.html">Table Dynamic</a></li>
                          </ul>
                      </li>
                      <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                          <li><a href="backend/default/chartjs.html">Chart JS</a></li>
                          <li><a href="backend/default/chartjs2.html">Chart JS2</a></li>
                          <li><a href="backend/default/morisjs.html">Moris JS</a></li>
                          <li><a href="backend/default/echarts.html">ECharts</a></li>
                          <li><a href="backend/default/other_charts.html">Other Charts</a></li>
                          </ul>
                      </li>
                      <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                          <li><a href="backend/default/fixed_sidebar.html">Fixed Sidebar</a></li>
                          <li><a href="backend/default/fixed_footer.html">Fixed Footer</a></li>
                          </ul>
                      </li>
                      @endif
                    </ul>
                </div>
                </div>
                <!-- /sidebar menu -->
