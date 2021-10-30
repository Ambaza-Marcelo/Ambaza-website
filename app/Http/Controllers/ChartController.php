<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Kitchen;

class ChartController extends Controller
{
    //


    	public function day(){
		$products= OrderProduct::select(
		                DB::raw('DAY(created_at) as day'),DB::raw('sum(line_total) as total_line') , 'product_id','qty','line_total','created_at')->groupBy('day','product_id')->get();
		}
		public function month(){
		$products= OrderProduct::select(
		                DB::raw('MONTHNAME(created_at) as month'),
		                DB::raw('sum(line_total) as total_line') , 'product_id','qty','line_total','created_at')->groupBy('month','product_id')->get();
		}
		public function year(){
		$products= OrderProduct::select(
		                DB::raw('YEAR(created_at) as year'),
		               DB::raw('sum(line_total) as total_line') , 'product_id','qty','line_total','created_at')->groupBy('year','product_id')->get();
		}

		public function index()
		{
			$totalGenStockInitialByDay = Report::select(
		                DB::raw('DAY(created_at) as day'),DB::raw('sum(stock_initial) as stock_initial_total') , 'id','nom_produit','line_total','created_at')->groupBy('day','product_id')->get();
	        








public function index()
{
    $chart_options = [
        'chart_title' => 'Users by months',
        'report_type' => 'group_by_date',
        'model' => 'App\Models\User',
        'group_by_field' => 'created_at',
        'group_by_period' => 'month',
        'chart_type' => 'bar',
        'filter_field' => 'created_at',
        'filter_days' => 30, // show only last 30 days
    ];

    $chart1 = new LaravelChart($chart_options);


    
    ];

    $chart3 = new LaravelChart($chart_options);

    return view('home', compact('chart1', 'chart2', 'chart3'));
}