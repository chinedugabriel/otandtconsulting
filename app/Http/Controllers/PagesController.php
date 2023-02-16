<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function services(){
        return view('/pages.services');
    }
    public function about(){
        return view('/pages.about');
    }
    public function contact() {
        return view('pages.contact');
    }

    public function projects(){
        return view('/pages.projects');
    }
    public function HumanCapitalDevelopment(){
        return view('/pages.HumanCapitalDevelopment');
    }
    public function profileLanre(){
        return view('/profile.Lanre');
    }
    public function profileGrace(){
        return view('/profile.Grace');
    }
    // public function carriers(){
    //     return view('/pages.carriers');
    // }

    // Project function routes starts here

    public function ITS_Implementation(){
        return view('/project.ITSI');
    }

    public function BusinessTechnologyInvestmentAdvise(){
        return view('/project.BusinessTechnologyInvestmentAdvise');
    }

    public function SoftwareDevelopmentandImplementation(){
        return view('/project.SoftwareDevelopmentandImplementation');
    }

    public function SelfServiceportal(){
        return view('/project.SelfServiceportal');
    }
    
    public function ValueAddedServiceServiceDeliveryPortal(){
        return view('/project.ValueAddedServiceServiceDeliveryPortal');
    }
    
    public function DataCenterMigration(){
        return view('/project.DataCenterMigration');
    }
    
    public function SubscriberRegistration(){
        return view('/project.SubscriberRegistration');
    }

    public function KnowYourCustomerSystemDevelopment(){
        return view('/project.KnowYourCustomerSystemDevelopment');
    }


    public function Rebranding(){
        return view('/project.Rebranding');
    }

    public function ProcessAutomationAndDataSolutions(){
        return view('/project.ProcessAutomationAndDataSolutions');
    }


}


