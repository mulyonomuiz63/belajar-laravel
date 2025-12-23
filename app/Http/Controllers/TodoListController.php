<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoListResource;
use App\Models\Logging;
use App\Models\TodoList;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoListController extends Controller
{

    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $todoLists = TodoList::latest()->get();
            $this->authorize('view', $todoLists);
            return TodoListResource::collection($todoLists);
        } catch (\Exception $e) {
            Log::error("TodoList Failed ". $e->getMessage());

            Logging::record(auth()->user()->id, "Failed to retrieve todo items: " . $e->getMessage());
            return response()->json(['message' => 'Failed to retrieve todo items', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', TodoList::class);
        $data = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'desc' => 'required|string|min:3|max:255',
            'is_done' => 'required|in:0,1',
        ]);

        try {
            $data['user_id'] = auth()->user()->id;
            $todoLists = TodoList::create($data);
            return response()->json([
                'message' => 'Todo item created successfully',
                'data' => new TodoListResource($todoLists)
            ], 201);
        } catch (\Exception $e) {
            Logging::record(auth()->user()->id, "Failed to create todo item: " . $e->getMessage());
            return response()->json(['message' => 'Failed to create todo item', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todoLists  = TodoList::find($id);


        if (!$todoLists) {
            Logging::record($id, "Todo item not found");
            return response()->json(['message' => 'Todo item not found'], 404);
        }
        $this->authorize('view', $todoLists);

        return new TodoListResource($todoLists);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todoLists  = TodoList::find($id);
        
        if (!$todoLists) {
            return response()->json(['message' => 'Todo item not found'], 404);
        }

        $this->authorize('update', $todoLists);
        $data = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'desc' => 'required|string|min:3|max:255',
            'is_done' => 'required|in:0,1',
        ]);


        try {
            $todoLists->update($data);
            return response()->json([
                'message' => 'Todo item updated successfully',
                'data' => new TodoListResource($todoLists)
            ], 200);
        } catch (\Exception $e) {
            Logging::record(auth()->user()->id, "Failed to update todo items: " . $e->getMessage());
            return response()->json(['message' => 'Failed to update todo item', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todoLists  = TodoList::find($id);
        
        if (!$todoLists) {
            return response()->json(['message' => 'Todo item not found'], 404);
        }
        $this->authorize('delete', $todoLists);
        try {
            $todoLists->delete();
            return response()->json(['message' => 'Todo item deleted successfully'], 200);
        } catch (\Exception $e) {
            Logging::record(auth()->user()->id, "Failed to delete todo item: " . $e->getMessage());
            return response()->json(['message' => 'Failed to delete todo item', 'error' => $e->getMessage()], 500);
        }
    }
}
