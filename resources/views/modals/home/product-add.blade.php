<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ url('masakan/save') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductLabel">Add Food or Drink</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="email_by" class="mb-2">Email Posted</label>
                            <input type="email" class="form-control" name="email_by" required placeholder="ex: alex@mail.com">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="url_gambar" class="mb-2">URL Image</label>
                            <input type="url" class="form-control" name="url_gambar" required placeholder="ex: https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="nama" class="mb-2">Name Food or Drink</label>
                            <input type="text" class="form-control" name="nama" required placeholder="ex: Rendang">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="keterangan_masakan" class="mb-2">Description</label>
                            <textarea name="keterangan_masakan" id="keterangan_masakan" cols="30" rows="10" class="form-control" required  placeholder="ex: Rendang (bahasa Minangkabau: randang; Jawi: رندڠ) adalah hidangan berbahan dasar daging yang dihasilkan dari proses memasak suhu rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan."></textarea>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="jenis" class="mb-2">Type</label>
                            <select name="jenis" id="jenis" class="form-control">
                                <option value="0">Food</option>
                                <option value="1">Drink</option>
                            </select>
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
