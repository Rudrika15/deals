<?php

namespace App\Http\Controllers\admin;

use App\Models\ManualPayment;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ManualPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report = ManualPayment::where('status', '!=', 'Approved')->get();
        return view('admin.report.payment.index', compact('report'));
    }

    public function changeStatus(Request $request)
    {
        $status = $request->input('status');
        $id = $request->input('id');

        // Find the ManualPayment record based on the ID
        $manualPayment = ManualPayment::find($id);
        if ($manualPayment) {
            $manualPayment->status = $status;
            $manualPayment->save();
            return response()->json(['message' => 'Status updated successfully']);
        } else {
            return response()->json(['error' => 'ManualPayment record not found'], 404);
        }
        // Update the status

        // Return a response indicating success
    }
    public function updateUserPackage(Request $request)
    {
        $id = $request->input('id');
        $userId = $request->input('userId');

        // Find the user by ID
        $user = User::find($userId);

        if ($user) {
            // Update the user's package field
            $user->package = "SILVER";
            if ($user->validity) {
                // If validity date is available in the database, add 365 days to it
                $validity = Carbon::parse($user->validity)->addDays(365);
            } else {
                // If validity date is not available, set it to the current date plus 365 days
                $validity = Carbon::now()->addDays(365);
            }

            $user->validity = $validity;
            $user->save();

            // Optionally, you can return a response to indicate the success of the update
            return response()->json(['message' => 'User package updated'], 200);
        } else {
            // If the user is not found, return a response with an error message
            return response()->json(['message' => 'User not found'], 404);
        }
    }
}
