@extends('admin.layouts.app')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0">Editar Produto: {{ $product->name }}</h5>
        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Voltar
        </a>
    </div>
    <div class="card-body">
        <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Nome do Produto <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name) }}" required>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label">Categoria <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" name="category" value="{{ old('category', $product->category) }}" required>
                    @error('category')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="price" class="form-label">Preço (€)</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" step="0.01" min="0" value="{{ old('price', $product->price) }}">
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="order" class="form-label">Ordem</label>
                    <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order" min="0" value="{{ old('order', $product->order) }}">
                    @error('order')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label d-block">Status</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="available" name="available" value="1" {{ old('available', $product->available) ? 'checked' : '' }}>
                        <label class="form-check-label" for="available">Disponível</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="featured" name="featured" value="1" {{ old('featured', $product->featured) ? 'checked' : '' }}>
                        <label class="form-check-label" for="featured">Destaque</label>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="description" class="form-label">Descrição <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description', $product->description) }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 mb-4">
                    <label for="image" class="form-label">Imagem do Produto</label>

                    @if($product->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-height: 150px;">
                        <div class="form-text">Imagem atual. Selecione uma nova para substituir.</div>
                    </div>
                    @endif

                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    <div class="form-text">Formatos aceitos: JPG, PNG. Tamanho máximo: 2MB.</div>
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary me-2">Cancelar</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Atualizar Produto
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection