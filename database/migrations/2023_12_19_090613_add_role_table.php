<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $notConfirmedRole = DB::table('roles')->insertGetId([
            'name' => 'not_confirmed',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $adminRole = DB::table('roles')->insertGetId([
            'name' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $s_homePermission = DB::table('permissions')->insertGetId([
            'name' => 's_home',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $e_homePermission = DB::table('permissions')->insertGetId([
            'name' => 'e_home',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('permissions_role')->insert([
            'role_id' => $notConfirmedRole,
            'permission_id' => $s_homePermission,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('permissions_role')->insert([
            'role_id' => $adminRole,
            'permission_id' => $s_homePermission,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('permissions_role')->insert([
            'role_id' => $adminRole,
            'permission_id' => $e_homePermission,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
};
