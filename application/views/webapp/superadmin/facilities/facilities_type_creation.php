 <div class="container-fluid py-1 mb-6 vh-100">
     <div class="row">
         <div class="col-12">

             <div class="row  ">
                 <div class="col-12  m-auto ">
                     <div class="card">
                         <div class="card-body">
                             <form action="">

                                 <div class="border-radius-xl bg-white">
                                     <h5 class="font-weight-bolder mb-2">Facilities Type</h5>

                                     <div class=" "> 

                                         <div class="row mt-3">
                                             <div class="col-12 col-sm-6">
                                                 <div class="input-group input-group-static ">
                                                     <label class=" ">  Facilities Type</label>
                                                     <input class="  form-control" type="text" placeholder="Facilities Type Name" />
                                                 </div>
                                             </div> 
                                             <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                 <div class="input-group input-group-static ">
                                                     <label class=" "> Image Upload</label>
                                                     <input class="form-control custom-file-upload" type="file">
                                                 </div>
                                             </div>
                                         </div>

                                     </div>
                                 </div>

                                 <div class="row mt-5">
                                     <h5 class="font-weight-bolder mb-0"> Status</h5>
                                     <div class="col-12 col-sm-6 mt-3">
                                         <div class="form-check form-switch">
                                             <input class="form-check-input" type="checkbox" id="active-inactive" checked="">
                                             <label class="form-check-label" for="active-inactive">Active Or Inactive</label>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="button-row d-flex mt-4">
                                     <a href=" " class="ms-auto mb-0">
                                         <button class="ms-auto mb-0 px-6 btn bg-gradient-dark " type="button" title="submit" data-bs-toggle="modal" data-bs-target="#modal-coordinator">Submit</button></a>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <script src="assets2/js/plugins/choices.min.js"></script>

 <script>
     if (document.getElementById('choices_category')) {
         var element = document.getElementById('choices_category');
         const example = new Choices(element, {
             searchEnabled: true,
             shouldSort: false,
         });
     }; 
 </script>