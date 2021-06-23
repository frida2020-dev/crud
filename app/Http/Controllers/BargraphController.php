<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use ArielMejiaDev\LarapexCharts\LarapexChart;


class BargraphController extends Controller
{
	public function bargraph()
	{
		$chart3 = (new LarapexChart)->barChart()
        ->setTitle('Distributions interms of counties')
        ->setSubtitle('Cummulative recruits since 2010.')
        ->addData('Recruits', [5105, 5600,5600, 0, 4278, 19336, 10551,29193,16850,12194,8046,5105, 5600,5600, 0, 4278, 19336, 10551,29193,16850,12194,8046,5105, 5600,5600, 0, 4278, 19336, 10551,29193,16850,12194,8046,5105, 5600,5600, 0, 4278, 19336, 10551,29193,16850,12194,8046])
        ->setXAxis(['2010', '2011', '2012', '2013', '2014', '2015','2016','2017','2018','2019' ,'2020','2021','2022','2023','2024','2025','2026','2027','2028','2029','2030','2010', '2011', '2012', '2013', '2014', '2015','2016','2017','2018','2019' ,'2020','2021','2022','2023','2024','2025','2026','2027','2028','2029','2030']);


      //   $chart1 = (new LarapexChart)->pieChart()
      //   ->setTitle('Distributions interms of counties')
      //   ->setSubtitle('Cummulative recruits since 2010.')
      //   // ->addData('Recruits', [5105, 5600,5600, 0, 4278, 19336, 10551,29193,16850,12194,8046,5105, 5600,5600, 0, 4278, 19336, 10551,29193,16850,12194,8046])
      //   ->addData([
      //   	\App\Models\User::where('id', '<=', 60)->count(),
      //   	\App\Models\User::where('id', '>', 60)->count()
    		// ]);
      //   // ->setXAxis(['2010', '2011', '2012', '2013', '2014', '2015','2016','2017','2018','2019' ,'2020','2021','2022','2023','2024','2025','2026','2027','2028','2029','2030']);


        $chart2 = (new LarapexChart)->pieChart()
        ->setTitle('Gender Distribution')
        ->setSubtitle('Gender Distribution in the current paramilitary group')
        ->addData([131687,18753])
        ->setLabels([ 'Females', 'Males'])
        ->setColors(['#D32F2F', '#03A9F4']);

        $chart1 = (new LarapexChart)->lineChart()
	    ->setTitle('Users')
	    ->addLine('Active users', \App\Models\User::query()->inRandomOrder()->limit(6)->pluck('id')->toArray())
	    ->addLine('Inactive users', \App\Models\User::query()->inRandomOrder()->limit(6)->pluck('id')->toArray())
	    ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'])
	    ->setColors(['#ffc63b', '#ff6384']);


      
    Session::put('page','dashboard');
        return view('bargraph')->with(compact('chart2','chart1','chart3'));
    }
		
    
}
