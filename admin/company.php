<?php

  include("include/heder.php");
  include("include/connect.php");

  extract($_POST);
?> 
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Tables
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="company.php">Company</a>
                                    <a class="nav-link" href="index.php">Client</a>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
						
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>logo</th>
                                            <th>company name</th>
                                            <th>Requirement</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
                                    <tr>
                                            <?php
                                            $q = "SELECT * FROM company WHERE 1";
                                            $res = mysqli_query($conn , $q);
                                            while($row =  mysqli_fetch_assoc($res))
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['logo']; ?></td>
                                                <td><?php echo $row['companyname']; ?></td>         
                                                <td><?php echo $row['requirement']; ?></td>
                                                <td><button>Edit</button></td>
                                                <td><button>Delete</button></td>
                                            </tr>
                                            <?php
                                                 }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
				
                <?php include 'include/footer.php'; ?>
            </div>
        </div>
        <script src="js/bootstrap.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/datatable.js"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>