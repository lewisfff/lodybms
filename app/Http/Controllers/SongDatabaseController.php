<?php

namespace App\Http\Controllers;

use App\Models\SongDatabase;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class SongDatabaseController extends Controller
{
    public function upload(): \Illuminate\Http\RedirectResponse
    {
        $file = request()->file('file');
        $user = auth()->user();

        $success = SongDatabase::import($file, $user);

        if ($success) {
            return redirect()->route('user', ['user_slug' => $user->slug]);
        }

        session()->flash('message', 'The file could not be imported.');

        return redirect()->route('dashboard');
    }

    public function user($user_slug): \Illuminate\View\View
    {
        $user = User::where('name', $user_slug)->firstOrFail();

        Config::set('database.connections.bms', [
            'driver' => 'sqlite',
            'database' => Storage::disk('bms')->path($user->name . '/songdata.db'),
        ]);

        $songs = DB::connection('bms')->table('song')->get();

        return view('user', compact('user', 'songs'));
    }
}
