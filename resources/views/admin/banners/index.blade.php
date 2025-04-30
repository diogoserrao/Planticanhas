@extends('admin.layouts.app')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
@section('content')
<div class="card border-0 shadow rounded-4">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-4">
        <h4 class="mb-0 fw-bold">Lista de Banners</h4>
        <div>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary me-2">
                <i class="fas fa-arrow-left me-2"></i>Voltar
            </a>
            <a href="{{ route('banners.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle me-2"></i>Novo Banner
            </a>
        </div>
    </div>
    <div class="card-body">
        @if($banners->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover align-middle text-center">
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
                            <img src="{{ $src }}" class="img-fluid rounded" style="max-width: 100px;" alt="Imagem do banner">
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
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('banners.edit', $banner) }}" class="btn btn-sm btn-success rounded-pill">
                                    <i class="fas fa-edit me-1"></i> Editar
                                </a>
                                <form action="{{ route('banners.destroy', $banner) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger rounded-pill" onclick="return confirm('Tem certeza que deseja excluir este banner?')">
                                        <i class="fas fa-trash-alt me-1"></i> Excluir
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
        <div class="text-center py-5">
            <i class="fas fa-images fa-3x text-muted mb-3"></i>
            <p class="mb-0">Nenhum banner encontrado.</p>
            <a href="{{ route('banners.create') }}" class="btn btn-primary mt-3">
                <i class="fas fa-plus-circle me-2"></i>Adicionar Primeiro Banner
            </a>
        </div>
        @endif
    </div>
</div>
@endsection