<link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

<main class="main-content  mt-0">
    <section>
        <div class="container" <!-- style= "display: flex" -->>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-start">
                        <h4 class="font-weight-bolder">Login</h4>
                        <p class="mb-0">Entre com seu email e senha para logar</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="login">
                            <div class="mb-3">
                                <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" name="email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control form-control-lg" placeholder="Senha" aria-label="Senha" name="senha">
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Lembrar-me</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Logar</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        <p class="mb-4 text-sm mx-auto">
                            Não tem conta?
                            <a href="/usuarios" class="text-primary text-gradient font-weight-bold">Inscreva-se</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                <!-- <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://img.freepik.com/premium-vector/young-man-holds-big-credit-card-modern-client-bank-personal-finance-concept-digital-money-business-hand-drawn-vector-illustration-isolated-light-background-modern-flat-cartoon-style_318237-392.jpg?w=740');
          background-size: cover;"> -->
                    <span class="mask bg-gradient-primary opacity-6"></span>
                </div>
            </div>
        </div>
    </section>
</main>