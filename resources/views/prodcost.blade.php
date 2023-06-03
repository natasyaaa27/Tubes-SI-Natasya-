<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>PT Gajah Tunggal | Production Cost</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">account_circle</span> PT Gajah Tunggal Tbk
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
          <a class="nav-link" href="/">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
          <a class="nav-link" href="/product">
              <span class="material-icons-outlined">shopping_cart</span> Product
            </a>
          </li>
          <li class="sidebar-list-item">
            <a class="nav-link" href="/prodcat">
              <span class="material-icons-outlined">add_shopping_cart</span> Product Category
            </a>
          </li>
          <li class="sidebar-list-item">
          <a class="nav-link" href="/prodstock">
              <span class="material-icons-outlined">shopping_cart_checkout</span> Product Stock
            </a>
          </li>
          <li class="sidebar-list-item">
          <a class="nav-link" href="/inventory">
              <span class="material-icons-outlined">inventory</span> Inventory
            </a>
          </li>
          <li class="sidebar-list-item">
          <a class="nav-link" href="/outlet">
              <span class="material-icons-outlined">store</span> Outlet
            </a>
          </li>
          <li class="sidebar-list-item">
          <a class="nav-link" href="/material">
              <span class="material-icons-outlined">notification_important</span> Raw Material
            </a>
          </li>
          <li class="sidebar-list-item">
          <a class="nav-link" href="/labor">
              <span class="material-icons-outlined">group</span> Labor
            </a>
          </li>
          <li class="sidebar-list-item">
          <a class="nav-link" href="/production">
              <span class="material-icons-outlined">storefront</span> Production
            </a>
          </li>
          <li class="sidebar-list-item">
          <a class="nav-link" href="/prodcost">
              <span class="material-icons-outlined">payments</span> Production Cost
            </a>
          </li>
          <li class="sidebar-list-item">
          <a class="nav-link" href="/productionstock">
              <span class="material-icons-outlined">inventory_2</span> Production Stock
            </a>
          </li>
          <li class="sidebar-list-item">
          <a class="nav-link" href="/employee">
              <span class="material-icons-outlined">supervisor_account</span> Employee
            </a>
          </li>
          <li class="sidebar-list-item">
          <a class="nav-link" href="/client">
              <span class="material-icons-outlined">person</span> Client
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <div class="home-content">
            <h3>PRODUCTION COST DATA</h3>
            <button type="button" class="btn btn-tambah">
               <a href="/admin-entry">Add Data</a>
            </button>
            <table class="table1">
               <thead>
            <tr style="background-color:#003366">
                <th>ID_ProductionCost</th>
                <th>ID_Production</th>
                <th>Total Cost</th>
            </tr>
            <tr>
                <td>Cp001</td>
                <td>Po001</td>
                <td>Rp 12.000.000</td>
            </tr>
            <tr>
                <td>Cp002</td>
                <td>Po002</td>
                <td>Rp 9.000.000</td>
            </tr>
            <tr>
                <td>Cp003</td>
                <td>Po003</td>
                <td>Rp 7.800.000</td>
            </tr>
    </table>
            </table>
               </tbody>
            </table>
           </div>
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>