<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>PT Gajah Tunggal | Employee</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
            <h3>EMPLOYEE DATA</h3>
            <button type="button" class="btn btn-tambah" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add Data
            </button>
            <table class="table1">
               <thead>
            <tr style="background-color:#003366">
                <th>ID_Employee</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
    </table>
            </table>
               </tbody>
            </table>
           </div>
      </main>
      <!-- End Main -->

    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Employee Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">
                ID_Employee
              </label>
              <input class="form-control" type="text">
            </div>
            <div class="mb-3">
              <label class="form-label">
                Name
              </label>
              <input class="form-control" type="text">
            </div>
            <div class="mb-3">
              <label class="form-label">
                Age
              </label>
              <input class="form-control" type="text">
            </div>
            <div class="mb-3">
              <label class="form-label">
                Gender
              </label>
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


    <!-- scriptc bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>