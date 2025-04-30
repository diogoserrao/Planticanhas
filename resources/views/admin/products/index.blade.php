@extends('admin.layouts.app')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/productindex.css') }}">
</head>

@section('content')
<div class="admin-card card">
    <div class="admin-card-header card-header d-flex justify-content-between align-items-center">
        <h4 class="admin-title">Lista de Produtos</h4>
        <div>
            <a href="{{ route('dashboard') }}" class="btn btn-back">
                <i class="fas fa-arrow-left me-2"></i>Voltar
            </a>
            <a href="{{ route('products.create') }}" class="btn btn-create ms-2">
                <i class="fas fa-plus-circle me-2"></i>Novo Produto
            </a>
        </div>
    </div>
    <div class="card-body">
        @if(session('success'))
        <div id="success-alert" class="alert alert-success fade show" role="alert">
            {{ session('success') }}
        </div>
        @endif

        @if($products->count() > 0)
        <div class="admin-table-responsive table-responsive">
            <table class="table table-hover align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Imagem</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Status</th>
                        <th>Destaque</th>
                        <th>Ordem</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            @php
                            $src = Str::startsWith($product->image, ['http', '/'])
                            ? $product->image
                            : asset('storage/' . $product->image);
                            @endphp
                            <img src="{{ $src }}" class="admin-image-thumbnail img-fluid" alt="{{ $product->name }}">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>
                            @if($product->available)
                            <span class="badge bg-success">Disponível</span>
                            @else
                            <span class="badge bg-warning">Por Encomenda</span>
                            @endif
                        </td>
                        <td>
                            @if($product->featured)
                            <span class="badge bg-info">Sim</span>
                            @else
                            <span class="badge bg-secondary">Não</span>
                            @endif
                        </td>
                        <td>{{ $product->order }}</td>
                        <td>
                            <div class="admin-button-group">
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-success">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este produto?')">
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
            <i class="fas fa-box-open admin-empty-icon"></i>
            <p class="mb-0">Nenhum produto encontrado.</p>
            <a href="{{ route('products.create') }}" class="btn btn-primary mt-3">
                <i class="fas fa-plus-circle me-2"></i>Adicionar Primeiro Produto
            </a>
        </div>
        @endif
    </div>
</div>

<script>
    // Script para fazer a mensagem de sucesso desaparecer após 5 segundos
    document.addEventListener('DOMContentLoaded', function() {
        const successAlert = document.getElementById('success-alert');

        if (successAlert) {
            // Adicionar classe para iniciar o efeito de fadeout após 3 segundos
            setTimeout(function() {
                successAlert.classList.add('fade-out');
            }, 3000);

            // Remover completamente após o término da animação (5 segundos total)
            setTimeout(function() {
                successAlert.remove();
            }, 5000);
        }
    });
</script>

<style>
    /* Estilo para animação de fadeout */
    .fade-out {
        opacity: 1;
        transition: opacity 2s ease-out;
        opacity: 0;
    }
</style>
@endsection