<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>

<script src="/adminlte/plugins/chart.js/Chart.min.js"></script>
{{-- <script src="/adminlte/bower_components/chart.js/Chart.js"></script>   --}}

<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

<script>
    feather.replace();
</script>
<script src="https://kit.fontawesome.com/f3257e55b7.js" crossorigin="anonymous"></script>

<!-- DataTables -->
<script src="adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
</script>

<!-- PACE -->
<script src="/adminlte/bower_components/PACE/pace.min.js"></script>
<script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Select2 -->
{{-- <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script> --}}
<script src="/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- Add New Line and Delete Line -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    
      // Tambah baris baru untuk Detail
      document.getElementById("btn-add-new-detail").addEventListener("click", function () {
          let table = document.querySelector("#list_detail tbody");
          let newRow = table.rows[0].cloneNode(true);

          // Kosongkan input di baris baru
          newRow.querySelectorAll("input, select").forEach(el => el.value = "");

          // Tambahkan baris baru ke tabel
          table.appendChild(newRow);
      });

      // Tambah baris baru untuk Land Transportation
      document.getElementById("btn-add-new-transportation-land").addEventListener("click", function () {
          let table = document.querySelector("#list-transportation-land tbody");
          let newRow = table.rows[0].cloneNode(true);
  
          // Kosongkan input di baris baru
          newRow.querySelectorAll("input, select").forEach(el => el.value = "");
  
          // Tambahkan baris baru ke tabel
          table.appendChild(newRow);
      });
  
      // Tambah baris baru untuk Accommodation
      document.getElementById("btn-add-new-accommodation").addEventListener("click", function () {
          let table = document.querySelector("#list-accommodation tbody");
          let newRow = table.rows[0].cloneNode(true);
  
          // Kosongkan input di baris baru
          newRow.querySelectorAll("input, select").forEach(el => el.value = "");
  
          // Tambahkan baris baru ke tabel
          table.appendChild(newRow);
      });
  
      // Hapus baris saat tombol "×" diklik (Delegasi Event)
      document.addEventListener("click", function (e) {
          if (e.target.closest(".btn-delete-transportation-air")) {
              let row = e.target.closest("tr");
              if (row.parentNode.rows.length > 1) row.remove();
          }
          if (e.target.closest(".btn-delete-transportation-land")) {
              let row = e.target.closest("tr");
              if (row.parentNode.rows.length > 1) row.remove();
          }
          if (e.target.closest(".btn-delete-accommodation")) {
              let row = e.target.closest("tr");
              if (row.parentNode.rows.length > 1) row.remove();
          }
      });
  });
</script>
<!-- End Add New Line and Delete Line -->


<!-- Chart -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  var ctx = document.getElementById('genderChart').getContext('2d');
  new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: ['Male', 'Female', 'Other'],
          datasets: [{
              data: [60, 35, 5],
              backgroundColor: ['#36A2EB', '#FF6384', '#FFCE56']
          }]
      }
  });
</script>

<script>
  var ctx = document.getElementById('generalChart').getContext('2d');
  new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
          datasets: [{
              label: 'New Employees',
              data: [10, 15, 7, 20, 13],
              backgroundColor: '#26d496'
          }]
      }
  });
</script>

<script>
    var ctx = document.getElementById('STDChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['HR', 'Finance', 'Engineering', 'Operations', 'Others'],
            datasets: [
                {
                    label: 'Done',
                    data: [10, 15, 7, 20, 13],
                    backgroundColor: '#FF6384', // Warna untuk dataset pertama
                    stack: 'Stack 1' // Menyatakan dataset ini termasuk dalam stack yang sama
                },
                {
                    label: 'On Progress',
                    data: [2, 3, 1, 5, 4],
                    backgroundColor: '#36A2EB', // Warna untuk dataset kedua
                    stack: 'Stack 1' // Menyatakan dataset ini termasuk dalam stack yang sama
                }
            ]
        },
        options: {
            scales: {
                x: {
                    stacked: true // Mengaktifkan stacking pada sumbu x
                },
                y: {
                    stacked: true // Mengaktifkan stacking pada sumbu y
                }
            }
        }
    });

    var ctx = document.getElementById('STEChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['ASN', 'IBN', 'TSS'],
            datasets: [
                {
                    label: 'Done',
                    data: [10, 15, 7],
                    backgroundColor: 'green', // Warna untuk dataset pertama
                    stack: 'Stack 1' // Menyatakan dataset ini termasuk dalam stack yang sama
                },
                {
                    label: 'On Progress',
                    data: [2, 3, 1],
                    backgroundColor: '#32B3BB', // Warna untuk dataset kedua
                    stack: 'Stack 1' // Menyatakan dataset ini termasuk dalam stack yang sama
                }
            ]
        },
        options: {
            scales: {
                x: {
                    stacked: true // Mengaktifkan stacking pada sumbu x
                },
                y: {
                    stacked: true // Mengaktifkan stacking pada sumbu y
                }
            }
        }
    });

    var ctx = document.getElementById('STSChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['COMPLETED', 'REJECTED', 'WAITING APPROVAL'],
            datasets: [
                {
                    label: 'Status',
                    data: [10, 15, 7],
                    backgroundColor: 'blue', // Warna untuk dataset pertama
                    stack: 'Stack 1' // Menyatakan dataset ini termasuk dalam stack yang sama
                },
                
            ]
        },
        options: {
            scales: {
                x: {
                    stacked: true // Mengaktifkan stacking pada sumbu x
                },
                y: {
                    stacked: true // Mengaktifkan stacking pada sumbu y
                }
            }
        }
    });

    var ctx = document.getElementById('STCChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['ASN', 'IBN', 'TSS'],
            datasets: [
                {
                    label: 'Done',
                    data: [10, 15, 7],
                    backgroundColor: '#FE6332', // Warna untuk dataset pertama
                    stack: 'Stack 1' // Menyatakan dataset ini termasuk dalam stack yang sama
                },
                {
                    label: 'On Progress',
                    data: [2, 3, 1],
                    backgroundColor: '#32B3BB', // Warna untuk dataset kedua
                    stack: 'Stack 1' // Menyatakan dataset ini termasuk dalam stack yang sama
                }
            ]
        },
        options: {
            scales: {
                x: {
                    stacked: true // Mengaktifkan stacking pada sumbu x
                },
                y: {
                    stacked: true // Mengaktifkan stacking pada sumbu y
                }
            }
        }
    });

    var ctx = document.getElementById('STJChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Staff', 'Supervisor', 'Manager', 'Director'],
            datasets: [
                {
                    label: 'Done',
                    data: [15, 2, 7, 2],
                    backgroundColor: '#FE6332', // Warna untuk dataset pertama
                    backgroundColor:'rgba(255, 99, 132)',
                    stack: 'Stack 1' // Menyatakan dataset ini termasuk dalam stack yang sama
                },
                {
                    label: 'On Progress',
                    data: [3, 6, 7, 1],
                    backgroundColor: 'violet', // Warna untuk dataset kedua
                    stack: 'Stack 1' // Menyatakan dataset ini termasuk dalam stack yang sama
                }
            ]
        },
        options: {
            scales: {
                x: {
                    stacked: true // Mengaktifkan stacking pada sumbu x
                },
                y: {
                    stacked: true // Mengaktifkan stacking pada sumbu y
                }
            }
        }
    });

    var ctx = document.getElementById('STLChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['ASN', 'IBN', 'TSS'],
            datasets: [
                {
                    label: 'Done',
                    data: [10, 15, 7],
                    backgroundColor: '#FE6332', // Warna untuk dataset pertama
                    stack: 'Stack 1' // Menyatakan dataset ini termasuk dalam stack yang sama
                },
                {
                    label: 'On Progress',
                    data: [2, 3, 1],
                    backgroundColor: '#32B3BB', // Warna untuk dataset kedua
                    stack: 'Stack 1' // Menyatakan dataset ini termasuk dalam stack yang sama
                }
            ]
        },
        options: {
            scales: {
                x: {
                    stacked: true // Mengaktifkan stacking pada sumbu x
                },
                y: {
                    stacked: true // Mengaktifkan stacking pada sumbu y
                }
            }
        }
    });
