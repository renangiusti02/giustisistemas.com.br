<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\ContactService;
use App\Http\Requests\Site\ContactRequest;

class ContactController extends Controller {
    public function __construct(
        private readonly ContactService $contactService
    ) {}

    public function send(ContactRequest $request) {
        try {
            $this->contactService->sendContact($request->validated());
    
            return response()->json(['message' => 'Sua mensagem foi enviada. Obrigado!'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao enviar a mensagem. ' . $th->getMessage()], 500);
        }
    }
}
