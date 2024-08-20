<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'Test User',
            'email' => 'demo@demo.com',
            'password' => bcrypt('12345678'),
        ]);

        Contact::insert([
            [
                'name' => 'John Doe',
                'user_id' => 1,
                'company' => 'Test',
                'email' => 'john.doe@example.com',
                'phone' => '123-456-7890',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Jane Smith',
                'user_id' => 1,
                'company' => 'Test',
                'email' => 'jane.smith@example.com',
                'phone' => '098-765-4321',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Alice Johnson',
                'user_id' => 1,
                'company' => 'Acme Corp',
                'email' => 'alice.johnson@example.com',
                'phone' => '234-567-8901',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Bob Smith',
                'user_id' => 1,
                'company' => 'Tech Solutions',
                'email' => 'bob.smith@example.com',
                'phone' => '345-678-9012',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Carol White',
                'user_id' => 1,
                'company' => 'Creative Labs',
                'email' => 'carol.white@example.com',
                'phone' => '456-789-0123',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'David Brown',
                'user_id' => 1,
                'company' => 'Innovate Inc',
                'email' => 'david.brown@example.com',
                'phone' => '567-890-1234',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Eva Green',
                'user_id' => 1,
                'company' => 'Global Enterprises',
                'email' => 'eva.green@example.com',
                'phone' => '678-901-2345',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Frank Harris',
                'user_id' => 1,
                'company' => 'NextGen Solutions',
                'email' => 'frank.harris@example.com',
                'phone' => '789-012-3456',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Grace Lee',
                'user_id' => 1,
                'company' => 'Pioneer Tech',
                'email' => 'grace.lee@example.com',
                'phone' => '890-123-4567',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Henry Miller',
                'user_id' => 1,
                'company' => 'Synergy Systems',
                'email' => 'henry.miller@example.com',
                'phone' => '901-234-5678',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Isabel Martinez',
                'user_id' => 1,
                'company' => 'Dynamic Solutions',
                'email' => 'isabel.martinez@example.com',
                'phone' => '012-345-6789',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'James Wilson',
                'user_id' => 1,
                'company' => 'Zenith Enterprises',
                'email' => 'james.wilson@example.com',
                'phone' => '123-456-7891',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
