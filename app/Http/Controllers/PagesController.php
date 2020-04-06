<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\Issue;
use App\Complaint;
use App\Subscribe;

class PagesController extends Controller
{
    public function about()
    {
        return view('front.pages.about');
    }

    public function membership()
    {
        return view('front.pages.membership');
    }
    
    public function jobs()
    {
        return view('front.pages.jobs');
    }

    public function sitemap()
    {
        return view('front.pages.sitemap');
    }

    public function contact()
    {
        return view('front.pages.contact');
    }

    public function contactList()
    {
        $page_name = 'Contacts Inbox';
        $data = Contact::all();

        return view('admin.mailbox.contacts', compact('page_name', 'data'));
    }

    public function contactDetails($id)
    {

        $page_name = 'Contacts Details';
        $data = Contact::find($id);

        return view('admin.mailbox.contactsDetails', compact('page_name', 'data'));
    }

    public function contactDestroy($id)
    {
        $data = Contact::find($id);
        $data->delete();

        return redirect()->action('PagesController@contactList')->with('success', 'Contact Deleted Successfully');
    }

    public function newsletter()
    {
        return view('front.pages.newsletter');
    }

    public function newsletterList()
    {
        $page_name = 'Subscribes Inbox';
        $data = Subscribe::all();

        return view('admin.mailbox.subscribes', compact('page_name', 'data'));
    }

    public function podcast()
    {
        return view('front.pages.podcast');
    }

    public function advPolicy()
    {
        return view('front.pages.advPolicy');
    }

    public function techIssues()
    {
        return view('front.pages.techIssues');
    }

    public function techIssuesList()
    {

        $page_name = 'Issues Inbox';
        $data = Issue::all();

        return view('admin.mailbox.issues', compact('page_name', 'data'));
    }
    
    public function techIssuesDetails($id)
    {

        $page_name = 'Issues Details';
        $data = Issue::find($id);

        return view('admin.mailbox.issuesDetails', compact('page_name', 'data'));
    }

    public function techIssuesDestroy($id)
    {
        $data = Issue::find($id);
        $data->delete();

        return redirect()->action('PagesController@techIssuesList')->with('success', 'Issue Deleted Successfully');
    }

    public function complaint()
    {
        return view('front.pages.complaint');
    }

    public function complaintList()
    {
        $page_name = 'Complaints Inbox';
        $data = Complaint::all();

        return view('admin.mailbox.complaints', compact('page_name', 'data'));
    }
    
    public function complaintDetails($id)
    {
        $page_name = 'Complaints Details';
        $data = Complaint::find($id);

        return view('admin.mailbox.complaintsDetails', compact('page_name', 'data'));
    }
    
    public function complaintDestroy($id)
    {
        $data = Complaint::find($id);
        $data->delete();

        return redirect()->action('PagesController@complaintList')->with('success', 'Complaint Deleted Successfully');
    }

    public function termsCondition()
    {
        return view('front.pages.termsCondition');
    }

    public function privacyPolicy()
    {
        return view('front.pages.privacyPolicy');
    }

    public function cookiesPolicy()
    {
        return view('front.pages.cookiesPolicy');
    }


    // Methods For Functions for pages
    
    public function contactSubmit(Request $request)
    {
        $this->validate($request, 
                [
                    'name' => 'required',
                    'email' => 'required',
                    'message' => 'required',
                ]);

                $contact = new Contact();
                $contact->name = $request->name;
                $contact->email = $request->email;
                $contact->message = $request->message;
                $contact->save();

                return redirect()->action('HomePageController@index')->with('success', 'Thank You. We Will Get Back To You Soon');
    }

    public function techIssuesSubmit(Request $request)
    {
        $this->validate($request, 
                [
                    'name' => 'required',
                    'email' => 'required',
                    'issue' => 'required',
                ]);

                $issues = new Issue();
                $issues->name = $request->name;
                $issues->email = $request->email;
                $issues->issue = $request->issue;
                $issues->save();

                return redirect()->action('HomePageController@index')->with('success', 'Thank You For Helping Us, We Will Resolve Your Issue ASAP.');
    }

    public function complaintSubmit(Request $request)
    {
        $this->validate($request, 
                [
                    'name' => 'required',
                    'email' => 'required',
                    'title' => 'required',
                    'category' => 'required',
                    'complaint' => 'required',
                ]);

                $complaint = new Complaint();
                $complaint->name = $request->name;
                $complaint->email = $request->email;
                $complaint->articleTitle = $request->title;
                $complaint->articleCategory = $request->category;
                $complaint->Complaint_Correction = $request->complaint;
                $complaint->save();

                return redirect()->action('HomePageController@index')->with('success', 'Thank You For Helping Us, We Will Correct What\'s Wrong.');
    }

}
