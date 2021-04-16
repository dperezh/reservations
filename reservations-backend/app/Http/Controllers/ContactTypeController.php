<?php

namespace App\Http\Controllers;

use App\Models\ContactType;
use App\Services\ContactTypeService;
use Exception;
use Illuminate\Http\Request;

class ContactTypeController extends Controller
{
    /**
     * @var $contactTypeService
     */
    protected $contactTypeService;

    /**
     * ContactType Controller constructor
     *
     * @param ContactTypeService $contactTypeService
     */
    public function __construct(ContactTypeService $contactTypeService)
    {
        $this->contactTypeService = $contactTypeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = $this->contactTypeService->getAllContactType();

        return response()->json($result, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['description']);

        try{
            $result = $this->contactTypeService->saveContactType($data);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactType  $contactType
     * @return \Illuminate\Http\Response
     */
    public function show(ContactType $contactType)
    {
        $result = $this->contactTypeService->getContactType($contactType);

        return response()->json($result, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactType  $contactType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactType $contactType)
    {
        $data = $request->only(['description']);

        try{
            $result = $this->contactTypeService->updateContactType($data, $contactType);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, 204);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactType  $contactType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactType $contactType)
    {
        $this->contactTypeService->deleteContactType($contactType);
    }
}
