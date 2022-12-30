<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "provider.firstName" => "required|string",
            "provider.lastName" => "required|string",
            "provider.email" => "required|email:rfc",
            "provider.phone" => "required|string",
            "provider.speciality" => "required|string",
            "provider.locations" => "array",
            "provider.locations.*.address" => "required|distinct|string",
            "provider.locations.*.longitude" => "required|distinct|string",
            "provider.locations.*.latitude" => "required|distinct|string",
            "provider.locations.*.is_primary" => "nullable|boolean",
            "patient.firstName" => "required|string",
            "patient.lastName" => "required|string",
            "patient.email" => "required|email:rfc",
            "patient.phone" => "required|string",
            "patient.location" => "required",
            "patient.location.address" => "required|string",
            "patient.location.longitude" => "required|string",
            "patient.location.latitude" => "required|string",
            "patient.location.is_primary" => "nullable|boolean",
            "caseManager.firstName" => "required|string",
            "caseManager.lastName" => "required|string",
            "caseManager.email" => "required|email:rfc",
            "caseManager.phone" => "required|string",
            "attorney.firstName" => "sometimes|nullable|string",
            "attorney.lastName" => "sometimes|nullable|string",
            "attorney.email" => "sometimes|nullable|email:rfc",
            "attorney.phone" => "sometimes|nullable|string",
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status'   => 400,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ],400));
    }
}
