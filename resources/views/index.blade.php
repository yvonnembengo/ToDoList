@extends('layout')

@section('content')
    <table class="table table-sm table-borderless table-hover">
        <tr class="text-secondary">
            <th><i class="bi bi-alarm-fill"></i></th>
            <th><i class="bi bi-list-task"></i></th>
            <th><i class="bi bi-check-circle-fill"></i></th>
            <th><i class="bi bi-gear-fill"></i></th>
        </tr>
        @foreach($tasks as $task)
            <tr style="border-radius: 8px" class="py-2">
                <td>
               <span class="text-warning">
                   {{ $task->created_at->diffForHumans() }}
               </span>
                </td>
                <td>
                    {{ $task->task }}
                </td>
                <td>
                    {{ $task->completed ? "Completed" : "Pending" }}
                </td>
                <td>
                    <a style="text-decoration: none; font-weight: bold" href="tasks/{{ $task->id }}">Open <i class="bi bi-link"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
