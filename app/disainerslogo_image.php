<?php



// THIS MODEL NOT USING ANYMORE



namespace App;

use Illuminate\Database\Eloquent\Model;

class disainerslogo_image extends Model
{


//  +++ DB TABLE NAME: disainerslogo_images +++
    public $table = 'disainerslogo_images';




    protected $fillable = ['logo_img', 'profile_id', 'disainer_description'];

    public function LogoDisainersLogo() {
        return $this->hasMany('App\LogoDisainer',  'profile_id');
    }

}
