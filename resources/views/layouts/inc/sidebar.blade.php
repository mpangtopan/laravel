{{-- <aside id="bg-swap" class="main-sidebar"> --}}
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" >
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="/" style="color: #3a3a3a">
          <i class="fa fa-house"></i> 
          <span> Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-plane"></i> 
          <span> Travel Request</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="/travelrequest"><i class="fa fa-2xs fa-circle-dot"></i> Submit Travel Request</a></li>
          <li><a href="/roombooking"><i class="fa fa-2xs fa-circle-dot"></i> Room Booking</a></li>
          {{-- <li><a href="/travelrequest/monitoring"><i class="fa fa-2xs fa-circle-dot"></i> Travel Monitoring</a></li> --}}
          <li><a href="/travelrequest/report"><i class="fa fa-2xs fa-circle-dot"></i> Report</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#" >
          <i class="fa-solid fa-lg fa-clipboard-user"></i>
          <span > Site Entry</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu nav nav-treeview">
          <li><a href="/siteentry"><i class="fa fa-2xs fa-circle-dot"></i> Submit Site Entry</a></li>
          <li><a href="/roombooking"><i class="fa fa-2xs fa-circle-dot"></i> Room Booking</a></li>
          <li><a href="/siteentry/report"><i class="fa fa-2xs fa-circle-dot"></i> Report</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#" >
          <i class="fa-solid fa-lg fa-car"></i>
          <span > Transportation</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu nav nav-treeview">
          <li><a href="/transportation"><i class="fa fa-2xs fa-circle-dot"></i> Transport Arrangement</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#" >
          <i class="fa-solid fa-lg fa-hotel"></i>
          <span > Room Facility</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu nav nav-treeview">
          <li><a href="/roombooking"><i class="fa fa-2xs fa-circle-dot"></i> Room Booking</a></li>
          <li><a href="/roomcleaning"><i class="fa fa-2xs fa-circle-dot"></i> Room Cleaning</a></li>
          <li><a href="/roomfacility"><i class="fa fa-2xs fa-circle-dot"></i> Room Facility Maintenance</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#" >
          <i class="fa-solid fa-lg fa-utensils"></i>
          <span > Meal</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu nav nav-treeview">
          <li><a href="/meal"><i class="fa fa-2xs fa-circle-dot"></i> Submit Meal</a></li>
          <li><a href="/meal/report"><i class="fa fa-2xs fa-circle-dot"></i> Report</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#" >
          <i class="fa-solid fa-lg fa-money-check-dollar"></i>
          <span > Cash Advance</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu nav nav-treeview">
          <li><a href="/cashadvance"><i class="fa fa-2xs fa-circle-dot"></i> Submit Cash Advance</a></li>
          <li><a href="/cashadvance/report"><i class="fa fa-2xs fa-circle-dot"></i> Report</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#" >
          <i class="fa-solid fa-lg fa-sack-dollar"></i>
          <span > Reimbursement</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu nav nav-treeview">
          <li><a href="/reimbursement"><i class="fa fa-2xs fa-circle-dot"></i> Submit Reimbursement</a></li>
          <li><a href="/reimbursement/report"><i class="fa fa-2xs fa-circle-dot"></i> Report</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#" >
          <i class="fa-solid fa-lg fa-square-check"></i>
          <span > Pre-Check</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu nav nav-treeview">
          <li class="treeview">
            <a href="" >
              <i class="fa fa-2xs fa-circle-dot"></i>
              <span > Unit</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu nav nav-treeview">
              <li><a href="/precheck/unit/master"><i class="fa fa-2xs fa-circle"></i> Master Question</a></li>
              <li><a href="/precheck/unit/transaction"><i class="fa fa-2xs fa-circle"></i> Data Transaction</a></li>
              <li><a href="/precheck/unit/schedule"><i class="fa fa-2xs fa-circle"></i> Unit Schedule</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="" >
              <i class="fa fa-2xs fa-circle-dot"></i>
              <span > Driver</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu nav nav-treeview">
              <li><a href="/precheck/driver/master"><i class="fa fa-2xs fa-circle"></i> Master Question</a></li>
              <li><a href="/precheck/driver/transaction"><i class="fa fa-2xs fa-circle"></i> Data Transaction</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="" >
              <i class="fa fa-2xs fa-circle-dot"></i>
              <span > Passenger</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu nav nav-treeview">
              <li><a href="/precheck/passenger/master"><i class="fa fa-2xs fa-circle"></i> Master Question</a></li>
              <li><a href="/precheck/passenger/transaction"><i class="fa fa-2xs fa-circle"></i> Data Transaction</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#" >
          <i class="fa-solid fa-lg fa-gear"></i>
          <span > System Setting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu nav nav-treeview">
          <li class="treeview">
            <a href="" >
              <i class="fa fa-2xs fa-circle-dot"></i>
              <span > Company</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu nav nav-treeview">
              <li><a href="/systemsetting/company/bank"><i class="fa fa-2xs fa-circle"></i> Bank</a></li>
              <li><a href="/systemsetting/company/businessunit"><i class="fa fa-2xs fa-circle"></i> Business Unit</a></li>
              <li><a href="/systemsetting/company/costcenter"><i class="fa fa-2xs fa-circle"></i> Cost Center</a></li>
              <li><a href="/systemsetting/company/department"><i class="fa fa-2xs fa-circle"></i> Department</a></li>
              <li><a href="/systemsetting/company/location"><i class="fa fa-2xs fa-circle"></i> Location</a></li>
              <li><a href="/systemsetting/company/project"><i class="fa fa-2xs fa-circle"></i> Project</a></li>
              <li><a href="/systemsetting/company/shift"><i class="fa fa-2xs fa-circle"></i> Shift</a></li>
              <li><a href="/systemsetting/company/timetable"><i class="fa fa-2xs fa-circle"></i> Time Table</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="" >
              <i class="fa fa-2xs fa-circle-dot"></i>
              <span > Employee</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu nav nav-treeview">
              <li><a href="/systemsetting/employee/employee"><i class="fa fa-2xs fa-circle"></i> Employee</a></li>
              <li><a href="/systemsetting/employee/employeestatus"><i class="fa fa-2xs fa-circle"></i> Employee Status</a></li>
              <li><a href="/systemsetting/employee/induction"><i class="fa fa-2xs fa-circle"></i> Induction</a></li>
              <li><a href="/systemsetting/employee/jobposition"><i class="fa fa-2xs fa-circle"></i> Job Position</a></li>
              <li><a href="/systemsetting/employee/plafond"><i class="fa fa-2xs fa-circle"></i> Plafond</a></li>
              <li><a href="/systemsetting/employee/recruitment"><i class="fa fa-2xs fa-circle"></i> Recruitment</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="" >
              <i class="fa fa-2xs fa-circle-dot"></i>
              <span > Room</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu nav nav-treeview">
              <li><a href="/systemsetting/room/room"><i class="fa fa-2xs fa-circle"></i> Room</a></li>
              <li><a href="/systemsetting/room/roomarea"><i class="fa fa-2xs fa-circle"></i> Room Area</a></li>
              <li><a href="/systemsetting/room/roomfacility"><i class="fa fa-2xs fa-circle"></i> Room Facility</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="" >
              <i class="fa fa-2xs fa-circle-dot"></i>
              <span > Transportation</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu nav nav-treeview">
              <li><a href="/systemsetting/transportation/driver"><i class="fa fa-2xs fa-circle"></i> Driver</a></li>
              <li><a href="/systemsetting/transportation/transportationlocation"><i class="fa fa-2xs fa-circle"></i> Transportation Location</a></li>
              <li><a href="/systemsetting/transportation/vehicle"><i class="fa fa-2xs fa-circle"></i> Vehicle</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="" >
              <i class="fa fa-2xs fa-circle-dot"></i>
              <span > Workflow</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu nav nav-treeview">
              <li><a href="/systemsetting/workflow/approvalflow"><i class="fa fa-2xs fa-circle"></i> Approval Flow</a></li>
              <li><a href="/systemsetting/workflow/approvalmaster"><i class="fa fa-2xs fa-circle"></i> Approval Master</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#" >
          <i class="fa-solid fa-lg fa-user-gear"></i>
          <span > System Administrator</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu nav nav-treeview">
          <li><a href="/systemadministrator/userrole"><i class="fa fa-2xs fa-circle-dot"></i> User Role</a></li>
          <li><a href="/systemadministrator/useradministation"><i class="fa fa-2xs fa-circle-dot"></i> User Administration</a></li>
          <li><a href="/systemadministrator/broadcast"><i class="fa fa-2xs fa-circle-dot"></i> Broadcast Notification</a></li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>