<aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{ url('admin/dashboard') }}" title="Sleek Dashboard">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33">
                  <g fill="none" fill-rule="evenodd">
                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>

                <span class="brand-name text-truncate">Tokokopi Dashboard</span>
              </a>
            </div>

            <!-- begin sidebar scrollbar -->
            <div class="" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                <li class="has-sub active expand">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                    aria-expanded="false" aria-controls="app">
                    <i class="mdi mdi-pencil-box-multiple"></i>
                    <span class="nav-text">Master</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse " id="app" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="">
                        <a class="sidenav-item-link" href="{{ url('admin/categories') }}">
                          <span class="nav-text">Kategori</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="{{ url('admin/products') }}">
                          <span class="nav-text">Produk</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="{{ url('admin/profils') }}">
                          <span class="nav-text">Profil</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="{{ url('admin/artikels') }}">
                          <span class="nav-text">Artikel</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="{{ url('admin/abouts') }}">
                          <span class="nav-text">About us</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="{{ url('admin/users') }}">
                          <span class="nav-text">User</span>
                        </a>
                      </li>

                      
                    </div>
                  </ul>
                </li>

                <!-- <li class="section-title">
                  UI Elements
                </li> -->

                <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                    aria-expanded="false" aria-controls="components">
                    <i class="mdi mdi-folder-multiple-outline"></i>
                    <span class="nav-text">Transaksi</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse " id="components" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="">
                        <a class="sidenav-item-link" href="{{ url('admin/orders') }}">
                          <span class="nav-text">Order</span>
                        </a>
                      </li>
                      <li class="">
                        <a class="sidenav-item-link" href="{{ url('admin/mesages') }}">
                          <span class="nav-text">Mesage</span>
                        </a>
                      </li>

                     

                      

                      
                    </div>
                  </ul>
                </li>

                

                

                <!--<li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#tables"
                    aria-expanded="false" aria-controls="tables">
                    <i class="mdi mdi-table"></i>
                    <span class="nav-text">Report</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse " id="tables" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="">
                        <a class="sidenav-item-link" href="basic-tables.html">
                          <span class="nav-text">Basic Tables</span>
                        </a>
                      </li>

                      <li class="has-sub ">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#data-tables"
                          aria-expanded="false" aria-controls="data-tables">
                          <span class="nav-text">Data Tables</span> <b class="caret"></b>
                        </a>

                        <ul class="collapse " id="data-tables">
                          <div class="sub-menu">
                            <li class="">
                              <a href="basic-data-table.html">Basic Data Table</a>
                            </li>

                           <li class="">
                              <a href="responsive-data-table.html">Responsive Data Table</a>
                            </li>

                           <li class="">
                              <a href="hoverable-data-table.html">Hoverable Data Table</a>
                            </li>

                           <li class="">
                              <a href="expendable-data-table.html">Expendable Data Table</a>
                            </li>
                          </div>
                        </ul>
                      </li>
                    </div>
                  </ul>
                </li>-->

                

                

                <!-- <li class="section-title">
                  Pages
                </li> -->

                

                      

                <!-- <li class="section-title">
                  Documentation
                </li> -->
              </ul>
            </div>

            <div class="sidebar-footer">
              <hr class="separator mb-0" />
              <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                  Cpu Uses <span class="float-right">40%</span>
                </h6>

                <div class="progress progress-xs">
                  <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
                </div>

                <h6 class="text-uppercase">
                  Memory Uses <span class="float-right">65%</span>
                </h6>

                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar"></div>
                </div>
              </div>
            </div>
          </div>
        </aside>