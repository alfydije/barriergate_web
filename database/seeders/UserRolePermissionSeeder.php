<?php

namespace Database\Seeders;

use App\Models\Park;
use App\Models\Role;
use App\Models\User;
use App\Models\Vehycle;
use App\Models\Permission;
use App\Models\UserProfile;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
        // DB::beginTransaction(); 
        // try {
            $superAdmin = User::create(array_merge([
                'email' => 'superAdmin@gmail.com',
                'username' => 'superAdmin',
            ], $default_user_value));
    
            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'username' => 'admin',
            ], $default_user_value));
    
            $pegawai = User::create(array_merge([
                'email' => 'pegawai@gmail.com',
                'username' => 'pegawai',
            ], $default_user_value));
    
            $mahasiswa = User::create(array_merge([
                'email' => 'mahasiswa@gmail.com',
                'username' => 'mahasiswa',
            ], $default_user_value));

            UserProfile::create([
                'user_id' => $mahasiswa->id,
                'name' => 'Hanny Berlianty',
                'address' => 'Lobener lor, Blok Kebon Kopi, RT/W 15/04, No.59',
                'phone_number' => '0822523572537',
                'nip_nim' => '2003072',
                'image' => 'users-image/pict_profile.jpg',
                'gender' => 'Perempuan',
                'card_id' => Str::random(15)
            ]);

            UserProfile::create([
                'user_id' => $pegawai->id,
                'name' => 'Willy PP',
                'address' => 'Politeknik Negeri Indramayu',
                'phone_number' => '0822523887',
                'nip_nim' => '-',
                'image' => 'users-image/jeoBgRed.jpg',
                'gender' => 'Laki-laki',
                'card_id' => Str::random(15)
            ]);

            $motorMhs = Vehycle::create([
                'user_id' => $mahasiswa->id,
                'brand' => 'Honda',
                'type' => 'Vario 125',
                'image' => 'images/vario125.jpg',
                'vehycle_number' => 'E 1927 EF',
            ]);

            $motorPgw = Vehycle::create([
                'user_id' => $pegawai->id,
                'brand' => 'Honda',
                'type' => 'Beat',
                'image' => 'images/beat.jpg',
                'vehycle_number' => 'E 1981 EF',
            ]);

            // Park::create([
            //     'vehycle_id' => $motorMhs->id,
            //     'status' => 'Masuk',
            //     'time_in' => now(),
            //     'time_out' => now(),
            // ]);
            
            // Park::create([
            //     'vehycle_id' => $motorMhs->id,
            //     'status' => 'Masuk',
            //     'time_in' => now(),
            //     'time_out' => now(),
            // ]);

            Park::create([
                'vehycle_id' => $motorPgw->id,
                'status' => 'Masuk',
                'time_in' => now(),
                'time_out' => now(),
            ]);

            $permissions = [ 'create admin','read admin', 'update admin', 'delete admin', 'create','read', 'update', 'delete' ];
    
            $role_superAdmin = Role::updateOrCreate(['name' => 'superAdmin']);
            $role_admin = Role::updateOrCreate(['name' => 'admin']);
            $role_pegawai = Role::updateOrCreate(['name' => 'pegawai']);
            $role_mahasiswa = Role::updateOrCreate(['name' => 'mahasiswa']);
    
            $permission =  Permission::updateOrCreate(['name' => 'superAdmin']);
            $permission =  Permission::updateOrCreate(['name' =>'admin']);
            $permission =  Permission::updateOrCreate(['name' =>'pegawai']);
            $permission =  Permission::updateOrCreate(['name' =>'mahasiswa']);
    
            foreach ($permissions as $item) {
                Permission::create([
                    'name' => $item,
                ]);
            }

            $role_superAdmin->givePermissionTo([ 'create admin','read admin', 'update admin', 'delete admin', 'create','read', 'update', 'delete' ]);
            $role_admin->givePermissionTo(['create','read', 'update', 'delete' ]);
            $role_pegawai->givePermissionTo('pegawai');
            $role_mahasiswa->givePermissionTo('mahasiswa');

            $superAdmin->assignRole('superAdmin');
            $admin->assignRole('admin');
            $pegawai->assignRole('pegawai');
            $mahasiswa->assignRole('mahasiswa');
            
        //     DB::commit();
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        // }

        

    }
}
