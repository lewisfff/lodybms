<?php

namespace App\Http\Controllers;

use App\Models\SongDatabase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class SongDatabaseController extends Controller
{
    public function upload(): \Illuminate\Http\RedirectResponse
    {
        $file = request()->file('file');
        $user = auth()->user();

        $success = SongDatabase::import($file, $user);

        if ($success) {
            session()->flash('message', 'Song database uploaded successfully.');
            return redirect()->route('user', ['user_slug' => $user->name]);
        }

        session()->flash('message', 'The file could not be imported.');

        return redirect()->back();
    }

    public function user($user_slug): \Illuminate\View\View
    {
        $user = User::where('name', $user_slug)->firstOrFail();

        $title = 'BMS Directory - ' . $user->name;

        return view('user', compact('user', 'title'));
    }

    public function table(Request $request, $user_slug)
    {
        $user = User::where('name', $user_slug)->firstOrFail();
        $database_file = Storage::disk('bms')->path($user->name . '/songdata.db');

        $songs = null;

        if (file_exists($database_file)) {
            Config::set('database.connections.bms', [
                'driver' => 'sqlite',
                'database' => $database_file,
            ]);

            $songs = DB::connection('bms')->table('song');

            return Datatables::of($songs)->make();
        }

        return false;
    }
}
