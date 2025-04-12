<?php
namespace App\Http\Controllers;

use App\Http\Requests\FormVRequest;

class ExtraController extends Controller
{
    public function checkValidation(FormVRequest $request)
    {
        $validated = $request->validated();

        return redirect()->route('form.post')->with([
            'success' => 'Form submitted successfully!',
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
        ]);
    }
}
