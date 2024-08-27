@extends('layout.master')

@section('back-hand')
    <div class="col-md-10 mt-5">
        <form action="{{ route('store') }}" method="POST">
          @csrf

            <div class="row mb-md-3 mb-2">
                <div class="col-md-6">
                    <label for="name" class="form-label"> Name </label>
                    <input type="text" name="name" class="form-control" autofocus />
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label"> Phone </label>
                    <input type="text" name="phone" class="form-control" />
                </div>
            </div>


            <div class="row mb-md-3 mb-2">
                <div class="col-md-6">
                    <label for="email" class="form-label"> Email </label>
                    <input type="email" name="email" class="form-control" />
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label"> Address </label>
                    <input type="text" name="address" class="form-control" />
                </div>
            </div>


            <div class="row mb-md-4 mb-3">
                <div class="col-md-6">
                    <label for="project" class="form-label"> Project </label>
                    <input type="text" name="project" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="facebook-review" class="form-label"> Facebook Review </label>
                    <select name="facebook_review" class="form-select">
                        <option selected> Select One </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="google-review" class="form-label"> Gogole Review </label>
                    <select name="google_review" class="form-select">
                        <option selected> Select One </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="page-number" class="form-label"> Page Number </label>
                    <input type="number" name="page_number" id="" class="form-control">
                </div>

            </div>


            <button type="submit" class="btn btn-primary"> Submit </button>
            <button type="reset" class="btn btn-danger"> Reset </button>







        </form>
    </div>
@endsection
