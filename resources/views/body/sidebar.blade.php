    <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>
                
          <li>
            <a href="{{ url('/dashboard') }}">
               <i class="mdi mdi-view-dashboard-outline"></i>
                <span> Dashboards </span>
            </a>
        </li>




                            <li class="menu-title mt-2">Apps</li>

                           

                            <li>
                                <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                                    <i class="mdi mdi-cart-outline"></i>
                                    <span> Employee Manage  </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarEcommerce">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.employee') }}">All Employee</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.employee') }}">Add Employee </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarCrm" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span> Customer Manage   </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarCrm">
                                    <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.customer') }}">All Customer</a>
                    </li>
                    <li>
                        <a href="{{ route('add.customer') }}">Add Customer</a>
                    </li>
                                         
                                    </ul>
                                </div>
                            </li>

        <li>
            <a href="#sidebarEmail" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Supplier Manage </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEmail">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.supplier') }}">All Supplier</a>
                    </li>
                    <li>
                        <a href="{{ route('add.supplier') }}">Add Supplier</a>
                    </li>
                    
                </ul>
            </div>
        </li>



        <li>
            <a href="#salary" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Employee Salary </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="salary">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('add.advance.salary') }}">Add Advance Salary</a>
                    </li>
                    <li>
                        <a href="{{ route('all.advance.salary') }}">All Advance Salary</a>
                    </li>

                     <li>
                        <a href="{{ route('pay.salary') }}">Pay Salary</a>
                    </li> 

                    <li>
                        <a href="{{ route('month.salary') }}">Last Month Salary</a>
                    </li>
                    
                </ul>
            </div>
        </li>




        <li>
            <a href="#attendence" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Employee Attendence </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="attendence">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('employee.attend.list') }}">Employee Attendence List </a>
                    </li>
                
                </ul>
            </div>
        </li>



        <li>
            <a href="#category" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Category </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="category">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.category') }}">All Category </a>
                    </li>
                
                </ul>
            </div>
        </li>


         <li>
            <a href="#product" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Products  </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="product">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.product') }}">All Product </a>
                    </li>

                     <li>
                        <a href="{{ route('add.product') }}">Add Product </a>
                    </li>
                     <li>
                        <a href="{{ route('import.product') }}">Import Product </a>
                    </li>
                
                </ul>
            </div>
        </li>

                             
                          

                            <li class="menu-title mt-2">Custom</li>

                            <li>
                                <a href="#sidebarAuth" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-circle-outline"></i>
                                    <span>Expense </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAuth">
        <ul class="nav-second-level">
            <li>
                <a href="{{ route('add.expense') }}">Add Expense</a>
            </li>
            <li>
                <a href="auth-login-2.html">Today Expense</a>
            </li>
            <li>
                <a href="auth-login-2.html">Monthly Expense</a>
            </li>
            <li>
                <a href="auth-login-2.html">Yearly Expense</a>
            </li>
            
        </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarExpages" data-bs-toggle="collapse">
                                    <i class="mdi mdi-text-box-multiple-outline"></i>
                                    <span> Extra Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarExpages">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="pages-starter.html">Starter</a>
                                        </li>
                                        <li>
                                            <a href="pages-timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="pages-sitemap.html">Sitemap</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>

                         
 
                          

                               
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>