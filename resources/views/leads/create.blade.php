@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')
           <div class="breadcrumb">
                <h1>Admin</h1>
                <ul>
                    <li><a href="">Leads</a></li>
                    <li>Create</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">

            <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header bg-transparent">
                    <h3 class="card-title"> Join option </h3>
                </div>


                <div class="card-body">
               
                    <div class="form-group mb-3">
                        <div class="ul-form__radio">
                            <label class=" ul-radio__position radio radio-primary form-check-inline">
                                <input type="radio" name="radio" value="supporter" checked>
                                <span class="ul-form__radio-font">Add Supporter</span>
                                <span class="checkmark"></span>
                            </label> 
                            <label class="ul-radio__position radio radio-primary">
                                <input type="radio" name="radio" value="member">
                                <span class="ul-form__radio-font">Add Member </span>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                
                </div> <!-- ./card body -->

            </div>
            </div> 
            <!-- ./options -->
                <div class="col-md-8">
                
                    <div class="card mb-4">
                    <div class="card-header bg-transparent">
                        <h3 class="card-title"> Add a new supporter</h3>
                    </div>
                        <div class="card-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                <div class="col-md-12">
                                        <label for="validationCustom01">ID Number</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="ID Number" name="id_number" required>
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
                                        <input type="text" name="first_name" class="form-control" id="validationCustom01" placeholder="First name"  required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>

                                        <div class="invalid-feedback">
                                            Please fill out this field.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Last name</label>
                                        <input type="text" name="last_name" class="form-control" id="validationCustom02" placeholder="Last name"  required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>

                                        <div class="invalid-feedback">
                                            Please fill out this field.
                                        </div>
                                    </div>
                                 
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">Email</label>
                                        <input type="text" name="email" class="form-control" id="validationCustom03" placeholder="Email Address">
                                       
                                    </div>    
                                

                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom04">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="validationCustom04" placeholder="phone" required>

                                    </div>    
                                </div>
                 
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="i" id="address" class="ul-form__label">Address</label>
                                        <div class="ul-form__radio-inline">
                                            <label class=" ul-radio__position radio radio-primary form-check-inline">
                                                <input type="radio" id="address" name="address"  checked required> 
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
                               

                               

                        <!-- Address inputs -->
                
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <div class="input-right-icon">
                                        <input type="text" name="which-dog" class="form-control" id="choice-animals-dogs" placeholder="Please type your address" data-require-pair="address"  required>


                                        <span class="span-right-input-icon">
                                            <i class="ul-form__icon i-Map-Marker"></i>
                                        </span>

                                    </div>
                                </div>  
                            

                        </div>

                        <!-- end:Address inputs -->
    

                        <div class="form-row">
                            <div class="form-group col-md-6 mb-3">
                                <label for="inputvoting" class="ul-form__label">Voting Station</label>
                                <div class="ul-form__radio-inline">
                                    <label class=" ul-radio__position radio radio-primary form-check-inline">
                                        <input type="radio" id="voting_station" name="voting_station" value="1" checked>
                                        <span class="ul-form__radio-font">Search for voting station</span>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="ul-radio__position radio radio-primary">
                                        <input type="radio" id="voting_station" name="voting_station" value="0">
                                        <span class="ul-form__radio-font">I could not find my voting station</span>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <!-- voting station inputs -->

                        <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <div class="input-right-icon">
                                        <input type="text" class="form-control" id="inputaddress" placeholder="Please type your voting station address" required>
                                        <!-- <span class="span-right-input-icon">
                                            <i class="ul-form__icon i-Map-Marker"></i>
                                        </span> -->

                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>

                                        <div class="invalid-feedback">
                                            Please fill out this field.
                                        </div>
                                    </div>
                                </div>  
                            </div>

                        <!-- end:Voting station inputs -->

                            <div class="form-row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputftvoter" class="ul-form__label">Are you a first time voter?</label>
                                    <div class="ul-form__radio">
                                        <label class=" ul-radio__position radio radio-primary form-check-inline">
                                            <input type="radio" id="first_time_voter" name="first_time_voter" value="1" checked>
                                            <span class="ul-form__radio-font">Yes</span>
                                            <span class="checkmark"></span>
                                        </label> 
                                        <label class="ul-radio__position radio radio-primary">
                                            <input type="radio" id="first_time_voter" name="first_time_voter" value="0">
                                            <span class="ul-form__radio-font">No</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 mb-3" style=" padding: unset;">
                                    <label class="checkbox checkbox-primary" required>
                                        <input type="checkbox" name="terms_conditions" >
                                        <span>I hereby consent and agree to the Interim Constitition of ActionSA</span>
                                        <span class="checkmark"></span>


                                    </label>
                                    <div class="invalid-feedback">
                                            Please fill out this field.
                                        </div>

                                </div>
                            </div>


                              <div class="card-footer">
                                    <div class="mc-footer">
                                        <div class="row">
                                            <div class="col-lg-12 text-right">
                                                <button type="submit" class="btn  btn-primary m-1">Save</button>
                                                <button type="button" class="btn btn-outline-secondary m-1">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                            </form>
                        </div>
                    </div>
                </div>

            </div>

@endsection

@section('page-js')




@endsection

@section('bottom-js')

 <script src="{{asset('assets/js/form.validation.script.js')}}"></script>


@endsection
