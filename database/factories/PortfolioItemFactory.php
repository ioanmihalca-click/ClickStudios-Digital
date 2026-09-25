<?php

namespace Database\Factories;

use App\Enums\PortfolioStatus;
use App\Models\PortfolioItem;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<PortfolioItem>
 */
class PortfolioItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->words(2, true);

        return [
            'title' => Str::title($title),
            'title_ro' => Str::title($title),
            'slug' => Str::slug($title),
            'category' => 'Management SaaS',
            'category_ro' => 'SaaS de management',
            'status' => PortfolioStatus::Live,
            'year' => 2025,
            'stack' => ['Laravel', 'Livewire', 'MySQL'],
            'short_description' => fake()->sentence(12),
            'short_description_ro' => fake()->sentence(12),
            'description' => "## Context\n\n".fake()->paragraph()."\n\n## Key features\n\n- ".fake()->sentence()."\n- ".fake()->sentence(),
            'description_ro' => "## Context\n\n".fake()->paragraph()."\n\n## Funcționalități cheie\n\n- ".fake()->sentence()."\n- ".fake()->sentence(),
            'image' => null,
            'website_url' => fake()->url(),
            'youtube_url' => null,
            'is_active' => true,
            'is_featured' => false,
            'sort_order' => 0,
        ];
    }

    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => false,
        ]);
    }

    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_featured' => true,
        ]);
    }

    /**
     * An item created before Markdown import existed: plain-text description,
     * no category, status, year or stack.
     */
    public function legacy(): static
    {
        return $this->state(fn (array $attributes) => [
            'category' => null,
            'category_ro' => null,
            'status' => null,
            'year' => null,
            'stack' => null,
            'description' => fake()->paragraphs(2, true),
            'description_ro' => null,
        ]);
    }
}
