<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="{{url('assets\bootstrap\css\login1.css')}}">
    <title>connexion</title>
</head>
<body>
<div class="container" >
    <section>
        <div class="sec-container">
            <div class="form-wrapper">
                <div class="card">
                    <div class="card-header">
                        <div id="forLogin" class="form-header active">Se connecter</div>
                        <div id="forRegister" class="form-header">S'inscrire</div>
                    </div>
                    <div class="card-body" id="formContainer">
                         <form action="{{route('login.check')}}" id="loginForm" method="POST">
                                <!-- Message -->
                                    @if (Session::get('success'))
                                    <div class="alert alert-success d-flex align-items-center" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                        <div>
                                            {{Session::get('success')}}
                                        </div>
                                    </div>

                                    @endif
                                    @if (Session::get('fail'))
                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                        <div>
                                            {{Session::get('fail')}}
                                        </div>
                                    </div>
                                    @endif
                                <!-- End message -->
                                @csrf
                                <!--Email-->
                                <div>
                                    <input type="text" class="form-control" name="email" placeholder="@utilisateur email">
                                    <span class="text-danger">
                                        @error('email')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <!--End email-->
                                <!--Password-->
                                <div>
                                    <input type="password" name="password" class="form-control" placeholder="@Mot de passe">
                                    <span class="text-danger">
                                        @error('password')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <!--End password-->
                            <button type="submit" class="formButton">Connexion</button>
                         </form>
                         <form action="{{route('login.save')}}" id="registerForm" class="toggleForm" method="POST">
                            <!-- Message -->
                                @if (Session::get('success'))
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <div>
                                        {{Session::get('success')}}
                                    </div>
                                </div>
                                @endif
                                @if (Session::get('fail'))
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <div>
                                        {{Session::get('fail')}}
                                    </div>
                                </div>
                                @endif
                            <!-- End message -->
                            @csrf
                            <!--Nom-->
                            <div>
                                <input type="text" name="name" class="form-control" placeholder="@utilisateur nom">
                                <span>
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <!--End nom-->
                            <!--Email-->
                            <div>
                                <input type="email" name="email" class="form-control" placeholder="@utilisateur email">
                                <span>
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <!--End email-->
                            <!--password-->
                            <div>
                                <input type="password" name="password" class="form-control" placeholder="@Mot de passe">
                                <span>
                                    @error('password')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <!--End password-->
                            <button type="submit" class="formButton">Connexion</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    const displayform = _('displayForm');
    const forlogin = _('forLogin');
    const loginForm = _('loginForm');
    const forRegister = _('forRegister');
    const registerForm = _('registerForm');
    const formContainer = _('formContainer');
    //displayform.addEventListener('click',showform);

    forlogin.addEventListener('click',() =>{
        forlogin.classList.add('active');
        forRegister.classList.remove('active');
        if(loginForm.classList.contains('toggleForm')){
            formContainer.style.transform = 'translate(0%)';
            formContainer.style.transition = 'transform .5s';
            registerForm.classList.add('toggleForm');
            loginForm.classList.remove('toggleForm');
        }
    })

    forRegister.addEventListener('click', () =>{
        forlogin.classList.remove('active');
        forRegister.classList.add('active');
        if(registerForm.classList.contains('toggleForm')){
            formContainer.style.transform = 'translate(-100%)';
            formContainer.style.transition = 'transform .5s';
            registerForm.classList.remove('toggleForm');
            loginForm.classList.add('toggleForm');
        }
    })

    function _(e) {
        return document.getElementById(e);
    }
    function showform() {
        document.querySelector('.form-wrapper .card').classList.toggle('show')
    }

</script>
</body>
</html>
