<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>AmazonProduct</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">



    <!-- Bootstrap core CSS -->
    <!--<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="/Assets/Product2.svg" alt="" width="50" height="40" class="d-inline-block align-top">
                    <strong style="color:rgb(255, 128, 128)">Amazon</strong>
                    <strong style="color:rgb(255, 26, 26)">Product</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="navbar-nav">
                        <a class="nav-link active" id="home" aria-current="page" href="/">Home</a>
                        <a class="nav-link" id="add-product" href="/add-product">Add Products</a>

                    </div>
                </div>
                <form class="d-flex" action="{{route('/search-product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <select class="form-select text-danger" id="searchType" name="searchType" style="background-color:rgb(32, 31, 31)" aria-label="Default select example">
                            <option selected value="0">Anywhere</option>
                            <option value="1">Product Name</option>
                            <option value="2">Product Type</option>
                            <option value="3">Company Name</option>
                          </select>
                        <input type="text" id="keyword" name="keyword" class="form-control" aria-label="Text input with 2 dropdown buttons" required>
                        <button class="btn btn-outline-danger" type="submit" >Search</button>
                      </div>
                    <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                    <!--<button class="btn btn-outline-danger" type="submit">Search</button>-->
                </form>

                

            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-light text-center text-lg-start">
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © Copyright:
          <a class="text-dark" href="https://github.com/NahidReza08">MD. NAHID REZA SHOVO</a>
        </div>
        <!-- Copyright -->
      </footer>

    




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>


</body>

</html>