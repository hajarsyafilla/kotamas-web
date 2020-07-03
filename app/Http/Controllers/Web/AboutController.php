<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Model;

class AboutController extends Controller
{
    public function index() {
        return view('web.about.index');
    }

    public function ceoMessage() {
        return view('web.about.ceo_message');
    }

    public function history() {
        return view('web.about.history');
    }

    public function achievement() {
        return view('web.about.achievement');
    }

    public function subsidiary() {
        return view('web.about.subsidiary');
    }

    public function internalAuditCommittee() {
        return view('web.about.internal_audit_committee');
    }

    public function bod() {
        return view('web.about.bod');
    }

    public function stateCommittee($zone_id = 1) {
        $zones = Model\Zone::get();
        $zone = Model\Zone::findOrFail($zone_id);
        $states = Model\State::where('zone_id', $zone_id)->get();
        return view('web.about.state_committee', [
            'zones' => $zones,
            'zone' => $zone,
            'states' => $states
        ]);
    }

    public function personnel($department_id = null) {
        $depts = Model\PersonnelDepartment::get();
        if ($department_id != null) {
            $dept = Model\PersonnelDepartment::findOrFail($department_id);
            return view('web.about.personnel_list', [
                'depts' => $depts,
                'dept' => $dept
            ]);
        } else {
            return view('web.about.personnel_overview', [
                'depts' => $depts,
                'dept' => null,
            ]);
        }
    }
}
