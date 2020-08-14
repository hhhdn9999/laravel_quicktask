@extends('layouts.app')

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
            {{ trans('message.newtask') }}
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Task Form -->
                <form action="{{ url('task') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">{{ trans('message.task')}}</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>{{ trans('message.addtask') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('message.currenttasks') }}
                </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>{{ trans('message.task')}}</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>
                                <tr>
                                    <td class="table-text"><div>{{ trans('message.task')}}</div></td>
                                    <td>
                                        <button type="submit" id="" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>{{ trans('message.delete')}}
                                        </button>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
@endsection
