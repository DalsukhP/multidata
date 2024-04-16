<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="content-wrapper">
    <div class="panel panel-flat">
        <div class="panel-headgin">
            <h1 class="panel-title">Product Listing Page</h1>
        </div>
        <div class="panel-body">
        <table>
            <thead>
                <tr>
                    <th width="20%"><input type="text" class="form-control" name="product_category" placeholder="Category"></th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
        </table>
        <table class="table datatable-basic dataTable  table-hover table-bordered table-striped" id="dataTableBuilder">
            <thead>
                <tr>
                    <th width="20%">Category</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
<script type="text/javascript">
    (function (window, $) {
        window.LaravelDataTables = window.LaravelDataTables || {};
        window.LaravelDataTables["dataTableBuilder"] = $("#dataTableBuilder").DataTable({
            "serverSide": true,
            "processing": true,
            "ajax": {
                data: function (d) {
                    d.product_category = jQuery("input[name='product_category']").val();
                }
            },
            "columns": [{
                    "name": "product_category",
                    "data": "product_category",
                    "title": "Category",
                    "orderable": false,
                    "searchable": false
                }, {
                    "name": "name",
                    "data": "name",
                    "orderable": true,
                    "searchable": false
                }, {
                    "name": "image",
                    "data": "image",
                    "orderable": true,
                    "searchable": false
                }, {
                    "name": "price",
                    "data": "price",
                    "orderable": true,
                    "searchable": false
                },],
            "searching": false,
            "dom": "<\"wrapper\">frtilp",
            "order": [[ 0, "asc" ]],
            "pageLength":10,
        });
    })(window, jQuery);
    jQuery('input').on('change', function (e) {
        window.LaravelDataTables["dataTableBuilder"].draw();
        e.preventDefault();
    });
</script>
</body>
</html>