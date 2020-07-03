<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function insurance($subpage = '') {
        switch ($subpage) {
            case 'vehicle-insurance':
                return view('web.services.insurance.vehicle');
            case 'mutiara-plus':
                return view('web.services.insurance.mutiara_plus');
            case 'accident-coverage':
                return view('web.services.insurance.aig');
            case 'claim':
                return view('web.services.insurance.claim');
            default:
                return view('web.services.insurance');
        }
    }

    public function financing() {
        return view('web.services.financing');
    }

    public function arrahnu() {
        return view('web.services.arrahnu');
    }

    public function accommodation() {
        return view('web.services.accommodation');
    }
    
    public function trading() {
        return view('web.services.trading');
    }
    
    public function travel() {
        return view('web.services.travel');
    }
    
    public function ccdkeanggotaan() {
        return view('web.services.ccdkeanggotaan');
    }
    
    public function senaraiharga() {
        return view('web.services.senaraiharga');
    }
}
