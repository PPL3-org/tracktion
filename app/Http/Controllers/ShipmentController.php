<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index()
    {
        $shipments = Shipment::with('truck')->latest()->paginate(10);

        Carbon::setLocale('id');

        foreach($shipments as $shipment) {
            $shipment->formatted_date = Carbon::parse($shipment->created_at)->translatedFormat('d F Y, H.i');
        }

        return view('shipments.index', [
            'shipments' => $shipments
        ]);
    }
}
