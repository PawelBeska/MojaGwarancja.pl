<div class="section section-lg pt-5 pt-md-7 bg-soft">
    <div class="container">
        <div class="row pt-5 pt-md-0">
            <div class="col-12 col-md-4 d-none d-lg-block">
                <div class="card border-light p-2">
                    <div class="card-header bg-white border-0 text-center">
                        <div class="profile-thumbnail profile-thumbnail mx-auto"><img
                                src="{{URL::asset('assets/home/img/team/profile-picture-3.jpg')}}"
                                class="card-img-top rounded-circle border-white" alt="Joseph Portrait"></div>
                        <h2 class="h5 mt-3">Witamy, na pokładzie!</h2><a  data-redirect-to='true' href="{{route('logout')}}" class="btn btn-gray btn-xs"><span
                                class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Wyloguj się</a></div>
                    <div class="card-body p-2">
                        <div class="list-group dashboard-menu list-group-sm"><a href="{{route('home.profile.index')}}"
                                                                                class="d-flex list-group-item border-0 list-group-item-action active">Profil
                                <span class="icon icon-xs ml-auto"><span class="fas fa-chevron-right"></span></span>
                            </a><a href="{{route('home.settings.index')}}"
                                   class="d-flex list-group-item border-0 list-group-item-action">Ustawienia<span
                                    class="icon icon-xs ml-auto"><span class="fas fa-chevron-right"></span></span>
                            </a><a href="./my-items.html"
                                   class="d-flex list-group-item border-0 list-group-item-action">Moje gwarancje<span
                                    class="icon icon-xs ml-auto"><span class="fas fa-chevron-right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @include('home.global.body.profile-menu.profile-menu')
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-body bg-white border-light mb-4"><h2 class="h5 mb-4">General
                                information</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="mb-3"><label for="first_name">First Name</label> <input
                                                class="form-control" id="first_name" type="text"
                                                placeholder="Enter your first name"></div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="mb-3"><label for="last_name">Last Name</label> <input
                                                class="form-control" id="last_name" type="text"
                                                placeholder="Also your last name"></div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6 mb-3">
                                        <div class="mb-3"><label for="birthday">Birthday</label> <input type="text"
                                                                                                        class="form-control flatpickr-input"
                                                                                                        id="birthday"
                                                                                                        data-toggle="date"
                                                                                                        placeholder="Select your birth date">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3"><label for="gender">Gender</label> <select
                                            class="form-select" id="gender" aria-label="Default select example">
                                            <option>Female</option>
                                            <option>Male</option>
                                        </select></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="mb-3"><label for="email">Email</label> <input
                                                class="form-control" id="email" type="email"
                                                placeholder="name@company.com"></div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="mb-3"><label for="phone">Phone</label> <input
                                                class="form-control" id="phone" type="number"
                                                placeholder="+12-345 678 910"></div>
                                    </div>
                                </div>
                                <h2 class="h5 my-4">Adress</h2>
                                <div class="row">
                                    <div class="col-sm-9 mb-3">
                                        <div class="mb-3"><label for="address">Address</label> <input
                                                class="form-control" id="address" type="text"
                                                placeholder="Enter your home address"></div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="mb-3"><label for="number">Number</label> <input
                                                class="form-control" id="number" type="number" placeholder="No.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 mb-3">
                                        <div class="mb-3"><label for="city">City</label> <input class="form-control"
                                                                                                id="city"
                                                                                                type="text"
                                                                                                placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mb-3"><label for="country2">Country</label> <select
                                            class="form-select" id="country2" aria-label="Default select example">
                                            <option>United States</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>Spain</option>
                                            <option>Italy</option>
                                            <option>Russia</option>
                                            <option>Japan</option>
                                            <option>India</option>
                                            <option>China</option>
                                        </select></div>
                                    <div class="col-sm-4">
                                        <div class="mb-3"><label for="zip">ZIP</label> <input class="form-control"
                                                                                              id="zip" type="tel"
                                                                                              placeholder="ZIP">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Save All</button>
                                </div>
                            </form>
                        </div>
                        <div class="card card-body bg-white border-light mb-4"><h2 class="h5 mb-4">Select profile
                                photo</h2>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-1 mb-2 mb-lg-0">
                                        <div class="avatar-lg"><img class="rounded-circle"
                                                                    src="../../assets/img/team/profile-picture-3.jpg"
                                                                    alt="change avatar"></div>
                                    </div>
                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                        <div class="h6 mb-0 ml-lg-3">Your avatar</div>
                                        <small class="text-gray ml-lg-3">JPG, GIF or PNG. Max size of 800K</small>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="mb-3"><label for="formFile" class="form-label">Default file
                                                input example</label> <input class="form-control" type="file"
                                                                             id="formFile"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body bg-white border-light"><h2 class="h5 mb-4">Alerts &
                                Notifications</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center justify-content-between rounded-0 pl-0 py-3 border-bottom">
                                    <div><h3 class="h6 mb-1">Company News</h3><span class="small">Get Spaces news, announcements, and product updates</span>
                                    </div>
                                    <div class="form-check form-switch"><input class="form-check-input"
                                                                               type="checkbox"
                                                                               id="flexSwitchCheckNotifi1"
                                                                               checked="checked"> <label
                                            class="form-check-label" for="flexSwitchCheckNotifi1"></label></div>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between rounded-0 pl-0 py-3 border-bottom">
                                    <div><h3 class="h6 mb-1">Account Activity</h3><span class="small">Get important notifications about you or activity you've missed</span>
                                    </div>
                                    <div class="form-check form-switch"><input class="form-check-input"
                                                                               type="checkbox"
                                                                               id="flexSwitchCheckNotifi2"> <label
                                            class="form-check-label" for="flexSwitchCheckNotifi2"></label></div>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between pl-0 py-3">
                                    <div><h3 class="h6 mb-1">Meetups Near You</h3><span class="small">Get an email when a Dribbble Meetup is posted close to my location</span>
                                    </div>
                                    <div class="form-check form-switch"><input class="form-check-input"
                                                                               type="checkbox"
                                                                               id="flexSwitchCheckNotifi3"> <label
                                            class="form-check-label" for="flexSwitchCheckNotifi3"></label></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


