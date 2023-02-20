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
