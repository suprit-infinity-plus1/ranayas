<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function storeTest(Request $request)
    {
        // Check if required fields are present in the request
        if (!$request->has('email') || !$request->has('fullName') || !$request->has('radioResponse')) {
            return response()->json(['error' => 'Missing required fields'], 400);
        }

        // Extract data from the request
        $email = $request->input('email');
        $fullName = $request->input('fullName');
        $radioResponse = $request->input('radioResponse');

        // Validate the data if needed

        // Save the data into the database
        $dataToInsert = [
            'email' => $email,
            'full_name' => $fullName,
        ];

        // Assign radio responses to respective columns
        for ($i = 0; $i < count($radioResponse); $i++) {
            $columnName = 'radio' . ($i + 1);
            if ($radioResponse[$i] !== null) {
                $dataToInsert[$columnName] = $radioResponse[$i];
            }
        }

        // Insert data using Query Builder
        DB::table('test_questions')->insert($dataToInsert);

        connectify('success', 'Thank You', 'Your data has been successfully saved.');

        return redirect(route('index'));
    }
}
