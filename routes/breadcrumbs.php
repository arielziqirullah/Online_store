<?php

// Home
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

// Dashboard > Categories
Breadcrumbs::for('admin.categories.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Categories', route('admin.categories.index'));
});

Breadcrumbs::for('admin.categories.create', function ($trail) {
    $trail->parent('admin.categories.index');
    $trail->push('Create Category', route('admin.categories.create'));
});

Breadcrumbs::for('admin.categories.edit', function ($trail, $category) {
    $trail->parent('admin.categories.index');
    $trail->push('Update Category', route('admin.categories.edit', $category));
});

// Dashboard > Products
Breadcrumbs::for('admin.products.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Products', route('admin.products.index'));
});

Breadcrumbs::for('admin.products.create', function ($trail) {
    $trail->parent('admin.products.index');
    $trail->push('Create Product', route('admin.products.create'));
});

Breadcrumbs::for('admin.products.edit', function ($trail, $product) {
    $trail->parent('admin.products.index');
    $trail->push('Update Product', route('admin.products.edit', $product));
});