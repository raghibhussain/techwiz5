  <!-- Left Sidebar -->
  <div class="fixed-sidebar-left">
      <ul class="nav navbar-nav side-nav nicescroll-bar">
          <li class="navigation-header">
              <span>Main</span>
              <hr />
          </li>
          <li>
              <a class="active" href="{{ route('pages.dashboard') }}" data-toggle="collapse" data-target="#dashboard_dr">
                  <div class="pull-left"><i class="ti-dashboard mr-10"></i><span class="right-nav-text">Dashboard</span>
                  </div>
                  <div class="clearfix"></div>
              </a>
          </li>
          <li>
              <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr">
                  <div class="pull-left"><i class="zmdi zmdi-airplane  mr-10"></i><span
                          class="right-nav-text">Trips</span></div>
                  <div class="pull-right"><i class="ti-angle-down"></i></div>
                  <div class="clearfix"></div>
              </a>
              <ul id="ecom_dr" class="collapse collapse-level-1">
                  <li>
                      <a href="{{ route('pages.trips') }}">View All</a>
                  </li>
                  <li>
                      <a href="{{ route('pages.add.trip') }}">Add New</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="javascript:void(0);" data-toggle="collapse" data-target="#expense_dr">
                  <div class="pull-left"><i class="zmdi zmdi-map  mr-10"></i><span
                          class="right-nav-text">Destinations</span></div>
                  <div class="pull-right"><i class="ti-angle-down"></i></div>
                  <div class="clearfix"></div>
              </a>
              <ul id="expense_dr" class="collapse collapse-level-1">
                  <li>
                      <a href="{{ route('pages.expense') }}">View All</a>
                  </li>
                  <li>
                      <a href="{{ route('Pages.ExpenseLog') }}">Add Destinatinos</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="javascript:void(0);" data-toggle="collapse" data-target="#expense_dr">
                  <div class="pull-left"><i class="zmdi zmdi-money  mr-10"></i><span
                          class="right-nav-text">Expense</span></div>
                  <div class="pull-right"><i class="ti-angle-down"></i></div>
                  <div class="clearfix"></div>
              </a>
              <ul id="expense_dr" class="collapse collapse-level-1">
                  <li>
                      <a href="{{ route('pages.expense') }}">View All</a>
                  </li>
                  <li>
                      <a href="{{ route('Pages.ExpenseLog') }}">Log Expense</a>
                  </li>
              </ul>
          </li>

      </ul>
  </div>
  <!-- /Mobile Menu -->
