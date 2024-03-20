<div class="container-fluid py-1 mb-6">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header pb-0">
                    <div class="d-lg-flex">
                        <div>
                            <h5 class="mb-0">Location List </h5>

                        </div>

                        <div class="ms-auto my-auto mt-lg-0 mt-4">
                            <div class="ms-auto my-auto">

                                <a href="location_creation" class="btn bg-gradient-dark btn-sm mb-0">+ Add Location</a>

                                <button class="btn btn-outline-dark btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Download</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class="table table-flush" id="category-list">
                            <thead class="thead-light">
                                <tr>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder w-10">sl/no</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">Location</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder text-center w-10">Status</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder text-center w-10">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="w-10">
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td class=""> 
                                            <h6 class="ms-3 my-auto text-wrap text-break">Location</h6> 
                                    </td>
                                    <td class="align-middle text-center text-sm w-10">
                                        <div class="form-check form-switch ">
                                            <input class="form-check-input text-center" type="checkbox" id="flexSwitchCheckDefault" checked=""> 
                                        </div>
                                    </td>
                                    <td class="text-sm text-center w-10">
                                        <a href="category_creation" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Category">
                                            <i class="material-icons text-success position-relative text-lg">drive_file_rename_outline</i>
                                        </a> 
                                    </td>

                                </tr>
                                <tr>
                                    <td class="w-10">
                                        <p class="text-xs font-weight-bold mb-0">2</p>
                                    </td>
                                    <td class="w-30"> 
                                            <h6 class="ms-3 my-auto">Location</h6> 
                                    </td>
                                    <td class="align-middle text-center text-sm w-10">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked=""> 
                                        </div>
                                    </td>
                                    <td class="text-sm text-center w-10">
                                        <a href="category_creation" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Category">
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
    if (document.getElementById('category-list')) {
        const dataTableSearch = new simpleDatatables.DataTable("#category-list", {
            searchable: true,
            fixedHeight: false,
            perPage: 7
        });

        document.querySelectorAll(".export").forEach(function(el) {
            el.addEventListener("click", function(e) {
                var type = el.dataset.type;

                var data = {
                    type: type,
                    filename: "category list " + type,
                };

                if (type === "csv") {
                    // data.columnDelimiter = "|";
                }

                dataTableSearch.export(data);
            });
        });
    };
</script>