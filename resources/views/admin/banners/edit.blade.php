@extends('admin.layouts.app')


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/banner-edit.css') }}">
</head>

@section('content')
<div class="content-header">
    <h1>Banners</h1>
</div>
<div class="banner-card card shadow-sm">
    <div class="card-header">
        <h5 class="banner-title">Editar Banner</h5>
        <div class="header-buttons">
            <a href="{{ route('banners.index') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-2"></i>Voltar
            </a>
        </div>
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

        <form action="{{ route('banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="order" class="form-label">Ordem de Exibição</label>
                    <input type="number" class="form-control @error('order') is-invalid @enderror"
                        id="order" name="order" min="0"
                        value="{{ old('order', $banner->order) }}">
                    @error('order')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-help-text">Posição de exibição nos banners (menor número = primeiro)</div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label d-block">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="active"
                            name="active" value="1" {{ old('active', $banner->active) ? 'checked' : '' }}>
                        <label class="form-check-label" for="active">Ativo</label>
                    </div>
                    <div class="form-help-text">Apenas banners ativos serão exibidos no site</div>
                </div>

                <div class="col-12 mb-4">
                    <label for="image" class="form-label">Imagem do Banner</label>

                    <div class="image-preview-container">
                        @if(Str::startsWith($banner->image, 'http') || Str::startsWith($banner->image, '/'))
                        <img src="{{ $banner->image }}" alt="Banner atual" class="banner-preview-img">
                        @else
                        <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner atual" class="banner-preview-img">
                        @endif
                    </div>
                    <div class="form-help-text">Imagem atual (toque para ampliar)</div>

                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                        id="image" name="image" accept="image/*">
                    <div class="form-help-text">Formatos aceitos: JPG, PNG. Tamanho máximo: 2MB. Recomendado: 1920x600 pixels.</div>
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 action-buttons">
                    <a href="{{ route('banners.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Atualizar Banner
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    // Adiciona zoom na imagem ao tocar (para mobile)
    document.addEventListener('DOMContentLoaded', function() {
        const bannerImg = document.querySelector('.banner-preview-img');
        if (bannerImg) {
            bannerImg.addEventListener('click', function() {
                this.classList.toggle('zoomed');
            });
        }
    });
</script>
@endsection