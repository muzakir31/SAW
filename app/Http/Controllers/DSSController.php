<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criterion;
use App\Models\Alternative;

class DSSController extends Controller
{
    public function storeCriterion(Request $request)
    {
        $criterion = new Criterion();
        $criterion->name = $request->input('name');
        $criterion->weight = $request->input('weight');
        $criterion->save();

        return redirect('/add-criterion')->with('success', 'Kriteria berhasil ditambahkan');
    }

    public function storeAlternative(Request $request)
    {
        $alternative = new Alternative();
        $alternative->name = $request->input('name');
        $alternative->location = $request->input('location');
        $alternative->price = $request->input('price');
        $alternative->geographical_condition = $request->input('geographical_condition');
        $alternative->environment = $request->input('environment');
        $alternative->save();

        return redirect('/add-alternative')->with('success', 'Alternatif berhasil ditambahkan');
    }
 
    public function calculate()
    {
        $criteria = Criterion::all();
        $alternatives = Alternative::all();

        // Normalisasi bobot kriteria
        $sum_weights = $criteria->sum('weight');
        $normalized_weights = [];
        foreach ($criteria as $criterion) {
            $normalized_weights[$criterion->id] = $criterion->weight / $sum_weights;
        }

        // Hitung skor untuk setiap alternatif
        $scores = [];
        foreach ($alternatives as $alternative) {
            $score = 0;
            foreach ($criteria as $criterion) {
                $score += $normalized_weights[$criterion->id] * $alternative->{$criterion->name};
            }
            $scores[$alternative->id] = $score;
        }

        // Tampilkan hasil
        return view('result', compact('scores', 'alternatives'));
    }
}

