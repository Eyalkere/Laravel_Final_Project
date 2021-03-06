<?php

namespace App\Http\Requests;

use App\CrmDocument;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateCrmDocumentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('crm_document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'customer_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
