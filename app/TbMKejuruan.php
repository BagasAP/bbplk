<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbMKejuruan extends Model
{
    //
     protected $table = 'tb_m_kejuruans';
     protected $fillable = ['kd_kejuruan,nama_kejuruan','keterangan'];
     
    
    public function TbMSubKejuruan()
	{
		return $this->hasMany('App\TbMSubKejuruan', 'kd_kejuruan');
	}

	public function program()
	{
		return $this->hasMany('App\TbMProgram', 'kd_kejuruan');
	}
}
