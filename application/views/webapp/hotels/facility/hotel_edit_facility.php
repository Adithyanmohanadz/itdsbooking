<div class="container-fluid py-1 mb-6">
    <div class="row">
        <div class="col-12 ">
            <div class="card mb-3">
                <div class="card-body">
                    <form action="">

                        <div class="border-radius-xl bg-white">
                            <h5 class="font-weight-bolder mb-2">Facility</h5>
                            <div class=" ">
                                <div class="row mt-4">
                                    <div class="col-12 col-sm-6">
                                        <div class="input-group input-group-dynamic">
                                            <div class="input-group input-group-static ">
                                                <label class=" "> Facility </label>
                                                <input class="  form-control" type="text" placeholder="Facility Name" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="border-radius-xl bg-white mt-4">

                            <div class="d-lg-flex">
                                <div>
                                    <h5 class="font-weight-bolder mb-0">Sub Facility </h5>

                                </div>

                                <div class="ms-auto my-auto mt-lg-0 mt-4">
                                    <div class="ms-auto my-auto">
                                        <button class="btn bg-gradient-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#modal_sub_facility">+&nbsp; Add </button></a>

                                    </div>
                                </div>
                            </div>

                            <div class="">

                                <div class="row sub-facility-container ">
                                    <div class="col-12 col-sm-6 mt-3 sub-facility-row">
                                        <div class="input-group input-group-static ">
                                            <label class=" "> Sub Facility</label>
                                            <input class="  form-control" type="text" placeholder="Sub Facility Name" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="  mt-3">
                            <div class="button-row d-flex">
                                <a href="hotel_facilitys" class="ms-auto mb-0"><button class=" px-6 btn bg-gradient-dark " type="button" title="submit">Save</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="modal_sub_facility" tabindex="-1" role="dialog" aria-labelledby="modal_sub_facility" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title font-weight-normal" id="title_modal_sub_facility">Add New Sub Facility</h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mt-1">
                    <div class="col-12">
                        <div class="input-group input-group-dynamic">
                            <div class="input-group input-group-static ">
                                <label class=" "> Sub Facility </label>
                                <input class="  form-control" type="text" placeholder="Sub Facility Name" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark">Add</button>
            </div>
        </div>
    </div>
</div>