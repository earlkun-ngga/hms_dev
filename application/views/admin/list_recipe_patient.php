
<div class="d-flex flex-row flex-column-fluid container">
<div class="main d-flex flex-column flex-row-fluid">

	<div class="content flex-column-fluid" id="kt_content">
		
		<div class="row">
			<div class="col">

				<div class="card card-custom card-border gutter-b">
									<!--begin::Header-->
									<div class="card-header border-0 py-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label font-weight-bolder text-dark">RECIPE</span>
										</h3>
									</div>
									<div class="card-body py-0">
										<div class="table-responsive">
											<table class="table table-head-custom table-vertical-center" id="table_doctor">
												<thead>
													<tr class="text-uppercase">
														<th class="pl-0" style="min-width: 100px">RECIPE CODE</th>
														<th>PATIENT NAME</th>
														<th>DIAGNOSIS</th>
														<th>APPOINTMENT DATE</th>
														<th>CREATE DATE</th>
														<th>VIEW DETAIL</th>
														<th>PRINT</th>
														<th>INVOICE</th>
														<th>EDIT</th>
														<th>REMOVE</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($recipe as $rcp) { ?> 
													<tr>
														<td><?= $rcp['recipe_id']; ?></td>
														<td><?= $rcp['patient_name']; ?></td>
														<td><?= $rcp['diagnostic']; ?></td>
														<td></td>
														<td><?= $rcp['created_date']; ?></td>
														<td>
															<center>
                                                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\Communication\Clipboard-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect x="0" y="0" width="24" height="24"/>
                <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
            </g>
        </svg><!--end::Svg Icon--></span>
    </center>

														</td>
														<td><center>
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\Devices\Printer.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M16,17 L16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 L8,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,15 C21,16.1045695 20.1045695,17 19,17 L16,17 Z M17.5,11 C18.3284271,11 19,10.3284271 19,9.5 C19,8.67157288 18.3284271,8 17.5,8 C16.6715729,8 16,8.67157288 16,9.5 C16,10.3284271 16.6715729,11 17.5,11 Z M10,14 L10,20 L14,20 L14,14 L10,14 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" x="8" y="2" width="8" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span></center></td>
														<td>
															<center>
                                                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\Communication\Clipboard-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect x="0" y="0" width="24" height="24"/>
                <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
            </g>
        </svg><!--end::Svg Icon--></span>
    </center>

														</td>
														<td>
															
															<center>

                                                            <a href="#"  data-toggle="modal" data-target="#modal_edit">
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\Design\Edit.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                                            </g>
                                                        </svg><!--end::Svg Icon--></span>
                                                        </a>
                                                     </center>



														</td>
														<td> 
														<center>  
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\General\Trash.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                		</svg><!--end::Svg Icon--></span>
                                            	
                                            			</center>
                                        			</td>
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

<div class="modal fade" id="add_form_doctor" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD DATA DOCTOR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>admin/proses_input_doctor_new">

                <b>DOCTOR ID</b>
                <br>
                <br>
                <input type="text" value="D<?= date('ymdhis'); ?>" class="form-control" name="doctor_id" readonly/>
                <br>
                 <b>DOCTOR NAME</b>
                <br>
                <br>
                <input type="text" value="" class="form-control" name="doctor_name"/>
                <br>
                <div class="row">
                	<div class="col"> 
                		<b>BIRTH DATE</b>
                		<br>
                		<br>
                		<input type="date" value="" class="form-control" name="birth_date"/></div>
                	<div class="col"> 
                		<b>EXP YEAR</b>
                		<br>
                		<br>
                		<input type="number" value="" class="form-control" name="experience_year"/></div>
                	<div class="col"> 
                		<b>LAST EDUCATION</b>
                		<br>
                		<br>
                		<input type="text" value="" class="form-control" name="last_education"/></div>
                </div>
                <br>
                <div class="row">
                	<div class="col"> 
                		<b>NUMBER PHONE</b>
                		<br>
                		<br>
                		<input type="tel" placeholder="0812-1212-2121" value="" class="form-control" name="no_handphone"/></div>
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

<div class="modal fade" id="quest_delete" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">HAPUS DATA PATIENT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
            	<div class="row">
              		Apakah Yakin Ingin Menghapus : <p id="content_hapus"> </p> ?
              	</div>
            </div>
            <div class="modal-footer">
              	<a href="#" class="btn btn-light-success font-weight-bold" data-dismiss="modal">Tidak</a>
                <a id="lanjut_hapus" href="#" class="btn btn-danger font-weight-bold" >Hapus</a>
              	
       
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="edit_form_doctor" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT DATA DOCTOR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>admin/update_doctor_by_id">

                <input id="fed_id" name="id_prim_doct" type="hidden" value="">
                <b>DOCTOR ID</b>
                <br>
                <br>
                <input type="text" id="fed_doct_id" value="" class="form-control" name="doctor_id" readonly/>
                <br>
                 <b>DOCTOR NAME</b>
                <br>
                <br>
                <input id="fed_doct_name" type="text" value="" class="form-control" name="doctor_name"/>
                <br>
                <div class="row">
                	<div class="col"> 
                		<b>BIRTH DATE</b>
                		<br>
                		<br>
                		<input type="date" id="fed_bd" value="" class="form-control" name="birth_date"/></div>
                	<div class="col"> 
                		<b>EXP YEAR</b>
                		<br>
                		<br>
                		<input type="number" id="fed_ey" value="" class="form-control" name="experience_year"/></div>
                	<div class="col"> 
                		<b>LAST EDUCATION</b>
                		<br>
                		<br>
                		<input type="text" value="" id="fed_le" class="form-control" name="last_education"/></div>
                </div>
                <br>
                <div class="row">
                	<div class="col"> 
                		<b>NUMBER PHONE</b>
                		<br>
                		<br>
                		<input type="tel" id="fed_np" placeholder="0812-1212-2121" value="" class="form-control" name="no_handphone"/></div>
                </div>
                <br>
                <div class="row">
                	<label class="col-3 col-form-label"><b>STATUS</b></label>
								  <div class="col-3">
								   <span class="switch switch-outline switch-icon switch-success">
								    <label>
								     <input name="status_doct" type="checkbox" checked="checked" name="select"/>
								     <span></span>
								    </label>
								   </span>
								  </div>
                		
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-info" value="Edit" />
        </form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	
	
	


</script>