</script>

<script>
  var ctx = document.getElementById('disciplineChart').getContext('2d');
  new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['Engineering', 'HR', 'Finance', 'Operations'],
          datasets: [{
              data: [40, 20, 15, 25],
              backgroundColor: ['#4BC0C0', '#FF9F40', '#9966FF', '#FF6384']
          }]
      }
  });
</script>

<!-- Travel Request Chart -->
<script>
    // Map Summary by POH Chart
    var ctx = document.getElementById('TravelRequestPOHChart').getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['B1', 'B2', 'B3', 'B4', 'B5'],
            datasets: [{
                label: 'Business Unit',
                data: [100000, 150000, 700000, 200000, 1300000],
                backgroundColor: ['#4BC0C0', '#FF6384', '#9966FF', '#f1e93f', '#36A2EB'],
                borderWidth: 2,
      borderRadius: 5,
      borderSkipped: false
            }]
        }
    });
    // Travel Request by Business Unit Chart
    var ctx = document.getElementById('TravelRequestBusinessUnitChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['B1', 'B2', 'B3', 'B4', 'B5'],
            datasets: [{
                label: 'Business Unit',
                data: [100000, 150000, 700000, 200000, 1300000],
                backgroundColor: ['#4BC0C0', '#FF6384', '#9966FF', '#f1e93f', '#36A2EB']
            }]
        }
    });

    // Travel Request by Department Chart
    var ctx = document.getElementById('TravelRequestDepartmentChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['HR', 'IT', 'Finance','Engineering'],
            datasets: [{
                label: 'Department',
                data: [10000, 15000, 7000, 20000],
                backgroundColor: ['#4BC0C0', '#FF6384', '#9966FF','#f1e93f']
            }]
        }
    });

    // Travel Request by Job Position Chart
    var ctx = document.getElementById('TravelRequestJobPositionChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Staff', 'Supervisor', 'HOD', 'Manager'],
            datasets: [{
                label: 'Job Position',
                data: [400000, 200000, 150000, 250000],
                backgroundColor: ['#4BC0C0', '#f1e93f', '#9966FF', '#FF6384']
            }]
        }
    });

    // Travel Request by Status Chart
    var ctx = document.getElementById('TravelRequestStatusChart').getContext('2d');
    
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Approved', 'Waiting', 'Cancelled'],
            datasets: [{
                label: 'Status',
                data: [10000, 15000, 7000],
                backgroundColor: ['#4BC0C0', '#FF6384', '#9966FF']
            }]
        }
    });
</script>

<!-- Cash Advance Chart -->
<script>
    // TravelRequest by Business Unit Chart
    var ctx = document.getElementById('TravelRequestBusinessUnitChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['B1', 'B2', 'B3', 'B4', 'B5'],
            datasets: [{
                label: 'Business Unit',
                data: [100000, 150000, 700000, 200000, 1300000],
                backgroundColor: ['#4BC0C0', '#FF6384', '#9966FF', '#f1e93f', '#36A2EB']
            }]
        }
    });

    // TravelRequest by Department Chart
    var ctx = document.getElementById('TravelRequestDepartmentChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['HR', 'IT', 'Finance','Engineering'],
            datasets: [{
                label: 'Department',
                data: [10000, 15000, 7000, 20000],
                backgroundColor: ['#4BC0C0', '#FF6384', '#9966FF','#f1e93f']
            }]
        }
    });

    // TravelRequest by Job Position Chart
    var ctx = document.getElementById('TravelRequestJobPositionChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Staff', 'Supervisor', 'HOD', 'Manager'],
            datasets: [{
                label: 'Job Position',
                data: [400000, 200000, 150000, 250000],
                backgroundColor: ['#4BC0C0', '#f1e93f', '#9966FF', '#FF6384']
            }]
        }
    });

    // TravelRequest by Status Chart
    var ctx = document.getElementById('TravelRequestStatusChart').getContext('2d');
    
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Approved', 'Waiting', 'Cancelled'],
            datasets: [{
                label: 'Status',
                data: [10000, 15000, 7000],
                backgroundColor: ['#4BC0C0', '#FF6384', '#9966FF']
            }]
        }
    });
</script>

<!-- Reimbursement Chart -->
<script>
    // Reimbursement by Business Unit Chart
    var ctx = document.getElementById('ReimbursementBusinessUnitChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['B1', 'B2', 'B3', 'B4', 'B5'],
            datasets: [{
                label: 'Business Unit',
                data: [100000, 150000, 700000, 200000, 1300000],
                backgroundColor: ['#4BC0C0', '#FF6384', '#9966FF', '#f1e93f', '#36A2EB']
            }]
        }
    });

    // Reimbursement by Department Chart
    var ctx = document.getElementById('ReimbursementDepartmentChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['HR', 'IT', 'Finance','Engineering'],
            datasets: [{
                label: 'Department',
                data: [10000, 15000, 7000, 20000],
                backgroundColor: ['#4BC0C0', '#FF6384', '#9966FF','#f1e93f']
            }]
        }
    });

    // Reimbursement by Job Position Chart
    var ctx = document.getElementById('ReimbursementJobPositionChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Staff', 'Supervisor', 'HOD', 'Manager'],
            datasets: [{
                label: 'Job Position',
                data: [400000, 200000, 150000, 250000],
                backgroundColor: ['#4BC0C0', '#f1e93f', '#9966FF', '#FF6384']
            }]
        }
    });

    // Reimbursement by Status Chart
    var ctx = document.getElementById('ReimbursementStatusChart').getContext('2d');
    
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Approved', 'Waiting', 'Cancelled'],
            datasets: [{
                label: 'Status',
                data: [10000, 15000, 7000],
                backgroundColor: ['#4BC0C0', '#FF6384', '#9966FF']
            }]
        }
    });
</script>


<!-- Date -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('.js-get-date').textContent = new Date().toLocaleDateString();
  });
</script>
<!-- End Date -->

