@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<div class="dashboard container-fluid min-vh-100 py-4">
    <!-- Header do Dashboard -->
    <div class="mb-4">
        <div class="dashboard-header">
            <h1 class="dashboard-title">Visão Geral</h1>
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
        <div class="card">
            <div class="card-body">
                <div class="card-section">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title">Produtos</h5>
                        <div class="card-icon icon-success">
                            <i class="fas fa-boxes fs-5"></i>
                        </div>
                    </div>
                    <h2 class="card-value">{{ $productsCount }}</h2>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 75%"></div>
                    </div>
                </div>
                <a href="{{ route('products.index') }}" class="link-arrow link-success">
                    Ver todos <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

        <!-- Cartão de Banners -->
        <div class="card">
            <div class="card-body">
                <div class="card-section">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title">Banners</h5>
                        <div class="card-icon icon-primary">
                            <i class="fas fa-images fs-5"></i>
                        </div>
                    </div>
                    <h2 class="card-value">{{ $bannersCount }}</h2>
                    <div class="progress">
                        <div class="progress-bar bg-primary" style="width: 60%"></div>
                    </div>
                </div>
                <a href="{{ route('banners.index') }}" class="link-arrow link-primary">
                    Ver todos <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

        <!-- Cartão de Visitas -->
        <div class="card">
            <div class="card-body">
                <div class="card-section">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title">Visitas Hoje</h5>
                        <div class="card-icon icon-warning">
                            <i class="fas fa-eye fs-5"></i>
                        </div>
                    </div>
                    <h2 class="card-value">1,248</h2>
                    <div class="progress">
                        <div class="progress-bar bg-warning" style="width: 45%"></div>
                    </div>
                </div>
                <a href="#" class="link-arrow link-warning">
                    Ver análise <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Ações Rápidas -->
    <div class="quick-actions">
        <div class="card">
            <div class="card-section">
                <h5 class="card-title">Ações Rápidas</h5>
            </div>
            <div class="card-section">
                <div class="actions-grid">
                    <!-- Novo Produto -->
                    <a href="{{ route('products.create') }}" class="action-btn">
                        <div class="action-icon icon-success">
                            <i class="fas fa-plus-circle fs-3"></i>
                        </div>
                        <span class="action-title">Novo Produto</span>
                        <small class="action-desc">Adicione um novo item</small>
                    </a>

                    <!-- Novo Banner -->
                    <a href="{{ route('banners.create') }}" class="action-btn">
                        <div class="action-icon icon-primary">
                            <i class="fas fa-plus-circle fs-3"></i>
                        </div>
                        <span class="action-title">Novo Banner</span>
                        <small class="action-desc">Crie uma nova promoção</small>
                    </a>

                    <!-- Visualizar o Site -->
                    <a href="/" target="_blank" class="action-btn">
                        <div class="action-icon" style="background-color: rgba(33, 37, 41, 0.1); color: var(--dark);">
                            <i class="fas fa-globe fs-3"></i>
                        </div>
                        <span class="action-title">Ver Site</span>
                        <small class="action-desc">Visualize como está</small>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Atividades Recentes -->
    <div class="card">
        <div class="card-section d-flex justify-content-between align-items-center">
            <h5 class="card-title">Atividades Recentes</h5>
            <a href="#" class="badge">Ver tudo</a>
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
                            <p class="activity-time">Smartphone XYZ - 5 minutos atrás</p>
                        </div>
                        <span class="activity-badge" style="background-color: rgba(25, 135, 84, 0.1); color: var(--success);">Produto</span>
                    </div>
                </li>
                <li class="activity-item">
                    <div class="activity-content">
                        <div class="activity-icon icon-primary">
                            <i class="fas fa-image"></i>
                        </div>
                        <div class="activity-text">
                            <h6 class="activity-title">Banner atualizado</h6>
                            <p class="activity-time">Promoção de Verão - 2 horas atrás</p>
                        </div>
                        <span class="activity-badge" style="background-color: rgba(13, 110, 253, 0.1); color: var(--primary);">Banner</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection