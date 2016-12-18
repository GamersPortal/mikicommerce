<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 10:57 AM.
 */
namespace Innovate\Category;


use Innovate\BaseModel;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes; // <-- This is required


/**
 * Class Category.
 */
class Category extends BaseModel
{
    use SoftDeletes,Sluggable;
    protected $table = 'category';

    /**
     * Sluggable configuration.
     *
     * @var array
     */
    public function sluggable() {
        return [
            'slug' => [
                'source'         => 'name',
                'separator'      => '-',
                'save_to'    => 'slug',
                'includeTrashed' => true,
            ]
        ];
    }

}
