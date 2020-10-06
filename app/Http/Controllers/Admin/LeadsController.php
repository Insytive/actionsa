<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyLeadRequest;
use App\Http\Requests\StoreLeadRequest;
use App\Http\Requests\UpdateLeadRequest;
use App\Models\Employee;
use App\Models\Lead;
use App\Models\Member;
use App\Models\Province;
use App\Models\Station;
use App\Models\User;
use App\Models\Volunteer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LeadsController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('lead_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Lead::with(['province', 'station', 'volunteer', 'user', 'member', 'employee', 'created_by'])->select(sprintf('%s.*', (new Lead)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'lead_show';
                $editGate      = 'lead_edit';
                $deleteGate    = 'lead_delete';
                $crudRoutePart = 'leads';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('first_name', function ($row) {
                return $row->first_name ? $row->first_name : "";
            });
            $table->editColumn('last_name', function ($row) {
                return $row->last_name ? $row->last_name : "";
            });
            $table->editColumn('id_number', function ($row) {
                return $row->id_number ? $row->id_number : "";
            });
            $table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : "";
            });
            $table->addColumn('province_name', function ($row) {
                return $row->province ? $row->province->name : '';
            });

            $table->addColumn('station_name', function ($row) {
                return $row->station ? $row->station->name : '';
            });

            $table->addColumn('volunteer_volunteer_number', function ($row) {
                return $row->volunteer ? $row->volunteer->volunteer_number : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'province', 'station', 'volunteer']);

            return $table->make(true);
        }

        return view('admin.leads.index');
    }

    /**
     * Show the step 1 Form for creating a new lead.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)
    {
        $lead = $request->session()->get('product');
        return view('admin.leads.create-first',compact('lead', $lead));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function leadCreateStep1(Request $request)
    {

        $validatedData = $request->validate([
//            'id_number' => 'required|unique:leads',
        ]);

        if(empty($request->session()->get('lead'))){
            $lead = new Lead();
            $lead->fill($validatedData);
            $request->session()->put('lead', $lead);
        }else{
            $lead = $request->session()->get('lead');
            $lead->fill($validatedData);
            $request->session()->put('lead', $lead);
        }

        return redirect('admin/leads/create-second');

    }

    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2(Request $request)
    {
        $lead = $request->session()->get('lead');
        return view('admin.leads.create-second',compact('lead', $lead));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep2(Request $request)
    {
        $lead = $request->session()->get('lead');
        if(!isset($lead->leadImg)) {
            $request->validate([
                'leadimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $fileName = "leadImage-" . time() . '.' . request()->leadimg->getClientOriginalExtension();

            $request->leadimg->storeAs('leadimg', $fileName);

            $lead = $request->session()->get('lead');

            $lead->leadImg = $fileName;
            $request->session()->put('lead', $lead);
        }
        return redirect('admin/leads/create-third');

    }

    /**
     * Show the lead second page
     *
     * @return \Illuminate\Http\Response
     */
    public function removeImage(Request $request)
    {
        $lead = $request->session()->get('lead');
        $lead->leadImg = null;
        return view('admin.leads.create-third',compact('lead', $lead));
    }

    /**
     * Show the step 3 Form for creating a new lead.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3(Request $request)
    {
        $lead = $request->session()->get('lead');
        return view('admin.leads.create-third',compact('lead', $lead));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function leadCreateStep3(Request $request)
    {

        $validatedData = $request->validate([
//            'name' => 'required|unique:products',
//            'amount' => 'required|numeric',
//            'company' => 'required',
//            'available' => 'required',
//            'description' => 'required',
        ]);

        return redirect('admin/leads/create-last');

    }

    /**
     * Show the Leads
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep4(Request $request)
    {
        $lead = $request->session()->get('lead');
        return view('admin.leads.create-last',compact('lead',$lead));
    }




    // Continue the Important Stuff

    public function create()
    {
        abort_if(Gate::denies('lead_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $provinces = Province::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $stations = Station::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $volunteers = Volunteer::all()->pluck('volunteer_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $members = Member::all()->pluck('membership_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = Employee::all()->pluck('employee_code', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.leads.create', compact('provinces', 'stations', 'volunteers', 'users', 'members', 'employees'));
    }

    public function store(StoreLeadRequest $request)
    {
        $lead = Lead::create($request->all());

        return redirect()->route('admin.leads.index');
    }

    public function edit(Lead $lead)
    {
        abort_if(Gate::denies('lead_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $provinces = Province::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $stations = Station::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $volunteers = Volunteer::all()->pluck('volunteer_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $members = Member::all()->pluck('membership_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = Employee::all()->pluck('employee_code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $lead->load('province', 'station', 'volunteer', 'user', 'member', 'employee', 'created_by');

        return view('admin.leads.edit', compact('provinces', 'stations', 'volunteers', 'users', 'members', 'employees', 'lead'));
    }

    public function update(UpdateLeadRequest $request, Lead $lead)
    {
        $lead->update($request->all());

        return redirect()->route('admin.leads.index');
    }

    public function show(Lead $lead)
    {
        abort_if(Gate::denies('lead_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lead->load('province', 'station', 'volunteer', 'user', 'member', 'employee', 'created_by');

        return view('admin.leads.show', compact('lead'));
    }

    public function destroy(Lead $lead)
    {
        abort_if(Gate::denies('lead_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lead->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeadRequest $request)
    {
        Lead::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
