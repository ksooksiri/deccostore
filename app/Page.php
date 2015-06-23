<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';
    public $timestamps = false; // hide timestamp

    public function page_items()
    {
        return $this->hasMany('App\PageItem');
    }

}
