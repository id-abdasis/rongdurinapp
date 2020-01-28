<?php

namespace App\Exports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;

class PendudukExport extends DefaultValueBinder  implements FromCollection, WithHeadings, ShouldAutoSize, WithCustomValueBinder
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penduduk::all();
    }

    public function bindValue(Cell $cell, $value)
    {
        if (is_numeric($value)) {
            $cell->setValueExplicit($value, DataType::TYPE_STRING);

            return true;
        }

        // else return default behavior
        return parent::bindValue($cell, $value);
    }
    
    public function headings(): array
    {
        return [
            'Nomer',
            'P_Nama',
            'P_NIK',
            'P_Tpt_Lahir',
            'P_Tgl_Lahir',
            'P_Umur',
            'P_Agama',
            'P_Pekerjaan',
            'P_Alamat',
            'DT_Nama',
            'Luas',
            'No_SPPT',
            'SPPT',
            'Nama_SPPT',
            'Sta. Tnh',
            'Peng_Tnh',
            'Letak_Tnh',
            'Perolahn',
        ];
    }
}