@extends('admin.layouts.app')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0">Lista de Produtos</h5>
        <div>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary me-2">
            <i class="fas fa-arrow-left me-2"></i>Voltar
        </a>
        <a href="{{ route('products.create') }}" class="btn btn-success">
            <i class="fas fa-plus-circle me-2"></i>Novo Produto
        </a>
        </div>
    </div>
    <div class="card-body">
        @if($products->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagem</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Status</th>
                        <th>Ordem</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="50" height="50" class="rounded" style="object-fit: cover;">
                            @else
                            <div class="bg-light d-flex align-items-center justify-content-center rounded" style="width: 50px; height: 50px;">
                                <i class="fas fa-image text-muted"></i>
                            </div>
                            @endif
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->price ? number_format($product->price, 2, ',', '.') . ' €' : 'N/A' }}</td>
                        <td>
                            @if($product->available)
                            <span class="badge bg-success">Disponível</span>
                            @else
                            <span class="badge bg-secondary">Indisponível</span>
                            @endif

                            @if($product->featured)
                            <span class="badge bg-primary">Destaque</span>
                            @endif
                        </td>
                        <td>{{ $product->order }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
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
            <i class="fas fa-box-open fa-3x text-muted mb-3"></i>
            <p class="mb-0">Nenhum produto encontrado.</p>
            <a href="{{ route('products.create') }}" class="btn btn-success mt-3">
                <i class="fas fa-plus-circle me-2"></i>Adicionar Primeiro Produto
            </a>
        </div>
        @endif
    </div>
</div>
@endsection