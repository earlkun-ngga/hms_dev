<div class="d-flex flex-row flex-column-fluid container">
<div class="main d-flex flex-column flex-row-fluid">

    <div class="content flex-column-fluid" id="kt_content">
        
        <div class="row">
            <div class="col">

                <div class="card card-custom card-border gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 py-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">TODAY APPOINTMENT LIST</span>
                                            
                                        </h3>
                                        <div class="card-toolbar">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_form_patient"><b>ADD APPOINTMENT</b></button>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-0">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table table-head-custom table-vertical-center">
                                                <thead>
                                                    <tr class="text-uppercase">
                                                        <th style="min-width: 120px">#ID</th>
                                                        <th style="min-width: 150px">DATE</th>
                                                        <th style="min-width: 120px">PATIENT NAME</th>
                                                        <th style="min-width: 150px">DOCTOR NAME</th>
                                                        <th class="pr-0 text-right" style="min-width: 160px">ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($data_appointment as $da) {  ?>
                                                    <tr>
                                                        <td><?= $da['appointment_id']; ?></td>
                                                        <td><?= $da['appointment_date']; ?> | <?= $da['appointment_time']; ?></td>
                                                        <td><?= $da['patient_name']; ?></td>
                                                        <td><?= $da['doctor_name']; ?></td>
                                                        <td class="pr-0 text-right">
                                                        
                                                       <?php if($da['appointment_date'] == date('Y-m-d')) {


                                                            echo '<a href="'.base_url().'admin/appointment_fu/'.$da['id'].'/'.$da['id_doctor'].'/'.$da['id_patient'].'" class="btn btn-success">
                                                            <b>FOLLOW UP</b></a>'; 
                                                            
                                                            } else if($da['appointment_date'] < date('Y-m-d')) {  
                                                            echo '<a class="btn btn-danger disabled">
                                                            <b>EXPIRED</b></a>'; 
                                                            } else {

                                                            echo '<a class="btn btn-default disabled">
                                                            <b>NOT YET</b></a>';
                                                            } ?>
                                        

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



<div class="modal fade" id="add_form_patient" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD APOINTMENT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>admin/proses_input_appointment">
                <b>APPOINTMENT CODE</b>
                <br>
                <br>
                <div class="row">
                    <div class="col">
                       <input class="form-control" type="text" readonly name="ap_id" value="AP<?= date('Ymdhis'); ?>">
                    </div>
                </div>
                <br>
                <b>PATIENT (NAME OR ID)</b>
                <br>
                <br>
                <div class="row">
                    <div class="col">
                        <select name="patient_id" style="width: 100%" class="form-control select2" id="kt_select2_1">
                           <?php foreach($data_patient as $dp) { ?>
                            <option value="<?= $dp['id']; ?>">(<?= $dp['patient_id']; ?> ) - <?= $dp['patient_name']; ?></option>
                           <?php } ?>
                        </select>
                    </div>
                </div>
                <br>
                <b>DOCTOR (NAME OR ID)</b>
                <br>
                <br>
                 <div class="row">
                    <div class="col">
                        <select onchange="readCheckConflicData()" name="doctor_id" style="width: 100%" class="form-control select2" id="doctor_select2">
                           <?php foreach($data_doctor as $dd) { ?>
                            <option value="<?= $dd['id']; ?>">(<?= $dd['doctor_id']; ?> ) - <?= $dd['doctor_name']; ?></option>
                           <?php } ?>
                        </select>
                    </div>
                </div>
                <br>
                <b>DATE APPOINTMENT</b>
                <br>
                <br>
                <div class="row">
                
                <div class="col">
                    <input type="date" onchange="readCheckConflicData()" id="ap_date" value="<?= date('Y-m-d'); ?>" min="<?= date('Y-m-d'); ?>" class="form-control" name="appointment_date">
                </div>
                <div class="col">
                  <select id="ap_time" onchange="readCheckConflicData()" class="form-control" name="appointment_time">
                    <?php for($i = 0; $i < 24; $i++) {  ?>
                        <?php for($k = 0; $k < 60; $k+=15) {  ?>
                            <option value="<?= ($i == 0) ? '00' : $i; ?>:<?= ($k == 0) ? '00' : $k; ?>"><?= ($i == 0) ? '00' : $i; ?>:<?= ($k == 0) ? '00' : $k; ?></option>
                        <?php } ?>
                    <?php } ?>
                  </select>
                </div>    
        </div>
        <br>
    
        <b>REMARK</b>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <textarea name="remark" class="form-control" style="resize: none;"></textarea>
            </div>
        </div>
        <br>
        <br>
        <div id="alert_conflig" class="alert alert-danger" role="alert">
            Can't make an appointment, Doctor and conflicted time
        </div>
        <br>
            <div class="modal-footer">

                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <input id="submit_btn" type="submit" class="btn btn-info" value="Save" />
                </form>
            </div>
        </div>
    </div>
</div>

</div>





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