<script>
	function validateFileInput(input) {
        let file = input.files[0]; 
        if (!file) return true;
        let ext = file.name.split('.').pop().toLowerCase(), allowed = ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'jpg', 'jpeg', 'png', 'gif'];
        if (!allowed.includes(ext) || file.size > 2 * 1024 * 1024) {
            Swal.fire({ icon: 'error', title: 'Invalid File', text: 'Only PDF, DOC, XLS, or images (max 2MB).', position: 'top', timer: 5000, showConfirmButton: false });
            $(input).val('');
            return false;
        }
        return true;
    }
	var ACTION = 'SAVE';
	var LIST_COST = [{"code":"6005","description":"Allowance - Travel"},{"code":"6008","description":"Allowance - Car"},{"code":"6009","description":"Allowance - Relocation"},{"code":"6011","description":"Allowance - Other"},{"code":"6033","description":"Medical expenses"},{"code":"6034","description":"Medical examinations (MCU)"},{"code":"6040","description":"Domestic Travel - Airfares"},{"code":"6041","description":"Domestic Travel - Accomodation"},{"code":"6042","description":"Domestic Travel - Other"},{"code":"6043","description":"International Travel - Airfares"},{"code":"6044","description":"International Travel - Accomodation"},{"code":"6045","description":"International Travel - Other"},{"code":"6054","description":"Employee Donation"},{"code":"6055","description":"Training and seminars"},{"code":"6118","description":"Consultant Financial"},{"code":"6119","description":"Consultant IT"},{"code":"6121","description":"Consultant General"},{"code":"6139","description":"Vehicles maintenance"},{"code":"6152","description":"Legal fees"},{"code":"6156","description":"Electricity-Energy"},{"code":"6158","description":"Subscription"},{"code":"6159","description":"Stationery"},{"code":"6160","description":"Stamp Duties"},{"code":"6161","description":"Printing"},{"code":"6162","description":"Office Supplies"},{"code":"6163","description":"Transportation"},{"code":"6164","description":"Meeting Expenses"},{"code":"6165","description":"Roadshows, conference seminars"},{"code":"6166","description":"Vehicles - fuel toll parking"},{"code":"6169","description":"Telephone and mobile phone"},{"code":"6170","description":"Internet"},{"code":"6175","description":"Entertainment"},{"code":"6178","description":"Advertising \/ Promotional Expenses"},{"code":"6180","description":"Donations"},{"code":"6331","description":"IT consumeables"},{"code":"6057","description":"FIFO - Airfares"},{"code":"6058","description":"FIFO - Accommodation"},{"code":"6059","description":"FIFO - Other"},{"code":"6143","description":"Air freight"},{"code":"6124","description":"Assay"},{"code":"8000","description":"Bank charges"},{"code":"6502","description":"Building maintenance"},{"code":"6305","description":"Camp \/ Messing\u00a0 supplies"},{"code":"6001","description":"Casual labour porter"},{"code":"6176","description":"Community - Development Project"},{"code":"6125","description":"Drilling"},{"code":"6318","description":"Drilling consumables"},{"code":"6020","description":"Employee Wellness"},{"code":"6320","description":"Environmental rehab supplies"},{"code":"6323","description":"Food & Beverages"},{"code":"6325","description":"Gasoline fuel - usage"},{"code":"6327","description":"Geological \/ Field Supplies"},{"code":"8002","description":"Interest on bank accounts"},{"code":"8001","description":"Interest on term deposit"},{"code":"6100","description":"Land Compensation"},{"code":"6142","description":"Land freight"},{"code":"6148","description":"Lease of Equipment"},{"code":"6146","description":"Lease of heavy vehicles"},{"code":"6147","description":"Lease of light vehicles"},{"code":"6149","description":"Lease of real property - Rent"},{"code":"6145","description":"Lease of tractor\/excavator"},{"code":"1607","description":"Low Value Asset"},{"code":"6334","description":"Medical Supplies"},{"code":"6527","description":"Occupational health and safety"},{"code":"8200","description":"Other Income"},{"code":"6012","description":"Over time"},{"code":"6144","description":"Shipping freight"},{"code":"6140","description":"Software maintenance"},{"code":"8003","description":"Tax of bank interests"},{"code":"6174","description":"Uniform"},{"code":"6524","description":"Uniform & Safety Equipment"},{"code":"1321","description":"VAT In - Onshore"},{"code":"6000","description":"Wages & Salaries"},{"code":"6050","description":"Travel Meals"}];
	function setEmployeeDetail() {
		var employee_id = $('#employee_id').val() || '';

		$.ajax({
			type: 'GET',
			url: '/transaction/reimbursement/get_employee_detail?employee_id=' + employee_id,
			dataType: 'json', 
		}).done(function (response) {
			console.log(response);
			$('#employee_position').val(response.employee.job_position_name);
			$('#employee_department').val(response.employee.department_name);
			// Kosongkan Medical Limit & Balance karena diambil dari plafon
			$('#medical_limit_amount').val('');
			$('#medical_balance_amount').val('');

			// Update dropdown plafond
			var options = '<option value="">--Select--</option>';
			$.each(response.plafonds, function (key, value) {
				options += `<option value="${key}">${value}</option>`;
			});

			$('#plafond_id').html(options).trigger('change'); // Refresh Select2
		}).fail(function (jqXHR, textStatus, errorThrown) {
			console.error("AJAX Error:", textStatus, errorThrown);
		});
	}

	function setPlafondDetail() {
		var plafond_id = $('#plafond_id').val() || '';

		if (plafond_id) {
			$.ajax({
				type: 'GET',
				url: '/transaction/reimbursement/get_plafond_detail?plafond_id=' + plafond_id
			}).then(function (data) {
				// console.log(data);
				$('#medical_limit_amount').val(formatNumber(data.medical_limit));
				$('#medical_balance_amount').val(formatNumber(data.medical_balance));
			});
		} else {
			$('#medical_limit_amount').val('');
			$('#medical_balance_amount').val('');
		}
	}
	// Fungsi untuk format uang
	function formatNumber(amount) {
		return parseFloat(amount).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
	}
	function setTravelRequestDetail() {
		var cash_advance_id = $('#js-cash-advance-id').val() || '';
		$.ajax({
            type: 'GET',
            url: '/transaction/reimbursement/get_cash_advance_detail?cash_advance_id=' + cash_advance_id
        }).then(function (data) {
        	console.log(data)
        	if(data==null){
        		console.log('HERE')
        	}
        	amount_approved = Number(data.amount_approved).toLocaleString('en',{minimumFractionDigits: 0, maximumFractionDigits: 0});
        	$('#js-cash-advance-amount').val(amount_approved);
        	calculate_total();
        });
	}
	function calculate_total() {
		let cash_advance_amount = Number($('#js-cash-advance-amount').val().replace(/,/g, ""));
		let total = 0
		$(".js-amount").each(function() {
			total += Number($(this).val().replace(/,/g, ""));
		});
		let remain = cash_advance_amount - total;
		$(".js-total").val(total.toLocaleString('en',{minimumFractionDigits: 0, maximumFractionDigits: 0}));
		$(".js-remain").val(remain.toLocaleString('en',{minimumFractionDigits: 0, maximumFractionDigits: 0}));
	}
    $(function () {
    	const formRequest = document.querySelector("#form-request");
    	$('.btn-save').on('click', function(e){
    		ACTION = $(this).data('action');
    		console.log('ACTION: ' + ACTION)
    		$('#js-action').val(ACTION);
    		e.preventDefault();
			if (formRequest.checkValidity()) {
				console.log("submit ...");
    			$('#form-request').trigger('submit');
			} else {
				formRequest.reportValidity();
			}
    	});
    	$('.js-reference-type, .js-employee-id').on('change', function(){
			var type = $('.js-reference-type').val() || 0;
			var employee_id = $('.js-employee-id').val() || 0;
			$('.js-reference-id').empty();
			$('.js-reference-id').append('<option value="">Select ...</option>');
			$.getJSON('/transaction/reimbursement/get_list_reference?type=' + type + '&employee_id=' + employee_id, {}, function(data) {
		    	var html = '<option value="">-- Select --</option>';
			    $.each(data, function(index, element) {
		            html += '<option value="' + element.id + '">' + element.request_no + "</option>";
			    });
			    $(".js-reference-id").html(html);
			    if(type=='PRF' || type=='TRF') {
			    	$('.js-reference-id').prop('required', true);
			    } else {
			    	$('.js-reference-id').prop('required', false);
			    }
			});
		});
    	$('#employee_id').on('change', function(){
    		setEmployeeDetail();
    		var employee_id = $('.js-employee-id').val() || 0;
			$('#js-cash-advance-id').empty();
			$('#js-cash-advance-id').append('<option value="">Select ...</option>');
			$.getJSON('/transaction/reimbursement/get_list_cash_advance?employee_id=' + employee_id, {}, function(data) {
		    	var html = '<option value=""></option>';
			    $.each(data, function(index, element) {
		            html += '<option value="' + element.id + '">' + element.request_no + "</option>";
			    });
			    $("#js-cash-advance-id").html(html);
			});
    	});
		$('#plafond_id').on('change', function () {
        	setPlafondDetail();
    	});
    	$('#js-cash-advance-id').on('change', function(){
    		setTravelRequestDetail();
    	});
		$(".js-amount").on("blur", function(){
			var val = this.value || 0;
			val = val.replace(/,/g, "");
			val = Number(val).toLocaleString('en',{minimumFractionDigits: 0, maximumFractionDigits: 0});
			this.value = val;
		});
		$(".js-amount").on("focus", function(){
			var val = this.value || 0;
			val = val.replace(/,/g, "");
			this.value = val;
		});
		$(".js-amount").keypress(function (e) {
			var regex = new RegExp("^[0-9.]+$");
			var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
			if (regex.test(str)) {
				return true;
			}
			e.preventDefault();
			return false;
		});
		$('.js-amount').on('change', function(){
			calculate_total();
		});
    	$("#btn-add-new-reimbursementitem").on('click', function(){
    		var html = '<tr>';
			html += '<td><input type="date" name="reimbursementitem_date[]" class="form-control" required></td>';
			html += '<td><select name="reimbursementitem_cost_code[]" class="form-control js-cost-code" required>';
			html += '<option value="">-</option>';
			LIST_COST.forEach(function(v, k){
				html += '<option value="' + v.code + '">' + v.code + ' - ' + v.description + '</option>';
			})
			html += '</select></td>';
			html += '<td><input type="text" name="reimbursementitem_details[]" class="form-control" required></td>';
			html += '<td><input type="text" name="reimbursementitem_amount[]" class="form-control js-amount text-right" required></td>';
			html += '<td><a href="javascript:void(0)" class="text-danger btn-delete-reimbursementitem"><i class="fa fa-sm fa-times"></i></a></td>';
			html += '</tr>';
    		$("#list-reimbursementitem tbody").append(html);
    		$('.js-cost-code').select2();
	    	$(".btn-delete-reimbursementitem").on('click', function(){
	    		$(this).parents('tr').remove();
	    		calculate_total()
	    	});
			$(".js-amount").on("blur", function(){
				var val = this.value || 0;
				val = val.replace(/,/g, "");
				val = Number(val).toLocaleString('en',{minimumFractionDigits: 0, maximumFractionDigits: 0});
				this.value = val;
			});
			$(".js-amount").on("focus", function(){
				var val = this.value || 0;
				val = val.replace(/,/g, "");
				this.value = val;
			});
			$(".js-amount").keypress(function (e) {
				var regex = new RegExp("^[0-9.]+$");
				var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
				if (regex.test(str)) {
					return true;
				}
				e.preventDefault();
				return false;
			});
			$('.js-amount').on('change', function(){
				calculate_total();
			});
    	});
    	$(".btn-delete-reimbursementitem").on('click', function(){
    		$(this).parents('tr').remove();
    		calculate_total();
    	});

    	$(document).on('change', '.js-file', function() { validateFileInput(this); });
		$(".btn-add-file").on("click", function(){
			let lastInput = $('input.js-file:last');
			if (!lastInput.length || lastInput.val() === '' || !validateFileInput(lastInput[0])) {
				Swal.fire({ 
					icon: 'warning', title: 'Complete Upload', text: 'Please upload a valid file before adding more.', 
					position: 'top', timer: 3000, showConfirmButton: false 
				});
				return;
			}
			let id = Number(lastInput.attr('id').replace('file_','')) + 1;
			if(id > 100) { 
				Swal.fire({ 
					icon: 'warning', title: 'Limit Reached', text: 'Max 100 files!', 
					position: 'top', timer: 3000, showConfirmButton: false 
				}); 
				return;
			}
			var html = '<div class="row">';
				html += '<div class="col-md-10">';
				html += '<input type="file" name="file_'+id+'" id="file_'+id+'" class="form-control-file js-file" style="margin-bottom: 5px;">';
				html += '</div>';
				html += '<div class="col-md-2 text-right">';
				html += '<a href="javascript:void(0);" class="text-danger btn-remove-file">';
				html += '<i class="fa fa-lg fa-close"></i>';
				html += '</a>';
				html += '</div>';
				html += '</div>';

			$(".btn-add-file").before(html);
		});

		$(document).on("click", ".btn-remove-file", function(){ 
			$(this).closest(".row").remove(); 
		});
		function checkMedicalVisibility() {
			let requestType = $('#request_type').val(); 
			if (requestType === 'ME') {
				$('#medical_limit_container, #medical_balance_container, #plafond').show();
				$('#cash_advance_container, #cash_advance_amount_container, #reference_type_container, #reference_container').hide();
				$('#plafond_id').prop('required', true);
			} else if (requestType === 'BT') {
				$('#cash_advance_container, #cash_advance_amount_container, #reference_type_container, #reference_container').show();
				$('#medical_limit_container, #medical_balance_container, #plafond').hide();
				$('#plafond_id').prop('required', false);
			} else if (requestType === 'GE') {			
				$('#cash_advance_container, #cash_advance_amount_container, #reference_type_container, #reference_container, #medical_limit_container, #medical_balance_container, #plafond').hide();	
				$('#plafond_id').prop('required', false);
			}
		}
		// Cek saat halaman dimuat
		checkMedicalVisibility();
		// Cek saat request_type berubah
		$('#request_type').on('change', function () {
			checkMedicalVisibility();

		});
  	});
