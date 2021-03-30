@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Agregar Tarea
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Titulo</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task-date" class="col-sm-3 control-label">Fecha</label>

                            <div class="col-sm-6">
                                <input type="text" name="date" id="task-date" class="form-control datepicker" value="{{ old('date') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task-category" class="col-sm-3 control-label">Categoria</label>

                            <div class="col-sm-6">
                                <input type="text" name="category" id="task-category" class="form-control" value="{{ old('category') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-description" class="col-sm-3 control-label">Descripcion</label>

                            <div class="col-sm-6">
                                <input type="text" name="description" id="task-description" class="form-control" value="{{ old('description') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task-status" class="col-sm-3 control-label">Status</label>

                            <div class="col-sm-6">
                                <input type="text" name="status" id="task-status" class="form-control" value="{{ old('status') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Agregar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tareas
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Fecha</th>
                                <th>Categoria</th>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Status</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->date }}</div></td>
                                        <td class="table-text"><div>{{ $task->category }}</div></td>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>
                                        <td class="table-text"><div>{{ $task->description }}</div></td>
                                        <td class="table-text"><div>{{ $task->status }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{url('task/' . $task->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
