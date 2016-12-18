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
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\SoftDeletes; // <-- This is required


/**
 * Class Category.
 */
class Category extends BaseModel implements SluggableInterface
{
    use SoftDeletes,SluggableTrait;
    protected $table = 'category';
}
