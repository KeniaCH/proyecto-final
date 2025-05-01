@extends('welcome')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Sucursales</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-primary" data-toogle="modal" data-target="#modalAgregarSucursal">Nueva Sucursal</button>
            </div>
            <div class="box-body">
                
            </div>
            <div class="modal fade" id="modalAgregarSucursal" >
                <div class="modal-dialog" >
                  <div class="modal-content">
                    <form action="" method="POST">
                        @csrf
                        <div class="modal-header" style="background: #3c8dbc; color: #fff">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                            <h4 class="modal-title">Agregar Sucursal</h4>
                        </div>

                    </form>
                   
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
</div>
@endsection