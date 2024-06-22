<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="{{ asset('css/style_login.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center position-absolute top-50 start-50 translate-middle bg-filter">
            <div class="col box2 p-5">
                <h1>Selamat datang kembali!</h1>
                    <p>Silakan login atau masuk sebagai tamu untuk mengakses permainan. Jika Anda belum memiliki akun, mohon daftar terlebih dahulu.</p>
                <div class="d-grid gap-2">
            <a href="/Landing-page" class="btn active margin-atas-50" ><i  class="fas fa-arrow-circle-left"></i> Kembali ke dashboard</a>
            </div>
            </div>
                <div class="col box1 p-5">
                    <h2 class="text-center">Login Form</h2>
                    <div class="form">
                        <form method="post" action="{{ route('login.auth') }}">
                            @csrf
                            <hr>
                            <!-- jangan di otak atik bagian ini, lagi maintenance -->
                            <!-- <div class="container text-center">
                                <div class="row header_form">
                                    <div class="col">
                                    <a href="">Login</a>
                                    </div>
                                    <div class="col">
                                    <a href="{{ route('register.show') }}">Register</a>
                                    </div>
                                </div>
                            </div>
                            <hr> -->

                            <!-- jangan di otak atik bagian ini, lagi maintenance -->
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label text-white">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="checkRemember" name="checkRemember">
                                <label class="form-check-label text-white" for="checkRemember">Ingat Saya</label>
                            </div>     
                            <div class="d-grid gap-2">                       
                            <button type="submit" class="btn active text-white"><i class="fas fa-sign-in-alt"></i> Login</button>
                            <a href="{{ route('register.show') }}" class="btn active text-white"><i class="fas fa-user-plus"></i> Register</a>
                            <hr>
                            <a href="{{ route('guest.login') }}" class="btn active text-white"><i class="fas fa-sign-in-alt"></i> Login sebagai tamu</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        
    </body>
</html>
