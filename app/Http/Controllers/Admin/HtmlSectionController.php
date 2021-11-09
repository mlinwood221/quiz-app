<?php

namespace App\Http\Controllers\Admin;

use App\Models\HtmlSection;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HtmlSectionController extends Controller
{
    public function all()
    {
        $html_sections = HtmlSection::get();
        return view('admin.html_section.all')->with('html_sections', $html_sections);
    }

    public function add()
    {
        return view('admin.html_section.add')->with('action', 'add');
    }

    public function edit($html_section_id)
    {
        $html_section = HtmlSection::find($html_section_id);
        if ($html_section) {
            return view('admin.html_section.add')->with('action', 'edit')->with('html_section', $html_section);
        } else {
            return redirect('admin/404');
        }
    }

    public function view($html_section_id)
    {
        $html_section = HtmlSection::find($html_section_id);
        if ($html_section) {
            return view('admin.html_section.view')->with('html_section', $html_section);
        } else {
            return redirect('admin/404');
        }
    }
    
    public function create_or_edit_action(Request $request)
    {
        $response = array();

        try {
            if ($request->action == 'add')
                $html_section = new HtmlSection;
            else {
                $html_section = HtmlSection::find($request->html_section_id);
                if (!$html_section) $html_section = new HtmlSection;
            }
            $html_section->name = $request->name;
            $html_section->html = $request->html;
            $html_section->save();

            $response['result'] = 'success';
        } catch (\Exception $e) {
            $response['result'] = 'fail';
            $response['reason'] = 'unknown';
        }

        echo json_encode($response);
    }

    public function delete($html_section_id)
    {
        try {
            HtmlSection::find($html_section_id)->delete();
        } catch (\Exception $e) {

        }

        return redirect('admin/html-section/all');
    }
}
