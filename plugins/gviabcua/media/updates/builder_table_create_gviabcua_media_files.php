<?php namespace Gviabcua\Media\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGviabcuaMediaFiles extends Migration
{
    public function up()
    {
        Schema::create('gviabcua_media_files', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title')->default('no_name');
            $table->string('uploaded_by')->default('anonymous');
            $table->integer('folder_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gviabcua_media_files');
    }
}
