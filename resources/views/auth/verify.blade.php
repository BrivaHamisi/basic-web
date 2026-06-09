<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Verification Page | Briva Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .otp-box {
            width: 48px;
            height: 56px;
            border-radius: 10px;
            border: 2px solid #dee2e6;
            transition: border-color 0.2s, box-shadow 0.2s;
            padding: 0;
        }

        .otp-box:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.15);
        }

        .otp-box.filled {
            border-color: #0d6efd;
            background-color: #f0f5ff;
        }
    </style>

</head>

<body class="bg-white">
    <div class="account-page">
        <div class="container-fluid p-0">
            <div class="row align-items-center g-0">

                <div class="col-xl-5">
                    <div class="row">
                        <div class="col-md-7 mx-auto">
                            <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                                <div class="mb-4 p-0">
                                    <a href="index.html" class="auth-logo">
                                        <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="logo-dark"
                                            class="mx-auto" height="28" />
                                    </a>
                                </div>

                                <div class="pt-0">
                                    <h4 class="mb-1">Verify Your Identity</h4>
                                    <p class="text-muted mb-4">Enter the 6-digit code sent to your device.</p>

                                    <form method="POST" action="{{ route('custom.verification.verify') }}"
                                        class="my-4" id="otp-form">
                                        @csrf
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        <div class="form-group mb-4">
                                            <label class="form-label">Verification Code</label>
                                            <div class="d-flex gap-2 justify-content-between" id="otp-inputs">
                                                <input class="form-control otp-box text-center fw-bold fs-4"
                                                    type="text" inputmode="numeric" maxlength="1" name="code[]"
                                                    autocomplete="off">
                                                <input class="form-control otp-box text-center fw-bold fs-4"
                                                    type="text" inputmode="numeric" maxlength="1" name="code[]"
                                                    autocomplete="off">
                                                <input class="form-control otp-box text-center fw-bold fs-4"
                                                    type="text" inputmode="numeric" maxlength="1" name="code[]"
                                                    autocomplete="off">
                                                <input class="form-control otp-box text-center fw-bold fs-4"
                                                    type="text" inputmode="numeric" maxlength="1" name="code[]"
                                                    autocomplete="off">
                                                <input class="form-control otp-box text-center fw-bold fs-4"
                                                    type="text" inputmode="numeric" maxlength="1" name="code[]"
                                                    autocomplete="off">
                                                <input class="form-control otp-box text-center fw-bold fs-4"
                                                    type="text" inputmode="numeric" maxlength="1" name="code[]"
                                                    autocomplete="off">
                                            </div>
                                            <input type="hidden" name="code" id="otp-hidden">
                                            @error('code')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        {{-- <div class="d-grid">
                                                <button class="btn btn-primary" type="submit">Verify & Log In</button>
                                            </div> --}}

                                        <div class="d-grid">
                                            <button class="btn btn-primary" type="submit" id="submit-btn">Verify & Log
                                                In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="account-page-bg p-md-5 p-4">
                        <div class="text-center">
                            <h3 class="text-dark mb-3 pera-title">Quick, Effective, and Productive With Tapeli Admin
                                Dashboard</h3>
                            <div class="auth-image">
                                <img src="{{ asset('backend/assets/images/authentication.svg') }}"
                                    class="mx-auto img-fluid" alt="images">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Vendor -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    {{-- <script>
        const boxes = document.querySelectorAll('.otp-box');
        const hidden = document.getElementById('otp-hidden');
        const form = document.getElementById('otp-form');

        boxes.forEach((box, i) => {
            // Auto-advance and auto-submit on manual input
            box.addEventListener('input', () => {
                box.value = box.value.replace(/\D/g, '').slice(-1);
                box.classList.toggle('filled', box.value !== '');
                if (box.value && i < boxes.length - 1) boxes[i + 1].focus();
                hidden.value = [...boxes].map(b => b.value).join('');

                // Auto-submit when last digit is typed
                if (hidden.value.length === boxes.length) {
                    form.submit();
                }
            });

            // Backspace moves back
            box.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && !box.value && i > 0) boxes[i - 1].focus();
            });

            // Handle paste — auto-submit if all digits filled
            box.addEventListener('paste', (e) => {
                e.preventDefault();
                const pasted = e.clipboardData.getData('text').replace(/\D/g, '');
                [...pasted].slice(0, boxes.length).forEach((char, idx) => {
                    boxes[idx].value = char;
                    boxes[idx].classList.add('filled');
                });
                const next = Math.min(pasted.length, boxes.length - 1);
                boxes[next].focus();
                hidden.value = [...boxes].map(b => b.value).join('');

                // Auto-submit if all 6 digits are filled
                if (hidden.value.length === boxes.length) {
                    form.submit();
                }
            });
        });
    </script> --}}

    <script>
    const boxes = document.querySelectorAll('.otp-box');
    const hidden = document.getElementById('otp-hidden');
    const form   = document.getElementById('otp-form');
    const btn    = document.getElementById('submit-btn');

    function submitForm() {
        btn.disabled = true;
        btn.innerHTML = `
            <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
            Verifying...
        `;
        form.submit();
    }

    boxes.forEach((box, i) => {
        box.addEventListener('input', () => {
            box.value = box.value.replace(/\D/g, '').slice(-1);
            box.classList.toggle('filled', box.value !== '');
            if (box.value && i < boxes.length - 1) boxes[i + 1].focus();
            hidden.value = [...boxes].map(b => b.value).join('');

            if (hidden.value.length === boxes.length) {
                submitForm();
            }
        });

        box.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && !box.value && i > 0) boxes[i - 1].focus();
        });

        box.addEventListener('paste', (e) => {
            e.preventDefault();
            const pasted = e.clipboardData.getData('text').replace(/\D/g, '');
            [...pasted].slice(0, boxes.length).forEach((char, idx) => {
                boxes[idx].value = char;
                boxes[idx].classList.add('filled');
            });
            const next = Math.min(pasted.length, boxes.length - 1);
            boxes[next].focus();
            hidden.value = [...boxes].map(b => b.value).join('');

            if (hidden.value.length === boxes.length) {
                submitForm();
            }
        });
    });

    // Also show loading when button is clicked manually
    form.addEventListener('submit', () => {
        btn.disabled = true;
        btn.innerHTML = `
            <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
            Verifying...
        `;
    });
</script>

</body>

</html>
