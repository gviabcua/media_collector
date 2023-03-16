<?php namespace Gviabcua\Media\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateGviabcuaMediaFiles extends Migration
{
    public function up()
    {
        Schema::table('gviabcua_media_files', function($table)
        {
            $table->boolean('trashed')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('gviabcua_media_files', function($table)
        {
            $table->dropColumn('trashed');
        });
    }
}
