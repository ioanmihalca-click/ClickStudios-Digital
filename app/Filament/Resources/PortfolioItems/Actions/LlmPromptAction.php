<?php

namespace App\Filament\Resources\PortfolioItems\Actions;

use Filament\Actions\Action;
use Filament\Support\Enums\Width;
use Filament\Support\Icons\Heroicon;

/**
 * Shows the prompt that makes an LLM write PORTFOLIO.md inside another project.
 * The prompt lives in resources/prompts/portfolio.md.
 */
class LlmPromptAction
{
    public static function make(string $name = 'llmPrompt'): Action
    {
        return Action::make($name)
            ->label('Prompt LLM')
            ->icon(Heroicon::OutlinedSparkles)
            ->color('gray')
            ->modalHeading('Prompt pentru PORTFOLIO.md')
            ->modalDescription('Dă-l agentului care lucrează în repo-ul proiectului. Fișierul rezultat îl încarci aici, în tab-ul Markdown.')
            ->modalWidth(Width::FourExtraLarge)
            ->modalContent(fn () => view('filament.portfolio-llm-prompt', [
                'prompt' => file_get_contents(resource_path('prompts/portfolio.md')),
            ]))
            ->modalSubmitAction(false)
            ->modalCancelActionLabel('Închide');
    }
}
