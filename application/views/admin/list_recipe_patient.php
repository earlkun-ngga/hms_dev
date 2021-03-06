
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
										
											<table class="table table-head-custom table-vertical-center" id="kt_datatable">
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
															<a href="#" onclick="detail_master_recipe(
															'<?= $rcp['patient_name']; ?>',
															'<?= $rcp['phone_number_1']; ?>',
															'<?= $rcp['reason_checking']; ?>',
															'<?= $rcp['diagnostic']; ?>',
															'<?= $rcp['instruction']; ?>',
															'<?= $rcp['created_date']; ?>',
															'<?= $rcp['recipe_id']; ?>',
															'<?= $rcp['id']; ?>'
															)"  data-toggle="modal" data-target="#add_form_doctor">
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
												</a>

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
															<a href="#" data-toggle="modal" data-target="#modal_hapus">
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\General\Trash.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                		</svg><!--end::Svg Icon--></span>
                                                		</a>
                                            	
                                            			</center>
                                        			</td>
													</tr>
												<?php } ?>
												</tbody>
											</table>
							
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
<div class="modal fade" id="modal_hapus" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DETAIL RECIPE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
              
           </div>
               


               <div class="modal-footer">
                <button type="button" class="btn btn-light-success font-weight-bold" data-dismiss="modal">CANCEL</button>
                <a href="#" class="btn btn-danger font-weight-bold" >DELETE</a>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="add_form_doctor" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DETAIL RECIPE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                	<div class="col">
                		<center>
                			<h4>RECIPE</h4>
                			<div id="rc_code_recipe"></div>
                		</center>
                	</div>
                </div>
                <hr>
                <div class="row">
                	<div class="col">
                		<table>
                			<tr>
                				<td>Name : </td>
                				<td id="rc_name_patient"></td>
                			</tr>
                			<tr>
                				<td>Phone : </td>
                				<td id="rc_patient_phone"></td>
                			</tr>
                			<tr>
                				<td>Gender : </td>
                				<td id="rc_gender"></td>
                			</tr>
                		</table>
                	</div>
                	<div class="col">
                		<table>
                			<tr>
                				<td>Reason Check : </td>
                				<td id="rc_rescheck"></td>
                			</tr>
                			<tr>
                				<td>Diagnostic : </td>
                				<td id="rc_diagnostic"></td>
                			</tr>
                			
                		</table>
                	</div>
                </div>
                </div>
                <br>
                <div id="drugs_item">
                
            	</div>

            	<hr>

            	<div class="row">

            		<div class="col-2"></div>
            		<div class="col-4">
            			<b>
            				Instruction : 
            			</b>
            			<div id="rc_instruction">
            			</div>
            		</div>


            		<div class="col">
            		<center>
	            		<b><div id="rc_created_date"></div></b>
	            		Doctor
	            		<br>
	            		<br>
	            		<br>
	            		<b>
	            			Clinic
	            		</b>
	            	</center>
            		</div>

            	</div>
            	<br>
            	<br>
            	<br>
               


               <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">PRINT</button>
              
      
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




<script type="text/javascript">
	
	// function detail_drugs(name_patient, patient_phone, rescheck, diagnostic)
	function detail_master_recipe(name_patient, patient_phone, rescheck, diagnostic, instruction, created_date, code_recipe, id_master_recipe)
	{

		console.log(`ID Master Recipe : ${id_master_recipe}`);

		get_item(id_master_recipe);

		$('#rc_code_recipe').empty();
		$('#rc_code_recipe').append(`CODE : ${code_recipe}`);
		
		$('#rc_name_patient').empty();
		$('#rc_name_patient').append(name_patient);

		$('#rc_patient_phone').empty();
		$('#rc_patient_phone').append(patient_phone);

		$('#rc_rescheck').empty();
		$('#rc_rescheck').append(rescheck);

		$('#rc_diagnostic').empty();
		$('#rc_diagnostic').append(diagnostic);

		$('#rc_instruction').empty();
		$('#rc_instruction').append(instruction);

		$('#rc_created_date').empty();
		$('#rc_created_date').append(created_date);



	}


function get_item(id)
{


$.ajax({
    type: 'GET',
    url: `<?=base_url();?>/Api/get_item_recipe_by_id_master_recipe/${id}`,
    success: function(data) {
      		
      		var data_real = JSON.parse(data);

      		// console.log(data_real);

      		for(var i = 0; i < data_real.length; i++)
      		{
      			var content = `<div class="row">
                	<div class="col-1">
                		<center><h3>${i+1}</h3></center>
                	</div>
                	<div class="col-10">
                		<b>${data_real[i]['drug_name']}</b>
                		<br>
                		"${data_real[i]['note_drug']}"
                		<hr>
                	</div>
                	<div class="col-1 pt-2 px-1">
                		<center>${data_real[i]['drug_qty']} Pcs</center>
                	</div>
                </div>`

                $('#drugs_item').append(content);

      		}

    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert("some error");
    }
});


$('#drugs_item').empty();

}

</script>
