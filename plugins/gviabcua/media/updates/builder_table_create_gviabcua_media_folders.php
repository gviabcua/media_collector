<?php namespace Gviabcua\Media\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGviabcuaMediaFolders extends Migration
{
    public function up()
    {
        Schema::create('gviabcua_media_folders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title')->default('New folder');
            $table->integer('parent_folder_id')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gviabcua_media_folders');
    }
}
