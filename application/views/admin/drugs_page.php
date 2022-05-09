
<div class="d-flex flex-row flex-column-fluid container">
<div class="main d-flex flex-column flex-row-fluid">

	<div class="content flex-column-fluid" id="kt_content">
		
		<div class="row">
			<div class="col">

				<div class="card card-custom card-border gutter-b">
									<!--begin::Header-->
									<div class="card-header border-0 py-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label font-weight-bolder text-dark">DRUGS</span>
											
										</h3>
										<div class="card-toolbar">
											<button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_form_drug"><b>ADD DRUGS</b></button>
										</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body py-0">
										<!--begin::Table-->
										<div class="table-responsive">
											<table class="table table-head-custom table-vertical-center" id="table_doctor">
												<thead>
													<tr class="text-uppercase">
														
														<th class="pl-0" style="min-width: 100px">DRUG ID</th>
														<th style="min-width: 120px">DRUG NAME</th>
														<th style="min-width: 150px">SPEC</th>
														<th style="min-width: 130px">CATEGORY</th>
														<th style="min-width: 130px">QTY</th>
														<th style="min-width: 130px">UNIT</th>
														<th style="min-width: 130px">PRICE</th>
														<th class="">ACTION</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($drugs as $drug) {  ?>
													<tr>
														<td><?= $drug['drug_id']; ?></td>
														<td><?= $drug['drug_name']; ?></td>
														<td><?= $drug['spec']; ?></td>
														<td><?= $drug['category']; ?></td>
														<td><?= $drug['qty']; ?></td>
														<td><?= $drug['unit']; ?></td>
														<td><?= $drug['price_per_unit']; ?></td>
														<td>
															
																<a href="#" onclick="update_drug(
																	'<?= $drug['id']; ?>',
																	'<?= $drug['drug_id']; ?>',
																	'<?= $drug['drug_name']; ?>',
																	'<?= $drug['qty']; ?>',
																	'<?= $drug['spec']; ?>',
																	'<?= $drug['unit']; ?>',
																	'<?= $drug['category']; ?>',
																	'<?= $drug['price_per_unit']; ?>'

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
																<a onclick="delete_drug('<?= $drug['id']; ?>',
																	'<?= $drug['drug_name']; ?>',
																	'<?= $drug['drug_id']; ?>'
																)"  href="#">
																<span class="svg-icon svg-icon-danger svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\General\Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															        <rect x="0" y="0" width="24" height="24"/>
															        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
															        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
															    </g>
															</svg><!--end::Svg Icon--></span>
															</a>

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


<div class="modal fade" id="edit_form_drug" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT DATA DRUG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>admin/update_drug_by_id">
                <input type="hidden" name="id_drug" id="fed_id">
                <b>DRUG ID</b>
                <br>
                <br>
                <input id="fed_drug_id" type="text" value="" class="form-control" name="drug_id" readonly/>
                <br>
                 <b>DRUG NAME</b>
                <br>
                <br>
                <input type="text" id="fed_drug_name" value="" class="form-control" name="drug_name"/>
                <br>
                <div class="row">
                	<div class="col"> 
                		<b>SPEC</b>
                		<br>
                		<br>
                		<input type="text" id="fed_spec" value="" class="form-control" name="spec"/></div>
                		<div class="col"> 
                		<b>FIRST STOCK (QTY)</b>
                		<br>
                		<br>
                		<input type="number" id="fed_qty" value="" class="form-control" name="qty"/></div>
                	
                </div>
                <br>
                <div class="row">
                	<div class="col"> 
                		<b>PRICE</b>
                		<br>
                		<br>
                		<input type="number" id="fed_price" placeholder="PRICE" value="" class="form-control" name="price"/></div>
                		<div class="col"> 
                		<b>UNIT</b>
                		<br>
                		<br>
                		<input type="text" id="fed_unit" placeholder="UNIT" value="" class="form-control" name="unit"/></div>
                </div>
                <br>
                <br>
                <div class="row">
                	<div class="col">
                	<b>CATEGORY</b>
                	<br>
                	<br>
                	<input type="text" id="fed_category" name="category" class="form-control" />


                	</div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-info" value="Update" />
        </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add_form_drug" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD DATA DRUG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>admin/proses_input_drug">

                <b>DRUG ID</b>
                <br>
                <br>
                <input type="text" value="DG<?= date('ymdhis'); ?>" class="form-control" name="drug_id" readonly/>
                <br>
                 <b>DRUG NAME</b>
                <br>
                <br>
                <input type="text" value="" class="form-control" name="drug_name"/>
                <br>
                <div class="row">
                	<div class="col"> 
                		<b>SPEC</b>
                		<br>
                		<br>
                		<input type="text" value="" class="form-control" name="spec"/></div>
                		<div class="col"> 
                		<b>FIRST STOCK (QTY)</b>
                		<br>
                		<br>
                		<input type="number" value="" class="form-control" name="qty"/></div>
                	
                </div>
                <br>
                <div class="row">
                	<div class="col"> 
                		<b>PRICE</b>
                		<br>
                		<br>
                		<input type="number" placeholder="PRICE" value="" class="form-control" name="price"/></div>
                		<div class="col"> 
                		<b>UNIT</b>
                		<br>
                		<br>
                		<input type="text" placeholder="UNIT" value="" class="form-control" name="unit"/></div>
                </div>
                <br>
                <br>
                <div class="row">
                	<div class="col">
                	<b>CATEGORY</b>
                	<br>
                	<br>
                	<input type="text" name="category" class="form-control" />


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

<div class="modal fade" id="quest_delete" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DELETE DATA PATIENT</h5>
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


</div>


<script type="text/javascript">
	
	
	
	$(document).ready( function () {
    $('#table_doctor').DataTable();
	} );



	function delete_drug(id, nama, kode)
	{
		$('#quest_delete').modal('show');
		$('#lanjut_hapus').attr('href', '<?= base_url(); ?>admin/delete_drug_by_id/' + id);
		$('#content_hapus').empty();
		$('#content_hapus').append(' ' + nama + ' (' + kode + ') ');
	}

	function update_drug(id, id_drug, drug_name, qty, spec, unit, category, price)
	{
		console.log(id);
		$('#edit_form_drug').modal('show');
		$('#fed_id').val(id);
		$('#fed_drug_id').val(id_drug);
		$('#fed_drug_name').val(drug_name);
		$('#fed_qty').val(qty);
		$('#fed_spec').val(spec);
		$('#fed_unit').val(unit);
		$('#fed_category').val(category);
		$('#fed_price').val(price);
		
		
	}

</script>
