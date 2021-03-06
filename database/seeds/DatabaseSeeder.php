<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

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
        DB::table('users')->insert([[
            'nama' => 'admin',
            'email' => 'admin@mail.com',
            'is_admin' => '1',
            'password' => bcrypt('123456'),
        ]
        ]);

        DB::table('form_templates')->delete();
        DB::table('form_templates')->insert([[
            'nama' => 'daftar_hadir.docx',
            'dl_link' => 'storage/form/daftar_hadir.docx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'nama' => 'pendaftaran_pkl.docx',
            'dl_link' => 'storage/form/pendaftaran_pkl.docx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'nama' => 'pengajuan_tema.docx',
            'dl_link' => 'storage/form/pengajuan_tema.docx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'nama' => 'pengambilan_data.docx',
            'dl_link' => 'storage/form/pengambilan_data.docx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'nama' => 'pengisian_krs.docx',
            'dl_link' => 'storage/form/pengisian_krs.docx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'nama' => 'perbaikan_nilai.docx',
            'dl_link' => 'storage/form/perbaikan_nilai.docx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'nama' => 'seminar_kp.docx',
            'dl_link' => 'storage/form/seminar_kp.docx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'nama' => 'seminar_ta.docx',
            'dl_link' => 'storage/form/seminar_ta.docx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'nama' => 'seminar_usulhasil.docx',
            'dl_link' => 'storage/form/seminar_usulhasil.docx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'nama' => 'ujian_skripsi.docx',
            'dl_link' => 'storage/form/ujian_skripsi.docx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
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
