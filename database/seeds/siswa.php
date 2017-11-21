<?php

use Illuminate\Database\Seeder;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
['nama' =>'alif', 'tanggal_lahir'=>
'2001-01-26', 'Jk'=>'laki-laki','agama'=>'islam','umur'=>'16 tahun'
,'alamat'=>'leuwidulang'],

['nama' =>'angga', 'tanggal_lahir'=>
'2002-11-25',' Jk'=>'laki-laki','agama'=>'islam','umur'=>'15 tahun'
,'alamat'=>'baleendah'],

['nama' =>'anisa', 'tanggal_lahir'=>
'2003-12-24', 'Jk'=>'prempuan','agama'=>'islam','umur'=>'14 tahun'
,'alamat'=>'boma'],    

['nama' =>'ardiansyah', 'tanggal_lahir'=>
'2004-09-23', 'Jk'=>'laki-laki','agama'=>'islam','umur'=>'13 tahun'
,'alamat'=>'bojong koneng'],

['nama' =>'ariz', 'tanggal_lahir'=>
'2005-10-22', 'Jk'=>'laki-laki','agama'=>'islam','umur'=>'12 tahun'
,'alamat'=>'banjaran'],

['nama' =>'asep', 'tanggal_lahir'=>
'2006-08-21', 'Jk'=>'laki-laki','agama'=>'islam','umur'=>'11 tahun'
,'alamat'=>'ciparay'],   

['nama' =>'diah', 'tanggal_lahir'=>
'2007-06-20', 'Jk'=>'perempuan','agama'=>'islam','umur'=>'10 tahun'
,'alamat'=>'majalaya'],

['nama' =>'diandra', 'tanggal_lahir'=>
'2008-07-19', 'Jk'=>'perempuan','agama'=>'islam','umur'=>'09 tahun'
,'alamat'=>'lengkong'],

['nama' =>'dina', 'tanggal_lahir'=>
'2009-04-18', 'Jk'=>'perempuan','agama'=>'islam','umur'=>'08 tahun'
,'alamat'=>'cipatahunan'],

['nama' =>'diki', 'tanggal_lahir'=>
'2017-05-20', 'Jk'=>'laki-laki','agama'=>'islam','umur'=>'00 tahun'
,'alamat'=>'tpu'],
];
//masukan data ke database    
DB::table('siswa')->insert($posts);
    }
}
