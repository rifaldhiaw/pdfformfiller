<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('dosens')->delete();
        DB::table('dosens')->insert([
        [
            'nama' => 'Ir. Machudor Yusman, M.Kom.',
            'nip' => '19570330 198603 1 003',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Drs. Rd. Irwan Adi Pribadi, M.Kom',
            'nip' => '19630110 198902 1 002',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Dr. Ir. Kurnia Muludi, M.Sc.',
            'nip' => '19640616 198902 1 001',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Dr. Eng. Admi Syarif',
            'nip' => '19670103 199203 1 003',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Dr. rer. nat. Akmal Junaidi, M.Sc.',
            'nip' => '19710129 199702 1 001',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Dwi Sakheti, M.Kom.',
            'nip' => '19680611 199802 1 001',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Ossy Dwi Endah Wulansari, M.T.',
            'nip' => '19740713 200312 2 002',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Didik Kurniawan, S.Si., MT',
            'nip' => '19800419 200501 1 004',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Rico Andrian, S.Si., M.Kom',
            'nip' => '19750627 200501 1 001',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Tristiyanto, S.Kom., M.I.S., Ph.D',
            'nip' => '19810414 200501 1 001',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Febi Eka Febriansyah, ST',
            'nip' => '19800219 200604 1 001',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Anie Rose Irawati, ST, M.Cs.',
            'nip' => '19791031 200604 2 002',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Aristoteles, S.Si., M.Si.',
            'nip' => '19810521 200604 1 002',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Rangga Firdaus, S.Kom., M.Kom.',
            'nip' => '19741010 200801 1 015',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Bambang Hermanto, S.Kom., M.Cs.',
            'nip' => '19790912 200812 1 002',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Astria Hijriani, S.Kom., M.Kom',
            'nip' => '19810308 200812  2 002',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'nama' => 'Favorisen Rossy King, S.Kom., M.Si.',
            'nip' => '19830110 200812 1 002',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        ]
        ]);
    }
}
