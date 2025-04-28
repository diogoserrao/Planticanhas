@extends('admin.layouts.app')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0">Editar Banner</h5>
        <a href="{{ route('banners.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Voltar
        </a>
    </div>
    <div class="card-body">
        <form action="{{ route('banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $banner->title) }}">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="subtitle" class="form-label">Subtítulo</label>
                    <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" value="{{ old('subtitle', $banner->subtitle) }}">
                    @error('subtitle')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="link" class="form-label">Link (URL)</label>
                    <input type="url" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{ old('link', $banner->link) }}" placeholder="https://exemplo.com">
                    @error('link')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-3 mb-3">
                    <label for="order" class="form-label">Ordem</label>
                    <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order" min="0" value="{{ old('order', $banner->order) }}">
                    @error('order')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label d-block">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="active" name="active" value="1" {{ old('active', $banner->active) ? 'checked' : '' }}>
                        <label class="form-check-label" for="active">Ativo</label>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <label for="image" class="form-label">Imagem do Banner</label>

                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" class="img-thumbnail" style="max-height: 200px;">
                        <div class="form-text">Imagem atual. Selecione uma nova para substituir.</div>
                    </div>

                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    <div class="form-text">Formatos aceitos: JPG, PNG. Tamanho máximo: 2MB. Recomendado: 1920x600 pixels.</div>
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <a href="{{ route('banners.index') }}" class="btn btn-outline-secondary me-2">Cancelar</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Atualizar Banner
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection