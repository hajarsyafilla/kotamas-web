{{ csrf_field() }}
<div class="row">
    <div class="col-md-9">
        <div class="form-group">
            <label class="font-bold">Title </label>
            <input name="title" type="text" class="form-control" placeholder="" value="{{ $n->title }}">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label class="font-bold">Published Date </label>
            <input name="published_at" type="text" data-mask="99/99/9999" class="form-control" placeholder="DD/MM/YYYY" value="{{ ($n->published_at) ? $n->published_at : date('d/m/Y') }}">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label class="font-bold">Short Description </label>
            <textarea name="short_description" rows="3" cols="3" maxlength="200" class="form-control maxlength-textarea">{{ $n->short_description }}</textarea>
        </div>
    </div>
</div>
<div class="mb-3 mt-3">
    <textarea name="description" id="editor-full" rows="4" cols="4">
        {!! $n->content !!}
    </textarea>
</div>

<div class="">
    <button type="submit" class="btn bg-primary pr-5 pl-5">Save</button> <button type="button" id="btn-cancel" class="btn bg-secondary">Cancel</button>
</div>

@section('js')
    <script>
        $(function() {
            CKEditor.init();
        });
    </script>
@endsection