</script>

<!-- Scroll Up Button  -->
<script>
  //Get the button
  let mybutton = document.getElementById("btn-back-to-top");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {
      scrollFunction();
  };

  function scrollFunction() {
      if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
      ) {
          mybutton.style.display = "block";
      } else {
          mybutton.style.display = "none";
      }
  }
  // When the user clicks on the button, scroll to the top of the document
  mybutton.addEventListener("click", backToTop);

  function backToTop() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
  }
</script>


<!-- InputMask -->
<script src="/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="/adminlte/bower_components/moment/min/moment.min.js"></script>
<script src="/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap time picker -->
<script src="/adminlte/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- bootstrap datepicker -->
<script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
  
      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()
  
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )
  
      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })
  
      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
      })
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass   : 'iradio_minimal-red'
      })
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass   : 'iradio_flat-green'
      })
  
      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()
  
      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      })
    })
</script>


<script type="text/javascript">

    window.onload = function () {
        var chart1 = new CanvasJS.Chart("chartContainer1", {
            data: [              
            {
                // Change type to "doughnut", "line", "splineArea", etc.
                type: "area",
                dataPoints: [
                    { label: "apple",  y: 10  },
                    { label: "orange", y: 15  },
                    { label: "banana", y: 25  },
                    { label: "mango",  y: 30  },
                    { label: "grape",  y: 28  }
                ]
            }
            ]
        });
        chart1.render();

        var chart2 = new CanvasJS.Chart("chartContainer2", {
            data: [              
            {
                // Change type to "doughnut", "line", "splineArea", etc.
                type: "column",
                dataPoints: [
                    { label: "apple",  y: 10  },
                    { label: "orange", y: 15  },
                    { label: "banana", y: 25  },
                    { label: "mango",  y: 30  },
                    { label: "grape",  y: 28  }
                ]
            }
            ]
        });
        chart2.render();
        
        var chart3 = new CanvasJS.Chart("chartContainer3", {
            data: [              
            {
                // Change type to "doughnut", "line", "splineArea", etc.
                type: "stepArea",
                dataPoints: [
                    { label: "apple",  y: 10  },
                    { label: "orange", y: 15  },
                    { label: "banana", y: 25  },
                    { label: "mango",  y: 30  },
                    { label: "grape",  y: 28  }
                ]
            }
            ]
        });
        chart3.render();

        var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 79.45, label: "Google"},
			{y: 7.31, label: "Bing"},
			{y: 7.06, label: "Baidu"},
			{y: 4.91, label: "Yahoo"},
			{y: 1.26, label: "Others"}
		]
	}]
});
chart4.render();


}
</script>
  
