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

<!-- Select2 -->
{{-- <script src="/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script> --}}
<script src="/adminlte/plugind/select2/js/select2.full.min.js"></script>
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
  