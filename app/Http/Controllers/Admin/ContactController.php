<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactForm;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = ContactForm::latest()->paginate(15);
        return view('admin.contacts.all', compact('contacts'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = ContactForm::findOrFail($id);
        $contact->delete();
        Alert::success('Deleted', 'Contact deleted successfully.');
        return redirect()->route('contacts.index');
    }
}
