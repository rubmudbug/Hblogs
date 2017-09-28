

<div class="form-group">
    <?php echo $error;?>
    <?php echo form_open('message/do_text'); ?>
    <textarea class="form-control" rows="3" name="user-article"></textarea>
    </form>
    <?php echo form_open_multipart('message/do_upload');?>
    <div class="form-group">
        <label for="InputFile">上传图片</label>
        <input type="file" id="InputFile" name="user-file">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    </form>
</div>
