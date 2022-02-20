@extends('layout')

@section('content')
    <div class="py-3">
        <p class="">
            <a title="GO BACK" href="/" class="btn brn-sm btn-outline-secondary"><i class="bi bi-box-arrow-in-left"></i></a>
        </p>
        <table class="table table-sm table-borderless">
            <tr>
                <th class="text-secondary">Task</th>
                <td class="text-warning" style="font-weight: bold">
                    {{ $task->task }}
                </td>
            </tr>
            <tr>
                <th class="text-secondary">Added</th>
                <td class="text-warning" style="font-weight: bold">
                    {{ $task->created_at->diffForHumans() }}
                </td>
            </tr>
            <tr>
                <th class="text-secondary">Completed</th>
                <td class="text-warning" style="font-weight: bold">
                    {{ $task->completed ? "Completed" : "Incomplete" }}
                </td>
            </tr>
        </table>
        <div class="d-flex flex-row mt-4">
            @if(!$task->completed)
                <form action="/tasks/{{$task->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-sm btn-outline-primary">Mark As Completed</button>
                </form>
            @endif

            <span style="width: 20px"></span>

            <form action="/tasks/{{$task->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-outline-danger">Delete</button>
            </form>


        </div>
    </div>
@endsection
