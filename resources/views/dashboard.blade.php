@extends('template')
@section('content')
    <main class="main-container">
        <div class="main-title">
            <p class="font-weight-bold">DASHBOARD</p>
        </div>

        <div class="main-cards">

            <div class="card">
                <div class="card-inner">
                    <a href="/outlet" target="_blank">
                        <h3 class="text-primary">OUTLET</h3>
                    </a>
                    <span class="material-icons-outlined text-blue">shopping_cart</span>
                </div>
                <span class="text-primary font-weight-bold">189</span>
            </div>

            <div class="card">
                <div class="card-inner">
                    <a href="/product" target="_blank">
                        <h3 class="text-primary">PRODUCTS</h3>
                    </a>
                    <span class="material-icons-outlined text-blue">add_shopping_cart</span>
                </div>
                <span class="text-primary font-weight-bold">45.000</span>
            </div>

            <div class="card">
                <div class="card-inner">
                    <a href="/inventory" target="_blank">
                        <h3 class="text-primary">INVENTORY</h3>
                    </a>
                    <span class="material-icons-outlined text-blue">inventory_2</span>
                </div>
                <span class="text-primary font-weight-bold">85.000</span>
            </div>

            <div class="card">
                <div class="card-inner">
                    <p class="text-primary">REPORTS</p>
                    <span class="material-icons-outlined text-blue">notification_important</span>
                </div>
                <span class="text-primary font-weight-bold">80</span>
            </div>

        </div>

        <div class="charts">

            <div class="charts-card">
                <p class="chart-title">Our Products</p>
                <div id="bar-chart"></div>
            </div>

            <div class="charts-card">
                <p class="chart-title">Purchase and Inventories</p>
                <div id="area-chart"></div>
            </div>

        </div>
    </main>
@endsection
