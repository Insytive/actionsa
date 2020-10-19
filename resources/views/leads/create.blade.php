@extends('layouts.master')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('assets/styles/vendor/datatables.min.css') }}">

@endsection

@section('main-content')

    <div class="breadcrumb">
        <h1>Leads</h1>
        <ul>
            <li><a href="">List</a></li>
            <li>Create</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>


                    <!-- start card -->
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <h3 class="card-title"> Add a new supporter </h3>
                        </div>
                        <!--begin::form-->
                        <form action="">
                            <div class="card-body">


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputid" class="ul-form__label">ID Number</label>
                                        <input type="text" class="form-control" id="inputid" placeholder="Enter ID Number">
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                            
                                        </small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputContact" class="ul-form__label">Contact Number</label>
                                        <input type="text" class="form-control" id="inputContact" placeholder="Enter Contact Number" name="phone">
                                        
                                    </div>
                                </div>


                                <div class="custom-separator"></div>


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputfirstname" class="ul-form__label">First Name</label>
                                            <input type="text" class="form-control" name="first_name" id="firstname" placeholder="Enter your first name">
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                            
                                        </small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname" class="ul-form__label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" placeholder="Enter your last name">
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                            
                                        </small>
                                    </div>
                                </div>


                                <div class="custom-separator"></div>

                                <div class="form-row">
                                    <div class="form-group col-md-12 ">
                                        <label for="email" class="ul-form__label">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter your Email">
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                            
                                        </small>
                                    </div>
                                </div>

                                <div class="custom-separator"></div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label for="address" class="ul-form__label">Address</label>
                                        <div class="ul-form__radio-block">
                                            <label class=" ul-radio__position radio radio-primary form-check-inline">
                                                <input type="radio" name="address" value="1" checked>
                                                <span class="ul-form__radio-font">Search for address</span>
                                                <span class="checkmark"></span>
                                            </label> 
                                            <label class="ul-radio__position radio radio-primary">
                                                <input type="radio" name="address" value="0">
                                                <span class="ul-form__radio-font">I will enter my own address</span>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12 ">
                                        <input type="text" class="form-control" id="email" placeholder="Type in your address" name="address">
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                            
                                        </small>
                                    </div>
                                </div>

                                <div class="custom-separator"></div>

                                
                                <div class="form-row">
                                    <div class="form-group col-md-12 ">
                                        <label for="votingStation" class="ul-form__label">Voting Station</label>
                                        <input type="text" class="form-control" id="votingStation" placeholder="Please type your voting station address" name="voting_station">
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                            
                                        </small>

                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox">
                                            <span>I could not find my voting station </span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="custom-separator"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label for="address" class="ul-form__label">Are you a first time voter?</label>
                                        <div class="ul-form__radio-block">
                                            <label class=" ul-radio__position radio radio-primary form-check-inline">
                                                <input type="radio" name="first_time_voter" value="1" checked>
                                                <span class="ul-form__radio-font">Yes</span>
                                                <span class="checkmark"></span>
                                            </label> 
                                            <label class="ul-radio__position radio radio-primary">
                                                <input type="radio" name="first_time_voter" value="0">
                                                <span class="ul-form__radio-font">No</span>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="mc-footer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" class="btn  btn-primary m-1">Save</button>
                                            <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- end::form -->
                    </div>
                    <!-- end card -->



@endsection

@section('page-js')


    <script src="{{ asset('assets/js/vendor/datatables.min.js') }}"></script>
    <!-- page script -->
    <script src="{{ asset('assets/js/tooltip.script.js') }}"></script>

    <script>
        $('#ul-contact-list').DataTable();
    </script>
@endsection
