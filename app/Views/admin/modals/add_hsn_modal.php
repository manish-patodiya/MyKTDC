<div class="modal center-modal fade" id="mdl_add_hsn">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="text-info mb-0"><i class="ti-user me-15"></i> <?php echo trans('hsn_info') ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="m-3">
                <form method="post" autocomplete="off" id="hsn_detail" onsubmit="return false">
                    <?php echo csrf_field() ?>
                    <div class="form-group">
                        <label for="username" class="control-label"><?php echo trans('details') ?> <span class="required">
                                *</span></label>
                        <div class="controls">
                            <input type="text" name="details" class="form-control" id="detail" placeholder="Enter your detail" data-validation-required-message="This field is required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="control-label"><?php echo trans('hsn_code') ?> <span class="required">
                                *</span></label>
                        <div class="controls">
                            <input type="text" name="hsn_code" class="form-control" id="hsn_code" placeholder="Enter your hsn code" data-validation-required-message="This field is required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastname" class="control-label"><?php echo trans('hsn_code_4_digits') ?> <span class="required"> *</span></label>
                        <div class="controls">
                            <input type="text" name="hsn_code_4_digits" class="form-control" id="hsn_code_4_digits" placeholder="Enter your hsn code (4 digit)" data-validation-required-message="This field is required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastname" class="control-label"><?php echo trans('gst_rate') ?> <span class="required">
                                *</span></label>
                        <div class="controls">
                            <input type="number" name="gst_rate" class="form-control" id="gst_rate" placeholder="Enter your gst rate" data-validation-required-message="This field is required">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="submit" value="hello" class="hidden" />
                        <button type="submit" name="submit" class="btn btn-info btn-sm px-4 pull-right " id="">
                            <?php echo trans('add_new_details') ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>