<?php
namespace App\Exports;
use App\Models\Thl;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;
class ThlsExport implements FromCollection
{
    public function array(): array
    {
        $thls = Enginer::all();

        $dataThl = array();
        $no = 1;
        for ($i=0; $i < count($admins); $i++) { 
            $dataThl[$i]['id'] = $id++;
            $dataThl[$i]['nik'] = $thls[$i]->nik;
            $dataThl[$i]['project'] = $thls[$i]->project;
            $dataThl[$i]['coa'] = $thls[$i]->coa;
            $dataThl[$i]['zone'] = $thls[$i]->zone;
            $dataThl[$i]['keterangan'] = $thls[$i]->keterangan;
            $dataThl[$i]['kode'] = $thls[$i]->kode;
            $dataThl[$i]['hari'] = $thls[$i]->hari;
            $dataThl[$i]['tanggal'] = $thls[$i]->tanggal;
            $dataThl[$i]['jam_masuk'] = $thls[$i]->jam_masuk;
            $dataThl[$i]['jam_keluar'] = $thls[$i]->jam_keluar;
            $dataThl[$i]['aktivitas'] = $thls[$i]->aktivitas;
            $dataThl[$i]['foto'] = $thls[$i]->foto;
            $dataThl[$i]['lat'] = $thls[$i]->lat;
            $dataThl[$i]['lng'] = $thls[$i]->lng;
            $dataThl[$i]['status'] = $thls[$i]->status;
            $dataThl[$i]['site'] = $thls[$i]->site;
        }
        return $dataThl;
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
