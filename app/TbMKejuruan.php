<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbMKejuruan extends Model
{
    //
     protected $table = 'tb_m_kejuruans';
    
    public function subkejuruan()
	{
		return $this->hasMany('App\TbMSubKejuruan', 'kd_kejuruan');
	}

	public function program()
	{
		return $this->hasMany('App\TbMProgram', 'kd_kejuruan');
	}
}
