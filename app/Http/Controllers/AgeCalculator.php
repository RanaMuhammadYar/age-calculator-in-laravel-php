<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class AgeCalculator extends Controller
{
    public function ageCalculators()
    {
        return view('Age.index');
    }

    public function ageCalculatorpost(Request $request)
    {
        $dob = $request->input('dob');

        // Calculate the age in years, months, days, and seconds using Carbon
        $age = Carbon::parse($dob)->diff(Carbon::now());
        $totalYears = $age->y;
        $totalMonths = ($totalYears * 12) + $age->m;
        $totalDays = $age->days;
        $totalHores = $totalDays*24;
        $totalMinutes = $totalHores*60;
        $totalSeconds = $age->s + ($age->i * 60) + ($age->h * 3600) + ($totalDays * 86400);
        // Build the age string
        $ageString = '';
        if ($totalYears > 0) {
            $ageString .= $totalYears . ' year' . ($totalYears > 1 ? 's ' : ' ');
        }
        if ($age->m > 0) {
            $ageString .= $age->m . ' month' . ($age->m > 1 ? 's ' : ' ');
        }
        if ($age->d > 0) {
            $ageString .= $age->d . ' day' . ($age->d > 1 ? 's ' : ' ');
        }
        if ($age->h > 0) {
            $ageString .= $age->h . ' hour' . ($age->h > 1 ? 's ' : ' ');
        }
        if ($age->i > 0) {
            $ageString .= $age->i . ' minute' . ($age->i > 1 ? 's ' : ' ');
        }
        if ($age->s > 0) {
            $ageString .= $age->s . ' second' . ($age->s > 1 ? 's ' : ' ');
        }
        return view('Age.index',compact('ageString','totalYears','totalMonths','totalDays','totalSeconds','dob','totalHores','totalMinutes'));
    }
}
