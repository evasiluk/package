<?php
namespace Evasiluk\Contactform\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Evasiluk\Contactform\Models\Contact;

class ContactFormController extends Controller {

    public function index()
    {
        return view('contactform::contact');
    }

    public function sendMail(Request $request)
    {
        Contact::create($request->all());

        return redirect(route('contact'))->with(['status' => 'Thank you, your mail has been sent successfully.']);

    }


}