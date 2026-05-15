@extends('layouts.admin-master')
@section('title', 'Update Length Unit')
@section('content')


<section class="section">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark text-white-all">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i>Edit Length Unit</li>
            <li class="breadcrumb-item"><a href="{{ route('admin.length_units.all') }}"> All Length Units</a></li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-dark text-white-all">
            <h4>Update Length Unit</h4>
        </div>
        <div class="card-body">
            <form method="post" id="formEditUnit" class="needs-validation">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="unit">Length Unit <span class="text-danger">*</span></label>
                            <input type="text" name="unit" id="unit" class="form-control" value="{{ $unit->unit }}"
                                placeholder="Enter Length Unit" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status <span class="text-danger">*</span> </label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="">--Select--</option>
                                <option value="1" {{ $unit->status == true ? 'selected': '' }}>Active</option>
                                <option value="0" {{ $unit->status == false ? 'selected': '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btnSubmit"> <i class="fas fa-pencil-alt"></i>
                            Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('extrajs')
<script>
    $("#formEditUnit").validate({
         rules: {

            unit: {
               required: true
            },

            status: {
               required: true
            },

         },
         messages: {
            unit: {
               required: "Please Enter Length Unit"
            },

            status: {
               required: "Please Select Status"
            },

         },
         submitHandler: function (form) {
            $('.btnSubmit').attr('disabled', 'disabled');
            $(".btnSubmit").html('<span class="fa fa-spinner fa-spin"></span> Loading...');
            form.submit();
         }
      });
</script>
@endsection
