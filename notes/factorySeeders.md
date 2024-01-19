# php artisan make:factory TaskFactory --model=Task
create a factory for task model
# php artisan db:seed
use the factory to create fake records as specified in the seed

# php artisan migrate:refresh --seed 
this is only in dev it will wipe out the data then it will seed with the fake records to not add on top every time you run db:seed