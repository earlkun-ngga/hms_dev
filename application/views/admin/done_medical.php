<div class="d-flex flex-row flex-column-fluid container">
<div class="main d-flex flex-column flex-row-fluid">

    <div class="content flex-column-fluid" id="kt_content">
        
        <div class="row">
            <div class="col">

                <div class="card card-custom card-border gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 py-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">MEDICAL DONE</span>
                                        </h3>
                                       
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-0">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                                                <thead>
                                                    <tr class="text-uppercase">
                                                        <th style="min-width: 150px">FOLLOW UP DATE</th>
                                                        <th style="min-width: 120px">PATIENT NAME</th>
                                                        <th style="min-width: 120px">BLOOD TYPE</th>
                                                        <th style="min-width: 150px">DOCTOR NAME</th>
                                                        <th class="pr-0 text-right" style="min-width: 160px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($data_done as $dd) {  ?>
                                                    <tr>
                                                        <td><?= $dd['created_date']; ?></td>
                                                        <td><?= $dd['patient_name']; ?></td>
                                                        <td><b><?= $dd['blood_type']; ?></b></td>
                                                        <td><?= $dd['doctor_name']; ?></td>
                                                        <td class="pr-0 text-right" style="min-width: 160px">
                                                           <div class="badge badge-success">DONE</div>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- MODAL -->



<div class="modal fade" id="detail_modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MEDICAL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
        
            <table>
                <tr>
                    <td><b>DATE : </b></td>
                    <td id="c_date"></td>
                </tr>
            </table>      
            <form method="post" action="<?= base_url(); ?>admin/update_medical_record">
            <input type="hidden" value="" id="id_medrec" name="idmedrec" />
            <br><b>DOCTOR NAME</b>
            <br>
            <br><input type="text" id="doct_name" disabled class="form-control" name="">
            <br><b>PATIENT NAME</b>
            <br>
            <br><input type="text" id="pat_name" disabled class="form-control" name="">
            <br><b>BLOOD TYPE (PATIENT)</b>
            <br>
            <br><input type="text" id="b_type" style="width: 25%" disabled class="form-control" name="">
            <br>
            <b>DIAGNOSIS</b>
            <textarea id="diagnosis"  class="form-control" name="diagnosis" style="resize: none;"></textarea>
            <br>
            <b>CHECK</b>
            <textarea id="checks" class="form-control" name="check" style="resize: none;"></textarea>
            <br>
            <div class="modal-footer">
                <input type="submit" href="#" class="btn btn-success" value="UPDATE" />
            </form>
            </div>
        </div>
    </div>
</div>



</div>





<script type="text/javascript">

   

   
 
</script>