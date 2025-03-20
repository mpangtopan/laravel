@extends('layouts.main')

@section('content')
<div class="card-header"><h3 class="mt-0 p-3">Business Unit</h3></div>
<div class="card">
    <div class="card-header">
        <h2 class="mt-0">
            <a href="#collapseExample" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn-filter btn-sm bg-olive waves-effect waves-themed">
                <span class="fa-solid fa-filter"></span> Advance Search (Filtered)
            </a>
        </h2>
        <div class="panel-content">
            <!-- advance search -->
            <div class="collapse" id="collapseExample">
                <div id="searchForm" name="searchForm" method="POST">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-6">
                                    <label for="supplier_id">Supplier</label>
                                    <select class="form-control"><option value="1">Internal Supplier</option></select>  
                                    <label for="business_unit_id">Business Unit</label>
                                    <select class="form-control"  name="business_unit_id[]"><option value="1">Akses Solusi Nusantara (ASN)</option></select>  
                                    <label for="department_id">Department</label>
                                    <select class="form-control"  name="department_id[]"><option value="1">Department 01</option><option value="2">Department 02</option><option value="3">Acid Plant</option><option value="4">Chloride Plant</option><option value="5">Civil &amp; Infrastructure</option><option value="6">Commercial</option><option value="7">Concentrator</option><option value="8">Copper Cathode Plant</option><option value="9">Environment</option><option value="10">External Affair</option><option value="11">General Management</option><option value="12">Health, Safety &amp; Environment</option></select>  
                                    <label for="department_id">Gender</label>
                                    <select class="form-control"  name="gender[]"><option value="Male">Male</option><option value="Female">Female</option></select>  
                                    <label for="marital_status">Marital Status</label>
                                    <select id="marital_status" class="form-control"  name="marital_status[]"><option value="Nikah">Nikah</option><option value="Belum Nikah">Belum Nikah</option></select>  
                                    <label for="job_position_id">Job Position</label>
                                    <select id="job_position_id" class="form-control"  name="job_position_id[]"><option value="">-- Select --</option><option value="1">Job Position 01</option><option value="2">Job Position 10102</option><option value="3">Assistant Production Supervisor</option><option value="4">Admin Officer</option><option value="5">Acid Boiler Operator</option><option value="6">Loader Operator</option><option value="7">Acid Control Room Operator</option><option value="8">Acid Plant Operator Junior</option><option value="9">Grab Crane Operator</option><option value="10">Acid Operator Trainee</option><option value="11">Control Room Operator</option><option value="12">Acid Plant Operator</option><option value="13">Assistant Spv Cloride Plant</option><option value="14">Mandarin Translator</option><option value="15">Assistant Production Supervisor</option><option value="16">Chloride Admin Officer</option><option value="17">Chloride Operator Trainee</option><option value="18">Chloride Plant Operator</option><option value="19">Pyrite Plant Operator</option><option value="20">Commercial Manager</option><option value="21">Cost Control Superintendent</option><option value="22">Logistic &amp; Distribution Superintendent</option><option value="23">Warehouse &amp; Inventory Superintendent</option><option value="24">Warehouse Supervisor</option><option value="25">Sr. Material Control Supervisor</option><option value="26">Procurement Supervisor</option><option value="27">Warehouse Chemical Supervisor</option><option value="28">Warehouse Officer</option><option value="29">Finance Supervisor</option><option value="30">Logistic Supervisor</option><option value="31">Inventory Control Supervisor</option><option value="32">Logistic Officer</option><option value="33">Storage Chemical Officer</option><option value="34">Finance Officer</option><option value="35">Expeditor Officer</option><option value="36">Cost Control Officer</option><option value="37">Warehouse Assistant</option><option value="38">Operator Fleet</option><option value="39">Logistic Assistant</option><option value="40">Fuelman</option><option value="41">Manager Concentrator</option><option value="42">Process Engineer Superintendent</option><option value="43">Concentrator Superintendent</option><option value="44">Copper Cathode Admin Officer</option><option value="45">Copper Cathode Plant Operator</option><option value="46">Environment Manager</option><option value="47">Environment Superintendent</option><option value="48">Environment Field Officer</option><option value="49">Environment Man</option><option value="50">External Affair Manager</option><option value="51">Government Specialist</option><option value="52">Security Supervisor</option><option value="53">CSR Supervisor</option><option value="54">Admin Officer</option><option value="55">Government Relation Officer</option><option value="56">Support Services Senior Manager</option><option value="57">HSE Training Supervisor</option><option value="58">Environmental Engineer</option><option value="59">Environmental Supervisor</option><option value="60">Environment Field Officer</option><option value="61">Enviromental Compliance Officer</option><option value="62">OHS Officer</option><option value="63">Environmental System &amp; Sustainability Officer</option><option value="64">Mandarin Translator</option><option value="65">HR Superintendent</option><option value="66">ICT Superintendent</option><option value="67">Site Service Supervisor</option><option value="68">Compensation and Benefit Supervisor</option><option value="69">People Development Supervisor</option><option value="70">IT Infrastructure Supervisor</option><option value="71">IT System &amp; Support Supervisor</option><option value="72">Heavy Equipment Trainer &amp; Assessor</option><option value="73">HR Supervisor</option><option value="74">Compensation and Benefit Officer</option><option value="75">Document Control Officer</option><option value="76">Talent Acquisition Officer</option><option value="77">People Development Officer</option><option value="78">Site Service Officer</option><option value="79">ER &amp; IR Officer</option><option value="80">IT Support</option><option value="81">IT Field Officer</option><option value="82">Assistant Camp Service</option><option value="83">Driver</option><option value="84">IT Assistant</option><option value="85">Maintenance Manager</option><option value="86">Planner Superintendent</option><option value="87">Instrument Superintendent</option><option value="88">Fabrication &amp; Workshop Superintendent</option><option value="89">Mechanical Superintendent</option><option value="90">Senior Planner</option><option value="91">Maintenance Reliability Engineer Mechanical</option><option value="92">Maintenance Mechanical Planner</option><option value="93">Electrical Instrument Planner</option><option value="94">Electrical Engineer</option><option value="95">Maintenance Reliability Engineer Electrical</option><option value="96">Resource &amp; Material Supervisor</option><option value="97">DCS Engineer</option><option value="98">Reliability Engineer</option><option value="99">Maintenance Planner</option><option value="100">Maintenance Trainer</option><option value="101">Maintenance Supervisor</option><option value="102">Maintenance E/I Supervisor</option><option value="103">Maintenance Shift Supervisor</option><option value="104">Maintenance Mechanical Supervisor</option><option value="105">Fabrication Supervisor</option><option value="106">Scheduler</option><option value="107">Maintenance Safety Specialist</option><option value="108">Material Coodinator</option><option value="109">Draftman</option><option value="110">Civil Engineer</option><option value="111">Electrical Instrument Supervisor</option><option value="112">Maintenance Admin Officer</option><option value="113">Maintenance Dispatcher</option><option value="114">MYTP Trainee</option><option value="115">Maintenance Service Truck Operator</option><option value="116">Mechanical Crew</option><option value="117">Electrical Crew</option><option value="118">Instrument Crew</option><option value="119">Senior Mechanic</option><option value="120">Welder</option><option value="121">Machinist</option><option value="122">OHSE Manager</option><option value="123">Company Doctor</option><option value="124">OHS Superintendent</option><option value="125">OHS Training Officer</option><option value="126">OHSE System &amp; Reporting Supervisor</option><option value="127">Nurse &amp; Admin</option><option value="128">OH Paramedic</option><option value="129">Industrial Hygiene</option><option value="130">ER Supervisor</option><option value="131">OHS Supervisor</option><option value="132">Emergency Response Team Officer</option><option value="133">OHSE Admin Officer</option><option value="134">OHSE Trainer Officer</option><option value="135">OHS Officer</option><option value="136">OHS System Officer</option><option value="137">Training Admin Officer</option><option value="138">WWTP Supervisor</option><option value="139">Concentrator Supervisor</option><option value="140">Pyrite Supervisor</option><option value="141">Water Supervisor</option><option value="142">Pyrite Admin Officer</option><option value="143">Pyrite Plant Operator</option><option value="144">Flotation Operator</option><option value="145">Operator Crusher</option><option value="146">Grinding Operator</option><option value="147">Pyrite Operator Trainee</option><option value="148">Control Room Operator</option><option value="149">Grab Crane Operator</option><option value="150">Thickening Operator</option><option value="151">Water Neutralisation</option><option value="152">Loader Operator</option><option value="153">Pyrite Process Operator</option><option value="154">Senior Supervisor Logistic</option><option value="155">Senior Metallurgy</option><option value="156">Metallurgist</option><option value="157">Chloride Process Engineer</option><option value="158">Acid Process Engineer</option><option value="159">Shift Leader</option><option value="160">Chemist Specialist</option><option value="161">Roaster Acid Engineer</option><option value="162">Instrument Analyst</option><option value="163">Chemical Analyst</option><option value="164">Data Admin</option><option value="165">Database Administrator Officer</option><option value="166">Wastewater Analyst</option><option value="167">MYTP Trainee</option><option value="168">Copper Cathode Operational Engineer</option><option value="169">Pyrite Metallurgist</option><option value="170">Sampler</option><option value="171">Metallurgist Technician</option><option value="172">Manager</option><option value="173">Junior</option><option value="174">Senior</option><option value="175">Manager</option><option value="176">Suptent</option><option value="177">Admin</option></select>  
                                    <label for="working_period">Working Period</label>
                                    <input id="working_period" class="form-control" name="working_period" type="text" value="">
                                
                            </div>
                            <div class="col-md-6">  
                                <label class="col-sm-4 control-label" for="code">Code</label>
                                <input id="code" class="form-control" name="code" type="text" value="">
                                <label class="col-sm-4 control-label" for="name">Name</label>
                                <input id="name" class="form-control" name="name" type="text" value="">
                                <label class="col-sm-4 control-label" for="citizen_id">Citizen ID</label>
                                <input id="citizen_id" class="form-control" name="citizen_id" type="text" value="">
                                <label for="status_id" class="col-sm-4 control-label">Status</label>
                                <select id="status_id" class="form-control"  name="status_id[]"><option value="">-- Select --</option><option value="1">Perjanjian Kerja Waktu Tetap (Contract)</option><option value="2">Pekerja Harian</option><option value="3">Perjanjian Kerja Waktu Tidak Tetap (Permanent)</option></select>  
                                <label for="location_id" class="col-sm-4 control-label">Location</label>
                                <select id="location_id" class="form-control"  name="location_id[]"><option value="">-- Select --</option><option value="1">Lokasi 01</option><option value="2">Morowali</option><option value="3">Jakarta</option><option value="4">Kutai</option><option value="5">Head Office</option></select>  
                                <label class="col-sm-4 control-label" for="place_date">Place or Birth Date</label>
                                <input id="place_date" class="form-control" name="place_date" type="text" value="">
                            
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div>
                            
                        </div>
                        <div>
                            <a href="" class="btn-grad-danger btn-sm mb-2 shadow-sm">Close</a>
                            <a href="" class="btn-filter btn-sm mb-2 shadow-sm">Filter</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
      <div class="card-body">
        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive col-lg p-2">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                            {{-- <a href="/systemsetting/employee/create" class="btn-grad-primary btn-sm mb-2 shadow-sm"><i class="fa-solid fa-plus"></i> Add New</a> --}}
                        </div>
                        <div>
                            <a href="" class="btn-grad-success btn-sm mb-2 shadow-sm">Export</a>
                            <a href="" class="btn-grad-success btn-sm mb-2 shadow-sm">Import</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body p-2 shadow-sm">
                            <div class="table-responsive">
                                <table class="table-striped table-hover table-bordered">
                                    <thead class="bg-bl" style="font-size: 16px">
                                        <tr>
                                            <th data-column-id="id" data-order="asc" data-type="numeric" data-identifier="true" data-visible="false">ID</th>
                                            <th data-formatter="avatar" data-sortable="false" data-width="10%">Avatar</th>
                                            <th data-formatter="personal_info" data-sortable="false">Personal Info</th>
                                            <th data-formatter="job_info" data-sortable="false">Job Info</th>
                                            <th data-column-id="commands" data-width="15%" data-formatter="commands" data-align="center" data-header-align="center" data-sortable="false">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="" class="btn-grad-warning shadow-sm btn-sm">View</a>
                                                <a href="" class="btn-grad-success shadow-sm btn-sm">Edit</a>
                                                {{-- <a href="" class="btn-grad-danger shadow-sm btn-sm">Delete</a>  --}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                     
                </div>               
            </div>           
        </div>        
      </div>
      
      <nav class="p-2" aria-label="Page navigation">
        <ul class="pagination-animated">
          <li><a href="#" aria-label="Previous">&laquo;</a></li>
          <li><a href="#">&lt;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">&gt;</a></li>
          <li><a href="#" aria-label="Next">&raquo;</a></li>
        </ul>
      </nav>   
</div>

@endsection
