<div class="modal fade" id="addLocation" tabindex="-1" aria-labelledby="addLocationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ url('location/save') }}" method="POST">
            @csrf
            <div class="modal-content">
                <input type="hidden" id="ratingValue" name="rating" value="0">
                <input type="hidden" id="masakanId" name="masakan_id" value="1">
                <div class="modal-header">
                    <h5 class="modal-title" id="addLocationLabel">Add Location</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label for="created_by" class="mb-2">Post by</label>
                            <input type="text" class="form-control" name="created_by" required placeholder="ex: Alex">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="email_by" class="mb-2">Email</label>
                            <input type="email" class="form-control" name="email_by" required placeholder="ex: alex@mail.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="nama_tempat" class="mb-2">Location Name</label>
                            <input type="text" class="form-control" name="nama_tempat" required placeholder="ex: Rumah Makan Enak">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="alamat_tempat" class="mb-2">Location Address</label>
                            <input type="text" class="form-control" name="alamat_tempat" required placeholder="ex: Jln. MT. Haryono No. 22">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="no_wa_tempat" class="mb-2">Whatsapp</label>
                            <input type="text" class="form-control" name="no_wa_tempat" placeholder="ex: 628242423232">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="googlemaps">Google Maps</label>
                            <input type="text" class="form-control" name="google_maps" id="googlemaps" placeholder="ex: https://goo.gl/maps/pYpbq5TZc1BeZ4rX9">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="gofood" id="gofood" value="1"/>
                                <label class="form-check-label" for="gofood">Go Food</label>
                            </div>
                              
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="grabfood" id="grabfood" value="1"/>
                                <label class="form-check-label" for="grabfood">Grab Food</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="shoppefood" id="shopeefood" value="1"/>
                            <label class="form-check-label" for="shopeefood">Shopee Food</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                        <i class="fa fa-times"></i> Close
                    </button>
                    <button type="submit" class="btn btn-green">
                        <i class="fa fa-download"></i> Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
