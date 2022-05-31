<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Home extends Model
{
    use HasFactory;

    public function getHeader()
    {
    	$data =  DB::table('headers')->where('is_active',1)->first();
        // dd($data);
    	return DB::table('headers')->where('is_active',1)->first();
    }

    public function getAbout()
    {
    	$data =  DB::table('about')->where('is_active',1)->first();
        // dd($data);
    	return DB::table('about')->where('is_active',1)->first();
    }

    public function getFooter()
    {
    	return DB::table('footers')->where('is_active',1)->first();
    }

    public function getSkill()
    {
    	$data = DB::table('skills')->get();
        // dd($data);
    	return DB::table('skills')->get();
    }

    public function getPortfolio()
    {
    	return DB::table('portfolio')->get();
    }
}
