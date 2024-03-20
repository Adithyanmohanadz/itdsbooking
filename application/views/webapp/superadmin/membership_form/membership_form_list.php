<div class="container-fluid py-1 mb-6">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header pb-0">
                    <div class="d-lg-flex">
                        <div>
                            <h5 class="mb-0">Membership Form List</h5>
                        </div>

                        <!-- <div class="ms-auto my-auto mt-lg-0 mt-4">
                            <div class="ms-auto my-auto">
                                <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Download</button>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class="table table-flush " id="form_list">
                            <thead class="thead-light">
                                <tr>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">sl/no</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">Name of establishment</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">Location</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">District</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder ">Mobile No.</th>
                                    <th class="  text-center text-uppercase text-secondary text-xs font-weight-bolder"> Status</th>
                                    <th class="  text-uppercase text-secondary text-xs font-weight-bolder "> Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"> </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"> </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"> </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"> </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm badge-warning">Processing</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="membership_form_view" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Membership Form">
                                            <i class="material-icons text-primary position-relative text-lg">visibility</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"> </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"> </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"> </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"> </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm badge-success">Approved</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="membership_form_approved_view" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Membership Form">
                                            <i class="material-icons text-primary position-relative text-lg">visibility</i>
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
    if (document.getElementById('form_list')) {
        const dataTableSearch = new simpleDatatables.DataTable("#form_list", {
            searchable: true,
            fixedHeight: false,
            perPage: 7
        });

        document.querySelectorAll(".export").forEach(function(el) {
            el.addEventListener("click", function(e) {
                var type = el.dataset.type;

                var data = {
                    type: type,
                    filename: "form_list " + type,
                };

                if (type === "csv") {
                    // data.columnDelimiter = "|";
                }

                dataTableSearch.export(data);
            });
        });
    };
</script>