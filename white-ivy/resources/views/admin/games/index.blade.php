@extends('admin.layouts.app')

@section('title', 'Game Management')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold">Game Management</h2>

    <a href="{{ route('games.create') }}" class="btn btn-danger">
        <i class="bi bi-plus-circle"></i>
        Tambah Game
    </a>

</div>

<div class="card shadow border-0">

    <div class="card-body">

        <table class="table table-striped table-hover align-middle">

            <thead class="table-dark">

                <tr>

                    <th width="100">Thumbnail</th>

                    <th>Judul</th>

                    <th>Genre</th>

                    <th>Status</th>

                    <th width="180">Aksi</th>

                </tr>

            </thead>

            <tbody>

            @forelse($games as $game)

                <tr>

                    <td>

                        @if($game->thumbnail)

                            <img src="{{ asset('storage/'.$game->thumbnail) }}"
                                 width="80"
                                 class="rounded">

                        @else

                            -

                        @endif

                    </td>

                    <td>{{ $game->title }}</td>

                    <td>{{ $game->genre }}</td>

                    <td>

                        <span class="badge bg-danger">

                            {{ $game->status }}

                        </span>

                    </td>

                    <td>

                        <a href="{{ route('games.edit',$game) }}"
                           class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form action="{{ route('games.destroy',$game) }}"
                              method="POST"
                              class="d-inline">

                            @csrf

                            @method('DELETE')

                            <button
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus game ini?')">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="5" class="text-center">

                        Belum ada data game.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection