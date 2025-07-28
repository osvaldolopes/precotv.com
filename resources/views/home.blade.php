<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Preço TV</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicons -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

    <!-- ICONES DA CLASS FA FA -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
    </script>
</head>

<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <nav id="navmenu" class="navmenu">
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>
    <main class="main">
        <div class="table-main">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <table class="table">
                            <thead>
                                <tr class="table-top">
                                    <td>CODIGO</td>
                                    <td>DESCRIÇÃO</td>
                                    <td>PREÇO</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <td>{{ $product->prod_id }}</td>
                                        <td>{{ $product->prod_description }}</td>
                                        <td class="table-preco">
                                            @if ($product->prod_promo > 0)
                                                <i class="fas fa-arrow-alt-circle-down"></i> R$
                                                {{ $product->prod_promo }}
                                            @else
                                                <i class="px-3"></i> R$ {{ $product->prod_price }}
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>Tabela Vazia</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero Section -->
        <section class="hero section dark-background">
            <img src="assets/img/produtos de padaria.png" alt="">
            <div class="container">
                <div class="col-xl-4">

                    <h1 data-aos="fade-up">Padaria</h1>
                    <blockquote data-aos="fade-up" data-aos-delay="100">

                        <p>
                            Na padaria, o aroma do pão fresco desperta os sentidos logo ao amanhecer. As vitrines
                            estão repletas de doces e salgados, convidando todos a desfrutarem das delícias
                            caseiras. Cada visita é uma promessa de momentos saborosos e acolhedores. 🥖✨
                        </p>
                    </blockquote>

                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    </div>
                </div>

            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background-login">
            <img src="assets/img/cta-bg.jpg" alt="">
            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Login</h3>
                            <p>Criação de Setores, atualizações, cadastro de produtos.</p>
                            <a class="cta-btn" href="login">Entrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Call To Action Section -->

    </main>
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
