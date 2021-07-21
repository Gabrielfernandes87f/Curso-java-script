<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/icon/iconweb.png" />
        <title>@yield('title')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
    </head>
    
    <body>
     
    <header>
      <nav class="header navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
        <div class="container-fluid">
          <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="bg-nav navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/github">Github</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/private">Private</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/portfolio">Portfolio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Conta</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown01">
                  <li><a class="dropdown-item " href="/dashboard">Entrar</a></li>
                  <li><a class="dropdown-item" href="/register">Criar conta</a></li>
                  <li>
                    <form action="/logout" method="POST">
                      @csrf
                      <a class="dropdown-item" onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                    </form>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>
    
      
      <main class="container-main">
          <div class="row">
            <h1 class="title-page">Entendendo a árvore</h1>
            <p id="paragrafo">
                Quando criamos um repositório Git, criamos também uma árvore (tree). O código do projeto
                inicial é um branch (galho), e a partir dele é possível criar novos branches, cada branch criado é uma cópia exata do seu branch pai no momento da criação. A criação de novos branches normalmente ocorre quando uma nova alteração no código precisa ser realizada. De modo que as alterações que o desenvolvedor realizar em uma branch serão salvas apenas nesta branch.
                
            </p>
            
            <form class="row gy-2 gx-3 align-items-center">
                <div class="col-auto">
                  <label class="visually-hidden" for="autoSizingInput">Name</label>
                  <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
                </div>
                <div class="col-auto">
                  <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                  <div class="input-group">
                    <div class="input-group-text">@</div>
                    <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
                  </div>
                </div>
                <div class="col-auto">
                  <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                  <select class="form-select" id="autoSizingSelect">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-auto">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                    <label class="form-check-label" for="autoSizingCheck">
                      Remember me
                    </label>
                  </div>
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            
          </div>



          

          




          
        </main>

        <footer class="fixed-bottom">
          <p class="copi">Copyright © 2021 Web developer | Powered by Gabriel Fernandes</p>
        </footer>
        
      </body>
      <script src="/js/javascript.js"></script>
      </html>


    