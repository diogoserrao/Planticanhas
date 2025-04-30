@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<div class="dashboard container-fluid min-vh-100 py-4">
    <!-- Cabeçalho -->
    <div class="mb-4">
        <div class="dashboard-header">
            <h1 class="dashboard-title">Painel de Controlo</h1>
            <div class="dashboard-badges">
                <span class="badge">
                    <i class="fas fa-calendar-alt me-2"></i>{{ now()->format('d/m/Y') }}
                </span>
                <span class="badge">
                    <i class="fas fa-clock me-2"></i>{{ now()->format('H:i') }}
                </span>
            </div>
        </div>
        <hr class="mt-2 mb-4">
    </div>

    <!-- Cartões de Estatísticas -->
    <div class="cards-grid">
        <!-- Cartão de Produtos -->
        <div class="card card-hover">
            <div class="card-body">
                <div class="card-section">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title">Produtos</h5>
                        <div class="card-icon icon-success">
                            <i class="fas fa-boxes"></i>
                        </div>
                    </div>
                    <h2 class="card-value">{{ $productsCount }}</h2>
                    <div class="progress mt-3">
                        <div class="progress-bar bg-success" style="width: 75%"></div>
                    </div>
                    <p class="card-description mt-2">Total registados</p>
                </div>
                <a href="{{ route('products.index') }}" class="link-arrow link-success">
                    Gerir produtos <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

        <!-- Cartão de Banners -->
        <div class="card card-hover">
            <div class="card-body">
                <div class="card-section">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title">Banners</h5>
                        <div class="card-icon icon-primary">
                            <i class="fas fa-images"></i>
                        </div>
                    </div>
                    <h2 class="card-value">{{ $bannersCount }}</h2>
                    <div class="progress mt-3">
                        <div class="progress-bar bg-primary" style="width: 60%"></div>
                    </div>
                    <p class="card-description mt-2">Ativos no sistema</p>
                </div>
                <a href="{{ route('banners.index') }}" class="link-arrow link-primary">
                    Gerir banners <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Ações Rápidas -->
    <div class="quick-actions mt-4">
        <div class="card">
            <div class="card-section">
                <h5 class="card-title">Ações Rápidas</h5>
            </div>
            <div class="card-section">
                <div class="actions-grid">
                    <!-- Novo Produto -->
                    <a href="{{ route('products.create') }}" class="action-btn action-hover">
                        <div class="action-icon icon-success">
                            <i class="fas fa-plus"></i>
                        </div>
                        <span class="action-title">Novo Produto</span>
                        <small class="action-desc">Adicionar novo item</small>
                    </a>

                    <!-- Novo Banner -->
                    <a href="{{ route('banners.create') }}" class="action-btn action-hover">
                        <div class="action-icon icon-primary">
                            <i class="fas fa-plus"></i>
                        </div>
                        <span class="action-title">Novo Banner</span>
                        <small class="action-desc">Criar nova promoção</small>
                    </a>

                    <!-- Visualizar o Site -->
                    <a href="/" target="_blank" class="action-btn action-hover">
                        <div class="action-icon icon-dark">
                            <i class="fas fa-eye"></i>
                        </div>
                        <span class="action-title">Ver Site</span>
                        <small class="action-desc">Pré-visualizar</small>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Atividades Recentes -->
    <div class="card mt-4">
        <div class="card-section d-flex justify-content-between align-items-center">
            <h5 class="card-title">Atividades Recentes</h5>
            <a href="#" class="btn btn-sm btn-outline-secondary">Ver tudo</a>
        </div>
        <div class="card-section">
            <ul class="activity-list">
                <li class="activity-item">
                    <div class="activity-content">
                        <div class="activity-icon icon-success">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="activity-text">
                            <h6 class="activity-title">Novo produto adicionado</h6>
                            <p class="activity-time">Smartphone XYZ - há 5 minutos</p>
                        </div>
                        <span class="activity-badge bg-success-light text-success">Produto</span>
                    </div>
                </li>
                <li class="activity-item">
                    <div class="activity-content">
                        <div class="activity-icon icon-primary">
                            <i class="fas fa-image"></i>
                        </div>
                        <div class="activity-text">
                            <h6 class="activity-title">Banner atualizado</h6>
                            <p class="activity-time">Promoção de Verão - há 2 horas</p>
                        </div>
                        <span class="activity-badge bg-primary-light text-primary">Banner</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection