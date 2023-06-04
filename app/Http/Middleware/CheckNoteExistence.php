<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Note;

class CheckNoteExistence
{
    public function handle($request, Closure $next)
    {
        $id = $request->route('id');

        $note = Note::find($id);

        if (is_null($note)) {
            return abort(404);
        }

        return $next($request);
    }
}
