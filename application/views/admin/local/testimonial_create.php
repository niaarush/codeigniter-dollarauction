<div class="row">
    <div class="col-lg-12">
        
        <?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')); ?>
            <div class="form-group <?php echo form_error('tstm-name') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2"><span class="red">*</span>Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tstm-name" name="tstm-name" placeholder="Name" value="<?php echo set_value('tstm-name'); ?>" required>
                    <span class="help-inline"><?php echo form_error('tstm-name');?></span>
                </div>
            </div>
            
            <div class="form-group <?php echo isset($tstm_avatar_message) ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2">Avatar</label>
                <div class="col-sm-8">
                    <div class="avatar-img-box" style="margin-bottom:5px;">
                        <img src="<?php echo thumbnail('', 112, 112); ?>" id="tstm-avatar-img"/>
                    </div>
                    
                    <span class="btn btn-default btn-file">
                        Browse <input type="file" id="tstm-avatar" name="tstm-avatar">
                    </span>
                    <span class="help-inline"><?php echo isset($tstm_avatar_message) ? $tstm_avatar_message : '';?></span>
                </div>
            </div>
            
            <div class="form-group <?php echo form_error('tstm-date') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2"><span class="red">*</span>Date</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control datepicker-input" id="tstm-date" name="tstm-date" placeholder="Date" value="<?php echo set_value('tstm-date'); ?>" required>
                    <span class="help-inline"><?php echo form_error('tstm-date');?></span>
                </div>
            </div>
            
            <div class="form-group <?php echo form_error('tstm-city') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2"><span class="red">*</span>City</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tstm-city" name="tstm-city" placeholder="City" value="<?php echo set_value('tstm-city'); ?>" required>
                    <span class="help-inline"><?php echo form_error('tstm-city');?></span>
                </div>
            </div>
            
            <div class="form-group <?php echo form_error('tstm-content') ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2"><span class="red">*</span>Content</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="tstm-content" name="tstm-content" placeholder="Content" rows="5" required><?php echo set_value('tstm-content'); ?></textarea>
                    <span class="help-inline"><?php echo form_error('tstm-content');?></span>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <a class="btn btn-default" href="<?php echo admin_url('testimonial'); ?>">Back</a>
                    <button class="btn btn-primary" type="submit" name="btn-save" value="1">Save</button>
                </div>    
            </div>
        <?php echo form_close(); ?>
                
    </div>
</div>