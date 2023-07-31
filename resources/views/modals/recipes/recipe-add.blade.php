<div class="modal fade" id="addResep" tabindex="-1" aria-labelledby="addResepLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <form action="{{ url('recipes/save') }}" method="POST">
            @csrf
            <input type="hidden" name="masakan_id" value="1">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addResepLabel">Add Recipe</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label for="created_by" class="mb-2">Post by</label>
                            <input type="text" class="form-control" name="created_by" id="created_by"
                                placeholder="ex: Alex">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="email_by" class="mb-2">Email by</label>
                            <input type="text" class="form-control" name="email_by" id="email_by"
                                placeholder="ex: alex@mail.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="nama_masakan" class="mb-2">Food Name</label>
                            <input type="text" class="form-control" name="nama_masakan" id="nama_masakan"
                                placeholder="ex: Fried Chicken">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="deskripsi" class="mb-2">Description</label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="alat_dan_bahan" class="mb-2">Ingredients</label>
                            <textarea name="alat_dan_bahan" id="alat_dan_bahan" cols="30" rows="3" class="form-control tiny"></textarea>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="cara_memasak" class="mb-2">Cooking step</label>
                            <textarea name="cara_memasak" id="cara_memasak" cols="30" rows="3" class="form-control tiny"></textarea>
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
