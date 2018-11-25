<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Response;

class PlanController extends Controller
{
    public function getPlans() {
        $plans = Plan::all();

        $mapping = [];
        foreach( $plans as $plan) {
            $item = [
                'id' => $plan['id'],
                'fse' => $plan['fse']['name'],
                'skillSet' => $plan['skillset']['description'],
                'state' => $plan['state']['name'],
                'started' => date('Y-m-d H:i:s', strtotime( $plan['created_at'] )),
                'completed' => is_null( $plan['completed'] ) ? '' : $plan['completed']
            ];
            $mapping[] = $item;
        }

        return response()->json( $mapping, 200 );
    }
}
