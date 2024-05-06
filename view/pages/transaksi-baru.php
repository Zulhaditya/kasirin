<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Transaksi Baru</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  <link rel="stylesheet" href="../../assets/css/backend-plugin.min.css">
  <link rel="stylesheet" href="../../assets/css/backend.css?v=1.0.0">
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="../../assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class="  ">
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center">
    </div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">

    <?php include "../components/sidebar.php"; ?>
    <?php include "../components/topbar.php"; ?>

    <div class="content-page">
      <div class="container-fluid add-form-list">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                  <h4 class="card-title">Transaksi Baru</h4>
                </div>
              </div>
              <div class="card-body">
                <form action="page-list-purchase.html" data-toggle="validator">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="dob">Date *</label>
                        <input type="date" class="form-control" id="dob" name="dob" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Purchase No *</label>
                        <input type="text" class="form-control" placeholder="Purchase No" required>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Supplier</label>
                        <select name="type" class="selectpicker form-control" data-style="py-0">
                          <option>Select Supplier</option>
                          <option>Test Supplier</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Received</label>
                        <select name="type" class="selectpicker form-control" data-style="py-0">
                          <option>Received</option>
                          <option>Not received yet</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Order Tax</label>
                        <select name="type" class="selectpicker form-control" data-style="py-0">
                          <option>No Text</option>
                          <option>GST @5%</option>
                          <option>VAT @20%</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Discount</label>
                        <input type="text" class="form-control" placeholder="Discount">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Shipping</label>
                        <input type="text" class="form-control" placeholder="Shipping">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Payment *</label>
                        <input type="text" class="form-control" placeholder="Payment" required>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Note *</label>
                        <div id="quill-tool">
                          <button class="ql-bold" data-toggle="tooltip" data-placement="bottom" title="Bold"></button>
                          <button class="ql-underline" data-toggle="tooltip" data-placement="bottom" title="Underline"></button>
                          <button class="ql-italic" data-toggle="tooltip" data-placement="bottom" title="Add italic text <cmd+i>"></button>
                          <button class="ql-image" data-toggle="tooltip" data-placement="bottom" title="Upload image"></button>
                          <button class="ql-code-block" data-toggle="tooltip" data-placement="bottom" title="Show code"></button>
                        </div>
                        <div id="quill-toolbar">
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Add Purchase</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Page end  -->
      </div>
    </div>
  </div>
  <!-- Wrapper End-->
  <footer class="iq-footer">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
              </ul>
            </div>
            <div class="col-lg-6 text-right">
              <span class="mr-1">
                <script>
                  document.write(new Date().getFullYear())
                </script>©
              </span> <a href="#" class="">POS Dash</a>.
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Backend Bundle JavaScript -->
  <script src="../../assets/js/backend-bundle.min.js"></script>

  <!-- Table Treeview JavaScript -->
  <script src="../../assets/js/table-treeview.js"></script>

  <!-- Chart Custom JavaScript -->
  <script src="../../assets/js/customizer.js"></script>

  <!-- Chart Custom JavaScript -->
  <script async src="../../assets/js/chart-custom.js"></script>

  <!-- app JavaScript -->
  <script src="../../assets/js/app.js"></script>
</body>

</html>