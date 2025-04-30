@extends('admin.layouts.app')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0">Criar Novo Banner</h5>
        <a href="{{ route('banners.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Voltar
        </a>
    </div>
    <div class="card-body">
        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label d-block">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="active" name="active" value="1" {{ old('active', 1) ? 'checked' : '' }}>
                        <label class="form-check-label" for="active">Ativo</label>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <label for="image" class="form-label">Imagem do Banner <span class="text-danger">*</span></label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" required>
                    <div class="form-text">Formatos aceitos: JPG, PNG. Tamanho máximo: 2MB. Recomendado: 1920x600 pixels.</div>
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="order" class="form-label">Ordem</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}" min="0">
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <a href="{{ route('banners.index') }}" class="btn btn-outline-secondary me-2">Cancelar</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Salvar Banner
                    </button>
                </div>
            </div>
        </form>
        
        @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
@endsection