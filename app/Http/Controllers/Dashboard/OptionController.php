<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Option;

class OptionController extends Controller
{
    public function destroy(Option $option)
    {
        if (count($option->requirement->options) == 1) {
            return redirect()->route('dashboard.requirements.edit', $option->requirement->id)->with('error_session', 'error');
        }
        $option->delete();

        return redirect()->route('dashboard.requirements.edit', $option->requirement->id)->with('success_delete', 'success_delete');
    }
}