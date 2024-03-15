<?php

namespace App\Http\Livewire\Detail;

use Livewire\Component;
use App\Models\User;
use App\Models\Unit;
use App\Models\Asset;
use App\Models\Order;
use App\Models\OrderDetail;
use DB;

class DetailAsset extends Component
{
    public $detailPengiriman, $graf;
    public $tahun, $bulan, $getTahun;
    public function mount()
    {
       
        $this->detailPengiriman = DB::table('orders')
        ->join('users','orders.userPenerima', '=', 'users.id' ) 
        ->join('units', 'users.unitId', '=', 'units.id' )
        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
        ->join('assets', 'order_details.asset_id', '=', 'assets.id' )
        ->select('units.name as name','assets.namaBarang as namaBarang','assets.typeBarang',
        DB::raw("CAST(SUM((order_details.qty))as int) as QtyTotal"),
                    DB::raw("CAST(SUM(orders.grand_total)as int) as total"))
        ->whereYear('orders.created_at', date('Y'))
        ->groupBy('assets.namaBarang')
        ->get();

        
                
        $this->getTahun = Order::select(DB::raw("YEAR(created_at)as years"))
            ->GroupBy(DB::raw("YEAR(created_at)"))
            ->get();
    }
   

    public function render()
    {
        $graf = Order::select(DB::raw("CAST(SUM(grand_total)as int) as count"))
        ->whereYear('created_at', date('Y'))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->OrderBy ('created_at', 'ASC')
        ->pluck('count');
       
               
        $bulan = Order::select(DB::raw("MONTHNAME(created_at)as bulan"))
                ->whereYear('created_at', date('Y'))
                ->GroupBy(DB::raw("MONTHNAME(created_at)", "YEAR(created_at)"))
                ->OrderBy ('created_at', 'ASC')
                ->pluck('bulan');

        return view('livewire.detail.detail-asset',compact('graf','bulan'));
    }
}
