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
                                            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
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
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo11\dist/../src/media/svg/icons\Devices\Printer.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M16,17 L16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 L8,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,15 C21,16.1045695 20.1045695,17 19,17 L16,17 Z M17.5,11 C18.3284271,11 19,10.3284271 19,9.5 C19,8.67157288 18.3284271,8 17.5,8 C16.6715729,8 16,8.67157288 16,9.5 C16,10.3284271 16.6715729,11 17.5,11 Z M10,14 L10,20 L14,20 L14,14 L10,14 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" x="8" y="2" width="8" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span></center>
    
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
                            Code : AB012101212
                            <hr></center>
                            <table>
                                <tr>
                                    <td><b>Name</b></td>
                                    <td>Muhammad Erlangga</td>
                                    <td><b>Birth Date</b></td>
                                    <td>6 January 2000</td>
                                </tr>
                                 <tr>
                                    <td><b>Phone</b></td>
                                    <td>021021021</td>
                                    <td><b>Gender</b></td>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <td colspan="4"> </td>
                                </tr>
                                <tr>
                                    <td><b>Diagnostic</b></td>
                                    <td colspan="3"><input style="border-bottom: dotted 2px #c9c9c9; " type="text" class="form-control" placeholder="ex. Headache" /></td>
                                    
                                </tr>
                                <tr>
                                    <td ><b>Place Test</b></td>
                                    <td colspan="3"><input type="text" class="form-control" placeholder="..." /></td>
                                </tr>
                            </table>
                            <br>
                            <br>
                            <table>
                                

                                <tr>
                                    <td rowspan="2"><font size="+1"><center>1</center></font></td>
                                    <td>
                                        <center>
                                        <select class="form-control">
                                            <option>Blood Test</option>
                                            <option>Urine Test</option>
                                            <option>EKG</option>
                                            <option>Ultrasonografi (USG)</option>
                                            <option>CT Scan</option>
                                            <option>MRI</option>
                                        </select>
                                        </center>
                                    </td>
                                    <td rowspan="2"></td>
                                    <td rowspan="2">
                                       <center> <a class="btn btn-danger">delete</a></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <center>
                                        <input type="text" class="form-control" placeholder="Note">
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4"><br></td>
                                </tr>
                                 <tr>
                                    <td rowspan="2"><font size="+1"><center>2</center></font></td>
                                    <td>
                                        <center>
                                        <select class="form-control">
                                            <option>Blood Test</option>
                                            <option>Urine Test</option>
                                            <option>EKG</option>
                                            <option>Ultrasonografi (USG)</option>
                                            <option>CT Scan</option>
                                            <option>MRI</option>
                                        </select>
                                        </center>
                                    </td>
                                    <td rowspan="2"></td>
                                    <td rowspan="2">
                                       <center> <a class="btn btn-danger">delete</a></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <center>
                                        <input type="text" class="form-control" placeholder="Note">
                                        </center>
                                    </td>
                                </tr>
                                 <tr>
                                    <td colspan="4"><br></td>
                                </tr>
                                 <tr>
                                    <td rowspan="2"><font size="+1"><center>3</center></font></td>
                                    <td>
                                        <center>
                                        <select class="form-control">
                                            <option>Blood Test</option>
                                            <option>Urine Test</option>
                                            <option>EKG</option>
                                            <option>Ultrasonografi (USG)</option>
                                            <option>CT Scan</option>
                                            <option>MRI</option>
                                        </select>
                                        </center>
                                    </td>
                                    <td rowspan="2"></td>
                                    <td rowspan="2">
                                       <center> <a class="btn btn-danger">delete</a></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <center>
                                        <input type="text" class="form-control" placeholder="Note">
                                        </center>
                                    </td>
                                </tr>
                                 <tr>
                                    <td colspan="4"><br></td>
                                </tr>

                                   <tr>
                                    <td colspan="4"><br></td>
                                </tr>
                                 <tr>
                                    <td rowspan="2"></td>
                                    <td>
                                        
                                    </td>
                                    <td rowspan="2"></td>
                                    <td rowspan="2">
                                       <center> <a class="btn btn-success">Add Item</a></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                </tr>
                                 <tr>
                                    <td colspan="4"><br></td>
                                </tr>

                            </table>
                            <br>
                           
                            <br>
                            <div class="row">
                            <div class="col-6">
                                <b>Appointment Date : </b>6 January 2022
                                <br>
                                <b>Instruction : </b>
                                <br>
                                <textarea class="form-control"></textarea>

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
                                <b>Penyakit</b>
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
                <button type="button" class="btn btn-primary font-weight-bold">Save changes</button>
            </div>
        </div>
    </div>
</div>







</div>





<script type="text/javascript">

    function popup_detail(id, doctor_name, patient_name, date, blood_type, checks, diagnosis)
    {
        console.log(id);
        console.log(doctor_name);
        console.log(patient_name);

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

   
 
</script>