## \App\Models\Task::all()

return the elements orderd by the way they were inserted in the db

## \App\Models\Task::latest()->get()

return the elements orderd by the latest element depending on the created_at column field

to get a field only you can use \App\Models\Task::latest('fieldName')->get()

## \App\Models\Task::find($id)

find the element by the primary key which is id but if not found will return null
## \App\Models\Task::findOrFail($id)
find the element by the primary key which is id but if not found will abort with Response.HTTP_NOT_FOUND


## php artisan tinker
let you use queries like \App\Models\Task::all()

## \App\Models\Task::latest()->where('completed',true)   ->get()
this is a query builder by using methods

->get() is to execute the query 
## \App\Models\Task::latest()->select('title','description')->where('completed',true)   ->get()