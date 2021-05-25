<?php
namespace App\Exports;
use App\Models\Admin;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;
class AdminsExport implements FromCollection
{
    public function array(): array
    {
        $admins = Admin::all();

        $dataAdmin = array();
        $no = 1;
        for ($i=0; $i < count($admins); $i++) { 
            $dataAdmin[$i]['id'] = $id++;
            $dataAdmin[$i]['nik'] = $admins[$i]->nik;
            $dataAdmin[$i]['project'] = $admins[$i]->project;
            $dataAdmin[$i]['coa'] = $admins[$i]->coa;
            $dataAdmin[$i]['zone'] = $admins[$i]->zone;
            $dataAdmin[$i]['keterangan'] = $admins[$i]->keterangan;
            $dataAdmin[$i]['kode'] = $admins[$i]->kode;
            $dataAdmin[$i]['hari'] = $admins[$i]->hari;
            $dataAdmin[$i]['tanggal'] = $admins[$i]->tanggal;
            $dataAdmin[$i]['jam_masuk'] = $admins[$i]->jam_masuk;
            $dataAdmin[$i]['jam_keluar'] = $admins[$i]->jam_keluar;
            $dataAdmin[$i]['aktivitas'] = $admins[$i]->aktivitas;
            $dataAdmin[$i]['foto'] = $admins[$i]->foto;
            $dataAdmin[$i]['lat'] = $admins[$i]->lat;
            $dataAdmin[$i]['lng'] = $admins[$i]->lng;
            $dataAdmin[$i]['status'] = $admins[$i]->status;
            $dataAdmin[$i]['site'] = $admins[$i]->site;
        }
        return $dataAdmin;
    }

    public function headings(): array
    {
        return [
            'id', 
            'nik', 
            'keterangan', 
            'kode', 
            'hari', 
            'tanggal', 
            'jam_masuk', 
            'jam_keluar', 
            'zone', 
            'site', 
            'aktivitas', 
            'project', 
            'coa', 
            'foto', 
            'lat', 
            'lng', 
            'status',
        ];
    }

    public function title(): string
    {
        return 'Absensi';
    }
}
