<?php
namespace App\Exports;
use App\Models\Enginer;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;
class EnginsersExport implements FromCollection
{
    public function array(): array
    {
        $enginers = Enginer::all();

        $dataEnginer = array();
        $no = 1;
        for ($i=0; $i < count($admins); $i++) { 
            $dataEnginer[$i]['id'] = $id++;
            $dataEnginer[$i]['nik'] = $enginers[$i]->nik;
            $dataEnginer[$i]['project'] = $enginers[$i]->project;
            $dataEnginer[$i]['coa'] = $enginers[$i]->coa;
            $dataEnginer[$i]['zone'] = $enginers[$i]->zone;
            $dataEnginer[$i]['keterangan'] = $enginers[$i]->keterangan;
            $dataEnginer[$i]['kode'] = $enginers[$i]->kode;
            $dataEnginer[$i]['hari'] = $enginers[$i]->hari;
            $dataEnginer[$i]['tanggal'] = $enginers[$i]->tanggal;
            $dataEnginer[$i]['jam_masuk'] = $enginers[$i]->jam_masuk;
            $dataEnginer[$i]['jam_keluar'] = $enginers[$i]->jam_keluar;
            $dataEnginer[$i]['aktivitas'] = $enginers[$i]->aktivitas;
            $dataEnginer[$i]['foto'] = $enginers[$i]->foto;
            $dataEnginer[$i]['lat'] = $enginers[$i]->lat;
            $dataEnginer[$i]['lng'] = $enginers[$i]->lng;
            $dataEnginer[$i]['status'] = $enginers[$i]->status;
            $dataEnginer[$i]['site'] = $enginers[$i]->site;
        }
        return $dataEnginer;
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
