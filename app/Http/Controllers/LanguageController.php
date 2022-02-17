<?php

namespace App\Http\Controllers;

use App\Http\Requests\LanguageRequest;
use Dev\Domain\Service\LanguageService;
use Dev\Infrastructure\Model\Language;

class LanguageController extends Controller
{
    protected $languageService;

    public function __construct(LanguageService $languageService)
    {
        $this->languageService = $languageService;
    }

    public function store(LanguageRequest $request)
    {
        $data = $request->validated();
        $language = $this->languageService->create($data);
        $language->load('keywords');
        return response()->json($language);
    }

    public function show(Language $language)
    {
        $language->load('keywords');
        return response()->json($language);
    }

    public function index(LanguageRequest $request)
    {
        $filters = $request->validated();
        $languages = $this->languageService->index($filters);
        $languages->load('keywords');
        return response()->json($languages);
    }

    public function update(LanguageRequest $request, Language $language)
    {
        $data = $request->validated();
        $language->update($data);
        if (isset($data['keywords'])) {
            if (!$data['keywords']) {
                $language->keywords()->delete();
            } else {
                data_set($data['keywords'], '*.language_code', $language->code);
                $language->keywords()->createMany($data['keywords']);
            }
        }
        $language->load('keywords');
        return response()->json($language->refresh());
    }

    public function destroy(Language $language)
    {
        $language->delete();
        $language->keywords()->delete();
        return response()->json(['message' => 'Language deleted successfully']);
    }
}