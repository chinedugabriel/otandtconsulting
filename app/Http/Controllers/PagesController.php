<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
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

    // Services List function routes starts here
    public function TechnologyInvestmentAdvisory(){
        return View('/service.technologyInvestmentAdvisory');
    }

    public function BusinessAnalysisAndStrategy(){
        return View('/service.businessAnalysisAndStrategy');
    }

    public function SoftwareAndApplicationsDevelopment(){
        return View('/service.softwareAndApplicationsDevelopment');
    }
    public function ManagedService(){
        return View('/service.managedService');
    }
    public function Procurement(){
        return View('/service.procurement');
    }

    // Project function routes starts here

    public function ITS_Implementation(){
        return view('/projects.ITSI');
    }

    public function BusinessTechnologyInvestmentAdvise(){
        return view('/projects.BusinessTechnologyInvestmentAdvise');
    }

    public function SoftwareDevelopmentandImplementation(){
        return view('/projects.SoftwareDevelopmentandImplementation');
    }

    public function SelfServiceportal(){
        return view('/projects.SelfServiceportal');
    }
    
    public function ValueAddedServiceServiceDeliveryPortal(){
        return view('/projects.ValueAddedServiceServiceDeliveryPortal');
    }
    
    public function DataCenterMigration(){
        return view('/projects.DataCenterMigration');
    }
    
    public function SubscriberRegistration(){
        return view('/projects.SubscriberRegistration');
    }

    public function KnowYourCustomerSystemDevelopment(){
        return view('/projects.KnowYourCustomerSystemDevelopment');
    }


    public function Rebranding(){
        return view('/projects.Rebranding');
    }

    public function ProcessAutomationAndDataSolutions(){
        return view('/projects.ProcessAutomationAndDataSolutions');
    }


}


