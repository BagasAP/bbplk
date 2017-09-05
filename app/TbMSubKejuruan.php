<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbMSubKejuruan extends Model
{
    //
         protected $table = 'tb_m_sub_kejuruans';

      public function kejuruan() {
    	return $this->belongsTo('App\TbMKejuruan', 'kd_kejuruan');
    }

    public function program()
	{
		return $this->hasMany('App\TbMProgram', 'kd_sub_kejuruan');
	}

}
