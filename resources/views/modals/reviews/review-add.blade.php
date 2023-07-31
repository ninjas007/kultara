<div class="modal fade" id="addReview" tabindex="-1" aria-labelledby="addReviewLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ url('review-food/save') }}" method="POST">
            @csrf
            <div class="modal-content">
                <input type="hidden" id="ratingValue" name="rating" value="0">
                <input type="hidden" id="masakanId" name="masakan_id" value="1">
                <div class="modal-header">
                    <h5 class="modal-title" id="addReviewLabel">Add Review</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="name" class="mb-2">Name</label>
                            <input type="text" class="form-control" name="name" required placeholder="ex: Alex">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <div class="form-group mb-3">
                                <label for="email" class="mb-2">Email</label>
                                <input type="text" class="form-control" name="email" required placeholder="ex: alex@mail.com">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                            <label for="comment" class="mb-2">Comment</label>
                            <textarea name="comment" id="comment" cols="30" rows="3" class="form-control" required placeholder="ex: Deliciousss~~"></textarea>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="review" class="mb-2">Review</label>
                            <div class="star-group">
                                <i class="star-icon fas fa-star" data-value="1"></i>
                                <i class="star-icon fas fa-star" data-value="2"></i>
                                <i class="star-icon fas fa-star" data-value="3"></i>
                                <i class="star-icon fas fa-star" data-value="4"></i>
                                <i class="star-icon fas fa-star" data-value="5"></i>
                                <span id="spanRating">0</span>
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
