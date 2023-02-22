# Terminal commands
## Categories - Model and migrations
- php artisan make:model Category -m
  (make the model and migration for category table)
- php artisan migrate
  (do the migration to the database, create the database if it doesn't exist)
- php artisan tinker ->
  Category::create(['name => 'First']);
  (Add a category named first to our Category table)
 ``` 
  = App\Models\Category {#3735
  name: "First",
  updated_at: "2023-02-20 14:12:56",
  created_at: "2023-02-20 14:12:56",
  id: 1,
  }
```
- php artisan make:controller Api/CategoryController --resource --api --model=Category
  (Create the Category controller with 5 methods)
  https://laravel.com/docs/10.x/controllers#resource-controllers

- php artisan make:resource CategoryResource
  (Make a resource to do dataWrapping on all methods of a controller)
https://laravel.com/docs/10.x/eloquent-resources#main-content

- php artisan make:request StoreCategoryRequest
  (Add validation with required fields)

## Transactions - Model and migrations

- php artisan make:model Transaction -m
  (make the model and migration for Transaction table)

- php artisan make:controller Api/TransactionController --resource --api --model=Transaction
  (Create the Transaction controller with 5 methods)

- php artisan migrate
  (do the migration to the database)

- php artisan make:resource TransactionResource
  (Make a resource to do dataWrapping on all methods of a controller)

- php artisan make:request StoreTransactionRequest
  (Add validation with required fields)
