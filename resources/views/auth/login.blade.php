<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/login.css">


<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">
                <div id="imgloginleft" class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="/assets/images/bg/pexels-cottonbro-studio-3202235.jpg"
                        alt="Login image" id="imgloginleft" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
            </div>

            <div class="d-flex justify-content-center col-sm-6 text-black p-0 mb-0">
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-0 pt-0 pt-xl-0 mt-xl-n5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="p-0 m-0" style="padding-left: 0px;  padding-right: 0px;">
                            <img src="/assets/images/logo/logo-painel-cnd.png" alt="Logo Painel CND" class="img-responsive">
                        </div>

                        <div class="d-flex justify-content-center">
                            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                            <span class="h1 fw-bold mb-0">Painel CND</span>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">E-mail</label>
                            <input type="email" id="email" class="form-control form-control-lg"  name="email" required autofocus>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Senha</label>
                            <input type="password" id="password" class="form-control form-control-lg"  name="password" required>
                        </div>

                        <div>
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Lembrar-me </label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button id="btnLogin" class="btn btn-dark btn-lg btn-block" type="submit">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

