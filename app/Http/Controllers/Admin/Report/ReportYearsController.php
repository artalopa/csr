<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Models\ReportYears;
use Illuminate\Http\Request;

class ReportYearsController extends Controller
{
    protected $reportYears;

    public function __construct(ReportYears $reportYears)
    {
        $this->reportYears = $reportYears;
    }

    public function index()
    {
        $reportYears = $this->reportYears->getData();
        return view('admin.report.years.index', compact('reportYears'));
    }
}
