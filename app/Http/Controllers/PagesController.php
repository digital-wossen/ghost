<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Frontdata;


class PagesController extends Controller
{
    public function index(){

        //$title = 'Welcome to the Ghost';
        $data['title']='WiTrucks,';
        $data['phrase']='A TRUCKING PLATFORM';
        $data['caption1']='Instant Availabiity';
        $data['caption2']='Fair and Transparent Pricing';
        $data['caption3']='Seamles Experience';
        $data['capline1']='We operate out of 300+ locations with 100,000+ trucks on the platform to ensure instant availability of trucks and timely placement of your shipment';
        $data['capline2']=' We find trucks at a competitive price for your shipments, so that your business can save cost and time';
        $data['capline3']='We will manage your entire freight requirement optimally with our comprehensive range of services and, fast and reliable support at every step';

        $data['t1']='Fleet Operators';
        $data['t2']='Shipments';
        $data['t3']='Data Science';
        $data['content1']='Find and book daily loads for your fleet with ease, along with fair and transparent pricing. Attach your trucks with WiTrucks and ensure higher truck utilization that helps you to earn more. An efficient route planning helps optimize time and reduce fuel expenses of your fleet.';
        $data['content2']='Manage all your shipments on one smart and convenient platform. Locate the available trucks across Germany without any requirement to make multiple phone calls and monitor your shipment at every mile. Our machine learning algorithms connect you with the most suitable fleet operator at any given point of time depending on your source, destination, material to be shipped and other details.';
        $data['content3']='Data Science is at the core of what we do at WiTrucks. The comprehensive data which we have gathered over time drives us to build ‘must have’ and ‘future ready’ products to match the demand to supply. We are as much about driving consumer behavior changes, as we are about analytics and advanced machine learning.';



        //return view('pages.index', compact('title'));
        return view('pages.index')->with($data);
    }

    public function about(){

        $title = 'About Us ';
        //return view('pages.index', compact('title'));
        return view('pages.company')->with('title', $title);
    }
   // public function services(){
     //   $data = array(
       //     'title' => 'Services',
         //   'services'=> ['Web Design', 'Programming','SEO']
     //   );
        //return view('pages.index', compact('title'));
        //return view('pages.services')->with($data);
   // }
    public function contacts(){

        $title = 'Our Contacts ';
        //return view('pages.index', compact('title'));
        return view('pages.contacts')->with('title', $title);
    }
}
