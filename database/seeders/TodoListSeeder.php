<?php

namespace Database\Seeders;

use App\Models\TodoList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TodoList::insert([
            [
                'title' => 'Buy groceries',
                'desc' => 'Milk, Bread, Eggs, Butter',
                'is_done' => false,
            ],
            [
                'title' => 'Finish project report',
                'desc' => 'Complete the final draft of the project report',
                'is_done' => true,
            ],
            [
                'title' => 'Workout',
                'desc' => 'Go for a 30-minute run',
                'is_done' => true,
            ],
        ]);
    }
}
