{{ csrf_field() }}
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="font-bold">Name </label>
            <input name="name" type="text" class="form-control" placeholder="" value="{{ $m->name }}" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        @if(Request::is('*/edit'))
        <div class="form-group">
            <label class="font-bold">File </label>
            <div class="custom-file">
                <input type="file" class="form-control-uniform" name="file" id="customFile">
            </div>
            <span class="form-text text-muted">Ignore this field if you want to keep existing file.</span>
        </div>
        @else
            <div class="form-group">
                <label class="font-bold">File </label>
                <div class="custom-file">
                    <input type="file" class="form-control-uniform" name="file" id="customFile" required>
                </div>
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="font-bold">Description</label>
            <textarea name="description" rows="3" cols="3" maxlength="200" class="form-control maxlength-textarea">{{ $m->description }}</textarea>
        </div>
    </div>
</div>
<div class="">
    <button type="submit" class="btn bg-primary pr-5 pl-5">Save</button> <button type="button" id="btn-cancel" class="btn bg-secondary">Cancel</button>
</div>