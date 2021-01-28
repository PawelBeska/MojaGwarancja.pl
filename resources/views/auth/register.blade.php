@extends('home.master')

@section('content')

    <section class="min-vh-100 d-flex align-items-center section-image overlay-soft-dark"
             data-background="{{URL::asset('assets/home/img/pages/form-image.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 items-center justify-content-center" id="notifications"></div>
                <div class="col-12 d-flex align-items-center justify-content-center">

                    <div class="signin-inner my-4 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">

                        <div class="text-center text-md-center mb-4 mt-md-0"><h1 class="mb-0 h3">Stwórz konto</h1>
                        </div>
                        <form data-alert="notifications" data-reload="true" data-success="Pomyślnie założono konto. Na twój adres email został wysłany link aktywacyjny." id="action" action="{{route('register')}}" method="post">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="email">Twój email</label>
                                <div class="input-group"><span class="input-group-text" id="basic-addon3"><span
                                            class="fas fa-envelope"></span></span> <input type="email" class="form-control"
                                                                                          placeholder="Email" name="email"
                                                                                          id="email" required></div>
                            </div>
                            <div class="form-group">
                                <div class="form-group mb-4"><label for="password">Twoje hasło</label>
                                    <div class="input-group"><span class="input-group-text" id="basic-addon4"><span
                                                class="fas fa-unlock-alt"></span></span> <input type="password" name="password"
                                                                                                placeholder="Hasło"
                                                                                                class="form-control"
                                                                                                id="password" required>
                                    </div>
                                </div>
                                <div class="form-group mb-4"><label for="password_confirm">Powtórz hasło</label>
                                    <div class="input-group"><span class="input-group-text" id="basic-addon5"><span
                                                class="fas fa-unlock-alt"></span></span> <input type="password" name="password_confirmation"
                                                                                                placeholder="Potwierdzenie hasła"
                                                                                                class="form-control"
                                                                                                id="password_confirmation"
                                                                                                required></div>
                                </div>
                                <div class="form-check mb-4"><input required class="form-check-input" type="checkbox" value=""
                                                                    id="terms"> <label class="form-check-label"
                                                                                       for="terms">Akceptuje <a
                                            href="#">regulamin</a></label></div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Zarejestruj się</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center align-items-center mt-4"><span
                                class="font-weight-normal">Masz już konto? <a href="{{route('login')}}"
                                                                                       class="font-weight-bold">Zaloguj się</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
