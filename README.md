
# API ROUTES:
```
GET|HEAD  api/products ...................................................... Api\ProductController@list
POST      api/products .................................................... Api\ProductController@create
PUT       api/products/{id} ............................................... Api\ProductController@update
```

# List products

*GET /api/products*

# Create

*POST /api/products*
```json
{

    "title": "Bookshelf",
    "body_html": "<strong>description of the product</strong>",
    "vendor": "Vendor name",
    "product_type": "Bookshelf",
    "status": "draft"

}
```

# Update

*PUT /api/products/7886852259914*

```json
{
    "id": 7886852259914,
    "title": "Bookshelf",
    "status": "draft"
}
```

# Command

There's a command, that send an email (through a job) informing the products that are out of stock.
```
php artisan app:check-out-of-stock-command
```