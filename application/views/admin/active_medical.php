<div class="d-flex flex-row flex-column-fluid container">
<div class="main d-flex flex-column flex-row-fluid">

    <div class="content flex-column-fluid" id="kt_content">
        
        <div class="row">
            <div class="col">

                <div class="card card-custom card-border gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 py-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">ACTIVE MEDICAL</span>
                                            
                                        </h3>
                                       
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-0">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table" id="kt_datatable">
                                                <thead>
                                                    <tr class="text-uppercase">
                                                        <th style="min-width: 150px"><center>FOLLOW UP DATE</center></th>
                                                        <th style="min-width: 120px"><center>PATIENT</center></th>
                                                        <th style="min-width: 120px"><center>DOCTOR</center></th>
                                                        <th style="min-width: 120px"><center>DETAIL</center></th>
                                                        <th style="min-width: 120px"><center>PRINT</center></th>
                                                        <th style="min-width: 120px"><center>RECIPE</center></th>
                                                        <th style="min-width: 120px"><center>INVOICE</center></th>
                                                        <th style="min-width: 120px"><center>SUBMIT</center></th>
                                                        <th style="min-width: 120px"><center>EDIT</center></th>
                                                        <th style="min-width: 120px"><center>DELETE</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($data_active as $da) {  ?>
                                                    <tr>
                                                        <td><?= $da['created_date']; ?></td>
                                                        <td><?= $da['patient_name']; ?></td>
                                                        <td><?= $da['doctor_name']; ?></td>
                                                        <td>
                                                                <center>
                                                                    <a href="#" onclick="detail_cls('<?= $da['id']; ?>')" data-target="#detail_cls" data-toggle="modal">
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

                                                        </a>
                                                        </center>

                                                        </td>

                                                        <td>
                                                            <center>
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\Devices\Printer.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M16,17 L16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 L8,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,15 C21,16.1045695 20.1045695,17 19,17 L16,17 Z M17.5,11 C18.3284271,11 19,10.3284271 19,9.5 C19,8.67157288 18.3284271,8 17.5,8 C16.6715729,8 16,8.67157288 16,9.5 C16,10.3284271 16.6715729,11 17.5,11 Z M10,14 L10,20 L14,20 L14,14 L10,14 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" x="8" y="2" width="8" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span></center>
    
                                                        </td>
                                                        <td><center>
                                                            <a href="#" data-toggle="modal" onclick="popup_recipe(
                                                                '<?= $da['id_patient']; ?>',
                                                                '<?= $da['patient_name']; ?>',
                                                                '<?= $da['phone_number_1']; ?>',
                                                                '<?= $da['sex']; ?>'
                                                            )" data-target="#modal_recipe">
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
</svg><!--end::Svg Icon--></span></center>
</a>
                                                        </td>
                                                      
                                                        <td><center>
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
</svg><!--end::Svg Icon--></span></center>
                                                        </td>

                                                        <td><center>
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\Files\Cloud-upload.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.74714567,13.0425758 C4.09410362,11.9740356 3,10.1147886 3,8 C3,4.6862915 5.6862915,2 9,2 C11.7957591,2 14.1449096,3.91215918 14.8109738,6.5 L17.25,6.5 C19.3210678,6.5 21,8.17893219 21,10.25 C21,12.3210678 19.3210678,14 17.25,14 L8.25,14 C7.28817895,14 6.41093178,13.6378962 5.74714567,13.0425758 Z" fill="#000000" opacity="0.3"/>
        <path d="M11.1288761,15.7336977 L11.1288761,17.6901712 L9.12120481,17.6901712 C8.84506244,17.6901712 8.62120481,17.9140288 8.62120481,18.1901712 L8.62120481,19.2134699 C8.62120481,19.4896123 8.84506244,19.7134699 9.12120481,19.7134699 L11.1288761,19.7134699 L11.1288761,21.6699434 C11.1288761,21.9460858 11.3527337,22.1699434 11.6288761,22.1699434 C11.7471877,22.1699434 11.8616664,22.1279896 11.951961,22.0515402 L15.4576222,19.0834174 C15.6683723,18.9049825 15.6945689,18.5894857 15.5161341,18.3787356 C15.4982803,18.3576485 15.4787093,18.3380775 15.4576222,18.3202237 L11.951961,15.3521009 C11.7412109,15.173666 11.4257142,15.1998627 11.2472793,15.4106128 C11.1708299,15.5009075 11.1288761,15.6153861 11.1288761,15.7336977 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.959697, 18.661508) rotate(-90.000000) translate(-11.959697, -18.661508) "/>
    </g>
