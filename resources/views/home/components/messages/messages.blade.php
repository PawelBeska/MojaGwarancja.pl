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
                <div class="d-flex align-items-center mb-3"><h1 class="h5 mb-3">Inbox</h1>
                    <div class="ml-auto"><select class="form-select" id="inlineFormCustomSelectMessages"
                                                 aria-label="Messages select example">
                            <option>All messages</option>
                            <option>Unread</option>
                            <option>Favorite</option>
                        </select></div>
                </div>
                <div class="card border-light mb-1 py-3">
                    <div class="card-body d-flex align-items-center flex-wrap flex-lg-nowrap py-0">
                        <div class="col-auto col-lg-1 d-flex align-items-center px-0">
                            <div class="form-check inbox-check mb-0 mr-2"><input class="form-check-input"
                                                                                 type="checkbox" value=""
                                                                                 id="defaultCheck1"> <label
                                    class="form-check-label" for="defaultCheck1"></label></div>
                            <div class="rating-star d-none d-sm-inline-block"><input type="checkbox" id="InboxStar1"
                                                                                     name="star"> <label
                                    class="rating-star-label" for="InboxStar1"><span
                                        class="sr-only">Star</span></label></div>
                        </div>
                        <div class="col-lg-3 col-8 pl-0 ml-2"><a href="./single-message.html" class="h6 text-sm">Neil
                                Sims</a></div>
                        <div class="col col-lg-1 text-right px-0 order-lg-4"><span
                                class="text-muted text-sm">Dec 25</span></div>
                        <div class="col-12 col-lg-7 d-flex align-items-center px-0">
                            <div class="col col-lg-11 px-0">
                                <div class="d-flex flex-wrap flex-lg-nowrap align-items-center"><a
                                        href="./single-message.html"
                                        class="col-12 col-lg pl-0 font-weight-normal text-dark d-none d-sm-block mt-2 mt-lg-0">I
                                        want to rent today, is the house still valid ...</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-light mb-1 py-3">
                    <div class="card-body d-flex align-items-center flex-wrap flex-lg-nowrap py-0">
                        <div class="col-auto col-lg-1 d-flex align-items-center px-0">
                            <div class="form-check inbox-check mb-0 mr-2"><input class="form-check-input"
                                                                                 type="checkbox" value=""
                                                                                 id="defaultCheck2"> <label
                                    class="form-check-label" for="defaultCheck2"></label></div>
                            <div class="rating-star d-none d-sm-inline-block"><input type="checkbox" id="InboxStar2"
                                                                                     name="star"> <label
                                    class="rating-star-label" for="InboxStar2"><span
                                        class="sr-only">Star</span></label></div>
                        </div>
                        <div class="col-lg-3 col-8 pl-0 ml-2"><a href="./single-message.html" class="h6 text-sm">Bonnie
                                Green</a></div>
                        <div class="col col-lg-1 text-right px-0 order-lg-4"><span
                                class="text-muted text-sm">Dec 22</span></div>
                        <div class="col-12 col-lg-7 d-flex align-items-center px-0">
                            <div class="col col-lg-11 px-0">
                                <div class="d-flex flex-wrap flex-lg-nowrap align-items-center"><a
                                        href="./single-message.html"
                                        class="col-12 col-lg pl-0 font-weight-normal text-dark d-none d-sm-block mt-2 mt-lg-0">I
                                        want to rent today, is the house still valid ...</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-light mb-1 py-3">
                    <div class="card-body d-flex align-items-center flex-wrap flex-lg-nowrap py-0">
                        <div class="col-auto col-lg-1 d-flex align-items-center px-0">
                            <div class="form-check inbox-check mb-0 mr-2"><input class="form-check-input"
                                                                                 type="checkbox" value=""
                                                                                 id="defaultCheck3"> <label
                                    class="form-check-label" for="defaultCheck3"></label></div>
                            <div class="rating-star d-none d-sm-inline-block"><input type="checkbox" id="InboxStar3"
                                                                                     name="star" checked="checked">
                                <label class="rating-star-label" for="InboxStar3"><span class="sr-only">Star</span></label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-8 pl-0 ml-2"><a href="./single-message.html" class="h6 text-sm">Jose
                                Leos</a></div>
                        <div class="col col-lg-1 text-right px-0 order-lg-4"><span
                                class="text-muted text-sm">Dec 2</span></div>
                        <div class="col-12 col-lg-7 d-flex align-items-center px-0">
                            <div class="col col-lg-11 px-0">
                                <div class="d-flex flex-wrap flex-lg-nowrap align-items-center"><a
                                        href="./single-message.html"
                                        class="col-12 col-lg pl-0 font-weight-light d-none d-sm-block mt-2 mt-lg-0">I
                                        want to rent today, is the house still valid ...</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-light mb-1 py-3">
                    <div class="card-body d-flex align-items-center flex-wrap flex-lg-nowrap py-0">
                        <div class="col-auto col-lg-1 d-flex align-items-center px-0">
                            <div class="form-check inbox-check mb-0 mr-2"><input class="form-check-input"
                                                                                 type="checkbox" value=""
                                                                                 id="defaultCheck4"> <label
                                    class="form-check-label" for="defaultCheck4"></label></div>
                            <div class="rating-star d-none d-sm-inline-block"><input type="checkbox" id="InboxStar4"
                                                                                     name="star" checked="checked">
                                <label class="rating-star-label" for="InboxStar4"><span class="sr-only">Star</span></label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-8 pl-0 ml-2"><a href="./single-message.html" class="h6 text-sm">Chris
                                Garth</a></div>
                        <div class="col col-lg-1 text-right px-0 order-lg-4"><span
                                class="text-muted text-sm">Nov 28</span></div>
                        <div class="col-12 col-lg-7 d-flex align-items-center px-0">
                            <div class="col col-lg-11 px-0">
                                <div class="d-flex flex-wrap flex-lg-nowrap align-items-center"><a
                                        href="./single-message.html"
                                        class="col-12 col-lg pl-0 font-weight-light d-none d-sm-block mt-2 mt-lg-0">I
                                        want to rent today, is the house still valid ...</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-light mb-1 py-3">
                    <div class="card-body d-flex align-items-center flex-wrap flex-lg-nowrap py-0">
                        <div class="col-auto col-lg-1 d-flex align-items-center px-0">
                            <div class="form-check inbox-check mb-0 mr-2"><input class="form-check-input"
                                                                                 type="checkbox" value=""
                                                                                 id="defaultCheck5"> <label
                                    class="form-check-label" for="defaultCheck5"></label></div>
                            <div class="rating-star d-none d-sm-inline-block"><input type="checkbox" id="InboxStar5"
                                                                                     name="star"> <label
                                    class="rating-star-label" for="InboxStar5"><span
                                        class="sr-only">Star</span></label></div>
                        </div>
                        <div class="col-lg-3 col-8 pl-0 ml-2"><a href="./single-message.html" class="h6 text-sm">Roberta
                                Casas</a></div>
                        <div class="col col-lg-1 text-right px-0 order-lg-4"><span
                                class="text-muted text-sm">Nov 12</span></div>
                        <div class="col-12 col-lg-7 d-flex align-items-center px-0">
                            <div class="col col-lg-11 px-0">
                                <div class="d-flex flex-wrap flex-lg-nowrap align-items-center"><a
                                        href="./single-message.html"
                                        class="col-12 col-lg pl-0 font-weight-light d-none d-sm-block mt-2 mt-lg-0">I
                                        want to rent today, is the house still valid ...</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-light mb-1 py-3">
                    <div class="card-body d-flex align-items-center flex-wrap flex-lg-nowrap py-0">
                        <div class="col-auto col-lg-1 d-flex align-items-center px-0">
                            <div class="form-check inbox-check mb-0 mr-2"><input class="form-check-input"
                                                                                 type="checkbox" value=""
                                                                                 id="defaultCheck6"> <label
                                    class="form-check-label" for="defaultCheck6"></label></div>
                            <div class="rating-star d-none d-sm-inline-block"><input type="checkbox" id="InboxStar6"
                                                                                     name="star"> <label
                                    class="rating-star-label" for="InboxStar6"><span
                                        class="sr-only">Star</span></label></div>
                        </div>
                        <div class="col-lg-3 col-8 pl-0 ml-2"><a href="./single-message.html" class="h6 text-sm">Chris
                                Garth</a></div>
                        <div class="col col-lg-1 text-right px-0 order-lg-4"><span
                                class="text-muted text-sm">Nov 15</span></div>
                        <div class="col-12 col-lg-7 d-flex align-items-center px-0">
                            <div class="col col-lg-11 px-0">
                                <div class="d-flex flex-wrap flex-lg-nowrap align-items-center"><a
                                        href="./single-message.html"
                                        class="col-12 col-lg pl-0 font-weight-light d-none d-sm-block">I want to
                                        rent today, is the house still valid ...</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-light mb-1 py-3">
                    <div class="card-body d-flex align-items-center flex-wrap flex-lg-nowrap py-0">
                        <div class="col-auto col-lg-1 d-flex align-items-center px-0">
                            <div class="form-check inbox-check mb-0 mr-2"><input class="form-check-input"
                                                                                 type="checkbox" value=""
                                                                                 id="defaultCheck7"> <label
                                    class="form-check-label" for="defaultCheck7"></label></div>
                            <div class="rating-star d-none d-sm-inline-block"><input type="checkbox" id="InboxStar7"
                                                                                     name="star"> <label
                                    class="rating-star-label" for="InboxStar7"><span
                                        class="sr-only">Star</span></label></div>
                        </div>
                        <div class="col-lg-3 col-8 pl-0 ml-2"><a href="./single-message.html" class="h6 text-sm">Robert
                                Bailey</a></div>
                        <div class="col col-lg-1 text-right px-0 order-lg-4"><span
                                class="text-muted text-sm">Oct 30</span></div>
                        <div class="col-12 col-lg-7 d-flex align-items-center px-0">
                            <div class="col col-lg-11 px-0">
                                <div class="d-flex flex-wrap flex-lg-nowrap align-items-center"><a
                                        href="./single-message.html"
                                        class="col-12 col-lg pl-0 font-weight-light d-none d-sm-block">I want to
                                        rent today, is the house still valid ...</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-5">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


