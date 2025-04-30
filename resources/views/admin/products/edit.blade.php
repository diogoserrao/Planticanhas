@extends('admin.layouts.app')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('products.css') }}">
</head>

@section('content')
<div class="admin-card card shadow-sm">
    <div class="card-header">
        <h5 class="admin-title">Editar Produto</h5>
        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Voltar
        </a>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                           id="name" name="name" 
                           value="{{ old('name', $product->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label">Categoria</label>
                    <input type="text" class="form-control @error('category') is-invalid @enderror" 
                           id="category" name="category" 
                           value="{{ old('category', $product->category) }}" required>
                    @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="order" class="form-label">Ordem de Exibição</label>
                    <input type="number" class="form-control @error('order') is-invalid @enderror" 
                           id="order" name="order" min="0" 
                           value="{{ old('order', $product->order) }}">
                    @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-help-text">Posição de exibição nos produtos (menor número = primeiro)</div>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label d-block">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="available" 
                               name="available" value="1" {{ old('available', $product->available) ? 'checked' : '' }}>
                        <label class="form-check-label" for="available">Disponível</label>
                    </div>
                    <div class="form-help-text">Produtos disponíveis serão exibidos como "Disponível" no site</div>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label d-block">Destaque</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="featured" 
                               name="featured" value="1" {{ old('featured', $product->featured) ? 'checked' : '' }}>
                        <label class="form-check-label" for="featured">Em Destaque</label>
                    </div>
                    <div class="form-help-text">Produtos em destaque recebem marcação especial</div>
                </div>
                
                <div class="col-12 mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 mb-4">
                    <label for="image" class="form-label">Imagem do Produto</label>

                    <div class="mb-3">
                        @if(Str::startsWith($product->image, 'http') || Str::startsWith($product->image, '/'))
                            <img src="{{ $product->image }}" alt="Produto atual" class="img-thumbnail product-preview">
                        @elseif($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Produto atual" class="img-thumbnail product-preview">
                        @else
                            <p class="text-muted">Sem imagem</p>
                        @endif
                        <div class="form-help-text">Imagem atual. Selecione uma nova para substituir.</div>
                    </div>
                    
                    <input type="file" class="form-control @error('image') is-invalid @enderror" 
                           id="image" name="image" accept="image/*">
                    <div class="form-help-text">Formatos aceitos: JPG, PNG. Tamanho máximo: 2MB.</div>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 action-buttons">
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Atualizar Produto
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection