<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\System\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    
    public function show( Request $request )
    {

        $program = Program::getProgramAliveBySlug( $request->slug );

        return view('system.programs.show', [
            'program' => $program
        ]);

    }

}
