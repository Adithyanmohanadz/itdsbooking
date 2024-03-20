<div class="container-fluid py-1 mb-6">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header pb-0">
                    <div class="d-lg-flex">
                        <div>
                            <h5 class="mb-0">All Reservations </h5>

                        </div>

                        <div class="ms-auto my-auto mt-lg-0 mt-4">
                            <div class="ms-auto my-auto">

                                <a href="admin_reservations" class="btn bg-gradient-dark btn-sm mb-0">+ Add Reservations</a>

                                <button class="btn btn-outline-dark btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Download</button>
                            </div>
                        </div>
                    </div>
                    <form action="">
                        <div class="d-lg-flex mt-4">
                            <div class=" my-auto mt-lg-0 mt-4 col-12 col-md-6 col-lg-3">
                            <div class="input-group input-group-static ">
                                                    <label class=" ">Check-in Date</label>
                                                    <input class="  form-control" type="date" placeholder=" " />
                                                </div>
                            </div>
                            <div class="ms-lg-3 my-auto mt-lg-0 mt-4 col-12 col-md-6 col-lg-3">
                            <div class="input-group input-group-static ">
                                                    <label class=" ">Check-out Date </label>
                                                    <input class="  form-control" type="date" placeholder=" " />
                                                </div>
                            </div> 
                            
                        </div>
                        <div class="d-lg-flex mt-4"> 
                            <div class="  my-auto mt-lg-0 mt-4 col-12 col-md-6 col-lg-3">
                                <select class="form-control " name=" " id="choices-Customer">
                                    <option value="" selected>Customer</option>
                                    <option value="1">Customer 1</option>
                                    <option value="2">Customer 2</option>
                                </select>
                            </div> 
                        </div>
                        <div class="button-row d-flex mt-4">
                            <a href=" " class="ms-auto mb-0"><button class=" px-6 btn bg-gradient-dark " type="button" title="submit">Submit for Filter</button></a>
                        </div>
                    </form>
                </div>

                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class="table table-flush" id="Reservations-list">
                            <thead class="thead-light">
                                <tr>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">sl/no</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">Customer Name</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">Phone Number</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">Email Address </th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">Check-in Date</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">Check-out Date</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">No Of Kids</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">No Of Adult</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">No Of rooms</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">Type Of Rooms</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">Advance Amount</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">Balance Amount</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder text-center">Status</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td>
                                        <div class="d-flex"> 
                                            <h6 class="ms-3 my-auto">Name</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                             <h6 class="ms-3 my-auto"> +00 000 000 0000  </h6>
                                        </div>
                                    </td> 
                                    <td>
                                        <div class="d-flex">
                                             <h6 class="ms-3 my-auto">@gmail.com  </h6>
                                        </div>
                                    </td> 
                                    <td>
                                        <div class="d-flex">
                                             <h6 class="ms-3 my-auto">00/00/0000  </h6>
                                        </div>
                                    </td> 
                                    <td>
                                        <div class="d-flex">
                                             <h6 class="ms-3 my-auto">00/00/0000  </h6>
                                        </div>
                                    </td> 
                                    <td>
                                        <div class="d-flex">
                                             <h6 class="ms-3 my-auto">00   </h6>
                                        </div>
                                    </td> 
                                    <td>
                                        <div class="d-flex">
                                             <h6 class="ms-3 my-auto">00   </h6>
                                        </div>
                                    </td> 
                                    <td>
                                        <div class="d-flex">
                                             <h6 class="ms-3 my-auto">00   </h6>
                                        </div>
                                    </td> 
                                    <td>
                                        <div class="d-flex">
                                             <h6 class="ms-3 my-auto">Type Of Rooms   </h6>
                                        </div>
                                    </td> 
                                    <td>
                                        <div class="d-flex">
                                             <h6 class="ms-3 my-auto">0000   </h6>
                                        </div>
                                    </td> 
                                    <td>
                                        <div class="d-flex">
                                             <h6 class="ms-3 my-auto">0000   </h6>
                                        </div>
                                    </td> 
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm badge-success">Active</span>
                                    </td>
                                    <td class="text-sm text-center">
                                        <a href=" " class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Category">
                                            <i class="material-icons text-success position-relative text-lg">drive_file_rename_outline</i>
                                        </a> 
                                    </td>

                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets2/js/plugins/datatables.js"></script>
<script src="assets2/js/plugins/choices.min.js"></script>


<script>
    if (document.getElementById('Reservations-list')) {
        const dataTableSearch = new simpleDatatables.DataTable("#Reservations-list", {
            searchable: true,
            fixedHeight: false,
            perPage: 7
        });

        document.querySelectorAll(".export").forEach(function(el) {
            el.addEventListener("click", function(e) {
                var type = el.dataset.type;

                var data = {
                    type: type,
                    filename: "Reservations list " + type,
                };

                if (type === "csv") {
                    // data.columnDelimiter = "|";
                }

                dataTableSearch.export(data);
            });
        });
    };
</script>

<script> 
    if (document.getElementById('choices-Customer')) {
        var element = document.getElementById('choices-Customer');
        const example = new Choices(element, {
            searchEnabled: true,
            shouldSort: false,
        });
    };
</script>