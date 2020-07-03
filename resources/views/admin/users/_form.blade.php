{{ csrf_field() }}
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label class="font-bold">Name </label>
            <input name="name" type="text" class="form-control" placeholder="" value="{{ $u->name }}" required>
        </div>
        <div class="form-group">
            <label class="font-bold">Email </label>
            <input name="email" type="text" class="form-control" placeholder="" value="{{ $u->email }}" required>
        </div>
        <div class="form-group">
            <label class="font-bold">Role </label>
            <select name="user_group_id" class="form-control" required>
                <option value="">Select role...</option>
                @foreach(Model\UserGroup::get() as $ug)
                <option value="{{ $ug->id }}" {{ Helper\Html::setSelected($ug->id, $u->user_group->id) }}>{{ $ug->name }}</option>
                @endforeach
            </select>
        </div>
        @if(!Request::is('*/edit'))
        <div class="form-group">
            <label class="font-bold">Password </label>
            <input name="password" type="password" class="form-control" placeholder="" value="{{ $u->password }}" required>
        </div>
        <div class="form-group">
            <label class="font-bold">Retype Password </label>
            <input name="password_confirmation" type="password" class="form-control" placeholder="" value="{{ $u->password_confirmation }}" required>
        </div>
        @endif
    </div>

</div>

<div class="">
    <button type="submit" class="btn bg-primary pr-5 pl-5">Save</button> <button type="button" id="btn-cancel" class="btn bg-secondary">Cancel</button>
</div>

@section('js')
    <script>
        $(function() {
        });
    </script>
@endsection