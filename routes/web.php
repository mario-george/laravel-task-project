<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Models\Task;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

class TaskClass
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

$tasks = [
  new TaskClass(
    1,
    'Buy groceries',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2023-03-01 12:00:00',
    '2023-03-01 12:00:00'
  ),
  new TaskClass(
    2,
    'Sell old stuff',
    'Task 2 description',
    null,
    false,
    '2023-03-02 12:00:00',
    '2023-03-02 12:00:00'
  ),
  new TaskClass(
    3,
    'Learn programming',
    'Task 3 description',
    'Task 3 long description',
    true,
    '2023-03-03 12:00:00',
    '2023-03-03 12:00:00'
  ),
  new TaskClass(
    4,
    'Take dogs for a walk',
    'Task 4 description',
    null,
    false,
    '2023-03-04 12:00:00',
    '2023-03-04 12:00:00'
  ),
];
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function (){

  return view('tasksIndex',['tasks'=>Task::latest()->get()]);
})->name('tasks.index'); 
Route::view('/tasks/create', 'create')
    ->name('tasks.create');
Route::get('/tasks/{id}', function ($id){
  
  return view('tasksShow',['task'=>Task::findOrFail($id)]);
})->name('tasks.show'); 
Route::post('/tasks', function (Request $request) {

$data=$request->validate([
  'title'=>'required|max:255',
  'description'=>'required',
  'long_description'=>'required',
]);
$task=new Task;
$task->title=$data['title'];
$task->description=$data['description'];
$task->long_description=$data['long_description'];

$task->save();
return redirect()->route('tasks.show',['id'=>$task['id']]);
})->name('tasks.store');

/* 
dummy routes
*/
//naming tradition is index for all items and show for a single item
Route::get('/dummy/tasks', function () use($tasks){

  return view('tasksIndex',["tasks"=>$tasks]);
})->name('DummyTasks.index'); 


Route::get('/dummy/tasks/{id}', function ($id) use($tasks){
$task=collect($tasks)->firstWhere('id',$id);
if (!$task){
abort(Response::HTTP_NOT_FOUND);
}
  return view('tasksShow',["task"=>$task]);
})->name('DummyTasks.show'); 


Route::get('/index/{name}', function ($name) {
    
return view('index',['name'=>$name]);

}); 

Route::get('/hello'  , function () {
    return 'Hello World';
})->name('hello');
// naming the route to reference it later

Route::get('/user/{name}', function ($name) {
return 'hello'.$name;
});

Route::get('/hi', function () {
return redirect()->route('hello');
});


    // fallback route
Route::fallback(function () {
return "This is the fallback route.";

});