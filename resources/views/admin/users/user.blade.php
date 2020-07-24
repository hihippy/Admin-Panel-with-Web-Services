@extends('admin/layouts/app')

@section('main-content')
<div class="pcoded-content">

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                          
                            <div class="card">
                                <div class="card-header">
                                    <h3>Add User</h3><hr>
                                </div>
                                <div class="card-block">
                                <form id="main" method="post" action="{{route('user.store')}}">
                                       {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label required">First Name </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="hFirstName" id="hFirstName" placeholder="First Name" value="{{old('hFirstName')}}">
                                                <span class="error text-danger"><?= $errors->first('hFirstName'); ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label required">Last Name</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" value="{{old('lastName')}}">
                                                <span class="error text-danger"><?= $errors->first('lastName'); ?></span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-sm-2 col-form-label required" style="margin-top: -7px; margin-bottom: 9px">Gender</label>
                                            <div class="col-sm-6">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gender" id="" value="male"> Male
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gender" id="" value="feMale"> Female
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gender" id="" value="feMale"> Other
                                                    </label>
                                                </div>
                                                <span class="messages"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label required">Date Of Birth</label>
                                            <div class="col-sm-6">
                                                <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" >
                                                <span class="messages"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row ">
                                            <label class="col-sm-2 col-form-label">Profile Photo</label>
                                            <div class="col-sm-6">
                                                <input type="file" class="form-control" name="	userProfilePhoto">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label required">Email</label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label required">Mobile No</label>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text">+91</label>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Mobile No">
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label required">State</label>
                                                <div class="col-sm-6">
                                                    <select class="js-example-basic-single col-sm-12">
                                                            <option value="AL">Gujarat</option>
                                                            <option value="WY">Rajesthan</option>
                                                    </select>
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label required">City</label>
                                                <div class="col-sm-6">
                                                    <select class="js-example-basic-single col-sm-12">
                                                            <option value="AL">Ahmedabad</option>
                                                            <option value="WY">Rajkot</option>
                                                            <option value="WY">Baroda</option>
                                                            <option value="WY">Surat</option>
                                                    </select>
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Instagram Handle</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Instagram Handle">
                                                <span class="messages"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Height</label>
                                                <div class="col-sm-6">
                                                    <select class="js-example-basic-single col-sm-12">
                                                            <option value="AL">Select Height</option>
                                                            <option value="AL">Below 4 Feet</option>
                                                            <option value="WY">4 Feet</option>
                                                            <option value="WY">4 feet 1 inch</option>
                                                            <option value="WY">4 feet 2 inch</option>
                                                            <option value="WY">4 feet 3 inch</option>
                                                            <option value="WY">8 Feet</option>
                                                            <option value="WY">Above 8 Feet</option>
                                                    </select>
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Skills</label>
                                                <div class="col-sm-6">
                                                   
                                                    <select class="js-example-placeholder-multiple-skills col-sm-12" multiple="multiple" id="skills">
                                                             
                                                            <option value="1">Acting</option>
                                                            <option value="2">Modeling</option>
                                                            <option value="3">Standup</option>
                                                            <option value="4">Dancing</option>
                                                            <option value="5">Music instruments</option>
                                                            <option value="6">Singing</option>
                                                            <option value="7">Voice Over</option>
                                                            <option value="8">Stunts</option>
                                                            <option value="0">Others</option>
                                                    </select>

                                                </div>
                                        </div>
                                        <div class="form-group row" id="DivOthersSkills" style="display: none">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Other Skills">
                                                <span class="messages"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Languages</label>
                                                <div class="col-sm-6">
                                                    <select class="js-example-placeholder-multiple-languages col-sm-12" multiple="multiple" id="languages">
                                                            <option value="AL">English</option>
                                                            <option value="AL">Hindi</option>
                                                            <option value="AL">Gujarati</option>
                                                            <option value="0">Others</option>
                                                         
                                                    </select>
                                                </div>
                                        </div>
                                       
                                        <div class="form-group row" id="DivOthersLanguages" style="display: none">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Other Languages">
                                                <span class="messages"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Experience</label>
                                            <div class="col-sm-6">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Experience"></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label required">Status</label>
                                                <div class="col-sm-6">
                                                    <input type="checkbox" class="js-warning" checked />
                                                </div>
                                        </div>

                                        

                                        

                                    
                                        <div class="form-group row" style="margin-top:7%;">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-inverse m-b-0">Add User</button>
                                                    <button type="submit" class="btn btn-inverse m-b-0">Cancel</button>
                                                    <button type="submit" class="btn btn-inverse m-b-0">Reset</button>
                                            
                                            </div>
                                        </div>

                                        

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
    
@endsection