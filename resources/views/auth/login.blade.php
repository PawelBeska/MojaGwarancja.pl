@extends('home.master')

@section('content')
    <section class="min-vh-100 d-flex align-items-center section-image overlay-soft-dark"
             data-background="{{URL::asset('assets/home/img/pages/form-image.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-6 items-center justify-content-center" id="notifications"></div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div
                        class="signin-inner my-4 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">

                        <div class="text-center text-md-center mb-4 mt-md-0"><h1 class="mb-0 h3">Zaloguj się</h1></div>
                        <form id="action" data-alert="notifications" data-reload="true" data-success="Pomyślnie zalogowano! Jeśli nie nastąpi przeniesienie, odswież stronę." action="{{ route('login') }}" class="mt-4" method="post">
                            @csrf
                            <div class="form-group mb-4"><label for="email">Twój email</label>
                                <div class="input-group"><span class="input-group-text" id="basic-addon1"><span
                                            class="fas fa-envelope"></span></span> <input type="email" name="email"
                                                                                          class="form-control"
                                                                                          placeholder="Email"
                                                                                          id="email" required></div>
                            </div>
                            <div class="form-group">
                                <div class="form-group mb-4"><label for="password">Twoje hasło</label>
                                    <div class="input-group"><span class="input-group-text" id="basic-addon2"><span
                                                class="fas fa-unlock-alt"></span></span> <input type="password" name="password"
                                                                                                placeholder="Hasło"
                                                                                                class="form-control"
                                                                                                id="password" required>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check mb-0"><input class="form-check-input" name="remember" type="checkbox"
                                                                        value="" id="remember"> <label
                                            class="form-check-label mb-0" for="remember">Zapamiętaj mnie</label></div>
                                    <div><a href="{{ route('password.request') }}" class="small text-right">Zapomniałeś hasła?</a></div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Zaloguj się</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center align-items-center mt-4"><span
                                class="font-weight-normal">Nie masz konta? <a href="{{route('register')}}"
                                                                              class="font-weight-bold">Zarejestruj się</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
