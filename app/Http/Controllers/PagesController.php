<?php

namespace App\Http\Controllers;

use App\Developers;
use App\Project_Server;
use App\Projects;
use App\Servers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewDashboard()
    {
        return view('master');
    }

    public function viewDevelopers()
    {
        return view('developers.index')->with('developers',Developers::all()->toArray());
    }

    public function viewServers()
    {
        return view('servers.index')->with('servers',Servers::all()->toArray());
    }

    public function viewProjects()
    {
        return view('projects.index')->with('projects',Projects::all()->toArray());
    }

    public function viewProjectServerInfo()
    {
//        $Projects = Projects::with('servers')->get()->toArray();
        $Projects = Projects::all()->toArray();
        return view('projects.project_details_info')->with('projectServersInfo',$Projects);
    }

    public function projectInfo(Request $request)
    {
        $projectInfo = Projects::with('servers')->where('id',$request['id'])->first();
        $html = strval(view("projects.data_modal", compact('projectInfo')));
        $data = ['responseCode' => 1, 'data' => $html];
        return response()->json($data);
    }

}
