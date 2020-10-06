@extends('layouts.master')
@section('page-css')
<link rel="stylesheet" href="{{ asset('assets/styles/vendor/datatables.min.css') }}">

@endsection

@section('main-content')

<div class="breadcrumb">
    <h1>Admin</h1>
    <ul>
        <li><a href="">Leads</a></li>
        <li>Edit Lead</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>


<div class="row">
                <div class="col-md-8">
                
                    <div class="card mb-4">
                        <div class="card-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                <div class="col-md-12">
                                        <label for="validationCustom01">ID Number</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="ID Number" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>

                                        <div class="invalid-feedback">
                                            Please fill out this field.
                                        </div>
                                    </div>
                                </div> <hr>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">First name</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name"  required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>

                                        <div class="invalid-feedback">
                                            Please fill out this field.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Last name</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"  required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>

                                        <div class="invalid-feedback">
                                            Please fill out this field.
                                        </div>
                                    </div>
                                 
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom03">Email</label>
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="Email Address" required>
                                        <div class="invalid-feedback">
                                            Please fill out this field.
                                        </div>
                                    </div>    
                                </div>
                           
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
@endsection

@section('page-js')


<script src="{{ asset('assets/js/vendor/datatables.min.js') }}"></script>
<!-- page script -->
<script src="{{ asset('assets/js/contact-list-table.js') }}"></script>
<script src="{{ asset('assets/js/datatables.script.js') }}"></script>




<script>
// $('#ul-contact-list').DataTable();
</script>
@endsection