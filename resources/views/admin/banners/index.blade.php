@extends('admin.layouts.app')

@section('content')
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0">Lista de Banners</h5>
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
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Imagem</th>
                        <th>Título</th>
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
                            <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" width="120" height="60" class="rounded" style="object-fit: cover;">
                        </td>
                        <td>{{ $banner->title ?: 'Sem título' }}</td>
                        <td>
                            @if($banner->active)
                            <span class="badge bg-success">Ativo</span>
                            @else
                            <span class="badge bg-secondary">Inativo</span>
                            @endif
                        </td>
                        <td>{{ $banner->order }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.banners.edit', $banner) }}" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.banners.destroy', $banner) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este banner?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir">
                                        <i class="fas fa-trash"></i>
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
        <div class="text-center py-4">
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

@push('scripts')
<script>
    // Inicializa os tooltips
    var tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
@endpush