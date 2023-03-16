<?php namespace Gviabcua\Media\Models;

use Model;

/**
 * Model
 */
class Files extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gviabcua_media_files';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $attachOne = [
	    'file' => ['System\Models\File', 'public' => true, 'delete' => true]
	];
}
