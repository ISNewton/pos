<?php

namespace App\Imports;

use DateTime;
use Carbon\Carbon;
use App\Models\Inventory;
use App\Models\GeneralInformation;
use App\Models\Sale;
use Maatwebsite\Excel\Concerns\ToModel;
// use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class InventoryImport implements ToModel, WithHeadingRow, SkipsEmptyRows,WithCalculatedFormulas
{
    // use WithCalculatedFormulas;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        // dd($row);
        // dd(Date::excelToDateTimeObject($row['date_time'])->format('Y-m-d'));
        return new Sale([
            'barcode' => $row['barcode'],
            'item_name' => $row['item_name'],
            'date_time' => Date::excelToDateTimeObject($row['date_time'])->format('Y-m-d'),
            'price' => $row['price'],
            'sold_quantity' => $row['sold_quantity'],
         ]);
    }
}


// return new GeneralInformation([
//     'barcode' => $row['barcode'],
//     'item_name' => $row['item_name'],
//     'category' => $row['category'],
//     'description' => $row['description'],
//     'product_life_in_days' => $row['product_life_in_days'],
//     'size' => $row['size'],
//     'unit_of_measure' => $row['unit_of_measure'],
//     'measurement_class' => $row['measurement_class'],
//     'cost' => $row['cost'],
//     'price' => $row['price'],
//     'min_price' => $row['min_price'],
//     'max_price' => $row['max_price'],
//  ]);

// dd(date_format(new DateTime($row['expiration_date']),'d/m/Y'));
        // dd(Date::excelToDateTimeObject((int)$row['expiration_date'])->format('d/m/Y'));
        // return new Inventory([
        //     'barcode' => $row['barcode'],
        //     'stock_quantity' => $row['stock_quantity'],
        //     'expiration_date' => $row['expiration_date'],
        //     // 'created_at' => Date::excelToDateTimeObject((int)$row['created_at'])->format('Y-m-d H'),
        //     // 'updated_at' => Date::excelToDateTimeObject((int)$row['updated_at']),
        //  ]);
