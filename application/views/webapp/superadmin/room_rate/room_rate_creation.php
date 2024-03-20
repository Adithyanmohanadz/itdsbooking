<div class="container-fluid py-1 mb-6 vh-100">
     <div class="row">
         <div class="col-12">

             <div class="row  ">
                 <div class="col-12  m-auto ">
                     <div class="card">
                         <div class="card-body">
                             <form action="">

                                 <div class="border-radius-xl bg-white">
                                     <h5 class="font-weight-bolder mb-2">Room Rate</h5>

                                     <div class=" ">

                                         <div class="row mt-3">
                                             <div class="col-12 col-sm-6">
                                                 <div class="input-group input-group-static">
                                                     <label class=" text-primary "> Select Room Type</label>
                                                     <select class="form-control " name=" " id="choices_room_type">
                                                         <option value="" selected disabled>Select Room Type </option>
                                                         <option value="">1</option>
                                                         <option value="">2</option>
                                                     </select>
                                                 </div>
                                             </div>
                                             <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                 <div class="input-group input-group-static ">
                                                     <label class=" ">Room Rate</label>
                                                     <input class="  form-control" type="number" placeholder="Room Rate" />
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
                                     <a href="all_room_rate" class="ms-auto mb-0">
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
     if (document.getElementById('choices_room_type')) {
         var element = document.getElementById('choices_room_type');
         const example = new Choices(element, {
             searchEnabled: true,
             shouldSort: false,
         });
     }; 
 </script>