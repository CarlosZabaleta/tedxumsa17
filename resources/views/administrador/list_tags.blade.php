
@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">List tags</h3>

                        <div class="box-tools pull-right">
                            <a href="{!! route('create_tag') !!}" class="btn btn-box-tool"  title="Adicionar">
                                <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Categoria</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_tags as $tag)
                                <tr>
                                    <td>{!! $tag->id !!}</td>
                                    <td>{!! $tag->name !!}</td>
                                    <td>
                                        <a href="{{url('edit_tag',array($tag->id))}}" class="btn btn-raised btn-success">Editar</a>
                                        <a href="{!! route('delete_tag',[$tag->id]) !!}" class="btn btn-raised btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection
