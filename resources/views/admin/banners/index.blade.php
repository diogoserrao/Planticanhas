@extends('admin.layouts.app')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/banner-index.css') }}">
</head>

@section('content')
<div class="content-header">
    <h1>Banners</h1>
</div>
<div class="admin-card card">

    <div class="admin-card-header card-header d-flex justify-content-between align-items-center">
        <h4 class="admin-title">Lista de Banners</h4>
        <div>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary me-2">
                <i class="fas fa-arrow-left me-2"></i>Voltar
            </a>
            <a href="{{ route('banners.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle me-2"></i>Novo Banner
            </a>
        </div>
    </div>
    <div class="card-body">
        @if($banners->count() > 0)
        <div class="admin-table-responsive table-responsive">
            <table class="table table-hover table-bordered align-middle text-nowrap text-center">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Imagem</th>
                        <th>Status</th>
                        <th>Ordem</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($banners as $banner)
                    <tr>
                        <td>{{ $banner->id }}</td>
                        <td>
                            @php
                            $src = Str::startsWith($banner->image, ['http', '/'])
                            ? $banner->image
                            : asset('storage/' . $banner->image);
                            @endphp
                            <img src="{{ $src }}" class="admin-image-thumbnail img-fluid" alt="Imagem do banner">
                        </td>
                        <td>
                            @if($banner->active)
                            <span class="badge bg-success">Ativo</span>
                            @else
                            <span class="badge bg-danger">Inativo</span>
                            @endif
                        </td>
                        <td>{{ $banner->order }}</td>
                        <td>
                            <div class="admin-button-group">
                                <a href="{{ route('banners.edit', $banner) }}" class="btn btn-success">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <form action="{{ route('banners.destroy', $banner) }}" method="POST" class="d-inline m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este banner?')">
                                        <i class="fas fa-trash-alt"></i> Excluir
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="admin-empty-state">
            <i class="fas fa-images admin-empty-icon"></i>
            <p class="mb-0">Nenhum banner encontrado.</p>
            <a href="{{ route('banners.create') }}" class="btn btn-primary mt-3">
                <i class="fas fa-plus-circle me-2"></i>Adicionar Primeiro Banner
            </a>
        </div>
        @endif
    </div>
</div>
@endsection