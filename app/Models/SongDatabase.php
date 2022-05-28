<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class SongDatabase extends Model
{
    use HasFactory;

    public static function import($file, $user): bool
    {
        Config::set('database.connections.bms', array(
            'driver' => 'sqlite',
            'database' => $file->getRealPath(),
        ));

        $songs = DB::connection('bms')->table('song');

        if ($songs->count() > 0) {
            return Storage::disk('bms')->putFileAs($user->name, $file, 'songdata.db');
        }

        return false;
    }
}
