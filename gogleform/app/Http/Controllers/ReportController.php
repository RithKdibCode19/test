<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Transaction;
use App\Models\Branch;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        
        $branches = Branch::all();

   
        $from = $request->from_date ? Carbon::parse($request->from_date) : Carbon::now()->startOfMonth();
        $to = $request->to_date ? Carbon::parse($request->to_date) : Carbon::now()->endOfMonth();


        $bookings = Booking::whereBetween('booking_date', [$from, $to]);

      
        if ($request->branch_id) {
            $bookings->where('branch_id', $request->branch_id);
        }

        $bookingsData = $bookings->get();

   
        $totalRevenue = $bookingsData->sum('total_amount');
        $totalBooking = $bookingsData->count();
        $statusConfirmed = $bookingsData->where('status', 'confirmed')->count();
        $statusCancelled = $bookingsData->where('status', 'cancel')->count();
        $statusProcessing = $bookingsData->where('status', 'processing')->count();

     
        $revenueByBranch = $bookingsData->groupBy('branch_id')->map(function ($branchBookings) {
            return $branchBookings->sum('total_amount');
        });

       
        // $transactions = Transaction::whereBetween('created_at', [$from, $to])->get();

        return view('reports.index', compact(
            'branches', 'totalRevenue', 'totalBooking', 'statusConfirmed', 
            'statusCancelled', 'statusProcessing', 'revenueByBranch', 
            'from', 'to', 'transactions'
        ));
    }
}
