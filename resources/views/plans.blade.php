@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col col-md-10">

            <form action="" method="POST" id="saveplans">

                <div class="form-group">
                    <label for="name">Plan Name</label>
                    <input type="text" name="name" class="form-control">

                </div>

                <div class="form-group">
                    <label for="name">Plan Validity</label>
                    <input type="text" name="validity" class="form-control">

                </div>

                <div class="form-group">
                    <label for="name">Pricing</label>
                    <input type="text" name="price" class="form-control">

                </div>

                <div class="form-group">
                    <label for="name">Plan Name</label>
                    <select class="form-control" name="percent_id" id="percent_id">
                        <option value="">Percentage 1</option>
                        <option value="">Percentage 2</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Save
                </button>

            </form>

        </div>

    </div>
</div>
@endsection
