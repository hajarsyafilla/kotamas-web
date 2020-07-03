{{ csrf_field() }}
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label class="font-bold">Name </label>
            <input name="name" type="text" class="form-control" placeholder="" value="{{ $m->name }}" required>
        </div>
        <div class="form-group">
            <label class="font-bold">Email </label>
            <input name="email" type="text" class="form-control" placeholder="" value="{{ $m->email }}" required>
        </div>
        <div class="form-group">
            <label class="font-bold">Job Position </label>
            <select name="committee_position_id" class="form-control" required>
                <option value="">Select position...</option>
                @foreach(Model\CommitteePosition::get() as $ug)
                <option value="{{ $ug->id }}" {{ Helper\Html::setSelected($ug->id, $m->committee_position_id) }}>{{ $ug->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="font-bold">Contact No. </label>
            <input name="contact_no" type="text" class="form-control" placeholder="" value="{{ $m->contact_no }}" required>
        </div>
        <div class="form-group">
            <label class="font-bold">Address</label>
            <input name="address_line_1" type="text" class="form-control" placeholder="" value="{{ $m->address_line_1 }}" required>
        </div>
        <div class="form-group">
            <input name="address_line_2" type="text" class="form-control" placeholder="" value="{{ $m->address_line_2 }}" >
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="font-bold">Postcode</label>
                    <input name="postcode" type="text" class="form-control" placeholder="" value="{{ $m->postcode }}" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label class="font-bold">City</label>
                    <input name="city" type="text" class="form-control" placeholder="" value="{{ $m->city }}" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="font-bold">State </label>
            <select name="state_id" class="form-control" required>
                <option value="">Select state...</option>
                @foreach(Model\State::get() as $ug)
                    <option value="{{ $ug->id }}" {{ Helper\Html::setSelected($ug->id, $m->state_id) }}>{{ $ug->name }}</option>
                @endforeach
            </select>
        </div>
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