</svg><!--end::Svg Icon--></span></center>
                                                        </td>

                                                        <td><center>

                                                            <a href="#" onclick="popup_edit_cls(

                                                                '<?= $da['id_patient']; ?>',
                                                                '<?= $da['patient_name']; ?>',
                                                                '<?= $da['phone_number_1']; ?>',
                                                                '<?= $da['sex']; ?>',
                                                                '<?= $da['id']; ?>'

                                                            )" data-toggle="modal" data-target="#modal_edit">
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
<div class="modal fade" id="modal_recipe" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Recipe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-3">
                        
                        <div class="row">
                            <div class="mx-1 col card">
                                <br>
                                <b>Group</b>
                                <hr>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="mx-1 col card">
                                <br>
                                <b>Category</b>
                                <hr>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="mx-1 col card">
                                <br>
                                <b>Example Recipe</b>
                                <hr>
                            </div>
                        </div>

                    </div>

                    <div class="col-6 card shadow-sm p-3 mb-5 bg-white rounded">
                        <br>    
                        <center><h4>Recipe Drugs</h4>
                           
                            <hr></center>
                             <form method="post" action="<?= base_url(); ?>admin/proses_input_recipe">
                                <input type="hidden" name="id_patient" id="id_pat" />
                                <input type="hidden" name="id_recipe" value="R<?= date('ymdhis'); ?>" />
                                <div class="row">
                                    <div class="col">
                                    <table>
                                        <tr>
                                            <td><b>Name : </b></td>
                                            <td id="rc_name"></td>
                                        </tr>
                                        <tr>
                                            <td><b>Phone : </b></td>
                                            <td id="rc_phone"></td>
                                        </tr>
                                    </table>
                                    </div>

                                     <div class="col">
                                    <table>
                                        <tr>
                                            <td><b>Sex : </b></td>
                                            <td id="rc_sex"></td>
                                        </tr>
                                        <tr>
                                            <td><b>Birth Date : </b></td>
                                            <td ></td>
                                        </tr>
                                    </table>
                                    </div>
                                </div>

                                


                                    
                                    
                             
                            <div class="row mt-3 mb-3">
                                <div class="col">
                                    <b>Reason Checking</b><br>
                                   <input name="reason_checking" style="border-bottom: dotted 2px #c9c9c9; width: 100%;" type="text" class="form-control" placeholder="ex. Headache" />
                                   <br>
                                    <b>Diagnostic</b><br>   
                                    <input name="diagnostic" style="width: 100%;"  type="text" class="form-control" placeholder="..." />
                                </div>
                            </div>
                             
                            <hr>
                           
                            <div id="col_form_drug">
                                <div class="row mb-2" id="the_row">
                                   
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-8">
                                                <select name="drug_id[]" class="form-control">
                                                    <?php foreach ($data_drug as $dd) {  ?>
                                                        <option value="<?= $dd['id']; ?>"><?= $dd['id']; ?> | <?= $dd['drug_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                        </div>
                                        <div class="col-4">
                                               <input type="num" required placeholder="QTY" class="form-control" name="qty_drug[]">
                                        </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                             <div class="col">
                                            <input type="text" required class="form-control" name="note_usg[]" placeholder="Note Usage" />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <br>
                                        <center>
                                        <a href="#" id="removeRow" class="btn btn-danger">Delete</a>
                                        </center>
                                    </div>
                                </div>
                                
                            </div>
                            <hr>
                                       <center> <a href="#" onclick="addrowdrugcolumn()" class="btn btn-success">Add Item</a></center>
                            <br>
                            <div class="row">
                            <div class="col-6">
                                <b>Appointment Date : </b>6 January 2022
                                <br>
                                <b>Instruction : </b>
                                <br>
                                <textarea name="instruction"  class="form-control"></textarea>

                            </div>

                            <div class="col-6">
                               <center>
                                   <i>8 Mei 2022</i>
                                   <br>
                                   Created
                                   <br>
                                   <br>
                                   <br>
                                   <br>
                                   <b>Name of Clinic</b>
                               </center>

                            </div>

                            </div>
                    </div>

                    <div class="col-3">
                        
                        <div class="row">
                            <div class="mx-1 col card">
                                <br>
                                <div class="row">
                                    <div class="col"><b>Disease Progress</b></div>
                                    <div class="col"><center><b onclick="show_form_disesae_progress()" class="btn btn-light">+</b></center></div>
                                </div>
                                <hr>
                                <div id="form_input_disesae_progress" class="card-footer">
                                    <div class="row">
                                    <div class="col"><input type="text" class="form-control" /></div>
                                    </div>
                                    <br>
                                    <div class="row"><div class="col"><input type="submit" class="btn btn-success" value="Save" /></div></div>
                                </div>
                            </div>
                           
                          
                        </div>
                        <div class="row">
                             <div class="mx-1 col card">
                                <br>
                                <b>Sign of Life</b>
                                <hr>
                            </div>
                        </div>
                        <br>
                         <div class="row">
                            <div class="mx-1 col card">
                                <br>
                                <b>Treatment Process</b>
                                <hr>
                            </div>
                           
                        </div>

                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save">
            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Checking Paper</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-6 card shadow-sm p-3 mb-5 bg-white rounded">
                        <br>    
                        <center><h4>Checking Paper Patient</h4>
                            <hr></center>

                            <table>
                                
                                <tr>
                                    <td><b>Name</b></td>
                                    <td id="cls_name"></td>
                                    <td><b>Phone</b></td>
                                    <td id="cls_phone"></td>
                                </tr>
                                 <tr>
                                    <td><b>Sex</b></td>
                                    <td id="cls_sex"></td>
                                    <td><b>Birth Date</b></td>
                                    <td id="cls_birthdate"></td>
                                </tr>
                                <tr>
                                    <td colspan="4"> </td>
                                </tr>
                            </table>
                            
                            
                            <form method="post" action="<?= base_url(); ?>admin/proses_input_checking_sheet_patient">
                                <input type="hidden" name="id_patient"  id="cls_id_pat" value="" />
                                <input type="hidden" name="id_medrec" id="cls_id_medrec" value="" />
                                <input type="hidden" name="check_sheet_id" value="CLS<?= date('ymdhis'); ?>" />



                            <b>Diagnostic</b><br>
                            <input style="border-bottom: dotted 2px #c9c9c9; " name="diagnostic" type="text" class="form-control" placeholder="ex. Headache" />
                            <b>Place Test</b><br>
                            <input type="text" name="place_test" class="form-control" placeholder="..." /><br>
                             
                            <div id="item_checking_form">
                                
                            </div>
                            <br>
                            <center> <a href="#" onclick="addrowcheckingcolumn()" class="btn btn-success">Add Item</a></center>
                            <br>
                            <div class="row">
                            <div class="col-6">
                                <b>Appointment Date : </b>6 January 2022
                                <br>
                                <b>Instruction : </b>
                                <br>
                                <textarea name="instruction" class="form-control"></textarea>
                            </div>
                            <div class="col-6">
                               <center>
                                   <i>8 Mei 2022</i>
                                   <br>
                                   Created
                                   <br>
                                   <br>
                                   <br>
                                   <br>
                                   <b>Name of Clinic</b>
                               </center>

                            </div>

                            </div>
                    </div>

                    <div class="col">
                        
                        <div class="row">
                            <div class="mx-1 col card">
                                <br>
                                <b>Disease Progression</b>
                                <hr>
                            </div>
                            <div class="mx-1 col card">
                                <br>
                                <b>File</b>
                                <hr>
                            </div>
                            <div class="mx-1 col card">
                                <br>
                                <b>Life Check</b>
                                <hr>
                            </div>
                        </div>
                        <br>
                         <div class="row">
                            <div class="mx-1 col card">
                                <br>
                                <b>History</b>
                                <hr>
                               <div id="idhistory">
                                   

                               </div>

                            </div>
                            <div class="mx-1 col card">
                                <br>
                                <b>Group</b>
                                <hr>
                            </div>
                            <div class="mx-1 col card">
                                <br>
                                <b>Category</b>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary font-weight-bold" value="Save" />
            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_pop_history" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DETAIL HISTORY CLS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
             
            </div>


               <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">PRINT</button>
              
      
            </div>
        </div>
    </div>
</div> 


<div class="modal fade" id="detail_cls" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DETAIL CHECKING SHEET</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <center>
                            <h4>CHECKING SHEET</h4>
                            <div id="dcls_code"></div>
                        </center>
                    </div>
                </div>
                <hr>
                <div class="row" id="header_detail_cls">
                    
                </div>
                </div>
                <br>
                <div id="checking_item">
                    


                </div>

                <hr>

                <div class="row">

                    <div class="col-2"></div>
                    <div class="col-4">
                        <b>
                            Instruction : 
                        </b>
                        <div id="dcls_instruction">
                        </div>
                    </div>


                    <div class="col">
                    <center>
                        <b><div id="dcls_created_date"></div></b>
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

</div>





<script type="text/javascript">

    $('#form_input_disesae_progress').hide();



    function get_list_history(idpatient)
    {
        $('#idhistory').empty();

        $.ajax({

            url: `<?= base_url(); ?>Api/get_all_cls_by_id_patient/${idpatient}`,
            method: 'GET',
            success: function(data)
            {
                var data_real = JSON.parse(data);
                // console.log(data_real.length);
           
                 for(var i = 0; i < data_real.length; i++) { 
                 var content = `   <div class="card">
                                    <div class="row px-1 py-1">
                                        <div class="col-8"><center><div style="font-size : 12px;">${data_real[i]['created_date']}</div></center></div>
                                        <div class="col-2"><a data-toggle="modal" onclick="detail_cls_by_id('${data_real[i]['id']}')" data-target="#detail_cls"  href="#">
                                                <span class="svg-icon svg-icon-dark"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\Shopping\Credit-card.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2"/>
                                        <rect fill="#000000" x="2" y="8" width="20" height="3"/>
                                        <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>


                                        </a></div>
                                    </div>
                                </div>
                                <br>`;

            $('#idhistory').append(content);
            }


            }

        });








    }


    function show_form_disesae_progress()
    {
        $('#form_input_disesae_progress').show();
    }


    function popup_edit_cls(id, name, phone, sex, id_medrec)
    {

        get_list_history(id);
       
        $('#cls_name').empty();
        $('#cls_name').append(name);

        $('#cls_phone').empty();
        $('#cls_phone').append(phone);

        $('#cls_id_pat').val();
        $('#cls_id_pat').val(id);

        


        $('#cls_id_medrec').val();
        $('#cls_id_medrec').val(id_medrec);


        if(sex == '1')
        {

        $('#cls_sex').empty();
        $('#cls_sex').append('Male');
        } else {

        $('#cls_sex').empty();
        $('#cls_sex').append('Female');
        }




   

     

    }

    
    function popup_recipe(id, name, phone, sex)
    {

       
        $('#rc_name').empty();
        $('#rc_name').append(name);

        $('#rc_phone').empty();
        $('#rc_phone').append(phone);

        $('#id_pat').val();
        $('#id_pat').val(id);


        if(sex == '1')
        {

        $('#rc_sex').empty();
        $('#rc_sex').append('Male');
        } else {

        $('#rc_sex').empty();
        $('#rc_sex').append('Female');
        }

        // console.log(id);
        // console.log(sex);

     

    }

    function popup_detail(id, doctor_name, patient_name, date, blood_type, checks, diagnosis)
    {
        // console.log(id);
        // console.log(doctor_name);
        // console.log(patient_name);

        $('#id_medrec').val(id);
        $('#doct_name').empty();
        $('#doct_name').val(doctor_name);
        $('#pat_name').empty();
        $('#pat_name').val(patient_name);
        $('#b_type').empty();
        $('#b_type').val(blood_type);
        $('#c_date').empty();
        $('#c_date').append(date);
        $('#diagnosis').empty();
        $('#diagnosis').append(diagnosis);
        $('#checks').empty();
        $('#checks').append(checks);
    }

    function addrowdrugcolumn()
    {

        var col = `
                     <div class="row mb-2" id="the_row">
                                   
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-8">
                                                <select name="drug_id[]" class="form-control">
                                                    <?php foreach ($data_drug as $dd) {  ?>
                                                        <option value="<?= $dd['id']; ?>"><?= $dd['id']; ?> | <?= $dd['drug_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                        </div>
                                        <div class="col-4">
                                               <input type="num" required placeholder="QTY" class="form-control" name="qty_drug[]">
                                        </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                             <div class="col">
                                            <input type="text" required class="form-control" name="note_usg[]" placeholder="Note Usage" />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <br>
                                        <center>
                                        <a href="#" id="removeRow" class="btn btn-danger">Delete</a>
                                        </center>
                                    </div>
                                </div>
                        `;

                        $('#col_form_drug').append(col);

    }


     function addrowcheckingcolumn()
    {

        var col = `
                     <div class="row mb-2" id="the_row">
                                   <div class="col-1"></div>
                                    <div class="col-10">
                                        <div class="row">
                                            <div class="col-8">
                                            <div class="row">
                                            <div class="col">
                                                <select name="checking_id[]" class="form-control">
                                                    <?php foreach ($data_checking as $dc) {  ?>
                                                        <option value="<?= $dc['id']; ?>"><?= $dc['name_checking']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                </div>
                                                </div>
                                                <div class="mt-1 row">
                                                <div class="col">
                                                    <input type="text" name="checking_note[]" class="form-control" placeholder="Note Checking" />
                                                </div>
                                                </div>
                                        </div>
                                        <div class="col-3">
                                               <input type="number" required placeholder="QTY" class="form-control" name="checking_qty[]">
                                        </div>
                                        <div class="col-1">
                                                 <center>
                                        <a href="#" id="removeRow" class="btn btn-danger">Del.</a>
                                        </center>
                                        </div>  
                                        </div>
                                       
                                    </div>
                                  
                                </div>
                                <div class="col-1"></div>
                        `;

                        $('#item_checking_form').append(col);

    }


    function detail_cls(id)
    {
        //set to default empty
        $('#header_detail_cls').empty();
        $('#dcls_code').empty();
        $('#dcls_instruction').empty();
        $('#checking_item').empty();
        $('#dcls_created_date').empty();

        $.ajax({

            type: 'GET',
            url: `<?= base_url(); ?>Api/get_master_cls_patient_by_id_medical_record/${id}`,
            success: function(data)
            {


                  var data_hasil = JSON.parse(data);

                  if(data_hasil['sex'] == '1')
                  {
                    var gender = 'Male';
                  } else {
                    var gender = 'Female';
                  }
                     var col = `<div class="col">
                        <table>
                            <tr>
                                <td>Name : </td>
                                <td id="dcls_name_patient">${data_hasil['patient_name']}</td>
                            </tr>
                            <tr>
                                <td>Phone : </td>
                                <td id="dcls_phone_patient">${data_hasil['phone_number_1']}</td>
                            </tr>
                            <tr>
                                <td>Gender : </td>
                                <td id="dcls_sex_patient">${(data_hasil['sex'] == '1') ? 'Male' :'Female'}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col">
                        <table>
                            <tr>
                                <td>Place Test : </td>
                                <td id="dcls_place_test">${data_hasil['place_test']}</td>
                            </tr>
                            <tr>
                                <td>Diagnostic : </td>
                                <td id="dcls_diagnostic">${data_hasil['diagnostic']}</td>
                            </tr>
                        </table>
                    </div>`;
                    $('#header_detail_cls').append(col);
                    $('#dcls_code').append(`#${data_hasil['cs_id']}`);
                    $('#dcls_instruction').append(data_hasil['instruction']);
                    $('#dcls_created_date').append(data_hasil['created_date']);




                    $.ajax({
                        type: 'GET',
                        url: `<?= base_url(); ?>Api/get_item_checking_sheet_patient_by_id_master_checking_sheet/${data_hasil['id']}`,
                        success: function(data2)
                        {


                            var data_hasil_2 = JSON.parse(data2);

                            // console.log(data_hasil_2.length)
                            // console.log(data_hasil_2);

                            for(var i = 0; i < data_hasil_2.length; i++)
                            {


                            var col2 =    `<div class="row">
                                    <div class="col-2"><h4><center>1</center></h4></div>
                                    <div class="col-8">${data_hasil_2[i]['name_checking']}</div>
                                    <div class="col-2"><h5>${data_hasil_2[i]['checking_qty']} QTY</h5></div>
                                </div>
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-8">Note : ${data_hasil_2[i]['checking_note']}</div>
                                    <div class="col-2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><hr></div>
                            </div>`;


                        $('#checking_item').append(col2);
                        }



                        }
                    })



                 


            }
        })
   
    }

    function detail_cls_by_id(id)
    {
        //set to default empty
        $('#header_detail_cls').empty();
        $('#dcls_code').empty();
        $('#dcls_instruction').empty();
        $('#checking_item').empty();
        $('#dcls_created_date').empty();

        $.ajax({

            type: 'GET',
            url: `<?= base_url(); ?>Api/get_master_cls_patient_by_id/${id}`,
            success: function(data)
            {


                  var data_hasil = JSON.parse(data);

                  if(data_hasil['sex'] == '1')
                  {
                    var gender = 'Male';
                  } else {
                    var gender = 'Female';
                  }
                     var col = `<div class="col">
                        <table>
                            <tr>
                                <td>Name : </td>
                                <td id="dcls_name_patient">${data_hasil['patient_name']}</td>
                            </tr>
                            <tr>
                                <td>Phone : </td>
                                <td id="dcls_phone_patient">${data_hasil['phone_number_1']}</td>
                            </tr>
                            <tr>
                                <td>Gender : </td>
                                <td id="dcls_sex_patient">${(data_hasil['sex'] == '1') ? 'Male' :'Female'}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col">
                        <table>
                            <tr>
                                <td>Place Test : </td>
                                <td id="dcls_place_test">${data_hasil['place_test']}</td>
                            </tr>
                            <tr>
                                <td>Diagnostic : </td>
                                <td id="dcls_diagnostic">${data_hasil['diagnostic']}</td>
                            </tr>
                        </table>
                    </div>`;
                    $('#header_detail_cls').append(col);
                    $('#dcls_code').append(`#${data_hasil['cs_id']}`);
                    $('#dcls_instruction').append(data_hasil['instruction']);
                    $('#dcls_created_date').append(data_hasil['created_date']);
                    // console.log(data_hasil['created_date']);




                    $.ajax({
                        type: 'GET',
                        url: `<?= base_url(); ?>Api/get_item_checking_sheet_patient_by_id_master_checking_sheet/${data_hasil['id']}`,
                        success: function(data2)
                        {


                            var data_hasil_2 = JSON.parse(data2);

                            // console.log(data_hasil_2.length)
                            // console.log(data_hasil_2);

                            for(var i = 0; i < data_hasil_2.length; i++)
                            {


                            var col2 =    `<div class="row">
                                    <div class="col-2"><h4><center>1</center></h4></div>
                                    <div class="col-8">${data_hasil_2[i]['name_checking']}</div>
                                    <div class="col-2"><h5>${data_hasil_2[i]['checking_qty']} QTY</h5></div>
                                </div>
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-8">Note : ${data_hasil_2[i]['checking_note']}</div>
                                    <div class="col-2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-12"><hr></div>
                            </div>`;


                        $('#checking_item').append(col2);
                        }



                        }
                    })



                 


            }
        })
   
    }

     $(document).on('click', '#removeRow', function () {
        $(this).closest('#the_row').remove();
    });

</script>


                        