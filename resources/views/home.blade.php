@extends('componetes.index')
@section('title', 'welcome')

@section('content')
    <h1>Entendendo a árvore</h1>
    <p>
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



    
@endsection