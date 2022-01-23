<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_shows_on_main_page()
    {
        $category1 = Category::factory()->create([
            'name' => 'Category 1'
        ]);

        $category2 = Category::factory()->create([
            'name' => 'Category 2'
        ]);

        $idea1 = Idea::factory()->create([
            'category_id' => $category1->id,
            'title' => 'my first idea',
            'description' => 'description of my first idea'
        ]);

        $idea2 = Idea::factory()->create([
            'category_id' => $category2->id,
            'title' => 'my second idea',
            'description' => 'description of my second idea'
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($idea1->title);
        $response->assertSee($idea1->description);
        $response->assertSee($category1->name);

        $response->assertSee($idea2->title);
        $response->assertSee($idea2->description);
        $response->assertSee($category2->name);
    }

    /** @test */
    public function single_idea_shows_correctly_in_the_show_page()
    {
        $category1 = Category::factory()->create([
            'name' => 'Category 1'
        ]);

        $idea = Idea::factory()->create([
            'category_id' => $category1->id,
            'title' => 'my first idea',
            'description' => 'description of my first idea'
        ]);

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
    }

    /** @test */
    public function ideas_pagintation_works()
    {
        $category1 = Category::factory()->create([
            'name' => 'Category 1'
        ]);

        Idea::factory(Idea::PAGINATION_COUNT + 1)->create(['category_id' => $category1->id]);

        $ideaOne = Idea::find(1);
        $ideaOne->title = "My First Idea";
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = "My Eleventh Idea";
        $ideaEleven->save();

        $response = $this->get('/');

        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaEleven->title);

        $response = $this->get('/?page=2');

        $response->assertSee($ideaEleven->title);
        $response->assertDontSee($ideaOne->title);
    }

    /** @test */
    public function same_idea_title_different_slugs()
    {
        $category1 = Category::factory()->create([
            'name' => 'Category 1'
        ]);

        $idea1 = Idea::factory()->create([
            'category_id' => $category1->id,
            'title' => 'my idea',
            'description' => 'my first description'
        ]);

        $idea2 = Idea::factory()->create([
            'category_id' => $category1->id,
            'title' => 'my idea',
            'description' => 'my second description'
        ]);

        $response = $this->get(route('idea.show', $idea1));

        $response->assertSuccessful();
        $this->assertTrue(request()->path() === 'ideas/my-idea');

        $response = $this->get(route('idea.show', $idea2));

        $response->assertSuccessful();
        $this->assertTrue(request()->path() === 'ideas/my-idea-2');
    }
}
