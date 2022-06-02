<div class="d-flex flex-row flex-column-fluid container">
<div class="main d-flex flex-column flex-row-fluid">

	<div class="content flex-column-fluid" id="kt_content">
		
		<div class="row">
			<div class="col">
				<div class="card card-custom card-border gutter-b">
									<!--begin::Header-->
									<div class="card-header border-0 py-5">
										<h3 class="card-title align-items-start flex-column">
                                            <a href="<?= base_url(); ?>Admin/drugs" class="btn btn-light-primary">ALL DRUG</a>
                                            <br>
											<span class="card-label font-weight-bolder text-dark"><?= $drug_data_master['drug_name']; ?> #<?= $drug_data_master['drug_id']; ?> | TOTAL STOCK :

                                                <?= $count_stock_drug['total_stock']; ?>
                                             </span>
											
										</h3>
										<div class="card-toolbar">
											<button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_form_drug"><b>ADD STOCK</b></button>
										</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body py-0">
										<!--begin::Table-->
										<
											<table class="table table-head-custom table-vertical-center" id="table_doctor">
												<thead>
													<tr class="text-uppercase">
														
														<th class="pl-0" style="min-width: 100px">STOCK ID</th>
														<th style="min-width: 130px">EXPIRED DATE</th>
                                                        <th style="min-width: 130px">QTY</th>
														<th style="min-width: 150px">COUPON CODE</th>
														<th style="min-width: 130px">LOT CODE</th>
														<th style="min-width: 130px">ADDED AT</th>
													</tr>
												</thead>
												
												<tbody>
                                                    <?php foreach($drug_stock_item as $dst) { ?>
                                                    <tr>
                                                        <td><?= $dst['drug_stock_id']; ?></td>
                                                        <td><?= $dst['expired_date']; ?></td>
                                                        <td><?= $dst['qty']; ?></td>
                                                        <td><?= $dst['coupon_code']; ?></td>
                                                        <td><?= $dst['lot_code']; ?></td>
                                                        <td><?= $dst['created_date']; ?></td>
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



<div class="modal fade" id="add_form_drug" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD STOCK FOR : PARAMEX DG1290129301</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>admin/proses_input_stock_drug">
                <input type="hidden" value="<?= $id_drug; ?>" name="id_drug" />

                <b>STOCK DRUG ID</b>
                <br>
                <br>
                <input type="text" value="STDR<?= date('ymdhis'); ?>" class="form-control" name="drug_stock_id" readonly/>
                <br>
               
                <br>
                <div class="row">
                	<div class="col"> 
                		<b>ADD QTY</b>
                		<br>
                		<br>
                		<input type="number" value="" class="form-control" name="qty_stock"/></div>
                		<div class="col"> 
                		<b>EXPIRED DATE</b>
                		<br>
                		<br>
                		<input type="date" value="" class="form-control" required name="expired_date" /></div>
                		
                	
                </div>
                <br>
                <div class="row">
                	<div class="col"> 
                		<b>COUPON CODE</b>
                		<br>
                		<br>
                		<input type="text" placeholder="" value="" class="form-control" name="coupon_code"/></div>
                		<div class="col"> 
                		<b>LOT CODE</b>
                		<br>
                		<br>
                		<input type="text" placeholder="" value="" class="form-control" name="lot_code"/></div>
                </div>
                <br>
                <br>
                <div class="row">
                	<div class="col">
                	<b>NOTE</b>
                	<br>
                	<br>
                	<textarea  name="note" 	class="form-control" style=""></textarea>


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

<!-- <div class="modal fade" id="quest_delete" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
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
 -->

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



<script type="text/javascript">

     $('#alert_conflig').hide();

    function readCheckConflicData() {

        console.log('test !!!');

        var time = $('#ap_time').val();
        var date = $('#ap_date').val();
        var doct= $('#doctor_select2').val();
     
        $.ajax({
        type:"GET",
        url: `<?= base_url(); ?>api/get_data_appointment_by_date_time_doct/${date}/${time}/${doct}`,
        dataType: 'json',
        success: function(res){
            
            if(res.length == 0)
            {
                $('#submit_btn').attr("disabled", false);
                $('#alert_conflig').hide();
            } else {
                $('#submit_btn').attr("disabled", true);
                $('#alert_conflig').show();
            }
           

        }
        });
       
    }
    
    // Class definition
var KTSelect2 = function() {
 // Private functions
 var demos = function() {
  // basic
  $('#kt_select2_1').select2({
   placeholder: "Select a state"
  });

  $('#doctor_select2').select2({
   placeholder: "Select a state"
  });

  // nested
  $('#kt_select2_2').select2({
   placeholder: "Select a state"
  });

  // multi select
  $('#kt_select2_3').select2({
   placeholder: "Select a state",
  });

  // basic
  $('#kt_select2_4').select2({
   placeholder: "Select a state",
   allowClear: true
  });

  // loading data from array
  var data = [{
   id: 0,
   text: 'Enhancement'
  }, {
   id: 1,
   text: 'Bug'
  }, {
   id: 2,
   text: 'Duplicate'
  }, {
   id: 3,
   text: 'Invalid'
  }, {
   id: 4,
   text: 'Wontfix'
  }];

  $('#kt_select2_5').select2({
   placeholder: "Select a value",
   data: data
  });

  // loading remote data

  function formatRepo(repo) {
   if (repo.loading) return repo.text;
   var markup = "<div class='select2-result-repository clearfix'>" +
    "<div class='select2-result-repository__meta'>" +
    "<div class='select2-result-repository__title'>" + repo.full_name + "</div>";
   if (repo.description) {
    markup += "<div class='select2-result-repository__description'>" + repo.description + "</div>";
   }
   markup += "<div class='select2-result-repository__statistics'>" +
    "<div class='select2-result-repository__forks'><i class='fa fa-flash'></i> " + repo.forks_count + " Forks</div>" +
    "<div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> " + repo.stargazers_count + " Stars</div>" +
    "<div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> " + repo.watchers_count + " Watchers</div>" +
    "</div>" +
    "</div></div>";
   return markup;
  }

  function formatRepoSelection(repo) {
   return repo.full_name || repo.text;
  }

  $("#kt_select2_6").select2({
   placeholder: "Search for git repositories",
   allowClear: true,
   ajax: {
    url: "https://api.github.com/search/repositories",
    dataType: 'json',
    delay: 250,
    data: function(params) {
     return {
      q: params.term, // search term
      page: params.page
     };
    },
    processResults: function(data, params) {
     // parse the results into the format expected by Select2
     // since we are using custom formatting functions we do not need to
     // alter the remote JSON data, except to indicate that infinite
     // scrolling can be used
     params.page = params.page || 1;

     return {
      results: data.items,
      pagination: {
       more: (params.page * 30) < data.total_count
      }
     };
    },
    cache: true
   },
   escapeMarkup: function(markup) {
    return markup;
   }, // let our custom formatter work
   minimumInputLength: 1,
   templateResult: formatRepo, // omitted for brevity, see the source of this page
   templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
  });

  // custom styles

  // tagging support
  $('#kt_select2_12_1, #kt_select2_12_2, #kt_select2_12_3, #kt_select2_12_4').select2({
   placeholder: "Select an option",
  });

  // disabled mode
  $('#kt_select2_7').select2({
   placeholder: "Select an option"
  });

  // disabled results
  $('#kt_select2_8').select2({
   placeholder: "Select an option"
  });

  // limiting the number of selections
  $('#kt_select2_9').select2({
   placeholder: "Select an option",
   maximumSelectionLength: 2
  });

  // hiding the search box
  $('#kt_select2_10').select2({
   placeholder: "Select an option",
   minimumResultsForSearch: Infinity
  });

  // tagging support
  $('#kt_select2_11').select2({
   placeholder: "Add a tag",
   tags: true
  });

  // disabled results
  $('.kt-select2-general').select2({
   placeholder: "Select an option"
  });
 }

 var modalDemos = function() {
  $('#kt_select2_modal').on('shown.bs.modal', function () {
   // basic
   $('#kt_select2_1_modal').select2({
    placeholder: "Select a state"
   });

   // nested
   $('#kt_select2_2_modal').select2({
    placeholder: "Select a state"
   });

   // multi select
   $('#kt_select2_3_modal').select2({
    placeholder: "Select a state",
   });

   // basic
   $('#kt_select2_4_modal').select2({
    placeholder: "Select a state",
    allowClear: true
   });
  });
 }

 // Public functions
 return {
  init: function() {
   demos();
   modalDemos();
  }
 };
}();

// Initialization
jQuery(document).ready(function() {
 KTSelect2.init();
});
</script>
