<div class="d-flex flex-row flex-column-fluid container">
<div class="main d-flex flex-column flex-row-fluid">

	<div class="content flex-column-fluid" id="kt_content">
		
		<div class="row">
			<div class="col">

				<div class="card card-custom card-border gutter-b">
									<!--begin::Header-->
									<div class="card-header border-0 py-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label font-weight-bolder text-dark">PATIENT LIST</span>
											
										</h3>
										<div class="card-toolbar">
											<button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_form_patient"><b>ADD PATIENT</b></button>
										</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
<!-- 
									<tr class="text-uppercase">
														<th class="pl-0" style="min-width: 100px">PATIENT ID</th>
														<th style="min-width: 120px">PATIENT NAME</th>
														<th style="min-width: 150px">PHONE 1</th>
														<th style="min-width: 150px">BLOOD TYPE</th>
														<th style="min-width: 150px">ADDRESS</th>
														<th style="min-width: 130px">SEX</th>
														<th class="pr-0 text-right" style="min-width: 160px">ACTION</th>
									</tr> -->

									<div class="card-body">
										<!--begin::Table-->
										  <zing-grid caption="Hello Futurama" sort search pager page-size="3" page-size-options="2,3,6" layout="row" viewport-stop>
									  	</zing-grid>
										<!--end::Table-->
									</div>
									<!--end::Body-->
								</div>
			</div>
		</div>


	</div>
</div>

</div>




<!-- MODAL -->
<div class="modal fade" id="edit_data_patient" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT DATA PATIENT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>admin/proses_update_patient">

                <input type="hidden" id="id_prim_pat" name="id" value="" />

                <b>PATIENT ID</b>
                <br>
                <br>
                <input type="text" id="pat_id" value="" class="form-control" name="patient_id" readonly/>
                <br>
                 <b>PATIENT NAME</b>
                <br>
                <br>
                <input type="text" id="pat_name" value="" class="form-control" name="patient_name"/>
                <br>
                <div class="row">
                	<div class="col-3"> 
                		<center><b>SEX</b></center>
                		<br>
                		<select class="form-control" name="patient_sex">
                			<option value="1">MALE</option>
                			<option value="2">FEMALE</option>
                		</select>
                	</div>
                		<div class="col-6"> 
                		<center><b>BIRTH DATE</b></center>
                		<br>
                		<input type="date" class="form-control" name="birth_date" id="pat_bd" value="" />
                		
                	
                	
                </div>
                <div class="col-3"> 
                		<center><b>BLOOD TYPE</b></center>
                		<br>
                		<select class="form-control" name="blood_type" id="pat_bt">
                			<option value="A">A</option>
                			<option value="B">B</option>
                			<option value="AB">AB</option>
                			<option value="O">O</option>
                		</select>
                </div>

                	
                	
                	
                </div>
                <br>
                <div class="row">
                	<div class="col"> 
                		<center><b>NUMBER PHONE</b></center>
                		<br>
                		<input type="tel" id="pat_no1" placeholder="0812-1212-2121" value="" class="form-control" name="no_handphone_1"/></div>


                		<div class="col"> 
                		<center><b>Email Address</b></center>
                		<br>
                		<input type="email"  id="pat_email" class="form-control" name="patient_email"/></div>
                		
               
                	
            </div>
                <br>
                <div class="row">
                	<div class="col"> 
                		<b>ADDRESS</b>
                		<br>
                		<br>
                		<textarea id="pat_add" name="address_patient" style="resize: none;" class="form-control"></textarea>
                </div>

            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-info" value="EDIT" />
        		</form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="add_form_patient" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD DATA PATIENT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>admin/proses_input_patient_new">

                <b>PATIENT ID</b>
                <br>
                <br>
                <input type="text" value="P<?= date('ymdhis'); ?>" class="form-control" name="patient_id" readonly/>
                <br>
                 <b>PATIENT NAME</b>
                <br>
                <br>
                <input type="text" value="" class="form-control" name="patient_name"/>
                <br>
                <div class="row">
                	<div class="col-3"> 
                		<center><b>SEX</b></center>
                		<br>
                		<select class="form-control" name="patient_sex">
                			<option value="1">MALE</option>
                			<option value="2">FEMALE</option>
                		</select>
                	</div>
                	
                	<div class="col-6"> 
                		<center><b>BIRTH DATE</b></center>
                		<br>
                		<input type="date" class="form-control" name="birth_date" value="<?= date('Y-m-d'); ?>" />
                		
                	
                	
                </div>

                	<div class="col-3"> 
                		<center><b>BLOOD TYPE</b></center>
                		<br>
                		<select class="form-control" name="blood_type">
                			<option value="A">A</option>
                			<option value="B">B</option>
                			<option value="AB">AB</option>
                			<option value="O">O</option>
                		</select>
                		
                	
                	
                </div>
               
            </div>
             <br>
                <br>
                <div class="row">
                	<div class="col"> 
                		<center><b>NUMBER PHONE</b></center>
                		<br>
                		<input type="tel" placeholder="0812-1212-2121" value="" class="form-control" name="no_handphone_1"/></div>
               
                	<div class="col"> 
                		<center><b>EMAIL</b></center>
                		<br>
                		<input type="email"  class="form-control" name="patient_email"/></div>
                </div>
                <br>
                <div class="row">
                	<div class="col"> 
                		<b>ADDRESS</b>
                		<br>
                		<br>
                		<textarea name="address_patient" style="resize: none;" class="form-control"></textarea>
                </div>

            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-info" value="Save" />
        		</form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="delete_patient" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD DATA PATIENT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
              Are you sure for delete <div id="content_delete"></div> Data ?
       		</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                 <a type="button" id="button_delete_patient" class="btn btn-danger font-weight-bold" >Delete</a>
                
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">

	$.ajax({
		url: '<?= base_url(); ?>Api/get_all_patient',
		method: 'GET',
		success: function(data)
		{
			var data_pat = JSON.parse(data);
			console.log(data_pat);

			window.addEventListener('load', () => {
      // content after DOM load
      const zgRef = document.querySelector('zing-grid');
      const data = data_pat;
      zgRef.setData(data);
    });



		}
	})

	function popupdelete(id, doct_id, doct_name) {

		$('#delete_patient').modal('show');
		$('#content_delete').append('');
		$('#content_delete').append(' ' + doct_name + ' (' + doct_id + ') ');
		$('#button_delete_patient').attr('href', '<?= base_url(); ?>admin/proses_delete_patient_one/'+id);

	}


	function popupupdatepatient(id, pat_id, pat_name, pat_sex, pat_email, pat_no1, bat_bt, pat_add, pat_bd)
	{

		$('#edit_data_patient').modal('show');
		$('#id_prim_pat').val(id);
		$('#pat_id').val(pat_id);
		$('#pat_id').val(pat_id);
		$('#pat_name').val(pat_name);
		$('#pat_sex').val(pat_sex);
		$('#pat_email').val(pat_email);
		$('#pat_no1').val(pat_no1);
		$('#bat_bt').val(bat_bt);
		$('#pat_add').val(pat_add);
		$('#pat_bd').val(pat_bd);
		
	}

</script>