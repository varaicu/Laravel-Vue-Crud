<?php

namespace App\Http\Controllers;

use App\Http\Requests\LanguageKeywordRequest;
use App\Http\Requests\LanguageRequest;
use Dev\Domain\Service\LanguageService;
use Dev\Infrastructure\Model\Language;
use Dev\Infrastructure\Model\LanguageKeyword;

class LanguageKeywordController extends Controller
{
    public function update(LanguageKeywordRequest $request, LanguageKeyword $languageKeyword)
    {
        $data = $request->validated();
        $languageKeyword->update($data);
        return response()->json($languageKeyword->refresh());
    }

    public function destroy(LanguageKeyword $languageKeyword)
    {
        $languageKeyword->delete();
        return response()->json(['message' => 'Language keyword deleted successfully']);
    }
}