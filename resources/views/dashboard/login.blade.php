<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
</head>
<body>

    <main class="content-site content-system-sig-in">
        <div class="container">
            <div class="row">
                <form
                    action="{{ route('dashboard.login.action') }}"
                    method="POST"
                    class="form-login d-flex flex-column align-items-center"
                >
                    @csrf

                    <h1 class="mb-4">Faça seu Login</h1>
    
                    <div class="form-group">
                      <label for="exampleInputEmail1">E-mail:</label>

                      <input 
                        name="email"
                        type="email" 
                        class="form-control" 
                        id="exampleInputEmail1" 
                        aria-describedby="emailHelp" 
                        placeholder="Insira seu e-mail">
                    </div>
    
                    <div class="form-group mb-4">
                      <label for="exampleInputPassword1">Senha:</label>

                      <input 
                        name="password"
                        type="password" 
                        class="form-control" 
                        id="exampleInputPassword1" 
                        placeholder="Insira sua senha"
                      >
                    </div>
    
                    @if($errors->all())
                      <div class="alert alert-danger w-100">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      </div>
                    @endif
    
                    <a href="" type="submit" class="btn btn-primary w-50 submit-event-js">Entrar</a>
                  </form>
            </div>
        </div>
    </main>
    

    <script>
        let buttonSubmit = document.querySelector('.submit-event-js');
        let form = document.querySelector('.form-login');

        buttonSubmit.addEventListener('click', (e) => {
            e.preventDefault();
            form.submit();;
        })
    </script>
</body>
</html>