<!-- Room Tabs  -->
<script>
    $(document).ready(function () {
        // Variable
        const bedsTableBody = $("#beds-table-body"); 
        const addBedRowButton = $(".add-row");
        const facilitiesTableBody = $("#facilities-table-body");
        const addFacilityRowButton = $(".add-row-facility"); 
        
        const listUser = {"1":"Jon Snow","2":"Samwell Tarly","3":"Daenerys Targaryen","4":"Paul Atreides","5":"Feyd-Rautha Harkonnen","6":"Verosha Aniseya","7":"Andre Ramdhani","8":"Pui Thian Loi","9":"Michael Prajana","10":"Auliya Fitri Nur Laili","11":"Nurul Khaerunnisa","12":"Nuri Fitria Dewi","13":"Garcianimo Sinurat","14":"Boby Aditya Aguinda","15":"Ober Lalan Beta","16":"Achmad Purwoyudo","17":"M. Zakaria","18":"Alvin Bimarizky Saleh","19":"Giang Popang Tandisau","20":"Fajar Fitrah","21":"Eghy Alhim Manginding","22":"Sumarni","23":"Nurul Fatwa Islamia","24":"Hamindah","25":"Astuti Sintah Nuria","26":"Syahrah Rahayu","27":"Andi Nurul Rizky Aulia","28":"Fitria","29":"A. Zhalzhabilla A","30":"Nurul Magfira","31":"Helmaliya Hamid","32":"Hesti Mulyani","33":"Aulya Annisa Ahmad","34":"Yasmin","35":"Andi Khairatil Ummah","36":"Gratia Prili Walingkas","37":"Wawan","38":"Wahyudi Rahmat","39":"Muh Arschil Arrazak A","40":"Eko Wahyudi Salam","41":"Adhi Muardhi","42":"Zetri Harman","43":"Guruh Wijatmiko","44":"Ahmad Dhani","45":"Muh. Adri","46":"M. Agung Perdana","47":"Dimaztiawan Manggala Putra","48":"Muhammad Azwar","49":"Ahmad Muflih Mustafa","50":"Muh Aditya Erlangga","51":"Hizkia Triadi Paningo","52":"Lili","53":"Syah Fadhil Ma\u0027arif","54":"Andi Syahrul Mubarak Yusuf","55":"Adrian","56":"Wisnu Yudhistira","57":"M. Ardiantsyah","58":"Aswar","59":"Andi Ditya Khaskhas","60":"Muh. Akhdiyat Fahrul Fahmi","61":"Mediyanto Lolongan","62":"Achmad Rhamadhan Umar","63":"Subroto","64":"Wisnu Junantoko","65":"Ahmad B","66":"Andi Yusuf Shiyam","67":"Andika Herlambang","68":"Syifa Al Aminsyah Kahar","69":"Adnan Hidayat","70":"M Ibnu Rahman","71":"Reza Saputra","72":"Muh Aslamuddin","73":"Muhammad Aslam Nur","74":"Muhammad Nur Qalbi","75":"Muhammad Andyka Ramadhan Arif","76":"Wahyudin","77":"Reza Fiqriansyah Rahman","78":"Muhammad Asrul","79":"Arsinar","80":"Christianto Pasunu","81":"Edi Sartoyo","82":"Irwansyah","83":"Franklin Patrick J Tuerah","84":"Agus Sunarto","85":"Wahyu Padang Gumilar","86":"Hary Darmawan","87":"Piktor Halasan Silitonga","88":"Eko Waluyo","89":"Abdul Azis","90":"Fajar Firmansyah R","91":"Ari Wibowo","92":"Bonardo Leo Saragih","93":"Ogi","94":"Herman","95":"Muh Rizaldi","96":"Alpi Sahrin","97":"Wawan Hermawan","98":"Abd. Wahid","99":"Binsar Akhiles Manurung","100":"Hendrawansyah","101":"Irsan","102":"Bagus Nurcahyo","103":"Andika Maulana","104":"Watono","105":"Vallen Oliver Juergen Mandey","106":"Dicky Arizona","107":"Abdul Hamid","108":"Yober Senga","109":"Suryadi","110":"Michael Ciawi","111":"Mohamad Adi Arif Fadila","112":"Aini Rosyidah","113":"Nurlin","114":"Muhammad Rafli Ardiansyah","115":"Asking","116":"Angga Dwi Poetra.j","117":"Mansur","118":"Muh Fahri","119":"Aditya Malangi\u0027","120":"Muh. Ainul Iksan","121":"Gimnastiar To Makkasua","122":"Muhadrin","123":"Aldy Fanus Bartolius","124":"Andi Tanra Shabargo","125":"Joko Adi Saputra","126":"Supriadi B","127":"Beni Pakadang","128":"Muhammad Zulkifli","129":"Nur Iman","130":"Sulaiman Huzain","131":"Risal","132":"Moh. Munadri","133":"Herman","134":"Glendy H.t","135":"Fachrisal Wiryatama","136":"Syahrudi Arsyandi","137":"Muh. Dwiki Saputra","138":"Wilson","139":"Basri Wajo","140":"Syarif Hidayat","141":"Arwan","142":"A. Randy Sahrani","143":"Wardi Bosa Kondolele","144":"Akbar Jafar","145":"Anwar Sadat","146":"Neni Nugraini","147":"Suharta","148":"Denis","149":"Ediyatman","150":"Akmal","151":"Nur Alam Jaya","152":"Muh. Ichsan Judda","153":"Junaedi","154":"Agung","155":"Saldi","156":"Arsyad","157":"Muh. Faizal Afrizal","158":"Desrianto Ma\u0027ga","159":"Herlinus Pither","160":"Ruslan Usman","161":"Erwin Hidayat","162":"Abdul Aziz","163":"Dzulkarnain","164":"Ikram Subair","165":"Dwi Saputra","166":"Hamdan Hasmawan","167":"Rio","168":"Julma Bawan","169":"Jusmiranda","170":"Zulfikar","171":"Herman Efendi","172":"A. Rahmat Syarif","173":"Arsenius Balisa","174":"Ahmad Sahwal","175":"Ishak","176":"Rizqy Perdana","177":"Syaiful Hamid","178":"Andika Agus Pratama","179":"Muh. Fadil Saputra","180":"Krisyanto Pagalla","181":"Baso Arfan","182":"Iksan","183":"Faruq Rizalul Alam","184":"Gufron Zainal Lutvi","185":"Delfianto Djafar","186":"Ricky Imanuel Pongsamma\u0027","187":"Debby Anggara","188":"Femita Fitria Dengen","189":"Alex Zulkarnain","190":"Aryarsyah Harahap","191":"Muhammad Agung Kinanzar","192":"Supratikna","193":"Fuad Amrul Huda","194":"Donald Richardson Marolop","195":"Muhammad Fajrul Ilmi","196":"Febriand Madika Mangori","197":"Nada Triana","198":"Febrian Triyoga","199":"Firdaus Malik","200":"Finansia Inka Lamba","201":"Stevi Makausi","202":"Chery Fransisca Lumingkewas","203":"Andi Nur Reski","204":"Temiria Purwa","205":"Muhammad Padel","206":"Hikmah Nurul Qamar","207":"Reno Hadi Mulyana","208":"Haryahya","209":"Deni Syahrial","210":"Ld. Adin Trisno","211":"La Ode Herman","212":"Arief Jaya","213":"Sulfahmi","214":"Chipto","215":"Mukrim","216":"Awaluddin","217":"Ryan Fatwa","218":"Sugiawan","219":"Mohamad Faruq","220":"Riski Karsim","221":"Iskandar D","222":"Muhammad Al Kalam","223":"Andriansyah","224":"Ahmad Faishal","225":"Moh Rizaldy","226":"Fandi Christofel Timbani","227":"Herry Adam Saputra","228":"Jabal Nur","229":"Muh. Tahir","230":"Muh. Aswatullah","231":"A. M. Nurul Hidayat","232":"Indra Handrianto","233":"Muh. Syarif","234":"Purnomo","235":"Keristian Panjiarsi Karolus","236":"Fiqqih Hidayat","237":"Pebrianty Talibu","238":"Fanes Trinespa Lili","239":"Andy Setiawan","240":"Heri Bartolius","241":"Mudatsir","242":"Sugiharto","243":"Fajar Pranata","244":"Alexander Delo Rante","245":"Natalie Veronica","246":"Greefy Evrilian Amung","247":"Zainul Arifin","248":"Muhammad Al Bashir","249":"Jate\u0027us Posmariano","250":"Selamet Ardiansah","251":"Rahmat Fajar","252":"Wachid Ramdanu Imandoyo","253":"Ahkamin","254":"Herdiman Sirait","255":"Indra Maulana","256":"Heikal","257":"Renitriana Br Sitepu","258":"Azmil Muftakhor","259":"Wenby Sulaiman","260":"Hovi Swastika","261":"Dimas Yudho Pamungkas","262":"Winda Febriana","263":"Dzaky Abiyyu Al-wasi","264":"Veronica Andriani Saragih","265":"Hendra Ade Putra","266":"Daegal Orea Pasirliano Pramono","267":"Mahir","268":"Ihsan Fathoni Hadi Prawidyatama","269":"Tio Katarina Marpaung","270":"Johanes Haposan Pardomuan S","271":"Jati Sasongko","272":"Ichsan Manzali","273":"Adhi Surahman","274":"Aldillah Andi Aminuddin","275":"Agus Rakhmat","276":"Rizwan Orlando Sitohang","277":"Hendrik Christianto","278":"Dwiki Prasetya","279":"Widji Santoso","280":"Samiaji","281":"Ade Prastya Nugraha","282":"Riska Novitasari Resdiansah","283":"Indah Mutia Ayudita","284":"Muh Irfan","285":"Isma\u0027ilia Khoirun Nasta\u0027in","286":"Astrifo Kabangnga","287":"Eka Izdihar Hafizhah","288":"Rezkita Bagas Prakasih","289":"Novia Indri Yanti Yunitazami","290":"Peggy Leksana Putra Mangera","291":"Hendrawan Setyo Pambudi","292":"Septian Tri Laksono","293":"Andre Febrian Saputra","294":"M Kayyis Arham","295":"Akiong","296":"Obed Pwiyii","297":"Joshua Hein Hendrik Lumintang","298":"Maria Wijaya","299":"M. Abdullah Najib","300":"Muchammad Rezqi Zunove","301":"Arief Putro Prakoso","302":"Wildan Rizky Alamsyah","303":"Reza Rezki Ramdan","304":"Ahmad Saifuddin","305":"Maulana Ihsan Rurianda","306":"Alvin Andrean Syahputra","307":"Ahmad Fauzi","308":"Bagus Iman Riyadhi","309":"Vitra Hani Purnamasari","310":"Wawan Febriyawan","311":"Arfan M","312":"La Ode Syamsibar","313":"Ahmad Arifin","314":"Muh Yusli","315":"Ahmad Sahrul Jaya","316":"Renita Putri Haltin","317":"Wiwin Purnawadi","318":"Ahmad Agus Salim","319":"Ramli","320":"Blezensky Ardian Ramba\u0027","321":"Rustam","322":"Muhammad Akbar Aguda","323":"Jumali","324":"Sulam Bungasalu","325":"Takdir","326":"Rudi Alfiandi","327":"Iqbal Lucky Eptanto","328":"Nirwan Dharma Saputra","329":"R. Sumantri","330":"Mulyono","331":"Dennys Al\u0027fath","332":"Anang Firmansyah","333":"Nanda Assyari Noval","334":"Roni","335":"Hardiyanto","336":"Alberthus Pranowo Gunawan","337":"Cahyana Saputra","338":"Dika Andra Rulforqon","339":"Anggela Wahyu Kurniawan","340":"Candra Wanton Simbolon","341":"Nopendy Endriatna","342":"Budi Djallaludin A. Runturambi","343":"Roni Bambang","344":"Imron Ashadi","345":"Sulhan","346":"Muhammad Haris","347":"Resa Karno Lamaliwa","348":"Sopian Hamonangan Aritonang","349":"Ibnu Fatahillah","350":"Ihsan Wiradjaya Daeng Nusu","351":"Jamali Khoirul Abidin","352":"Brian Candra Brahmana","353":"Wafi Shafiyudien","354":"Mahnizar Enry","355":"Ronggo Wicaksono","356":"Muh. Afiat Azis","357":"Jonny Martua Nofryandi","358":"Pangky Satrio Pamungkas","359":"Ery Wardjito","360":"Jeremi Marco Manurung","361":"Pahala Juragan Lumbantoruan","362":"Richard","363":"Harra Arqasha","364":"Faizal Zaleh","365":"Emil Azali","366":"Aditya Dwi Dyatmika Wijaya","367":"Syafrizal","368":"Ibnu Abbas","369":"Deni Agprianta","370":"Priskila Kriso Prastin Kuswarini","371":"Birghita Augliana A","372":"Widi Okta Irwandi","373":"Haedir Hakim","374":"Rinaldy Silitonga","375":"Muhammad Ainur Rofiq","376":"Fachri Adam","377":"Arico Liberty Setiawan Sembiring Pandia","378":"Pipit Peruca Simanjuntak","379":"Hardi","380":"Bahrudin","381":"Muh. Asdar","382":"Putra Astaman","383":"Soni","384":"Jonhar","385":"Erik Pangando","386":"Firman","387":"Joko Sulistio","388":"Mario Hendra Gunawan Syahrir","389":"Zulharman","390":"Nurasman","391":"Sumardi","392":"Kelik Dwi Margiyanto","393":"Musta","394":"Ridwan Pamantung","395":"Muh. Syah","396":"Muhammad Fajri","397":"Kisworo","398":"M. Zaky Permana. S","399":"Rachmat Hidayat","400":"Muh Aras","401":"Chajar Setyadi","402":"Martinus","403":"M. Tidal","404":"Adi Nurjatna","405":"Nico Rezeki Gustio","406":"Aris Zarazak Tambing","407":"Endri Yanuarman","408":"Muh. Ilham","409":"Deni Parisman","410":"Harun","411":"Muhammad Sapoan","412":"Irfan Syah","413":"Salman","414":"Muh. Adrian Prama","415":"Juhardin","416":"Febry Rendra Atmaja","417":"Akbar Budimansyah","418":"Sandy Leo Alamsyah","419":"Boyman Slamet","420":"Firman Amd","421":"Ahyar Rosidin","422":"Sinar Alam","423":"Rizki Ramadhan","424":"Andi Aryawijaya Taufiq Mappellawa","425":"Zaenal Abidin","426":"Alfiandi Widiatmoko","427":"Riendra Shakti","428":"Muh. Muhajir Wildan Syahri","429":"Muhammad Juanda","430":"Zulfikar Dimas Akbari","431":"Agus Budiharso","432":"Iwan Setiawan","433":"Bambang Suprianto","434":"Eron Supriadi Lumbantobing","435":"Fajar Fadilah","436":"Rio Roberto","437":"Ridman","438":"Moh. Fadly","439":"Aswar","440":"Muhammad Marwan","441":"Akhmad Salim","442":"Hardani","443":"Abdul Aziz","444":"Agis Mahendra","445":"Effendi","446":"Dwi Pujiyanto","447":"Muhdlorun","448":"Efrain Rabidi Ranthe","449":"Ivan Christian Lagumani","450":"Kurnia Sandi","451":"Selber","452":"Prasetiya","453":"Harif Wijaksana","454":"Surahmat","455":"Jenly Gerald Makatuuk","456":"Nurdin","457":"Muhammad Ardiansyah","458":"Anugerah Ananta Sembiring","459":"Riko","460":"Ilham","461":"Zhul Muhajir","462":"Risdianto Mamontoh","463":"Ariadi Mustafa","464":"Airlangga Putra R.j","465":"Octovianus Marcell Gilbert T","466":"Hendrawan N Silondae","467":"Tony Andrean","468":"Bonus Kris Maryono","469":"Eris Rismansyah","470":"Rivayn Farli Lontoh","471":"Anugrah Febrino Balwa","472":"Dwi Cahyo Hariyanto","473":"Erfa Yunita Angela Pratiwi. B","474":"Mochammad Choirun Nashor","475":"Joko Pamungkas","476":"Evank Qinando","477":"Muhammad Syahroni","478":"Rizal Anwar","479":"June Ever Moses","480":"Dita Synthauli Evaniya","481":"M. Subhan","482":"Yusrifal","483":"Andi Hudayanti Patta","484":"Ansar","485":"Arahman Shadiq Nurdianto","486":"Nabilla Oktavia Putri","487":"Rena Vita Ramadani","488":"Mohammad Roisuddin Al Asykari","489":"Akbar Gifari","490":"Abdul Ransep","491":"Puja Asari Putri","492":"Cakra Darmawan Abdullah","493":"Irwanto Sanjaya","494":"Rendra Yoga Pratama","495":"Hermintoyo","496":"Agus Praseteo Cahyo Wibowo","497":"Randy Nanan Asmar","498":"Zaifullah Ali Tabri","499":"Nyimas Zahra Mastura","500":"Yulia Shine","501":"Muhammad Rizal","502":"Mursalim Malondong","503":"Muhammad Iqbal Ramadhon","504":"Abdul Basir","505":"Dedi Rifaldi","506":"Feriyanto Roson","507":"Abdul Malim","508":"Agus Setiawan","509":"Andika","510":"Irsan","511":"Moh Azis Muhajir","512":"Muh Ridwan","513":"Ahyansyah","514":"Andi Misban","515":"Afdal","516":"Andi Moch Ibrahim D","517":"Bustanil Arifin","518":"Sahroni","519":"Muhuddin","520":"Febri Andi","521":"Muh Taufik Ryandi","522":"Asfar","523":"Wahyudi","524":"Diaz Angghi Suandi","525":"Arlis Umar","526":"Markus","527":"Asriadi K","528":"Aidil Fikri","529":"Friendly Lorends Taroreh","530":"Roslina","531":"Hikmatiar","532":"Rivaldi H. Musa","533":"Agus Jumardi","534":"Calvin Riman","535":"Rina","536":"Adnan Harto Kandolia","537":"Muh. Jaenal, S","538":"Asdian D. Ishak","539":"Egi Parinding","540":"Akbar Nugroho","541":"Jefri Yanto Wassi","542":"Mutmainna","543":"Iyan Ferdiyan Syah","544":"Adhitya Difki","545":"Ikram Wahyudi","546":"Nopan Musu","547":"Roiz Ansori","548":"Doni Aprizal","549":"Edy Sulfani","550":"Lido Wibowo","551":"Solihin","552":"Irhanudin","553":"I Gusti Ketut Ngurah  Suardana","554":"Tomi","555":"Febri Rizki Rachmatulloh","556":"Muhammad Wildan","557":"Andreas Triono","558":"Jamaluddin","559":"Jumrin Raking","560":"Suwito","561":"Nasaruddin","562":"Adi Chandra","563":"Ismail","564":"Nirwanto","565":"Jenever Giroth","566":"Berton Ompusunggu","567":"Muh Ahlan M","568":"Galbi","569":"Irwan Nasir","570":"Edgar Wijaya","571":"Elber Rante Rupang","572":"Sarman Andis","573":"Agus Mulyadi","574":"Mahpudin","575":"Juliadi","576":"Mirwan Syahputra","577":"Juhardi Sambenusa","578":"Hardiansah","579":"Rahmat Hidayat","580":"Muh. Ababil","581":"Al Ghufri. A","582":"Muhammad Ashar","583":"Nur Alamsyah","584":"Muhammad Yusuf","585":"Taufik","586":"Ahmad Rifai Sanuhung","587":"Asdar","588":"Muhammad Alim","589":"Nurmansyah","590":"Randi Permana","591":"Muh. Fajar Sudirman","592":"Yaidil","593":"Alan Gumilar","594":"La Ode Abdul Muthalib Halim","595":"Bahtiar","596":"Fajaruddin","597":"Harum Kurniawan","598":"Muliadi","599":"Irwan","600":"Dedi","601":"Stevin Mayaho","602":"Agam Sudjito","603":"Roger Januardi Katende","604":"Arjun Shakti Yanuarta","605":"Irfandi","606":"Kevin Riski","607":"Alfin","608":"Eris Saranga\u0027","609":"Lefrans Jorgi","610":"Afandi Tahiruddin","611":"Komang Juni Santika","612":"Andhi Asse","613":"Mirdan Asrudin","614":"Rizal Hidayat","615":"Arffin Bin Paulus","616":"Syarif Rahman","617":"Aris Sukirman","618":"Riska Agustin Susilo","619":"Rahmat Zaldi Hidayat","620":"Christoforus Kurniawan","621":"Arif Rachman Fadlillah","622":"Indri Rosnawati Dewi","623":"Muh Akbar","624":"Susanto","625":"Muhammad Rahman","626":"Nadya Yuliana","627":"Suhendi","628":"Tasya Nasir","629":"Arsal","630":"Amanda Maydisha Ashar","631":"Muh Apriliandi","632":"Nurhidayah Ramadhani Syarif","633":"Husnul Khatimah","634":"Deli Handayani","635":"Annisa Putri Pertiwi","636":"Viladelvia Manga","637":"Alda Kartika Rudianto","638":"Rizky Wira Yulian Putra","639":"Nurul Hikma","640":"Nur Afiah","641":"Putri Tiara Hardianti","642":"Elsa Safitri","643":"Rezki Amalia","644":"Dwiki Hernanto","645":"Nur Fitri","646":"Mikhael Reynaldo Kanekaputra","647":"Fadelta Figraf Rafiazka","648":"Nasha Annabiila Risqulia","649":"Muhammad Al Ghifari","650":"Ahmad Fauzan Rafif","651":"Nicolas","652":"Melly Puspita","653":"Muhammad Raditya Prayutama","654":"Hendra Wijaya","655":"Ashar","656":"Aldi Renaldi","657":"Randy Yuliansyah","658":"Lino","659":"Amba Salu","660":"Ardi R.","661":"M.habibi Jemi Gama","662":"Muhammad Zhafran","663":"Hashim","664":"Andi Nurul Muvlicha","665":"Vee Jay Ballos","666":"Ismail","667":"Hendro Atmojo","668":"Asfitrah Alamsyah","1030":"Wu Yinglin","1031":"Xiao Hua","1032":"Li Jianjun","1033":"Mark Le Page","1037":"Ricky B","1038":"Ricky Aprias","1039":"Abdul Sallam","1040":"Winona Kalista","1041":"Ahmad Ginanjar","1042":"Luki Dafalla","1043":"Bian Arianto","1044":"Alfachri Oronto","1045":"Faqihdus"}; // List user dari backend
        const listStatus = {"Available":"Available","Booked":"Booked"}; // List status dari backend
        const listFacility = {"1":"Google TV 40 Inchp","2":"Sistem keamanan 24 jam","3":"Mesin Kopi"}; // List facility dari backend
        const maxCapacityInput = $('#maximum_capacity');

        // Tab Beds(Function)
        function addBedRow(rowCount) {
            const maxCapacity = parseInt(maxCapacityInput.val(), 10);
            const currentRowCount = bedsTableBody.find('tr').length;
            if (currentRowCount >= maxCapacity) {
                // Show SweetAlert error if the capacity is exceeded
                let errorMessage = `The maximum capacity for ${maxCapacity} bed has been reached.`;
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: errorMessage,
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    customClass: {
                        popup: 'swal2-large-font',
                        title: 'swal2-title'
                    }
                });
                return; // Stop
            }
            const row = `<tr>
                <td><input type="text" name="beds[${rowCount}][code]" class="form-control"></td>
                <td><input type="text" name="beds[${rowCount}][description]" class="form-control"></td>
                <td><input type="file" name="beds[${rowCount}][photo]" class="form-control"></td>
                <td><input type="text" name="beds[${rowCount}][grade]" class="form-control"></td>
                <td>
                    <select name="beds[${rowCount}][owner_id]" class="form-control select2">
                        <option value=""></option>
                    </select>
                </td>
                <td>
                    <select name="beds[${rowCount}][status]" class="form-control select2">
                        <option value=""></option>
                    </select>
                </td>
                <td><span class="remove-row btn btn-danger btn-sm"><i class="fa fa-trash"></i></span></td>
            </tr>`;

            bedsTableBody.append(row); // Menambah baris ke dalam tabel

            // Mengisi dropdown owner
            const ownerSelect = bedsTableBody.find(`select[name="beds[${rowCount}][owner_id]"]`);
            Object.entries(listUser).forEach(([id, name]) => {
                ownerSelect.append(`<option value="${id}">${name}</option>`);
            });

            // Mengisi dropdown status
            const statusSelect = bedsTableBody.find(`select[name="beds[${rowCount}][status]"]`);
            Object.entries(listStatus).forEach(([value, label]) => {
                statusSelect.append(`<option value="${value}">${label}</option>`);
            });

            // Inisialisasi select2
            ownerSelect.select2();
            statusSelect.select2();
        }

        // Tambah baris pertama untuk tabel beds secara default
        addBedRow(0);
        addBedRowButton.on('click', function () {
            const rowCount = bedsTableBody.find("tr").length;
            addBedRow(rowCount);
        });

        // handle delete row
        bedsTableBody.on('click', '.remove-row', function () {
            $(this).closest('tr').remove();
        });

        // Tab Facilities(Function)
        function addFacilityRow(rowCount) {
            const row = `<tr>
                <td>
                    <select name="facilities[${rowCount}][facility_id]" class="form-control select2">
                        <option value=""></option>
                    </select>
                </td>
                <td><span class="remove-row btn btn-danger btn-sm"><i class="fa fa-trash"></i></span></td>
            </tr>`;

            facilitiesTableBody.append(row); // Menambah baris ke dalam tabel facilities

            // Mengisi dropdown facility
            const facilitySelect = facilitiesTableBody.find(`select[name="facilities[${rowCount}][facility_id]"]`);
            const selectedFacilities = [];

            $('#facilities-table-body select[name^="facilities["]').each(function() {
                const selectedValue = $(this).val();
                if (selectedValue) {
                    selectedFacilities.push(selectedValue); // Menyimpan nilai fasilitas yang sudah dipilih
                }
            });

            Object.entries(listFacility).forEach(([id, name]) => {
                // Jika id fasilitas belum dipilih di baris lain, tambahkan ke dropdown
                if (!selectedFacilities.includes(id.toString())) {
                    facilitySelect.append(`<option value="${id}">${name}</option>`);
                }
            });

            // Inisialisasi select2 untuk dropdown
            facilitySelect.select2();
        }

        // default pertama add 1 baris
        addFacilityRow(0);
        addFacilityRowButton.on('click', function () {
            const rowCount = facilitiesTableBody.find("tr").length;
            addFacilityRow(rowCount);
        });

        // handle delete row
        facilitiesTableBody.on('click', '.remove-row', function () {
            $(this).closest('tr').remove();
        });
        // Check before form submit
        $('form').on('submit', function(event) {
            const beds = $('select[name^="beds["]');
            const facilities = $('select[name^="facilities["]');
            
            const noFacilitySelected = facilities.length === 0 || Array.from(facilities).every(facility => facility.value === "");
            const noBedSelected = beds.length === 0 || Array.from(beds).every(bed => bed.value === "");

            if (noFacilitySelected || noBedSelected) {
                event.preventDefault();
                
                let errorMessage = 'Please add, at least one Bed and one Facility before proceeding.';
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: errorMessage,
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    customClass: {
                        popup: 'swal2-large-font',
                        title: 'swal2-title'
                    }
                });
            }
        });
    });
</script>