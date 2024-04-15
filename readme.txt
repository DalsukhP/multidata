1. There are 2 databases 1 containing categories, other containing products
      a) categories (10 from seeder)
            1. name
            2. status (3 are inactive)
      b) products (50 from seeder)
            1. name
            2. image
            3. status (10 are inactive)
            4. price
2. connect these two tables so that one product can be in multiple categories
3. list those using relationship in laravel using javascript, showcasing below columns with filters
      (should show only active products, with pagination of 10 - datatables preferable)
      a) filters
            1. category name (searchable from backend - active only)
      b) columns
            1. category names separated by comma
            2. product name
            3. product image
            4. product price

empyreal
composer create-project laravel/laravel multidata "^8.0"