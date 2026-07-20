@extends('layout')

@section('title', 'บทความ')

@section('content')
    <h2 class="text text-center by-2">บทความทั้งหมด</h2>
    <hr>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blog2 as $item)
                <tr>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['content'] }}</td>
                    <td>
                        @if ($item['status'] == true)
                            <span class="btn btn-success">เผยแพร่</span>
                        @else
                            <span class="btn btn-danger">ไม่เผยแพร่</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
