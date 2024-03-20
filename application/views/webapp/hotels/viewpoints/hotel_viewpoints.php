<div class="container-fluid py-1 mb-6 vh-100">
    <div class="row">
        <div class="col-12">

            <div class="row  ">
                <div class="col-12  m-auto ">
                    <div class="card">
                        <div class="card-body">
                            <form action="">

                                <div class="border-radius-xl bg-white">

                                    <div class="d-lg-flex">
                                        <div class="mb-2">
                                            <h5 class="font-weight-bolder mb-0"> Viewpoints </h5>
                                            <p class="mb-0 text-sm">Select the Near Viewpoints which is available in your hotel.</p>
                                        </div>

                                        <div class="ms-auto my-auto mt-lg-0 mt-4">
                                            <div class="ms-auto my-auto">
                                                <button class="btn bg-gradient-primary btn-sm mb-0" type="button" onclick="addNearViewpoints()">+&nbsp; Add </button></a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class=" ">

                                        <div class=" near-tourist-place-container ">
                                            <div class="card my-3  near-tourist-place">
                                                <div class="card-body row">
                                                    <h6 class="font-weight-bolder mb-0"> Viewpoints 1</h6>
                                                    <div class="col-12 col-sm-4 ">
                                                        <div class="input-grou p input-group-stati c ">
                                                            <label class=" ">District</label>
                                                            <select class="form-control select-box border ps-2" name=" " id=" ">
                                                                <option class="py-3" value="" selected disabled>Select District </option>
                                                                <option value="">1</option>
                                                                <option value="">2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                                                        <div class="input-grou p input-group-stati c ">
                                                            <label class=" ">Viewpoints</label>
                                                            <select class="form-control select-box border ps-2" name=" " id=" ">
                                                                <option value="" selected disabled>Select Viewpoints</option>
                                                                <option value="">1</option>
                                                                <option value="">2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                                                        <div class="input-grou p input-group-stati c ">
                                                            <label class=" ">KM Range from Hotel</label>
                                                            <select class="form-control select-box border ps-2" name=" " id=" ">
                                                                <option value="" selected disabled>Select KM Range</option>
                                                                <option value="">1</option>
                                                                <option value="">2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="button-row d-flex flex-column ">
                                    <a href="hotel_add_viewpoints" class=" mb-0">
                                        <button class="mb-0 btn bg-gradient-light mt-4 mt-sm-0" type="button" title="">+ New Viewpoints</button></a>
                                    <a href=" " class="ms-auto mb-0">
                                        <button class="ms-auto mb-0 px-6 btn bg-gradient-dark mt-4 mt-sm-0" type="button" title="submit">Submit</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function addNearViewpoints() {
        // Get the last Viewpoints number
        var lastViewpoints = $('.near-tourist-place').length;

        // Create a new set of input fields for  
        var newNearViewpoints = $('.near-tourist-place:first').clone();

        // Update the Viewpoints number in the new set
        newNearViewpoints.find('h6').text('Viewpoints ' + (lastViewpoints + 1));

        // Clear the input field in the new set
        newNearViewpoints.find('input[type="text"]').val('');

        // Append the new set to the container
        $('.near-tourist-place-container').append(newNearViewpoints);
    }
</script>