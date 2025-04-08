<div>
  <div class="conteiner mt-5">

    @if(session()->has('seccess'))
  <div class="alert alert-seccess alert-dismissible fade show" role="alert">
    {{session('seccess') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

    </button>
  </div>
    @endif

    @if(session()->has('error'))
    <div class="alert alert-seccess alert-dismissible fade show" role="alert">
      {{session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  
      </button>
    </div>
      @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Buscar Funcionarios</h4>
        <form class="d-flex">
            <input class="form-control me-2 " type="search" name="busca" placeholder="Pesquisar por Nome" aria-label="Buscar" >
            <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </form>
    </div>
    <div class="card">
        <div class="shadow rouded-4">
            <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                <h5 class="mb-0">Funcionarios</h5>
                <a class="btn btn-light btn-sm">
                    <i class="bi bi-plus-circle"></i>
                    Novo funcionario
                </a>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Cargo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($funcionarios as $f)
                        <tr>

                            <td>{{$f->id}}</td>
                            <td>{{$f->nome}}</td>
                            <td>{{$f->cpf}}</td>
                            <td>{{$f->cargo}}</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm">Editar</a>
                                <a href="" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>
