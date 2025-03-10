<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="{{ asset('css/style_login.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container p-3 position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center">
            <div class="col-md-5 box-login bg-filter text-white p-5">
                <h2 class="text-center">Form register</h2>
                <hr>
                <div class="form">
                    <form method="post" action="{{ route('register.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="namaInput" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('namaInput') is-invalid @enderror"
                                id="namaInput" name="namaInput" value="{{ old('namaInput') }}">
                            @error('namaInput')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Email</label>
                            <input type="text" class="form-control @error('emailInput') is-invalid @enderror"
                                id="emailInput" name="emailInput" value="{{ old('emailInput') }}">
                            @error('emailInput')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- <div class="mb-3">
                                <label for="nimInput" class="form-label">NIM</label>
                                <input type="text" class="form-control @error('nimInput') is-invalid @enderror" id="nimInput" name="nimInput" value="{{ old('nimInput') }}">
                                @error('nimInput')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>                            
                                @enderror
                            </div> -->

                        <div class="mb-3">
                            <label for="passwordInput" class="form-label">Password</label>
                            <input type="password" class="form-control @error('passwordInput') is-invalid @enderror"
                                id="passwordInput" name="passwordInput">
                            @error('passwordInput')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="passwordInput_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password"
                                class="form-control @error('passwordInput_confirmation') is-invalid @enderror"
                                id="passwordInput_confirmation" name="passwordInput_confirmation">
                            @error('passwordInput_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn active text-white"><i class="fas fa-user-plus"></i>
                                Submit</button>
                            <a href="/login" class="btn active text-white"><i class="fas fa-arrow-circle-left"></i>
                                Kembali ke halaman login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>