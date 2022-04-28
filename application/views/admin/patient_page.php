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
									<div class="card-body py-0">
										<!--begin::Table-->
										<div class="table-responsive">
											<table id="data_tbl" class="table table-head-custom table-vertical-center">
												<thead>
													<tr class="text-uppercase">
														
														<th class="pl-0" style="min-width: 100px">PATIENT ID</th>
														<th style="min-width: 120px">PATIENT NAME</th>
														<th style="min-width: 150px">PHONE 1</th>
														<th style="min-width: 150px">BLOOD TYPE</th>
														<th style="min-width: 150px">ADDRESS</th>
														<th style="min-width: 130px">SEX</th>
														<th class="pr-0 text-right" style="min-width: 160px">ACTION</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($data_patient as $dp) { ?>

														<tr>
															<td><?= $dp['patient_id']; ?></td>
															<td><?= $dp['patient_name']; ?></td>
															<td><?= $dp['phone_number_1']; ?></td>
															<td><?= $dp['blood_type']; ?></td>
															<td><?= $dp['address']; ?></td>
															<td>
																	
																	<?php if($dp['sex'] == '1') {  ?>
																	<div class="badge badge-primary">
																		<font color="white"><b>MALE</b></font></div>
																<?php } else {  ?>
																	<div class="badge badge-danger"><font color="white"><b>FEMALE</b></font></div></div>
																<?php } ?>

															</td>
															<td class="pr-0 text-right" style="min-width: 160px">
																<a href="#" onclick="popupupdatepatient(
																'<?= $dp['id']; ?>',
																'<?= $dp['patient_id']; ?>',
																'<?= $dp['patient_name']; ?>',
																'4',
																'<?= $dp['age']; ?>',
																'<?= $dp['email']; ?>',
																'<?= $dp['phone_number_1']; ?>',
																'<?= $dp['blood_type']; ?>',
																'<?= $dp['address']; ?>'


																)">
																<span class="svg-icon svg-icon-warning svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\Design\Edit.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																        <rect x="0" y="0" width="24" height="24"/>
																        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
																        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
																    </g>
																</svg><!--end::Svg Icon--></span>
															</a>
																|
																<a href="#" onclick="popupdelete(
																'<?= $dp['id']; ?>',
																'<?= $dp['patient_id']; ?>',
																'<?= $dp['patient_name']; ?>'
																)">
																<span class="svg-icon svg-icon-danger svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\General\Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															        <rect x="0" y="0" width="24" height="24"/>
															        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
															    </g>
															</svg><!--end::Svg Icon--></span>
															</a></td>
														</tr>

													<?php } ?>
												</tbody>
												
											</table>
										</div>
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
                	<div class="col-3"> 
                		<center><b>AGE</b></center>
                		<br>
                		<input type="number" id="pat_age" value="" class="form-control" name="patient_age"/></div>

                	<div class="col-6"> 
                		<center><b>Email Address</b></center>
                		<br>
                		<input type="email"  id="pat_email" class="form-control" name="patient_email"/></div>
                		
                	
                	
                </div>
                <br>
                <div class="row">
                	<div class="col"> 
                		<center><b>NUMBER PHONE</b></center>
                		<br>
                		<input type="tel" id="pat_no1" placeholder="0812-1212-2121" value="" class="form-control" name="no_handphone_1"/></div>
               
                	<div class="col"> 
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
                	<div class="col-4"> 
                		<center><b>SEX</b></center>
                		<br>
                		<select class="form-control" name="patient_sex">
                			<option value="1">MALE</option>
                			<option value="2">FEMALE</option>
                		</select>
                	</div>
                	<div class="col-4"> 
                		<center><b>AGE</b></center>
                		<br>
                		<input type="number" value="" class="form-control" name="patient_age"/></div>

                	<div class="col-4"> 
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


<script 
	 src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
     integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
     crossorigin="anonymous"
     referrerpolicy="no-referrer">
		$(document).ready(function() {
    $('#data_tbl').DataTable( {
       
    } );
} );
</script>


<script type="text/javascript">


	
	function popupdelete(id, doct_id, doct_name) {

		$('#delete_patient').modal('show');
		$('#content_delete').append('');
		$('#content_delete').append(' ' + doct_name + ' (' + doct_id + ') ');
		$('#button_delete_patient').attr('href', '<?= base_url(); ?>admin/proses_delete_patient_one/'+id);

	}


	function popupupdatepatient(id, pat_id, pat_name, pat_sex, pat_age, pat_email, pat_no1, bat_bt, pat_add)
	{

		$('#edit_data_patient').modal('show');
		$('#id_prim_pat').val(id);
		$('#pat_id').val(pat_id);
		$('#pat_id').val(pat_id);
		$('#pat_name').val(pat_name);
		$('#pat_sex').val(pat_sex);
		$('#pat_age').val(pat_age);
		$('#pat_email').val(pat_email);
		$('#pat_no1').val(pat_no1);
		$('#bat_bt').val(bat_bt);
		$('#pat_add').val(pat_add);
		
	}

</script>