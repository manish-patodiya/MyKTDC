<div class="modal center-modal  fade" id="mdl_edit_unit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="mb-0 modal-title"><i class="fa fa-pencil"></i> <?php echo trans('edit_unit') ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="m-3">
                <form method="post" id="edit_form" autocomplete="off" onsubmit="return false">
                    <?php echo csrf_field() ?>
                    <input type="hidden" name='unit' id='e_unit_id'>
                    <div class="mx-5">
                        <div class="form-group">
                            <label for="username" class="control-label"><?php echo trans('title') ?></label>
                            <div class="controls">
                                <input type="text" name="title" class="form-control" id="e_title" placeholder="Enter your title" data-validation-required-message="This field is required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="control-label"><?php echo trans('base_unit') ?></label>
                            <div>
                                <select name="base_unit" class="form-control" value="0" id="e_base_unit">
                                    <option value=""><?php echo trans('slct_base_unit') ?></option>
                                    <?php foreach ($unit as $v) { ?>
                                        <option value="<?php echo $v->id ?>"><?php echo $v->title ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="control-label"><?php echo trans('conversion_rate') ?></label>
                            <div class="controls">
                                <input type="number" name="con_rate" step="0.01" class="form-control" id="e_con_rate" placeholder="Enter your conversion rate " data-validation-required-message="This field is required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="submit" value="1" />
                            <button type="submit" class="btn btn-dark pull-right " id="">
                                <?php echo trans('update') ?>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>