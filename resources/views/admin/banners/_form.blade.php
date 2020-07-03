{{ csrf_field() }}
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="font-bold">Select File </label>
            <div class="custom-file">
                <input type="file" class="form-control-uniform" name="file" id="customFile" required>
            </div>
            <span class="form-text text-muted"><strong>Recommended banner size:</strong> 1920 x 600 (< 1MB, jpg)</span>
        </div>
    </div>
</div>
<div class="">
    <button type="submit" class="btn bg-primary pr-5 pl-5">Save</button> <button type="button" id="btn-cancel" class="btn bg-secondary">Cancel</button>
</div>