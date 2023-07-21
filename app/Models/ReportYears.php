<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportYears extends Model
{
    use HasFactory;

    protected $table = 'report_years';
    protected $fillable = [
        'year', 'activity', 'budget'
    ];

    public function getData()
    {
        return $this->all('id', 'year', 'activity', 'budget');
    }

    public function createData(array $data)
    {
        return $this->create($data);
    }

    public function getDetail($id)
    {
        return $this->where('id', $id)->first();
    }
}
