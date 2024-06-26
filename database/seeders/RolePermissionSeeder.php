<?php

namespace Database\Seeders;

use finfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'master_profil']);
        Permission::create(['name' => 'admin_profil']);
        Permission::create(['name' => 'tools_opsi_aplikasi']);
        Permission::create(['name' => 'tools_impor_data_master']);
        Permission::create(['name' => 'tools_ekspor_data_master']);
        Permission::create(['name' => 'tools_backup_database']);
        Permission::create(['name' => 'tools_data_login']);
        Permission::create(['name' => 'akademik_indentitas_sekolah']);
        Permission::create(['name' => 'akademik_tenaga_pendidik']);
        Permission::create(['name' => 'akademik_paket_keahlian']);
        Permission::create(['name' => 'akademik_mata_pelajaran']);
        Permission::create(['name' => 'akademik_capaian_pembelajaran']);
        Permission::create(['name' => 'akademik_kelas_walikelas']);
        Permission::create(['name' => 'akademik_peserta_didik']);
        Permission::create(['name' => 'kurikulum_versi']);
        Permission::create(['name' => 'kurikulum_tahunajaran']);
        Permission::create(['name' => 'kurikulum_pengumuman']);
        Permission::create(['name' => 'kurikulum_proses_kbm_perkelas']);
        Permission::create(['name' => 'kurikulum_proses_kbm_perguru']);
        Permission::create(['name' => 'kurikulum_proses_kbm_remedial']);
        Permission::create(['name' => 'kurikulum_cetak_rapor']);
        Permission::create(['name' => 'kurikulum_transkrip_nilai']);

        Permission::create(['name' => 'gurumapel_profil']);
        Permission::create(['name' => 'gurumapel_data_kbm']);
        Permission::create(['name' => 'gurumapel_capaian_pembelajaran']);
        Permission::create(['name' => 'gurumapel_proses_penilaian']);
        Permission::create(['name' => 'gurumapel_absensi']);

        Permission::create(['name' => 'walikelas_profil']);
        Permission::create(['name' => 'walikelas_data_kelas']);
        Permission::create(['name' => 'walikelas_identitas_siswa']);
        Permission::create(['name' => 'walikelas_rapor_siswa_absensi']);
        Permission::create(['name' => 'walikelas_rapor_siswa_kegiatan_eskul']);
        Permission::create(['name' => 'walikelas_rapor_siswa_prestasi_siswa']);
        Permission::create(['name' => 'walikelas_rapor_siswa_praktek_kerja']);
        Permission::create(['name' => 'walikelas_rapor_siswa_catatan']);
        Permission::create(['name' => 'walikelas_peringkat_kelas']);
        Permission::create(['name' => 'walikelas_remedial']);

        Permission::create(['name' => 'siswa_profil']);
        Permission::create(['name' => 'siswa_lcks_penilaian']);
        Permission::create(['name' => 'siswa_lcks_absensi']);
        Permission::create(['name' => 'siswa_lcks_kegiatan_eskul']);
        Permission::create(['name' => 'siswa_lcks_prestasi_siswa']);
        Permission::create(['name' => 'siswa_lcks_praktek_kerja']);
        Permission::create(['name' => 'siswa_lcks_catatan']);
        Permission::create(['name' => 'siswa_remedial']);


        Role::create(['name' => 'kepsek']);
        Role::create(['name' => 'wakasek']);
        Role::create(['name' => 'master']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'gmp']);
        Role::create(['name' => 'walas']);
        Role::create(['name' => 'BPBK']);
        Role::create(['name' => 'siswa']);

        $roleMaster = Role::findByName('master');
        $roleMaster->givePermissionTo('master_profil');
        $roleMaster->givePermissionTo('tools_opsi_aplikasi');
        $roleMaster->givePermissionTo('tools_impor_data_master');
        $roleMaster->givePermissionTo('tools_ekspor_data_master');
        $roleMaster->givePermissionTo('tools_backup_database');
        $roleMaster->givePermissionTo('tools_data_login');
        $roleMaster->givePermissionTo('akademik_indentitas_sekolah');
        $roleMaster->givePermissionTo('akademik_tenaga_pendidik');
        $roleMaster->givePermissionTo('akademik_paket_keahlian');
        $roleMaster->givePermissionTo('akademik_mata_pelajaran');
        $roleMaster->givePermissionTo('akademik_capaian_pembelajaran');
        $roleMaster->givePermissionTo('akademik_kelas_walikelas');
        $roleMaster->givePermissionTo('akademik_peserta_didik');
        $roleMaster->givePermissionTo('kurikulum_versi');
        $roleMaster->givePermissionTo('kurikulum_tahunajaran');
        $roleMaster->givePermissionTo('kurikulum_pengumuman');
        $roleMaster->givePermissionTo('kurikulum_proses_kbm_perkelas');
        $roleMaster->givePermissionTo('kurikulum_proses_kbm_perguru');
        $roleMaster->givePermissionTo('kurikulum_proses_kbm_remedial');
        $roleMaster->givePermissionTo('kurikulum_cetak_rapor');
        $roleMaster->givePermissionTo('kurikulum_transkrip_nilai');

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('admin_profil');
        $roleAdmin->givePermissionTo('kurikulum_proses_kbm_perkelas');
        $roleAdmin->givePermissionTo('kurikulum_proses_kbm_perguru');
        $roleAdmin->givePermissionTo('kurikulum_proses_kbm_remedial');
        $roleAdmin->givePermissionTo('kurikulum_cetak_rapor');
        $roleAdmin->givePermissionTo('kurikulum_transkrip_nilai');

        $roleGmp = Role::findByName('gmp');
        $roleGmp->givePermissionTo('gurumapel_profil');
        $roleGmp->givePermissionTo('gurumapel_data_kbm');
        $roleGmp->givePermissionTo('gurumapel_capaian_pembelajaran');
        $roleGmp->givePermissionTo('gurumapel_proses_penilaian');
        $roleGmp->givePermissionTo('gurumapel_absensi');

        $roleWalas = Role::findByName('walas');
        $roleWalas->givePermissionTo('walikelas_profil');
        $roleWalas->givePermissionTo('walikelas_data_kelas');
        $roleWalas->givePermissionTo('walikelas_identitas_siswa');
        $roleWalas->givePermissionTo('walikelas_rapor_siswa_absensi');
        $roleWalas->givePermissionTo('walikelas_rapor_siswa_kegiatan_eskul');
        $roleWalas->givePermissionTo('walikelas_rapor_siswa_prestasi_siswa');
        $roleWalas->givePermissionTo('walikelas_rapor_siswa_praktek_kerja');
        $roleWalas->givePermissionTo('walikelas_rapor_siswa_catatan');
        $roleWalas->givePermissionTo('walikelas_peringkat_kelas');
        $roleWalas->givePermissionTo('walikelas_remedial');

        $roleSiswa = Role::findByName('siswa');
        $roleSiswa->givePermissionTo('siswa_profil');
        $roleSiswa->givePermissionTo('siswa_lcks_penilaian');
        $roleSiswa->givePermissionTo('siswa_lcks_absensi');
        $roleSiswa->givePermissionTo('siswa_lcks_kegiatan_eskul');
        $roleSiswa->givePermissionTo('siswa_lcks_prestasi_siswa');
        $roleSiswa->givePermissionTo('siswa_lcks_praktek_kerja');
        $roleSiswa->givePermissionTo('siswa_lcks_catatan');
        $roleSiswa->givePermissionTo('siswa_remedial');
    }
}
