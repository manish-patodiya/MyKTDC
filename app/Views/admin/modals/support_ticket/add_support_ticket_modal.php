<div class="modal center-modal fade" id="mdl_add_suppot">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="mb-0 text-info"><i class="fa fa-plus"></i> <?php echo trans('support_ticket') ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="m-3">
                <form method="post" autocomplete="off" id="support_detail" onsubmit="return false">
                    <?php echo csrf_field() ?>
                    <div class="form-group">
                        <label for="subject" class="col-md-2 control-label"><?php echo trans('subject') ?> <span class="required"> *</span></label>
                        <div class=" controls col-md-12">
                            <input type="text" name="subject" class="form-control " id="subject" placeholder="Enter your subject" data-validation-required-message="This field is required">
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for="mediafile" class="col-md-3 control-label">Description <span class="required">
                                *</span></label>
                        <div class=" controls col-md-12 mb-12">
                            <textarea type="text" name="descriptions" class="form-control" id="descriptions" rows='8' placeholder="Type your description" data-validation-required-message="This field is required"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-sm pull-right" id="">
                            <?php echo trans('create') ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>