<?php namespace Gviabcua\Media\Models;

use Model;

/**
 * Model
 */
class Folders extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gviabcua_media_folders';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $fillable = ['title'];
}
