@extends('template.app')
@section('content')

    <!--CONTENIDO-->
    <!-- TABLA -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Categorías <button class="btn btn-primary" data-toggle="modal"
                                    data-target="#modal-update"><i class="fas fa-file"></i> Nuevo</button> <a href=""
                                    class="btn btn-success"><i class="fas fa-file-csv"></i> CSV</a></h5>
                        </div>
                        <div class="card-body">
                            <form action="/" method="get">
                                <div class="input-group">
                                    <input name="texto" type="text" class="form-control" value="">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-info"><i class="fas fa-search"></i>
                                            Buscar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="alert alert-info alert-dismissible fade show mt-2">
                                <span class="alert-icon"><i class="fa fa-info"></i></span>
                                <span class="alert-text">Mensaje del sistema</span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @if (count($categories) == 0)
                                <div class="alert alert-secondary mt-2" role="alert">
                                    No hay registros para mostrar
                                </div>
                            @endif

                            <div class="mt-2 table-responsive">
                                <table class="table table-striped table-bordered table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th style="width: 20%">Opciones</th>
                                            <th style="width: 30%">Nombre</th>
                                            <th style="width: 50%">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($categories) == 0)
                                            <tr>
                                                <td colspan="3">No hay resultados</td>
                                            </tr>
                                        @else
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td><a href="/" class="btn btn-warning btn-sm"><i
                                                                class="fas fa-edit"></i>
                                                        </a>
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#modal-eliminar-1" class="btn btn-danger btn-sm"><i
                                                                class="fas fa-trash"></i></button>
                                                    </td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{{ $category->description }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            {{ $categories->links()}}
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- FIN TABLA -->
    <!--MODAL UPDATE-->
    <div class="modal fade" id="modal-update" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Nuevo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese nombre">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Descripcion</label>
                            {{-- <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese nombre"> --}}
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--FIN MODAL UPDATE-->
    <!--MODAL ELIMINAR-->
    <div class="modal fade" id="modal-eliminar-1">
        <div class="modal-dialog">
            <form action="" method="post">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar registro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Deseas eliminar al registro
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-outline-light">Eliminar</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--FIN MODAL ELIMINAR-->
    <!--FIN CONTENIDO-->
@endsection
